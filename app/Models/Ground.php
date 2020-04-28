<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    protected $fillable = ['realname', 'cid', 'position', 'frequency', 'session_end', 'time_online'];
}
