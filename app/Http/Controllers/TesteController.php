<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class TesteController extends Controller
{
    public function index()
    {
        $user = User::all();

        return Inertia::render('Test', []);
    }
}
