<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomField;
use App\CustomFieldType;

class CustomField extends Model
{
    public function customFieldType()
    {
		return $this->belongsTo(CustomFieldType::class, 'custom_field_type_id');   
    }
}
