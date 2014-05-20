<?php
/**
 * User: dongww
 * Date: 14-4-21
 * Time: 下午3:46
 */

namespace Data\Base;

abstract class SimpleCategoryManager extends Manager
{
    protected $fields = [
        [
            'name'    => 'name',
            'type'    => 'string',
            'options' => [
                'unique' => true,
            ]
        ],
        [
            'name' => 'sort',
            'type' => 'integer',
        ],
    ];
}
