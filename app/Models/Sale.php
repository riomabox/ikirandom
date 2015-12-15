<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "sales";
    
    #protected function getRelationshipFromMethod($method)
    #{
    #    $models = parent::getRelationshipFromMethod($method);

    #    !is_null($models) ?: $models = $this->$method()->newQuery()->getModel();

    #    return $this->relations[$method] = $models;
    #}
    
    protected $fillable = ['user_id','partner_id'];
    
    #public function resep(){
    #    return $this->belongsToMany('App\Models\Resep', 'bahan_resep', 'resep_id', 'bahan_id');
    #}
}