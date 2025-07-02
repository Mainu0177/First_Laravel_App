<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index(){

        $featureWorks = [
            [
                'image' => asset ('assets/images/project1.jpg'),
                'title' => 'E-commerce Website',
                'short_description' => 'A fully responsive online store with payment integration.',
            ],
            [
                'image' => asset ('assets/images/project2.jpg'),
                'title' => 'Mobile App Design',
                'short_description' => 'UI/UX design for a fitness tracking application.',
            ],
            [
                'image' => asset ('assets/images/project3.jpg'),
                'title' => 'Corporate Website',
                'short_description' => 'A modern website for a financial services company.',
            ],
        ];

        return view('home', compact('featureWorks'));
    }
}
