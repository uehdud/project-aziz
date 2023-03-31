<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalProject extends Component
{
    public function render()
    {
        return view('livewire.modal-project');
    }

    public function openModal()
    {
        
        $this->dispatchBrowserEvent('openModalProject');
    }
}
