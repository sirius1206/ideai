<?php

/**
 * This is the model class for table "tbl_post".
 *
 * The followings are the available columns in table 'tbl_post':
 * @property integer $id
 * @property integer $uid
 * @property string $title
 * @property string $preview
 * @property string $text
 * @property string $pref_img
 * @property string $tag
 * @property string $rating
 * @property string $rating_plus
 * @property string $rating_minus
 * @property integer $cid
 * @property string $created
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'tbl_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, cid', 'numerical', 'integerOnly'=>true),
			array('title, pref_img, tag', 'length', 'max'=>128),
			array('rating, rating_plus, rating_minus', 'length', 'max'=>32),
			array('preview, text, created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, title, preview, text, pref_img, tag, rating, rating_plus, rating_minus, cid, created', 'safe', 'on'=>'search'),
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
            'autor' => array(self::BELONGS_TO, 'User', 'uid')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'uid' => 'Uid',
			'title' => 'Title',
			'preview' => 'Preview',
			'text' => 'Text',
			'pref_img' => 'Pref Img',
			'tag' => 'Tag',
			'rating' => 'Rating',
			'rating_plus' => 'Rating Plus',
			'rating_minus' => 'Rating Minus',
			'cid' => 'Cid',
			'created' => 'Created',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($uid = null)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
        if($uid)
		$criteria->compare('uid',$uid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('preview',$this->preview,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('pref_img',$this->pref_img,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('rating',$this->rating,true);
		$criteria->compare('rating_plus',$this->rating_plus,true);
		$criteria->compare('rating_minus',$this->rating_minus,true);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}