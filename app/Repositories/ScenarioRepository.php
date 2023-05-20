<?php

namespace App\Repositories;

use App\Models\Scenario;

class ScenarioRepository
{

    public function create_and_save(String $name, String $description, array $phases)
    {

        echo "amber stinks";

        echo "\n" . gettype($name);
        echo "\n" . gettype($description);
        // echo "\n".gettype($phases);

        $scenario = Scenario::create([
            'name' => $name,
            'description' => $description,
            // 'phases' => $phases
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
