<?php

namespace App\Repositories;

use App\Models\Scenario;

class ScenarioRepository
{

    public function create_and_save(String $name, String $description, array $phases)
    {
        $scenario = Scenario::create([
            'name' => $name,
            'description' => $description,
        ]);

        return $scenario;
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
