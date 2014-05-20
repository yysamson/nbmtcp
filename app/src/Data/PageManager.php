<?php
/**
 * User: dongww
 * Date: 14-4-28
 * Time: 上午9:07
 */

namespace Data;

use Data\Base\Manager;

class PageManager extends Manager
{
    static $tableName = 'page';

    protected $fields = [
        [
            'name' => 'title',
            'type' => 'string'
        ],
        [
            'name' => 'description',
            'type' => 'text'
        ],
        [
            'name' => 'content',
            'type' => 'text'
        ],
    ];
}
