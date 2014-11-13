<?php

/**
 * This is the model class for table "expediente".
 *
 * The followings are the available columns in table 'expediente':
 * @property integer $id
 * @property string $nombre
 * @property string $responsable
 * @property string $asunto
 * @property string $serie
 * @property string $subserie
 *
 * The followings are the available model relations:
 * @property Dependencia[] $dependencias
 * @property Usuario $responsable0
 */
class Expediente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expediente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, responsable', 'required'),
			array('nombre', 'length', 'max'=>30),
			array('responsable', 'length', 'max'=>15),
			array('asunto', 'length', 'max'=>50),
			array('serie', 'length', 'max'=>30),
			array('subserie', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, responsable', 'safe', 'on'=>'search'),
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
			'dependencias' => array(self::HAS_MANY, 'Dependencia', 'expediente'),
			'responsable0' => array(self::BELONGS_TO, 'Usuario', 'responsable'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'responsable' => 'Responsable',
			'asunto' => 'Asunto',
			'serie' => 'Serie',
			'subserie' => 'Subserie',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('serie',$this->serie,true);
		$criteria->compare('subserie',$this->subserie,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expediente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
