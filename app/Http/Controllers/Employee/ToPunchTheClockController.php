<?php

namespace App\Http\Controllers\ToPunchTheClockController;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\ToPunchTheClock;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ToPunchTheClockController extends Controller
{

    public function home(Request $request): View
    {
        if (Auth::check()) {
            $user = Auth::user();

            return view('components.employee.home-employee', [
                'nameEmployee' => $user->name
            ]);
        }
    }

    public function readCheckOn(Request $request): View
    {
        if (Auth::check()) {
            $user = Auth::user();

            return view('components.employee.check-on', [
                'checkOn' => ToPunchTheClock::latest()->first(),
            ]);
        } else {
            return abort(401);
        }
    }
}
