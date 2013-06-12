<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property string $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $city
 * @property string $address
 * @property string $zip
 * @property string $mobile_phone
 * @property string $phone
 * @property string $description
 * @property string $status
 * @property string $username
 * @property string $password
 */
class Members extends CActiveRecord
{

	public $password2;
	
	
    // public function beforeSave()
    // {
        // in this case, we will use the old hashed password.
        // if(empty($this->password) && empty($this->password2) && !empty($this->initialPassword))
            // $this->password=$this->password2=$this->initialPassword;
 
        // return parent::beforeSave();
    // }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Members the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes	
		// will receive user inputs.
		return array(
			//Length
			array('zip', 'length', 'max'=>8),
			array('status', 'length', 'max'=>6),
			array('address', 'length', 'max'=>100),
			array('firstname, lastname, city', 'length', 'max'=>45),
			array('mobile_phone, phone, username, password', 'length', 'max'=>20),
			//Require & OnRegister
			array('password2', 'required', 'on'=>'register'),
			array('firstname, lastname, email, username, password', 'required'),
			array('password', 'compare', 'compareAttribute'=>'password2', 'on'=>'register'),
			//Validation
			array('firstname, lastname, city', 'match', 'pattern'=>'/^[\\w\\-\\ ][^0-9]+$/u'),
			array('address, username', 'match', 'pattern'=>'/^[\\w\\-\\ ]+$/u'),
			array('email', 'email'),
			array('zip', 'match', 'pattern'=>'/^[0-9]{4,5}$/'),
			array('phone, mobile_phone', 'match', 'pattern'=>'/^[0-9+\\ ]{10,16}$/'),
			//Other
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstname, lastname, email, city, address, zip, mobile_phone, phone, description, status, username, password', 'safe', 'on'=>'search'),		
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'membersgroups' => array(self::HAS_MANY, 'MembersGroups', 'member_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			"id" => "ID",
			"firstname" => Yii::t("strings","Firstname"),
			"lastname" => Yii::t("strings","Lastname"),
			"email" => "Email",
			"city" => Yii::t("strings","City"),
			"address" => Yii::t("strings","Address"),
			"zip" => Yii::t("strings", "Zip"),
			"mobile_phone" => Yii::t("strings","Mobile phone"),
			"phone" => Yii::t("strings","Phone"),
			"description" => "Description",
			"status" => "Status",
			"groups" => Yii::t("strings", "Groups"),
			"username" => Yii::t("strings", "Username"),
			"password" => Yii::t("strings", "Password"),
			"password2" => Yii::t("strings", "Insert your password again"),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('mobile_phone',$this->mobile_phone,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}