<?php

/**
 * This is the model class for table "historico".
 *
 * The followings are the available columns in table 'historico':
 * @property integer $id
 * @property string $fecha
 * @property integer $operacion
 * @property string $usuario
 * @property string $observacion
 * @property integer $pqrs
 *
 * The followings are the available model relations:
 * @property Operacion $operacion0
 * @property Usuario $usuario0
 * @property Pqrs $pqrs0
 */
class Historico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, operacion, usuario, pqrs', 'required'),
			array('operacion, pqrs', 'numerical', 'integerOnly'=>true),
			array('usuario', 'length', 'max'=>15),
			array('observacion', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, operacion, usuario, observacion, pqrs', 'safe', 'on'=>'search'),
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
			'operacion0' => array(self::BELONGS_TO, 'Operacion', 'operacion'),
			'usuario0' => array(self::BELONGS_TO, 'Usuario', 'usuario'),
			'pqrs0' => array(self::BELONGS_TO, 'Pqrs', 'pqrs'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'operacion' => 'Operación',
			'usuario' => 'Usuario',
			'observacion' => 'Observación',
			'pqrs' => 'Pqrs',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('operacion',$this->operacion);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('pqrs',$this->pqrs);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
