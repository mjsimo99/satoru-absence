<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Admin extends Component
{
    public $admin;

    public function mount($admin)
    {
        $this->admin = $admin;
    }

    public function render()
    {
        return view('livewire.admin');
    }

   
}