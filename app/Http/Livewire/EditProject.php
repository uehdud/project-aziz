<?php

namespace App\Http\Livewire;

use App\Models\TbMClient;
use App\Models\TbMProject;
use App\Models\TbMStatus;
use Livewire\Component;

class EditProject extends Component
{
    public $projects;
    public $project_name;
    public $client_id;
    public $project_start;
    public $project_end;
    public $project_status;
    public $clients;
    public $status;


    public function mount($id)
    {
        $this->status = TbMStatus::all();
        $this->clients = TbMClient::all();
        $this->projects = TbMProject::where('project_id', $id)->first();

        $this->project_name = $this->projects->project_name;
        $this->project_start = $this->projects->project_start;
        $this->client_id = $this->projects->client_id;
        $this->project_status = $this->projects->project_status;
        $this->project_end = $this->projects->project_end;
    }

    public function updateProject()
    {
        try {
            $this->projects->project_name =  $this->project_name;
            $this->projects->project_start = $this->project_start;
            $this->projects->client_id = $this->client_id;
            $this->projects->project_status = $this->project_status;
            $this->projects->project_end = $this->project_end;
            $this->projects->save();
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function render()
    {
        return view('livewire.edit-project');
    }
}
