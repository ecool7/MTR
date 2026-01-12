<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = [
            [
                'title' => 'New Product Line Launch',
                'date' => '2024-01-15',
                'excerpt' => 'We are excited to announce the launch of our new line of power amplifiers with enhanced performance characteristics.',
            ],
            [
                'title' => 'Industry Conference Participation',
                'date' => '2024-01-10',
                'excerpt' => 'Microwave Technology and Research will be participating in the upcoming international microwave technology conference.',
            ],
            [
                'title' => 'Quality Certification Achieved',
                'date' => '2024-01-05',
                'excerpt' => 'Our manufacturing facility has received ISO 9001:2015 certification, reaffirming our commitment to quality.',
            ],
        ];

        return view('home', compact('news'));
    }
}



