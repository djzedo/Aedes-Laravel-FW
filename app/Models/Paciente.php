<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paciente
 * 
 * @property int $idcaso
 * @property string $pri_nom_
 * @property string $seg_nom_
 * @property string $pri_ape_
 * @property string $seg_ape_
 * @property string $tip_ide_
 * @property int $edad_
 * @property string $sexo_
 * @property int $num_ide_
 * @property string $dir_res_
 * @property int $ocupacion_
 * @property string $tip_ss_
 * @property int $cod_ase_
 * @property int $per_etn_
 * @property int $gp_discapa
 * @property int $gp_desplaz
 * @property int $gp_migrant
 * @property int $gp_carcela
 * @property int $gp_gestan
 * @property int $gp_indigen
 * @property int $gp_pobicbf
 * @property int $gp_mad_com
 * @property int $gp_desmovi
 * @property int $gp_psiquia
 * @property int $gp_vic_vio
 * @property int $gp_otros
 * @property \Carbon\Carbon $fec_def_
 * @property int $telefono_
 * @property \Carbon\Carbon $fecha_nto_
 * @property string $cer_def_
 * @property string $direclabor
 * 
 * @property \App\Models\Caso $caso
 *
 * @package App\Models
 */
class Paciente extends Eloquent
{
	protected $table = 'paciente';
	protected $primaryKey = 'idcaso';
	public $timestamps = false;

	protected $casts = [
		'edad_' => 'int',
		'num_ide_' => 'int',
		'ocupacion_' => 'int',
		'cod_ase_' => 'int',
		'per_etn_' => 'int',
		'gp_discapa' => 'int',
		'gp_desplaz' => 'int',
		'gp_migrant' => 'int',
		'gp_carcela' => 'int',
		'gp_gestan' => 'int',
		'gp_indigen' => 'int',
		'gp_pobicbf' => 'int',
		'gp_mad_com' => 'int',
		'gp_desmovi' => 'int',
		'gp_psiquia' => 'int',
		'gp_vic_vio' => 'int',
		'gp_otros' => 'int',
		'telefono_' => 'int'
	];

	protected $dates = [
		'fec_def_',
		'fecha_nto_'
	];

	protected $fillable = [
		'pri_nom_',
		'seg_nom_',
		'pri_ape_',
		'seg_ape_',
		'tip_ide_',
		'edad_',
		'sexo_',
		'num_ide_',
		'dir_res_',
		'ocupacion_',
		'tip_ss_',
		'cod_ase_',
		'per_etn_',
		'gp_discapa',
		'gp_desplaz',
		'gp_migrant',
		'gp_carcela',
		'gp_gestan',
		'gp_indigen',
		'gp_pobicbf',
		'gp_mad_com',
		'gp_desmovi',
		'gp_psiquia',
		'gp_vic_vio',
		'gp_otros',
		'fec_def_',
		'telefono_',
		'fecha_nto_',
		'cer_def_',
		'direclabor'
	];

	public function caso()
	{
		return $this->belongsTo(\App\Models\Caso::class, 'idcaso');
	}
}
