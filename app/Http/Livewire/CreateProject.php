<?php

namespace App\Http\Livewire;

use App\Models\TbMClient;
use App\Models\TbMProject;
use Livewire\Component;

class CreateProject extends Component
{
    public $project_name;
    public $client_id;
    public $project_start;
    public $project_end;
    public $project_status = "DOING";
    public $clients;
    public $status;

    protected $rules = [
        'project_name' => 'required',
        'project_start' => 'required',
        'project_end' => 'required',
        'client_id' => 'required',
    ];

    public function mount()
    {
        $this->clients = TbMClient::all();
    }

    public function createProject()
    {
        try {
            $validateData = $this->validate();

            $project = [
                'project_name' => $this->project_name,
                'client_id' => $this->client_id,
                'project_start' => $this->project_start,
                'project_end' => $this->project_end,
                'project_status' => $this->project_status,
            ];

            TbMProject::create($project);

            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
