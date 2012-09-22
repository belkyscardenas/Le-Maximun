<?php

/**
 * This is the model class for table "t_ingrediente".
 *
 * The followings are the available columns in table 't_ingrediente':
 * @property string $Nombre
 * @property string $Unidad
 * @property double $Precio_Unitario
 * @property integer $Estado
 * @property integer $T_Ingrediente_ID
 *
 * The followings are the available model relations:
 * @property TReceta[] $tRecetas
 */
class Ingrediente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ingrediente the static model class
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
		return 't_ingrediente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Unidad, Precio_Unitario, Estado', 'required'),
			array('Estado', 'numerical', 'integerOnly'=>true),
			array('Precio_Unitario', 'numerical'),
			array('Nombre, Unidad', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Nombre, Unidad, Precio_Unitario, Estado, T_Ingrediente_ID', 'safe', 'on'=>'search'),
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
			'tRecetas' => array(self::HAS_MANY, 'TReceta', 'T_Ingrediente_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Nombre' => 'Nombre',
			'Unidad' => 'Unidad',
			'Precio_Unitario' => 'Precio Unitario',
			'Estado' => 'Estado',
			'T_Ingrediente_ID' => 'T Ingrediente',
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

		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Unidad',$this->Unidad,true);
		$criteria->compare('Precio_Unitario',$this->Precio_Unitario);
		$criteria->compare('Estado',$this->Estado);
		$criteria->compare('T_Ingrediente_ID',$this->T_Ingrediente_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}