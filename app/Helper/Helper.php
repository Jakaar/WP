<?php
namespace App\Helper;

use Illuminate\Support\Facades\Session;
class Helper
{
    public function __construct()
    {

    }
    public function translateText($word)
    {
        $this->locale = Session::get('locale');

        if(!$word)
            return $word;

        $word = is_string($word) ? json_decode($word, true) : $word;
//        dd($word);
        return $word[$this->locale] ?? null;
    }
    public function link_gen($link)
    {
        return uniqid('link_'.$link.'_'.uniqid('rand_'));
    }
    public function link_dec($link)
    {
        $temp = explode('_', $link);
//        dd($temp);
//        $decoded_link = [];
        return $temp[1];
    }

}
