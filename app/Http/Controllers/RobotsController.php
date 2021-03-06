<?php

namespace App\Http\Controllers;

use App\Content\ContentRepository;
use Illuminate\Routing\Controller;

class RobotsController extends Controller
{
    public function index()
    {
        $contents = implode(PHP_EOL, [
            'User-agent: *',
            'Disallow: ' . (env('ALLOW_ROBOTS', true) ? '' : '/'),
        ]);

        return response($contents, 200, [
            'Content-Type' => 'text/plain',
        ]);
    }
}
