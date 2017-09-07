<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomField;
use App\CustomFieldType;

class CustomFieldsController extends Controller
{
    public function index()
    {

        //factory(CustomField::class, 25)->create();
        factory(CustomFieldType::class)->create(['name'=>'text']);
    	$customFields = CustomField::with('customFieldType')->get();
    	return $customFields;
    }
}