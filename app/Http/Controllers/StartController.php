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
                'backgroundColor' => ['#F26202', '#D01919', '#EAAE00', '#B5cc18'],
                'data'            => [15000, 5000, 10000, 30000],
            ])
        ];
    }

    public function chartRandom()
    {
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array(
                [
                    'label'           => 'Золото',
                    'backgroundColor' => ['#16AB39'],
                    'data'            => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)],
                ],
                [
                    'label'           => 'Серебро',
                    'backgroundColor' => ['#B5CC18'],
                    'data'            => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)],
                ]
            )
        ];
    }

}
