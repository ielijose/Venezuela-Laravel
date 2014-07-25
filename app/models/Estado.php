<?php

class Estado extends Eloquent {

    protected $table = 'estados';
	public $timestamps = false;

    public function municipios()
    {
        return $this->hasMany('Municipio','estado_id');
    } 

}