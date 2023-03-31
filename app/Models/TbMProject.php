<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbMProject extends Model
{
    use HasFactory;
    protected $primaryKey = 'project_id';
    protected $fillable = [
        'project_id',
        'project_name',
        'client_id',
        'project_start',
        'project_end',
        'project_status',
    ];

    public function client()
    {
        return $this->belongsTo(TbMClient::class, 'client_id', 'client_id');
    }
}
