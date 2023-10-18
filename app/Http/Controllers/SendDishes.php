<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SendDishes extends Controller
{
    public function send(Request $request)
    {
        $dishes = Dishes::find(1);
        return $dishes->load('ProductsInventory');
    }

    public function test(Request $request): View
    {
        return view('layouts.admin');
    }
}
