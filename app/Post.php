<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Post extends Model
{

    protected $guarded=[];
    //protected $fillable = ['item_id','item_name','price','caption','imagte'];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
