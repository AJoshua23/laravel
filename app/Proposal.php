<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = ['team_one','team_two'];

    public function match(){
        return $this->belongsTo(Match::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
