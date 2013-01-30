<?php

/**
 * This is the model class for table "group".
 *
 * The followings are the available columns in table 'group':
 * @property integer $idgroup
 * @property string $name
 * @property string $description
 * @property string $specifications
 * @property string $date_begin
 * @property string $date_end
 * @property integer $fk_idgroup
 * @property integer $hide
 *
 * The followings are the available model relations:
 * @property Group $fkIdgroup
 * @property Group[] $groups
 */
class Group extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Group the static model class
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
		return 'group';
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
			array('fk_idgroup, hide', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('description, specifications, date_begin, date_end', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idgroup, name, description, specifications, date_begin, date_end, fk_idgroup, hide', 'safe', 'on'=>'search'),
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
			'fkIdgroup' => array(self::BELONGS_TO, 'Group', 'fk_idgroup'),
			'groups' => array(self::HAS_MANY, 'Group', 'fk_idgroup'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idgroup' => 'Idgroup',
			'name' => 'Name',
			'description' => 'Description',
			'specifications' => 'Specifications',
			'date_begin' => 'Date Begin',
			'date_end' => 'Date End',
			'fk_idgroup' => 'Fk Idgroup',
			'hide' => 'Hide',
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

		$criteria->compare('idgroup',$this->idgroup);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('specifications',$this->specifications,true);
		$criteria->compare('date_begin',$this->date_begin,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('fk_idgroup',$this->fk_idgroup);
		$criteria->compare('hide',$this->hide);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}