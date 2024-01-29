<?php

use Illuminate\Support\Facades\Route;
use Kmscse\Inspire\Controllers\InspirationController;

Route::get('inspire', [InspirationController::class, 'index']);


?>