<?php

/**
 * This is the model class for table "ciudadanos".
 *
 * The followings are the available columns in table 'ciudadanos':
 * @property string $id
 * @property integer $tipoId
 * @property string $nombres
 * @property string $primerApelldio
 * @property string $segundoApellido
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 * @property integer $ciudad
 *
 * The followings are the available model relations:
 * @property Contactos $id0
 * @property TiposDocumento $tipo
 * @property Ciudades $ciudad0
 */
class Ciudadanos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ciudadanos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, tipoId, nombres, primerApelldio, correo, ciudad', 'required'),
			array('tipoId, ciudad', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>15),
			array('nombres, primerApelldio, segundoApellido', 'length', 'max'=>30),
			array('direccion', 'length', 'max'=>50),
			array('telefono', 'length', 'max'=>12),
			array('correo', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipoId, nombres, primerApelldio, segundoApellido, direccion, telefono, correo, ciudad', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Contactos', 'id'),
			'tipo' => array(self::BELONGS_TO, 'TiposDocumento', 'tipoId'),
			'ciudad0' => array(self::BELONGS_TO, 'Ciudades', 'ciudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Numero de Identificacion:',
			'tipoId' => 'Tipo de Identificacion:',
			'nombres' => 'Nombres:',
			'primerApelldio' => 'Primer Apellido:',
			'segundoApellido' => 'Segundo Apellido:',
			'direccion' => 'Direccion:',
			'telefono' => 'Telefono:',
			'correo' => 'Correo Electronico:',
			'ciudad' => 'Ciudad:',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('tipoId',$this->tipoId);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('primerApelldio',$this->primerApelldio,true);		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ciudadanos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getWholeName() {
		return $this->nombres . ' ' . $this->primerApelldio . ' ' . $this->segundoApellido; 
	}
	
	public function getId() {
		return $this->id;
	}
	
}
