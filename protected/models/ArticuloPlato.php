<?php

/**
 * This is the model class for table "t_articulo_plato".
 *
 * The followings are the available columns in table 't_articulo_plato':
 * @property integer $T_Articulo_T_Articulo_ID
 * @property integer $T_Menu_T_Menu_ID
 * @property integer $T_ArtPlato_ID
 * @property string $Descripcion
 * @property string $Cant_Articulo
 *
 * The followings are the available model relations:
 * @property TArticulo $tArticuloTArticulo
 * @property TMenu $tMenuTMenu
 */
class ArticuloPlato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ArticuloPlato the static model class
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
		return 't_articulo_plato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('T_Articulo_T_Articulo_ID, T_Menu_T_Menu_ID, Descripcion, Cant_Articulo', 'required'),
			array('T_Articulo_T_Articulo_ID, T_Menu_T_Menu_ID', 'numerical', 'integerOnly'=>true),
			array('Descripcion, Cant_Articulo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('T_Articulo_T_Articulo_ID, T_Menu_T_Menu_ID, T_ArtPlato_ID, Descripcion, Cant_Articulo', 'safe', 'on'=>'search'),
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
			'tArticuloTArticulo' => array(self::BELONGS_TO, 'TArticulo', 'T_Articulo_T_Articulo_ID'),
			'tMenuTMenu' => array(self::BELONGS_TO, 'TMenu', 'T_Menu_T_Menu_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'T_Articulo_T_Articulo_ID' => 'T Articulo T Articulo',
			'T_Menu_T_Menu_ID' => 'T Menu T Menu',
			'T_ArtPlato_ID' => 'T Art Plato',
			'Descripcion' => 'Descripcion',
			'Cant_Articulo' => 'Cant Articulo',
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

		$criteria->compare('T_Articulo_T_Articulo_ID',$this->T_Articulo_T_Articulo_ID);
		$criteria->compare('T_Menu_T_Menu_ID',$this->T_Menu_T_Menu_ID);
		$criteria->compare('T_ArtPlato_ID',$this->T_ArtPlato_ID);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Cant_Articulo',$this->Cant_Articulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}