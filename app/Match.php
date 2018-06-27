<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['first','second'];

public function match(){
        return $this->belongsTo(User::class);
    }

    public function proposal(){
        return $this->hasMany(Proposal::class);
    }

}
