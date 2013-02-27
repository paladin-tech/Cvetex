<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $articleId
 * @property string $articleName
 * @property integer $sportId
 * @property string $sizes
 * @property string $techCharacteristics
 * @property string $collarType
 * @property integer $zipper
 * @property string $sex
 * @property string $colors
 *
 * The followings are the available model relations:
 * @property Sport $sport
 */
class Article extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Article the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'article';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('sportId, zipper', 'numerical', 'integerOnly' => true),
            array('articleName, sizes, techCharacteristics, collarType, colors', 'length', 'max' => 200),
            array('sex', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('articleId, articleName, sportId, sizes, techCharacteristics, collarType, zipper, sex, colors', 'safe', 'on' => 'search'),
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
            'sport' => array(self::BELONGS_TO, 'Sport', 'sportId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'articleId' => 'Article',
            'articleName' => 'Article Name',
            'sportId' => 'Sport',
            'sizes' => 'Sizes',
            'techCharacteristics' => 'Tech Characteristics',
            'collarType' => 'Collar Type',
            'zipper' => 'Zipper',
            'sex' => 'Sex',
            'colors' => 'Colors',
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

        $criteria = new CDbCriteria;

        $criteria->compare('articleId', $this->articleId);
        $criteria->compare('articleName', $this->articleName, true);
        $criteria->compare('sportId', $this->sportId);
        $criteria->compare('sizes', $this->sizes, true);
        $criteria->compare('techCharacteristics', $this->techCharacteristics, true);
        $criteria->compare('collarType', $this->collarType, true);
        $criteria->compare('zipper', $this->zipper);
        $criteria->compare('sex', $this->sex, true);
        $criteria->compare('colors', $this->colors, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getSports()
    {
        $usersArray = CHtml::listData(Sport::model()->findAll(array()), 'sportId', 'sportName');
        return $usersArray;
    }
}