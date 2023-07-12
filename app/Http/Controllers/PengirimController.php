<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengirim;

class PengirimController extends Controller
{
    public function index(){
        $data = User::where('role', 'pengirim')->get();
        return response()->json($data, 200);
    }
}
