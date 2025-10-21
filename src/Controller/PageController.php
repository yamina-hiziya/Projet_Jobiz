<?php

namespace App\Controller;

class PageController
{
    public function home(): void
    {
        $greeting = 'Hello';
        $name = 'John';

        $this->render('page/home', [
            'greeting' => $greeting,
            'name' => $name,
        ]);
    }

    public function about(): void
    {
        $this->render('page/about');
    }

    protected function render(string $path, array $params = []): void
    {
        $filePath = APP_ROOT . '/templates/' . $path . '.php';

        if (!file_exists($filePath)) {
            echo "Le fichier $filePath n'existe pas.";
        } else {
            //on va transformer chaque clé du tableau en variable
            extract($params);
            require_once $filePath;
        }
    }
}
