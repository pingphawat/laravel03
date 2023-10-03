<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LineController extends Controller
{
    public function webhook(Request $request)
    {
        return response()->json(['message' => 'message send successfully'], 200);
    }
}
