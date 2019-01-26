<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class StartController
 * @package App\Http\Controllers
 */
class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            [
                'title' => 'Duda-Develop',
                'url'   => 'chat.loc'
            ],
            [
                'title' => 'YouTube',
                'url'   => 'youtube.com'
            ]
        ];

        return view('start/start', [
            'url_data' => $url_data
        ]);
    }

    public function getJson()
    {
        return [
            [
                'title' => 'Duda-Develop',
                'url'   => 'chat.loc'
            ],
            [
                'title' => 'YouTube',
                'url'   => 'youtube.com'
            ]
        ];
    }

}
