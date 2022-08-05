<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Axie;

class AxieController extends Controller
{
    public function index() {
        $axies = Axie::get();

        return inertia('Axie',[
            'axies' => $axies
        ]);
    }
}