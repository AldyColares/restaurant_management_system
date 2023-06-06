<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class SendDishes extends Controller
{
    public function send(Request $request){
        $dishes = Dishes::find(1);
        return $dishes->load('ProductsInventory');

    }
}
