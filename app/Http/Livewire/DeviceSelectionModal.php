<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Device;
use App\Models\DeviceType;

class DeviceSelectionModal extends Component
{   
    public $device_types;
    public $device_type;
    public $devices;
    
    public function mount()
    {
        $this->device_types = DeviceType::all();
    }

    public function loadDevices($device_type_id)
    {
        $this->device_type = DeviceType::find($device_type_id);
        $this->devices = $this->device_type->devices;
    }

    public function resetDevices()
    {
        $this->device_type = null;
        $this->devices = [];
    }

    public function render()
    {
        return view('livewire.device-selection-modal');
    }
}
