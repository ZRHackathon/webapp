<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $table = "vergunning";

    public $primaryKey = "vergunning_id";
    public $timestamps = false;
}
