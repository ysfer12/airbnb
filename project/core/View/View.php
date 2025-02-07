<?php

namespace Core\View;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


class View {
    private $twig;

    public function __construct() {
        $loader = new FilesystemLoader(view_path());

        $this->twig = new Environment($loader, [
            'cache' => view_path() . '/cache', 
            'debug' => true,
        ]);
    }

    public function render($template, $data = []) {
        echo $this->twig->render($template . '.twig', $data);
    }
}
