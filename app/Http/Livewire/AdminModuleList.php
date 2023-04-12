<?php

namespace App\Http\Livewire;

use App\Models\Module;
use Livewire\Component;

class AdminModuleList extends Component
{
    public $modules;

    public function mount()
    {
        $this->modules = Module::all();
    }

    public function editModule($id)
    {
        // Redirect to the edit page for the selected module
        return redirect()->route('adminModul.edit', $id);
    }

    public function deleteModule($id)
    {
        // Delete the selected module
        Module::destroy($id);

        // Emit an event to trigger a real-time update of the module list
        $this->emit('moduleDeleted');
    }

    public function render()
    {
        return view('livewire.admin-module-list');
    }
}


