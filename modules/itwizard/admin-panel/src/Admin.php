<?php

namespace Adminpanel\Admin;

class Admin
{
    public static function event(string $name, float $val, ?string $dimension = null): string
    {
        return $name . ' - ' . $val;
    }
}
