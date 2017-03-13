<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 Mar 2017 23:19:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DetalleCaso
 * 
 * @property int $idcaso
 * @property \Carbon\Carbon $fec_con_
 * @property \Carbon\Carbon $ini_sin_
 * @property int $tip_cas_
 * @property int $pac_hos_
 * @property \Carbon\Carbon $fec_hos_
 * @property string $nuni_modif
 * @property string $nom_dil_f_
 * @property int $tel_dil_f_
 * @property \Carbon\Carbon $fec_aju_
 * @property int $nit_upgd
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
 * @property string $nom_eve
 * @property string $nom_upgd
 * @property int $nreg
 * 
 * @property \App\Models\Caso $caso
 *
 * @package App\Models
 */
class DetalleCaso extends Eloquent
{
	protected $primaryKey = 'idcaso';
	public $timestamps = false;

	protected $casts = [
		'tip_cas_' => 'int',
		'pac_hos_' => 'int',
		'tel_dil_f_' => 'int',
		'nit_upgd' => 'int',
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
		'nreg' => 'int'
	];

	protected $dates = [
		'fec_con_',
		'ini_sin_',
		'fec_hos_',
		'fec_aju_'
	];

	protected $fillable = [
		'fec_con_',
		'ini_sin_',
		'tip_cas_',
		'pac_hos_',
		'fec_hos_',
		'nuni_modif',
		'nom_dil_f_',
		'tel_dil_f_',
		'fec_aju_',
		'nit_upgd',
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
		'nom_eve',
		'nom_upgd',
		'nreg'
	];

	public function caso()
	{
		return $this->belongsTo(\App\Models\Caso::class, 'idcaso');
	}
}
