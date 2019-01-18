<?php

namespace Omega\Renderers;

use Omega\Core\RendererInterface;

class Twig implements RendererInterface
{
    const EXT = '.html.twig';

    /**
     * @var \Twig_Environment
     */
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param $id
     * @param array $params
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function render($id, array $params): string
    {
        return $this->twig->render($id . self::EXT, $params);
    }
}
