<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Otro
 * 
 * @property int $idcaso
 * @property int $cod_eve
 * @property int $cod_pre
 * @property int $cod_sub
 * @property int $uni_med_
 * @property int $cod_dpto_r
 * @property int $cod_mun_r
 * @property int $con_fin_
 * @property int $ajuste_
 * @property string $cbmte_
 * @property int $uni_modif
 * @property int $nuni_modif
 * @property \Carbon\Carbon $fec_arc_xl
 * @property int $fm_fuerza
 * @property int $fm_unidad
 * @property string $fm_grado
 * @property string $version
 * @property int $desplazami
 * @property int $famantdngu
 * @property int $dano_organ
 * @property int $muesttejid
 * @property int $mueshigado
 * @property int $muesbazo
 * @property int $muespulmon
 * @property int $muescerebr
 * @property int $muesmiocar
 * @property int $muesmedula
 * @property int $muesrinon
 * @property int $clasfinal
 * @property int $conducta
 * 
 * @property \App\Models\Caso $caso
 *
 * @package App\Models
 */
class Otro extends Eloquent
{
	protected $primaryKey = 'idcaso';
	public $timestamps = false;

	protected $casts = [
		'cod_eve' => 'int',
		'cod_pre' => 'int',
		'cod_sub' => 'int',
		'uni_med_' => 'int',
		'cod_dpto_r' => 'int',
		'cod_mun_r' => 'int',
		'con_fin_' => 'int',
		'ajuste_' => 'int',
		'uni_modif' => 'int',
		'nuni_modif' => 'int',
		'fm_fuerza' => 'int',
		'fm_unidad' => 'int',
		'desplazami' => 'int',
		'famantdngu' => 'int',
		'dano_organ' => 'int',
		'muesttejid' => 'int',
		'mueshigado' => 'int',
		'muesbazo' => 'int',
		'muespulmon' => 'int',
		'muescerebr' => 'int',
		'muesmiocar' => 'int',
		'muesmedula' => 'int',
		'muesrinon' => 'int',
		'clasfinal' => 'int',
		'conducta' => 'int'
	];

	protected $dates = [
		'fec_arc_xl'
	];

	protected $fillable = [
		'cod_eve',
		'cod_pre',
		'cod_sub',
		'uni_med_',
		'cod_dpto_r',
		'cod_mun_r',
		'con_fin_',
		'ajuste_',
		'cbmte_',
		'uni_modif',
		'nuni_modif',
		'fec_arc_xl',
		'fm_fuerza',
		'fm_unidad',
		'fm_grado',
		'version',
		'desplazami',
		'famantdngu',
		'dano_organ',
		'muesttejid',
		'mueshigado',
		'muesbazo',
		'muespulmon',
		'muescerebr',
		'muesmiocar',
		'muesmedula',
		'muesrinon',
		'clasfinal',
		'conducta'
	];

	public function caso()
	{
		return $this->belongsTo(\App\Models\Caso::class, 'idcaso');
	}
}
