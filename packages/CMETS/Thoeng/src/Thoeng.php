<?php

namespace CMETS\Thoeng;

use App\Setting;

class Thoeng
{
    public function setting($key)
    {
        $setting = Setting::where('key', $key)->first();

        return $setting->value;
    }
}