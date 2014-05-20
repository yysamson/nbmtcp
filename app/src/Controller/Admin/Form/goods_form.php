<?php
/**
 * User: dongww
 * Date: 14-5-8
 * Time: 上午10:05
 */
use Form\Type\HtmlType;
use Symfony\Component\Validator\Constraints as Assert;

return $app->form($data)
    ->add('name', 'text', [
        'constraints' => [
            new Assert\NotBlank(),
            new Assert\Length(['min' => 2])],
        'label'       => '商品名称'
    ])
    ->add('price', 'number', [
        'constraints' => [
            new Assert\NotBlank()
        ],
        'label'       => '商品价格'
    ])
    ->add('description', 'textarea', [
        'constraints' => [
            new Assert\NotBlank(),
            new Assert\Length(['max' => 200])
        ],
        'label'       => '简要描述'
    ])
    ->add('introduction', new HtmlType(), [
        'constraints' => [
            new Assert\NotBlank(),
            new Assert\Length(['min' => 20])
        ],
        'label'       => '商品介绍'
    ])
    ->add('specification', new HtmlType(), [
        'constraints' => [
            new Assert\NotBlank(),
            new Assert\Length(['min' => 20])
        ],
        'label'       => '商品规格'
    ])
    ->add('available', 'checkbox', [
        'label'    => '是否上架',
        'required' => false,
    ])
    ->add('goodscategory_id', 'choice', [
        'choices'  => (new \Data\GoodsCategoryManager())->getCateMap('--'),
        'label'    => '商品分类',
        'required' => true,
    ])
    ->getForm();