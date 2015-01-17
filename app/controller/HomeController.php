<?php

namespace App\Controller;

use Sifoni\Controller\Base;

class HomeController extends Base {
    public function indexAction() {
        $data['name'] = 'sifoni';
        return $this->render('home.html.twig', $data);
    }

    public function helloAction($name) {
        $data['name'] = $name;
        return $this->render('home.html.twig', $data);
    }
}
