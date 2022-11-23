<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FeedbackController extends Controller
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return response()->view('index');
    }
}
