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

        // dd((date("Y-m-d H:i:s")));
        return view('components.employee.check-on');
    }
}
