<?php

/**
 * This is the model class for table "groups".
 *
 * The followings are the available columns in table 'groups':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $specifications
 * @property integer $parent_id
 * @property integer $hide
 * @property integer $system
 *
 * The followings are the available model relations:
 * @property Groups $parent
 * @property Groups[] $groups
 */
class Groups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Groups the static model class
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
		return 'groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('parent_id, hide, system', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('description, specifications', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, specifications, parent_id, hide, system', 'safe', 'on'=>'search'),
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
			'parent' => array(self::BELONGS_TO, 'Groups', 'parent_id'),
			'groups' => array(self::HAS_MANY, 'Groups', 'parent_id'),
			'membersgroups' => array(self::HAS_MANY, 'MembersGroups', 'group_id'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'name' => Yii::t('strings', 'Nom du groupe'),
			'description' => 'Description',
			'specifications' => Yii::t('strings', 'Spécifications'),
			'parent_id' => 'Parent',
			'hide' => Yii::t('strings', 'Caché'),
			'system' => Yii::t('strings', 'Système'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('specifications',$this->specifications,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('hide',$this->hide);
		$criteria->compare('system',$this->system);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}