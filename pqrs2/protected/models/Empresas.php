<?php

/**
 * This is the model class for table "empresas".
 *
 * The followings are the available columns in table 'empresas':
 * @property string $nit
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 * @property integer $ciudad
 * @property string $nombreContacto
 * @property string $primerApellidoContacto
 * @property string $segundoApellidoContacto
 * @property string $telefonoContacto
 *
 * The followings are the available model relations:
 * @property Contactos $nit0
 * @property Ciudades $ciudad0
 */
class Empresas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nit, nombre, direccion, ciudad, nombreContacto, primerApellidoContacto, segundoApellidoContacto, telefonoContacto', 'required'),
			array('ciudad', 'numerical', 'integerOnly'=>true),
			array('nit', 'length', 'max'=>15),
			array('nombre, direccion', 'length', 'max'=>50),
			array('telefono, telefonoContacto', 'length', 'max'=>12),
			array('correo', 'length', 'max'=>25),
			array('nombreContacto, primerApellidoContacto, segundoApellidoContacto', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nit, nombre, direccion, telefono, correo, ciudad, nombreContacto, primerApellidoContacto, segundoApellidoContacto, telefonoContacto', 'safe', 'on'=>'search'),
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
			'nit0' => array(self::BELONGS_TO, 'Contactos', 'nit'),
			'ciudad0' => array(self::BELONGS_TO, 'Ciudades', 'ciudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nit' => 'Nit:',
			'nombre' => 'Nombre Empresa:',
			'direccion' => 'Dirección:',
			'telefono' => 'Teléfono:',
			'correo' => 'Correo Electrónico:',
			'ciudad' => 'Ciudad:',
			'nombreContacto' => 'Nombre Contacto:',
			'primerApellidoContacto' => 'Primer Apellido Contacto:',
			'segundoApellidoContacto' => 'Segundo Apellido Contacto:',
			'telefonoContacto' => 'Teléfono Contacto:',
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

		$criteria->compare('nit',$this->nit,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('ciudad',$this->ciudad);
		$criteria->compare('nombreContacto',$this->nombreContacto,true);
		$criteria->compare('primerApellidoContacto',$this->primerApellidoContacto,true);
		$criteria->compare('segundoApellidoContacto',$this->segundoApellidoContacto,true);
		$criteria->compare('telefonoContacto',$this->telefonoContacto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>1000),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getWholeName() {
		return $this->nombre;
	}
	
	public function getId() {
		return $this->nit;
	}
	
}
