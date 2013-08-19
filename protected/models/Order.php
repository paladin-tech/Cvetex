<?php

/**
 * This is the model class for table "cvetex_order".
 *
 * The followings are the available columns in table 'cvetex_order':
 * @property integer $orderId
 * @property string $orderTime
 * @property string $name
 * @property string $eMail
 * @property string $phone
 * @property string $webSite
 * @property string $city
 * @property string $country
 * @property string $club
 * @property string $clientType
 * @property integer $articleId
 * @property string $size
 * @property string $material
 * @property string $collar
 * @property integer $quantity
 * @property string $font
 * @property string $note
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return 'cvetex_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('articleId, quantity', 'numerical', 'integerOnly'=>true),
			array('name, eMail, phone, webSite, city, country, club, size, material, collar, font', 'length', 'max'=>200),
			array('clientType', 'length', 'max'=>10),
			array('orderTime, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orderId, orderTime, name, eMail, phone, webSite, city, country, club, clientType, articleId, size, material, collar, quantity, font, note', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orderId' => 'Order',
			'orderTime' => 'Order Time',
			'name' => 'Name',
			'eMail' => 'E Mail',
			'phone' => 'Phone',
			'webSite' => 'Web Site',
			'city' => 'City',
			'country' => 'Country',
			'club' => 'Club',
			'clientType' => 'Client Type',
			'articleId' => 'Article',
			'size' => 'Size',
			'material' => 'Material',
			'collar' => 'Collar',
			'quantity' => 'Quantity',
			'font' => 'Font',
			'note' => 'Note',
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

		$criteria->compare('orderId',$this->orderId);
		$criteria->compare('orderTime',$this->orderTime,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('eMail',$this->eMail,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('webSite',$this->webSite,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('club',$this->club,true);
		$criteria->compare('clientType',$this->clientType,true);
		$criteria->compare('articleId',$this->articleId);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('collar',$this->collar,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('font',$this->font,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}