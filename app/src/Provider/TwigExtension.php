<?php
/**
 * User: dongww
 * Date: 14-4-4
 * Time: 下午1:22
 */

namespace Provider;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class TwigExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'p' => new \Twig_SimpleFunction('p', array($this, 'getParent')),
            'o' => new \Twig_SimpleFunction('o', array($this, 'getOwn')),
        );
    }

    public function getParent($content, $parentName)
    {
        return $content->$parentName;
    }

    public function getOwn($content, $parentName)
    {
        $own = 'own' . ucfirst($parentName);

        return $content->$own;
    }

    public function getName()
    {
        return 'ext';
    }
}
