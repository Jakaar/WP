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
        return $word[$this->locale] ?? null;
    }

}
