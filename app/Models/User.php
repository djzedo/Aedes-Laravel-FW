<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $pwd
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'pwd'
	];
}
