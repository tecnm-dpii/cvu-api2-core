<?php

namespace TecNM_DPII\CvuApi2Core\Models\Cvu;

use Francerz\JsonTools\JsonMap;
use Francerz\JsonTools\JsonMappedInterface;

class Perfil implements JsonMappedInterface
{
    public $id_persona;
    public $cvu_tecnm;
    public $nombres;
    public $apellido1;
    public $apellido2;
    public $fecha_nacimiento;
    public $sexo;
    public $curp;
    public $rfc;

    public static function getJsonMaps()
    {
        return [
            new JsonMap('id_persona'),
            new JsonMap('cvu_tecnm'),
            new JsonMap('nombres'),
            new JsonMap('apellido1'),
            new JsonMap('apellido2'),
            new JsonMap('fecha_nacimiento'),
            new JsonMap('curp'),
            new JsonMap('rfc')
        ];
    }
}
