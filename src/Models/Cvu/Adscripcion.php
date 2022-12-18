<?php

namespace TecNM_DPII\CvuApi2Core\Models\Cvu;

class Adscripcion
{
    public const PLANTEL_TIPO_DIRECCION_GENERAL = 'Dirección General';
    public const PLANTEL_TIPO_CENTRO_FEDERAL = 'Centro Federal';
    public const PLANTEL_TIPO_INSTITUTO_FEDERAL = 'Instituto Federal';
    public const PLANTEL_TIPO_DESCENTRALIZADO = 'Descentralizado';

    public $id_adscripcion;
    public $id_persona;
    public $id_plantel;
    public $plantel;
    public $plantel_tipo;
    public $fecha_adscripcion;
    public $campus;
    public $edificio;
    public $piso;
    public $oficina;
}
