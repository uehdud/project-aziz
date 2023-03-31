<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\TbMProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $clients_id;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = ProjectResource::collection(TbMProject::with('client')->get());
        return $projects;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $projects = TbMProject::create(
            [
                'project_id' => $request->project_id,
                'project_name' =>  $request->project_name,
                'client_id' => $request->client_id,
                'project_start' =>  $request->project_start,
                'project_end' =>  $request->project_end,
                'project_status' =>  $request->project_status
            ]
        );

        return response()->json([
            'status' => 'success input data',
            'data' => $projects
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // $projects = TbMProject::with('client')->where('project_id', $id)->first();
        // return response()->json([
        //     'projects' => $projects
        // ]);

        $projects = ProjectResource::collection(TbMProject::where('client_id', $id)->with('client')->get());
        return $projects;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TbMProject $projects)
    {
        $projects->project_id = $request->project_id;
        $projects->project_name =  $request->project_name;
        $projects->client_id = $request->client_id;
        $projects->project_start =  $request->project_start;
        $projects->project_end =  $request->project_end;
        $projects->project_status =  $request->project_status;
        $projects->save();
        return response()->json([
            'status' => 'success update data',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TbMProject $projects)
    {
        $projects->delete();
        return response()->json([
            'status' => 'success delete data'
        ]);
    }
}
