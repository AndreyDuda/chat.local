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

    public function chartData()
    {
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label'           => 'Продажи',
                'backgroundColor' => '#F26202',
                'data'            => [15000, 5000, 10000, 300000],
            ])
        ];
    }

}
