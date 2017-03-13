<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Georef
 * 
 * @property int $idcaso
 * @property int $cod_pais_o
 * @property int $cod_dpto_o
 * @property int $cod_mun_o
 * @property int $area_
 * @property string $localidad_
 * @property string $cen_pobla_
 * @property string $vereda_
 * @property int $cod_mun_d
 * @property string $ndep_proce
 * @property string $nmun_proce
 * @property string $ndep_resi
 * @property string $nmun_resi
 * @property string $nmun_notif
 * @property string $ndep_notif
 * @property string $Dir. STD
 * @property float $X
 * @property float $Y
 * 
 * @property \App\Models\Caso $caso
 *
 * @package App\Models
 */
class Georef extends Eloquent
{
	protected $table = 'georef';
	protected $primaryKey = 'idcaso';
	public $timestamps = false;

	protected $casts = [
		'cod_pais_o' => 'int',
		'cod_dpto_o' => 'int',
		'cod_mun_o' => 'int',
		'area_' => 'int',
		'cod_mun_d' => 'int',
		'X' => 'float',
		'Y' => 'float'
	];

	protected $fillable = [
		'cod_pais_o',
		'cod_dpto_o',
		'cod_mun_o',
		'area_',
		'localidad_',
		'cen_pobla_',
		'vereda_',
		'cod_mun_d',
		'ndep_proce',
		'nmun_proce',
		'ndep_resi',
		'nmun_resi',
		'nmun_notif',
		'ndep_notif',
		'Dir. STD',
		'X',
		'Y'
	];

	public function caso()
	{
		return $this->belongsTo(\App\Models\Caso::class, 'idcaso');
	}
}
