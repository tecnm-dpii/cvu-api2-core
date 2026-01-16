<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class AreaTematica implements JsonMappedInterface
{
    public $id_area;
    public $nombre;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_area'),
            new JsonMap('nombre')
        ];
    }
}
