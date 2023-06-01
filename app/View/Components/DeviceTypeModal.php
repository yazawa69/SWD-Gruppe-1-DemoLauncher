<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\DeviceType;

class DeviceTypeModal extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $device_types = DeviceType::all();
        return view('components.device-type-modal', ['device_types' => $device_types]);
    }
}
