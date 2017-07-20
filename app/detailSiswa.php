<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailSiswa extends Model
{
    public function setNamaAttribute($value)
    {
    	return $this->attributes['nama'] = ucfirst($value);
    }
    public function setNm_ayahAttribute($value)
    {
    	return $this->attributes['nm_ayah'] = ucfirst($value);
    }
    public function setNm_ibuAttribute($value)
    {
    	return $this->attributes['nm_ibu'] = ucfirst($value);
    }
}
