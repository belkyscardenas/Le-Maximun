<?php

/**
 * This is the model class for table "t_articulo".
 *
 * The followings are the available columns in table 't_articulo':
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $Fecha_Vigencia
 * @property integer $T_Articulo_ID
 *
 * The followings are the available model relations:
 * @property TArticuloPlato[] $tArticuloPlatos
 */
class Articulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Articulo the static model class
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
		return 't_articulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Descripcion, Fecha_Vigencia', 'required'),
			array('Nombre, Descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Nombre, Descripcion, Fecha_Vigencia, T_Articulo_ID', 'safe', 'on'=>'search'),
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
			'tArticuloPlatos' => array(self::HAS_MANY, 'TArticuloPlato', 'T_Articulo_T_Articulo_ID'),
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
			'Fecha_Vigencia' => 'Fecha Vigencia',
			'T_Articulo_ID' => 'Codigo Articulo',
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
		$criteria->compare('Fecha_Vigencia',$this->Fecha_Vigencia,true);
		$criteria->compare('T_Articulo_ID',$this->T_Articulo_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}