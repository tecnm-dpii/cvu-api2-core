<?php

namespace TecNM_DPII\CvuApi2Core\Models\Catalogos;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class DisciplinaTematica extends JsonMappedInterface
{
    public $id_disciplina;
    public $id_area;
    public $nombre;
    public $elegible;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_disciplina'),
            new JsonMap('id_area'),
            new JsonMap('nombre'),
            new JsonMap('elegible')
        ];
    }
}
