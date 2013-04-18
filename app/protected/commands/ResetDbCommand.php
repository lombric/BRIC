<?php

class ResetDbCommand extends CConsoleCommand{

    private $db;

    private $useOldDb = false;
    private $oldDbName = 'lombric_old';
    private $oldDb;

    public function run($params){

        echo "\n-START";

        // Insert datas or not, if yes save the name of the old database to use
        if(isset($params[0]) && is_string($params[0])){
            $this->useOldDb = true;
            $this->oldDbName = $params[0];
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
        $t = $this->db->beginTransaction();
        if($this->useOldDb == true){
            try{
                echo "\n-OLD DATABASE CONNECTION ";
                $this->oldDb = new CDbConnection('mysql:host=localhost;dbname=' . $this->oldDbName, Yii::App()->db->username, Yii::App()->db->password);
                $this->oldDb->active=true;
                $this->oldDb->charset = 'utf8';
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