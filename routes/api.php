<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TestController;

Route :: get('/test',  [TestController :: class, 'testIndex']);

