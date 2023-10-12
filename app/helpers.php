<?php

use App\Models\project;
use App\Models\section;
use App\Models\setting;

function get_setting_value($key)
{
    $data = setting::where('key',$key)->first();
    if(isset($data->value)) {
        return $data->value;
    } else {
        return 'key is empty';
    }
}

function get_section_data($key)
{
    $data = section::where('post_as',$key)->first();
    if(isset($data->value)) {
        return $data->value;
    }
}
function get_project()
{
   $data = project::all();
   return $data;
    
}