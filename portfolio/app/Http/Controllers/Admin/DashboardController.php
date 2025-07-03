<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        // dd( Auth::user());

        // restituisce l user id
        $user = Auth::user();
        return $user->id;

        // return "sono nella index dell'amministrazione";

    }

    public function profile() {
        return "pagina profilo backoffice";
    }
}
