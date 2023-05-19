<?php

namespace App\Repositories;

use App\Models\Szenario;


class SzenarioRepository{

    public function create_and_save(String $name, String $description, array $phases)
    {

        echo "amber stinks";

        // $szenario = Szenario::create([
        //     'name' => $name,
        //     'description' => $description,
        //     'phases' => $phases
        // ]);

        // return $szenario;
    }

    public function update()
    {
        
    }

    public function read()
    {
        
    }

    public function delete()
    {
        
    }

}

?>