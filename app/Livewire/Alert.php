<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use stdClass;

class Alert extends Component
{
    public $alerts = [];

    #[On('alert')]
    public function addAlert($msg, $type = 'info')
    {
        $alert = new stdClass();
        $alert->msg = $msg;
        $alert->type = $type;
        $alert->iconClass = match ($type) {
            'success' => 'fa-solid fa-circle-check',
            'error' => 'fa-solid fa-circle-xmark',
            'warning' => 'fa-solid fa-triangle-exclamation',
            default => 'fa-solid fa-circle-info',
        };
        $this->alerts[] = $alert;
    }

    public function removeAlert($index){
        unset($this->alerts[$index]);
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
