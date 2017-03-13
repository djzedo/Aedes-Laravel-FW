<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Caso
 * 
 * @property int $idcaso
 * @property int $cod_eve
 * @property \Carbon\Carbon $fec_not
 * @property int $semana
 * @property int $ano
 * @property int $cod_pre
 * @property int $cod_sub
 * @property string $pri_nom_
 * @property string $seg_nom_
 * @property string $pri_ape_
 * @property string $seg_ape_
 * @property string $tip_ide_
 * @property int $num_ide_
 * @property int $edad_
 * @property int $uni_med_
 * @property string $sexo_
 * @property int $cod_pais_o
 * @property int $cod_dpto_o
 * @property int $cod_mun_o
 * @property int $area_
 * @property string $localidad_
 * @property string $cen_pobla_
 * @property string $vereda_
 * @property string $bar_ver_
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
 * @property int $cod_dpto_r
 * @property int $cod_mun_r
 * @property \Carbon\Carbon $fec_con_
 * @property \Carbon\Carbon $ini_sin_
 * @property int $tip_cas_
 * @property int $pac_hos_
 * @property \Carbon\Carbon $fec_hos_
 * @property int $con_fin_
 * @property \Carbon\Carbon $fec_def_
 * @property int $ajuste_
 * @property int $telefono_
 * @property \Carbon\Carbon $fecha_nto_
 * @property string $cer_def_
 * @property string $cbmte_
 * @property int $uni_modif
 * @property int $nuni_modif
 * @property \Carbon\Carbon $fec_arc_xl
 * @property string $nom_dil_f_
 * @property int $tel_dil_f_
 * @property \Carbon\Carbon $fec_aju_
 * @property int $nit_upgd
 * @property int $fm_fuerza
 * @property int $fm_unidad
 * @property string $fm_grado
 * @property string $version
 * @property int $desplazami
 * @property int $cod_mun_d
 * @property int $famantdngu
 * @property string $direclabor
 * @property int $fiebre
 * @property int $cefalea
 * @property int $dolrretroo
 * @property int $malgias
 * @property int $artralgia
 * @property int $erupcionr
 * @property int $dolor_abdo
 * @property int $vomito
 * @property int $diarrea
 * @property int $somnolenci
 * @property int $hipotensio
 * @property int $hepatomeg
 * @property int $hem_mucosa
 * @property int $hipotermia
 * @property int $caida_plaq
 * @property int $acum_liqui
 * @property int $aum_hemato
 * @property int $extravasac
 * @property int $hemorr_hem
 * @property int $choque
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
 * @property string $nom_eve
 * @property string $nom_upgd
 * @property string $ndep_proce
 * @property string $nmun_proce
 * @property string $ndep_resi
 * @property string $nmun_resi
 * @property string $nmun_notif
 * @property string $ndep_notif
 * @property int $nreg
 * @property string $Dir. STD
 * @property float $X
 * @property float $Y
 * @property string $comuna
 * 
 * @property \App\Models\DetalleCaso $detalle_caso
 * @property \App\Models\Georef $georef
 * @property \App\Models\Mapa $mapa
 * @property \App\Models\Otro $otro
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class Caso extends Eloquent
{
	protected $primaryKey = 'idcaso';
	public $timestamps = false;

	protected $casts = [
		'cod_eve' => 'int',
		'semana' => 'int',
		'ano' => 'int',
		'cod_pre' => 'int',
		'cod_sub' => 'int',
		'num_ide_' => 'int',
		'edad_' => 'int',
		'uni_med_' => 'int',
		'cod_pais_o' => 'int',
		'cod_dpto_o' => 'int',
		'cod_mun_o' => 'int',
		'area_' => 'int',
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
		'cod_dpto_r' => 'int',
		'cod_mun_r' => 'int',
		'tip_cas_' => 'int',
		'pac_hos_' => 'int',
		'con_fin_' => 'int',
		'ajuste_' => 'int',
		'telefono_' => 'int',
		'uni_modif' => 'int',
		'nuni_modif' => 'int',
		'tel_dil_f_' => 'int',
		'nit_upgd' => 'int',
		'fm_fuerza' => 'int',
		'fm_unidad' => 'int',
		'desplazami' => 'int',
		'cod_mun_d' => 'int',
		'famantdngu' => 'int',
		'fiebre' => 'int',
		'cefalea' => 'int',
		'dolrretroo' => 'int',
		'malgias' => 'int',
		'artralgia' => 'int',
		'erupcionr' => 'int',
		'dolor_abdo' => 'int',
		'vomito' => 'int',
		'diarrea' => 'int',
		'somnolenci' => 'int',
		'hipotensio' => 'int',
		'hepatomeg' => 'int',
		'hem_mucosa' => 'int',
		'hipotermia' => 'int',
		'caida_plaq' => 'int',
		'acum_liqui' => 'int',
		'aum_hemato' => 'int',
		'extravasac' => 'int',
		'hemorr_hem' => 'int',
		'choque' => 'int',
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
		'conducta' => 'int',
		'nreg' => 'int',
		'X' => 'float',
		'Y' => 'float'
	];

	protected $dates = [
		'fec_not',
		'fec_con_',
		'ini_sin_',
		'fec_hos_',
		'fec_def_',
		'fecha_nto_',
		'fec_arc_xl',
		'fec_aju_'
	];

	protected $fillable = [
		'cod_eve',
		'fec_not',
		'semana',
		'ano',
		'cod_pre',
		'cod_sub',
		'pri_nom_',
		'seg_nom_',
		'pri_ape_',
		'seg_ape_',
		'tip_ide_',
		'num_ide_',
		'edad_',
		'uni_med_',
		'sexo_',
		'cod_pais_o',
		'cod_dpto_o',
		'cod_mun_o',
		'area_',
		'localidad_',
		'cen_pobla_',
		'vereda_',
		'bar_ver_',
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
		'cod_dpto_r',
		'cod_mun_r',
		'fec_con_',
		'ini_sin_',
		'tip_cas_',
		'pac_hos_',
		'fec_hos_',
		'con_fin_',
		'fec_def_',
		'ajuste_',
		'telefono_',
		'fecha_nto_',
		'cer_def_',
		'cbmte_',
		'uni_modif',
		'nuni_modif',
		'fec_arc_xl',
		'nom_dil_f_',
		'tel_dil_f_',
		'fec_aju_',
		'nit_upgd',
		'fm_fuerza',
		'fm_unidad',
		'fm_grado',
		'version',
		'desplazami',
		'cod_mun_d',
		'famantdngu',
		'direclabor',
		'fiebre',
		'cefalea',
		'dolrretroo',
		'malgias',
		'artralgia',
		'erupcionr',
		'dolor_abdo',
		'vomito',
		'diarrea',
		'somnolenci',
		'hipotensio',
		'hepatomeg',
		'hem_mucosa',
		'hipotermia',
		'caida_plaq',
		'acum_liqui',
		'aum_hemato',
		'extravasac',
		'hemorr_hem',
		'choque',
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
		'conducta',
		'nom_eve',
		'nom_upgd',
		'ndep_proce',
		'nmun_proce',
		'ndep_resi',
		'nmun_resi',
		'nmun_notif',
		'ndep_notif',
		'nreg',
		'Dir. STD',
		'X',
		'Y',
		'comuna'
	];

	public function detalle_caso()
	{
		return $this->hasOne(\App\Models\DetalleCaso::class, 'idcaso');
	}

	public function georef()
	{
		return $this->hasOne(\App\Models\Georef::class, 'idcaso');
	}

	public function mapa()
	{
		return $this->hasOne(\App\Models\Mapa::class, 'idcaso');
	}

	public function otro()
	{
		return $this->hasOne(\App\Models\Otro::class, 'idcaso');
	}

	public function paciente()
	{
		return $this->hasOne(\App\Models\Paciente::class, 'idcaso');
	}
}
