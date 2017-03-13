<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mapa
 * 
 * @property int $idcaso
 * @property \Carbon\Carbon $fec_not
 * @property int $semana
 * @property int $ano
 * @property int $edad_
 * @property string $sexo_
 * @property string $bar_ver_
 * @property string $comuna
 * 
 * @property \App\Models\Caso $caso
 *
 * @package App\Models
 */
class Mapa extends Eloquent
{
	protected $table = 'mapa';
	protected $primaryKey = 'idcaso';
	public $timestamps = false;

	protected $casts = [
		'semana' => 'int',
		'ano' => 'int',
		'edad_' => 'int'
	];

	protected $dates = [
		'fec_not'
	];

	protected $fillable = [
		'fec_not',
		'semana',
		'ano',
		'edad_',
		'sexo_',
		'bar_ver_',
		'comuna'
	];

	public function caso()
	{
		return $this->belongsTo(\App\Models\Caso::class, 'idcaso');
	}
}
