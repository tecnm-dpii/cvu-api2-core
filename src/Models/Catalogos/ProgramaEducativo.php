<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class ProgramaEducativo implements JsonMappedInterface
{
    public $id_programa;
    public $id_nivel;
    public $nombre;
    public $acronimo;
    public $abreviatura;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_programa'),
            new JsonMap('id_nivel'),
            new JsonMap('nombre'),
            new JsonMap('acronimo'),
            new JsonMap('abreviatura')
        ];
    }
}
