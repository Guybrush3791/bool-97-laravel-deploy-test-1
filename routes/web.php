<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TestController;

Route :: get('/', [TestController :: class, 'testIndex']);
Route :: get('/prova', function() { return 'Prova'; });
