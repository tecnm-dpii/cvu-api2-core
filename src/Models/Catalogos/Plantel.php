<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

/**
 * @property-read Programa[] $programas
 */
class Plantel implements JsonMappedInterface
{
    public const TIPO_DIRECCION_GENERAL = 'Dirección General';
    public const TIPO_CENTRO_FEDERAL = 'Centro Federal';
    public const TIPO_INSTITUTO_FEDERAL = 'Instituto Federal';
    public const TIPO_DESCENTRALIZADO = 'Descentralizado';

    public $id_plantel;
    public $nombre;
    public $nombre_corto;
    public $abreviatura;
    public $cct;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_plantel'),
            new JsonMap('nombre'),
            new JsonMap('nombre_corto'),
            new JsonMap('abreviatura'),
            new JsonMap('cct')
        ];
    }
}
