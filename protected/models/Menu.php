<?php

/**
 * This is the model class for table "t_menu".
 *
 * The followings are the available columns in table 't_menu':
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Fecha_Inicio
 * @property string $Fecha_fin
 * @property integer $Precio
 * @property integer $T_Menu_ID
 *
 * The followings are the available model relations:
 * @property TArticuloPlato[] $tArticuloPlatos
 * @property TPlato[] $tPlatos
 */
class Menu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Menu the static model class
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
		return 't_menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Descripcion, Fecha_Inicio, Fecha_fin, Precio', 'required'),
			array('Precio', 'numerical', 'integerOnly'=>true),
			array('Nombre, Descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Nombre, Descripcion, Fecha_Inicio, Fecha_fin, Precio, T_Menu_ID', 'safe', 'on'=>'search'),
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
			'tArticuloPlatos' => array(self::HAS_MANY, 'TArticuloPlato', 'T_Menu_T_Menu_ID'),
			'tPlatos' => array(self::HAS_MANY, 'TPlato', 'T_Menu_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Nombre' => 'Nombre',
			'Descripcion' => 'Descripcion',
			'Fecha_Inicio' => 'Fecha Inicio',
			'Fecha_fin' => 'Fecha Fin',
			'Precio' => 'Precio',
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

		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Fecha_Inicio',$this->Fecha_Inicio,true);
		$criteria->compare('Fecha_fin',$this->Fecha_fin,true);
		$criteria->compare('Precio',$this->Precio);
		$criteria->compare('T_Menu_ID',$this->T_Menu_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}