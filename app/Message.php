<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use SyncWithFirebase;

    protected $guarded=[];
}
