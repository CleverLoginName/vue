<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomField;

class CustomFieldType extends Model
{
    public function customFields()
    {
    	return $this->hasMany(CustomField::class);
    }
}
