<?php

namespace TecNM_DPII\CvuApi2Core\Models\Lgacs4;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;
use TecNM_DPII\CvuApi2Core\Models\Catalogos\Plantel;
use TecNM_DPII\CvuApi2Core\Models\Catalogos\ProgramaEducativo;

/**
 * @property-read string $id_area
 * @property-read string $area
 * @property-read string $disciplina
 * @property-read Plantel $Plantel
 * @property-read ProgramaEducativo $Programa
 */
class Autorizada implements JsonMappedInterface
{
    public $id_linea;
    public $id_plantel;
    public $id_programa;
    public $id_disciplina;
    public $clave;
    public $nombre;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_linea'),
            new JsonMap('id_plantel'),
            new JsonMap('id_programa'),
            new JsonMap('id_disciplina'),
            new JsonMap('clave'),
            new JsonMap('nombre')
        ];
    }
}
