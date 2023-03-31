<?php

namespace App\Http\Livewire;

use App\Models\TbMProject;
use Livewire\Component;

class ProjectTable extends Component
{
    public $clients;
    public $projects;
    public $cekProject = [];

    protected $listeners = [
        'reloadProjects'
    ];

    public function mount()
    {
        $this->projects = TbMProject::with('client')->get();
    }

    public function render()
    {
        return view('livewire.project-table');
    }
    public function reloadProjects($client_id, $query, $status_name)
    {

        $this->projects = TbMProject::query();

        if ($client_id) {
            $this->projects = $this->projects->where('client_id', $client_id);
        }
        if ($query) {
            $this->projects = $this->projects->where('project_name', 'like', '%' . $query . '%');
        }

        if ($status_name) {
            $this->projects = $this->projects->where('project_status', 'like', '%' . $status_name . '%');
        }

        $this->projects = $this->projects->get();
    }

    public function deleteProject($ids)
    {
        TbMProject::whereKey($ids)->delete();
        $this->cekProject = [];
    }
}
