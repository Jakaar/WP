<?php


namespace App\Helper;
use Request;
use App\LogActivity as LogActivityModel;

class LogActivity
{


    public static function addToLog($subject)
    {
    	$log = [];
    	$log['subject'] = $subject;
    	$log['url'] = Request::fullUrl();
    	$log['method'] = Request::method();
    	$log['ip'] = Request::ip();
    	$log['agent'] = Request::header('sec-ch-ua-platform') . ' | '. Request::header('sec-ch-ua') . ' | '. Request::header('connection');
    	$log['user_id'] = Request::header('Authorization');
    	LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
    	return LogActivityModel::latest()->get();
    }


}