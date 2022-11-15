<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTicket extends Model
{
    use HasFactory;

    protected $table = 'project_tickets';

    protected $primaryKey = 'id';

    protected $fillable = ['project_id', 'user_id', 'amount', 'status'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}