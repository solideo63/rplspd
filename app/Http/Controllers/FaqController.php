<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = include resource_path('data/faq.php');
        return view('faq', [
            'title' => 'FAQ',
            'faqs' => $faqs
        ]);
    }
}
