<?php

namespace Kmscse\Inspire;
use Illuminate\Support\Facades\Http;

class Inspire{
    public function justDoit() {
        $response = Http::get('https://zenquotes.io/api/random');
        return $response;
    }
}


?>