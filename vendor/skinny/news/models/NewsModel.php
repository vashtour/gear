<?php

//	set namespace
namespace skinny\news\models;

//	resolve dependencies
use \yii\db\ActiveRecord;

/**
 * News model
 */
class NewsModel extends ActiveRecord
{

	/**
	 * Table name
	 *
	 * @return string
	 */
	public static function tableName()
	{
		return 'news';
	}

	/**
	 * Primary key
	 *
	 * @return array|string
	 */
	public static function primaryKey()
	{
		return 'news_id';
	}

}
