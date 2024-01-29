<?php

namespace Kmscse\Inspire\Controllers;

use Kmscse\Inspire\Inspire;

class InspirationController {
    public function index() {
        $inspire = new Inspire();
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
    }
}

?>