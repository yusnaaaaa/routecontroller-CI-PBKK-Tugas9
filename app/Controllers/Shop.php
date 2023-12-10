<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function shop(): string
    {
        return view('shop');
    }
}
