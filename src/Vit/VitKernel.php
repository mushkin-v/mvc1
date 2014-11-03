<?php

namespace Vit;

class VitKernel extends Kernel
{
    public function getRoutes()
    {
        return array(
            ['GET', '/', 'Vit\Controller\IndexController:indexAction'],
            ['GET', '/Show', 'Vit\Controller\ShowController:showAction'],
        );
    }

    public function getTemplateHandler()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../app/views');
        $twig = new \Twig_Environment($loader);

        return $twig;
    }
}
