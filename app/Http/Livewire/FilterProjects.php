<?php

namespace App\Http\Livewire;

use App\Models\TbMClient;
use App\Models\TbMStatus;
use Livewire\Component;

class FilterProjects extends Component
{
    public $clients;
    public $status;
    public $query;
    public $client_id;
    public $status_name;

    public function mount()
    {
        $this->clients = TbMClient::all();
        $this->status = TbMStatus::all();
    }
    public function render()
    {
        return view('livewire.filter-projects');
    }

    public function clearFilter()
    {
        $this->query = '';
        $this->client_id = '';
        $this->status_name = '';
    }

    public function searchFilter()
    {
        $this->emitTo('project-table', 'reloadProjects', $this->query, $this->client_id, $this->status_name);
    }
}
