<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sophie() {
        $resultat = User::inRandomOrder()->limit(5)->get();

        return response()->json(['results' => $resultat], 200);
    }
}
