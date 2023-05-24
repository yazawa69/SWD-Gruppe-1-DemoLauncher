<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PhaseDeviceRepository;

class PhaseDeviceController extends Controller
{
    protected $phaseDeviceRepository;

    public function __construct(PhaseDeviceRepository $phaseDeviceRepository)
    {
        $this->phaseDeviceRepository = $phaseDeviceRepository;
    }

    public function create(Request $req)
    {
        $data = $req->all();
        $this->phaseDeviceRepository->createAndSave($data['phase_id'], $data['device_id']);
        return response(200);
    }

}
