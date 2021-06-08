<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'songs';

    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    protected $fillable = ['title', 'tempo', 'body'];
}
