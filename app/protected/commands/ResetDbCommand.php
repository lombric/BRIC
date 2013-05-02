<?php

class ResetDbCommand extends CConsoleCommand{

    private $db;

    private $useOldDb = false;
    private $oldDb;

    public function run($params){

        echo "\n-START";

        // Insert datas or not, if yes save the name of the old database to use
        if(isset($params[0]) && is_string($params[0]) && $params[0] == 'with-datas'){
            $this->useOldDb = true;
        }

        // Main database connection
        echo "\n-DATABASE CONNECTION ";
        try{
            @$this->db = Yii::app()->db;
            echo "[OK]";
        }
        catch(Exception $e){
            echo "[ERROR] : " . $e->getMessage();
            exit;
        }

        // Structure
        $t = $this->db->beginTransaction();
        try{
            echo "\n-REBUILDING STRUCTURE ";
            $this->db->createCommand('ALTER DATABASE CHARACTER SET UTF8 COLLATE utf8_general_ci;')->execute();
            $this->executeScript('../../../database/structure.sql');
            $t->commit();
            echo "[OK]";
        }
        catch(Exception $e){
            $t->rollBack();
            echo "[ERROR] : " . $e->getMessage(); 
            exit;
        }

        // Datas
        if($this->useOldDb == true){
            $t = $this->db->beginTransaction();
            try{
                echo "\n-OLD DATABASE CONNECTION ";
                @$this->oldDb = Yii::app()->oldDb;
                echo "[OK]";
                echo "\n-INSERTING DATAS ";
                require_once(dirname(__FILE__) . '/../../../database/datas.php');
                $t->commit();
                echo "[OK]";
            }
            catch(Exception $e){
                $t->rollBack();
                echo "[ERROR] : " . $e->getMessage(); 
                exit;
            }
        }
        else
            echo "\n-INSERTING DATAS [SKIP]";

        // Default entries
        $t = $this->db->beginTransaction();
        try{
            echo "\n-INSERTING DEFAULT ";
            $this->db->createCommand("INSERT INTO `members` (`firstname`, `lastname`, `email`, `status`, `username`, `password`) VALUES ('admin', 'admin', 'admin@app.local', 'active', 'admin', 'admin');")->execute();
            $t->commit();
            echo "[OK]";
        }
        catch(Exception $e){
            $t->rollBack();
            echo "[ERROR] : " . $e->getMessage(); 
            exit;
        }

        echo "\n-END\n";

    }


    protected function executeScript($file){

        // Check file
        if(!isset($file) || empty($file) || !file_exists(dirname(__FILE__) . '/' . $file))
            throw new Exception('Check the file!');

        // Array of all the queries
        $queries = explode(';', file_get_contents(dirname(__FILE__) . '/' . $file));

        // Execution on to on
        foreach($queries as $stmt){
          if(strlen($stmt) > 3 && substr(ltrim($stmt), 0, 2) != '/*')
            $this->db->createCommand($stmt)->execute();
        }
 
    }



}