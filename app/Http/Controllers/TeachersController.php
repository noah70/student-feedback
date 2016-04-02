<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeachersController extends Controller
{
    public function showModule($secretCode)
    {
        if ($secretCode !== '1')
        {
            return 'fail';
        }
        
        return 'success';
    }
}
