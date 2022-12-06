<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class ProgramaEducactivo implements JsonMappedInterface
{
    public $id_programa;
    public $id_grado;
    public $nombre;
    public $abreviatura;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_programa'),
            new JsonMap('id_grado'),
            new JsonMap('nombre'),
            new JsonMap('abreviatura'),
            new JsonMap('grado')
        ];
    }
}
