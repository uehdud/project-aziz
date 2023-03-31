<div>
    <div class="card ">
        <div class="card-header">Edit Project {{ $project_name }}</div>
        <div class="card-body">
            <div class="form-group">
                <label>Project Name</label>
                <input type="text" wire:model="project_name" class="form-control" placeholder="project name">
                @error('project_name')
                    <small class="text-danger"><i>{{ $message }}</i></small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Client</label>
                <select wire:model="client_id" name="" id="" class="form-control">
                    <option value="">pilih client</option>
                    @foreach ($clients as $items)
                        <option value="{{ $items->client_id }}">{{ $items->client_name }}</option>
                    @endforeach
                </select>
                @error('client_id')
                    <small class="text-danger"><i>{{ $message }}</i></small>
                @enderror
            </div>
            <div class="form-group">
                <label>Project Start</label>
                <input wire:model="project_start" type="date" class="form-control">
                @error('project_start')
                    <small class="text-danger"><i>{{ $message }}</i></small>
                @enderror
            </div>
            <div class="form-group">
                <label>Project End</label>
                <input wire:model="project_end" type="date" class="form-control">
                @error('project_end')
                    <small class="text-danger"><i>{{ $message }}</i></small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select wire:model="project_status" name="" id="" class="form-control">
                    <option value="">pilih status</option>
                    @foreach ($status as $item)
                        <option value="{{ $item->status_name }}">{{ $item->status_name }}</option>
                    @endforeach
                </select>
                @error('client_id')
                    <small class="text-danger"><i>{{ $message }}</i></small>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" wire:click="updateProject">Simpan</button>
        </div>
    </div>
</div>
