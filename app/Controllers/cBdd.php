<?php

namespace App\Controllers;

use App\Models\NModelSelect;

class cBdd extends BaseController
{
    public function testBdd()
    {
        $db = \Config\Database::connect();
        if($db -> connect()){
            print_r("wakaleao");
        }else{
            print_r('dele pa fuera mi loco');
        }
    }

    public function Select_Controlador_bdd()
    {
        $instancia = new NModelSelect();
        $datosbdd = $instancia -> Select_Modelo_Inventario();
        $data = [
            'keyselectbdd'=> $datosbdd
        ];

        return view('vistainventario', $data);
    }
}
