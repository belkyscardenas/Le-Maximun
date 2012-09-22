<?php

/**
 * This is the model class for table "t_plato".
 *
 * The followings are the available columns in table 't_plato':
 * @property string $Descripcion
 * @property string $Nombre
 * @property integer $T_Plato_ID
 * @property integer $T_Menu_ID
 *
 * The followings are the available model relations:
 * @property TMenu $tMenu
 * @property TReceta[] $tRecetas
 */
class Plato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Plato the static model class
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
		return 't_plato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Nombre, T_Menu_ID', 'required'),
			array('T_Menu_ID', 'numerical', 'integerOnly'=>true),
			array('Descripcion, Nombre', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Descripcion, Nombre, T_Plato_ID, T_Menu_ID', 'safe', 'on'=>'search'),
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
			'tMenu' => array(self::BELONGS_TO, 'TMenu', 'T_Menu_ID'),
			'tRecetas' => array(self::HAS_MANY, 'TReceta', 'T_Plato_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Descripcion' => 'Descripcion',
			'Nombre' => 'Nombre',
			'T_Plato_ID' => 'T Plato',
			'T_Menu_ID' => 'T Menu',
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

		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('T_Plato_ID',$this->T_Plato_ID);
		$criteria->compare('T_Menu_ID',$this->T_Menu_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}