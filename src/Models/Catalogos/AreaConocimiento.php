<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class AreaConocimiento implements JsonMappedInterface
{
    public $id_area_conocimiento;
    public $nombre;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_area_conocimiento'),
            new JsonMap('nombre')
        ];
    }
}
