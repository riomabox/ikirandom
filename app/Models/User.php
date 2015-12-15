<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "users";
    
    #protected function getRelationshipFromMethod($method)
    #{
    #    $models = parent::getRelationshipFromMethod($method);

    #    !is_null($models) ?: $models = $this->$method()->newQuery()->getModel();

    #    return $this->relations[$method] = $models;
    #}
    
    protected $fillable = ['nama','email','password'];
    
    #public function resep(){
    #    return $this->belongsToMany('App\Models\Resep', 'bahan_resep', 'resep_id', 'bahan_id');
    #}
}