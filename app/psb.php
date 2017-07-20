<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class psb extends Model
{
    public function setNamaAttribute($value)
    {
    	return $this->attributes['nama'] = ucfirst($value);
    }
    public function setAlamatAttribute($value)
    {
    	return $this->attributes['alamat'] = ucfirst($value);
    }
}
