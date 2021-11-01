<?php

$settings = \DB::table('wpanel_settings')->get();
    $data = array();
    foreach($settings as $setting){
        $data[$setting->key] = $setting->value;
    }
return $data;
