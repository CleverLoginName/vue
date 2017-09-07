<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomField;

class CustomData extends Model
{
    public function customField()
    {
    	return $this->belongsTo(CustomField::class)
    }
}
