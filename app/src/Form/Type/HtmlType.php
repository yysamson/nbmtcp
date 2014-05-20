<?php
/**
 * User: dongww
 * Date: 14-2-28
 * Time: 下午1:26
 */

namespace Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class HtmlType extends TextareaType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'html';
    }
}
