<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'project_id' => $this->project_id,
            'project_name' => $this->project_name,
            'client_id' => $this->client_id,
            'client' => $this->client->client_name,
            'project_start' => Carbon::createFromFormat('Y-m-d', $this->project_start)->format('d M Y'),
            'project_end' => Carbon::createFromFormat('Y-m-d', $this->project_end)->format('d M Y'),
            'status' => $this->project_status,
        ];
    }
}
