<div>
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <a href="{{ route('projects.create') }}">
                    <button class="btn btn-primary">New</button></a>
                <button class="btn btn-danger" wire:click="deleteProject">
                    delete
                </button>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <th> </th>
                        <th>Action</th>
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Project Start</th>
                        <th>Project End</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td><input type="checkbox" value="{{ $project->project_id }}" wire:model="cekProject">
                                </td>
                                <td><a href="{{ route('projects.edit', $project->project_id) }}">edit</a></td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->client->client_name }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $project->project_start)->format('d M Y') }}
                                </td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $project->project_end)->format('d M Y') }}
                                </td>
                                <td>{{ $project->project_status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
