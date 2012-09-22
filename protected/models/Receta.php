<?php

/**
 * This is the model class for table "t_receta".
 *
 * The followings are the available columns in table 't_receta':
 * @property integer $T_Receta_id
 * @property string $Descripcion
 * @property integer $Cant_Ingrediente
 * @property integer $T_Ingrediente_ID
 * @property integer $T_Plato_ID
 *
 * The followings are the available model relations:
 * @property TPlato $tPlato
 * @property TIngrediente $tIngrediente
 */
class Receta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Receta the static model class
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
		return 't_receta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, Cant_Ingrediente, T_Ingrediente_ID, T_Plato_ID', 'required'),
			array('Cant_Ingrediente, T_Ingrediente_ID, T_Plato_ID', 'numerical', 'integerOnly'=>true),
			array('Descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('T_Receta_id, Descripcion, Cant_Ingrediente, T_Ingrediente_ID, T_Plato_ID', 'safe', 'on'=>'search'),
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
			'tPlato' => array(self::BELONGS_TO, 'TPlato', 'T_Plato_ID'),
			'tIngrediente' => array(self::BELONGS_TO, 'TIngrediente', 'T_Ingrediente_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'T_Receta_id' => 'T Receta',
			'Descripcion' => 'Descripcion',
			'Cant_Ingrediente' => 'Cant Ingrediente',
			'T_Ingrediente_ID' => 'T Ingrediente',
			'T_Plato_ID' => 'T Plato',
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

		$criteria->compare('T_Receta_id',$this->T_Receta_id);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Cant_Ingrediente',$this->Cant_Ingrediente);
		$criteria->compare('T_Ingrediente_ID',$this->T_Ingrediente_ID);
		$criteria->compare('T_Plato_ID',$this->T_Plato_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}