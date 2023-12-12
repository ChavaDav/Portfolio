<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('templates/doctype').view('content/Austria').view('templates/carouselButtons').view('templates/footer');
    }
    public function pagina2() :string
    {
        return view('templates/doctype').view('content/Espana').view('templates/carouselButtons').view('templates/footer');
    }

    public function pagina3() :string
    {
        return view('templates/doctype').view('content/Alemania').view('templates/carouselButtons').view('templates/footer');
    }
}
