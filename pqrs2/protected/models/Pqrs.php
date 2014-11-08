<?php

/**
 * This is the model class for table "pqrs".
 *
 * The followings are the available columns in table 'pqrs':
 * @property integer $id
 * @property string $contacto
 * @property integer $dependencia
 * @property integer $subtema
 * @property integer $folios
 * @property integer $anexos
 * @property string $tipoAnexos
 * @property string $asunto
 * @property string $gac
 * @property integer $respuesta
 *
 * The followings are the available model relations:
 * @property Historico[] $historicos
 * @property Contactos $contacto0
 * @property Dependencia $dependencia0
 * @property Subtema $subtema0
 * @property Usuario $gac0
 * @property Respuesta $respuesta0
 */
class Pqrs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pqrs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contacto, dependencia, subtema, folios, anexos, tipoAnexos, asunto', 'required'),
			array('dependencia, subtema, folios, anexos, respuesta', 'numerical', 'integerOnly'=>true),
			array('contacto, gac', 'length', 'max'=>15),
			array('tipoAnexos', 'length', 'max'=>50),
			array('asunto', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, contacto, dependencia, subtema, folios, anexos, tipoAnexos, asunto, gac, respuesta', 'safe', 'on'=>'search'),
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
			'historicos' => array(self::HAS_MANY, 'Historico', 'pqrs'),
			'contacto0' => array(self::BELONGS_TO, 'Contactos', 'contacto'),
			'dependencia0' => array(self::BELONGS_TO, 'Dependencia', 'dependencia'),
			'subtema0' => array(self::BELONGS_TO, 'Subtema', 'subtema'),
			'gac0' => array(self::BELONGS_TO, 'Usuario', 'gac'),
			'respuesta0' => array(self::BELONGS_TO, 'Respuesta', 'respuesta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'contacto' => 'Contacto',
			'dependencia' => 'Dependencia',
			'subtema' => 'Subtema',
			'folios' => 'Folios',
			'anexos' => 'Anexos',
			'tipoAnexos' => 'Tipo Anexos',
			'asunto' => 'Asunto',
			'gac' => 'Gac',
			'respuesta' => 'Respuesta',
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
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('dependencia',$this->dependencia);
		$criteria->compare('subtema',$this->subtema);
		$criteria->compare('folios',$this->folios);
		$criteria->compare('anexos',$this->anexos);
		$criteria->compare('tipoAnexos',$this->tipoAnexos,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('gac',$this->gac,true);
		$criteria->compare('respuesta',$this->respuesta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pqrs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
