<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{

    public function testIndex() {

        $tests = Test :: all();

        return response() -> json([
            'tests' => $tests
        ]);
    }
}
