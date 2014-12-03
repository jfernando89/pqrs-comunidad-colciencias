<?php

/**
 * This is the model class for table "envio".
 *
 * The followings are the available columns in table 'envio':
 * @property integer $id
 * @property integer $medio
 * @property integer $zona
 * @property integer $tipo
 * @property string $guia
 * @property integer $resultado
 *
 * The followings are the available model relations:
 * @property Medio $medio0
 * @property Zona $zona0
 * @property TipoEnvio $tipo0
 * @property ResultadoEnvio $resultado0
 * @property Respuesta[] $respuestas
 */
class Envio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'envio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('medio, zona, tipo, guia', 'required'),
			array('medio, zona, tipo, resultado', 'numerical', 'integerOnly'=>true),
			array('guia', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, medio, zona, tipo, guia, resultado', 'safe', 'on'=>'search'),
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
			'medio0' => array(self::BELONGS_TO, 'Medio', 'medio'),
			'zona0' => array(self::BELONGS_TO, 'Zona', 'zona'),
			'tipo0' => array(self::BELONGS_TO, 'TipoEnvio', 'tipo'),
			'resultado0' => array(self::BELONGS_TO, 'ResultadoEnvio', 'resultado'),
			'respuestas' => array(self::HAS_MANY, 'Respuesta', 'envio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'medio' => 'Medio',
			'zona' => 'Zona',
			'tipo' => 'Tipo',
			'guia' => 'Guía',
			'resultado' => 'Resultado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('medio',$this->medio);
		$criteria->compare('zona',$this->zona);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('guia',$this->guia,true);
		$criteria->compare('resultado',$this->resultado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Envio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
