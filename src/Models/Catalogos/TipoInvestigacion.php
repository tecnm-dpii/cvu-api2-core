<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class TipoInvestigacion implements JsonMappedInterface
{
    public $id_tipo_investigacion;
    public $nombre;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_tipo_investigacion'),
            new JsonMap('nombre')
        ];
    }
}
