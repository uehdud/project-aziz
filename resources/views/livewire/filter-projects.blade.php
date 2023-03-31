<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <td> </td>
                    <td>Project Name</td>
                    <td>Client</td>
                    <td>Status</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Filter</td>
                    <td>
                        <input wire:model="query" id="project" type="text" class="form-control">
                    </td>
                    <td>
                        <select wire:model="client_id" name="" id="client" class="form-control">
                            <option value="">All Client</option>
                            @foreach ($clients as $items)
                                <option value="{{ $items->client_id }}">{{ $items->client_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td> <select wire:model="status_name" name="" id="status" class="form-control">
                            <option value="">All Status</option>
                            @foreach ($status as $item)
                                <option value="{{ $item->status_name }}">{{ $item->status_name }}</option>
                            @endforeach
                        </select></td>
                    <td>
                        <button wire:click="searchFilter" class="btn btn-primary mx-1">search</button>
                        <button wire:click="clearFilter" class="btn btn-secondary mx-1">clear</button>
                    </td>
                </tr>
            </table>

        </div>
    </div>

</div>
