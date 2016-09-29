<?php

namespace skinny\tours\models;

use yii\db\ActiveRecord;

/**
 * Country
 */
class Country extends ActiveRecord
{

	/**
	 * Table name
	 */
	public function tableName()
	{
		return '{{countries}}'
	}

}
