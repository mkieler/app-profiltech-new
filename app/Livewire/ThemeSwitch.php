<?php

namespace App\Livewire;

use Auth;
use Livewire\Component;
use Session;

class ThemeSwitch extends Component
{
    public $theme;

    public function mount()
    {
        $this->theme = Auth::user()->theme;
    }

    public function render()
    {
        return view('livewire.theme-switch');
    }

    public function setTheme(){
        try {
            Auth::user()->update(['theme' => $this->theme]);
            $this->dispatch('alert', msg: 'Det fortrukne tema blev gemt', type: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', msg: 'Der skete en fejl da vi forsøgte at gemme dit fortrukne tema', type: 'error');
        }
    }
}
