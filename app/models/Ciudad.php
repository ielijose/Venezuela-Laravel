<?php

class Ciudad extends Eloquent {

	protected $table = 'ciudades';
	public $timestamps = false;

	public function estado()
    {
        return $this->belongsTo('Estado', 'estado_id', 'id');
    }

}