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
			'ancestor' => array(self::BELONGS_TO, 'Groups', 'parent_id'),
			'children' => array(self::HAS_MANY, 'Groups', 'parent_id'),
			'roles' => array(self::HAS_MANY, 'MembersGroups', 'group_id'),
			'members' => array(self::HAS_MANY, 'Members', array('member_id'=>'id'), 'through'=>'roles'),
			'admin' => array(self::HAS_ONE, 'Members', array('member_id'=>'id'), 'through'=>'roles', 'condition'=>'is_admin=true'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'name' => Yii::t('strings', 'Name'),
			'description' => 'Description',
			'specifications' => Yii::t('strings', 'Specifications'),
			'parent_id' => Yii::t('strings', 'Parent ID'),
			'hide' => Yii::t('strings', 'Hide'),
			'system' => Yii::t('strings', 'System'),
			'ancestor' => 'Parent',
			'children' => 'Sous-groupes',
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
	
	public function hasAdmin() {
		if (isset($this->admin->id) && is_numeric($this->admin->id)) {
			return true;
		}
		else {
			return false;
		}
	}
	
	private function is_member() {
		$iIdUser = Yii::app()->user->id;
		foreach ($this->members as $oMember) {
			if ($iIdUser == $oMember->id) {
				return true;
			}
		}
		return false;
	}
	
	public function getAdminList() {
		$aDatas = array();
		foreach ($this->members as $oUser) {
			$aDatas[$oUser->id] = $oUser->lastname . ' ' . $oUser->firstname;
		}
		
		$sReturn = '<form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '/groups/updateadmin/' . $this->id . '">';
		$sSelected = '';
		if ($this->hasAdmin()) {
			$sSelected = $this->admin->id;
			$sReturn .= CHtml::link(CHtml::encode($this->admin->firstname . ' ' . $this->admin->lastname), array('./', 'members'=>$this->admin->id)) . ' ';
		}
		
		if ($this->is_member()) {
			$sReturn .= CHtml::dropDownList('admin', $sSelected, $aDatas) . '<input type="submit" value="Modifier"/></form>';
		}
		
		return $sReturn;
	}
	
	public function updateAdmin($id_admin) {
		$db = Yii::app()->db->createCommand();
		if ($this->hasAdmin()) {
			$db->update('members_groups', array('is_admin'=>0), 'group_id="' . $this->id . '" AND member_id="' . $this->admin->id . '"');
		}
		$db->update('members_groups', array('is_admin'=>1), 'group_id="' . $this->id . '" AND member_id="' . $id_admin . '"');
	}
}