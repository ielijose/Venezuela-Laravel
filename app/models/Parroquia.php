<?php

class Parroquia extends Eloquent {

	protected $table = 'parroquias';
	public $timestamps = false;

	public function municipio()
    {
        return $this->belongsTo('Municipio', 'municipio_id', 'id');
    }

}