<?php
/**
 * User: dongww
 * Date: 14-4-23
 * Time: 上午9:04
 */

namespace Data;

use Data\Base\Manager;

class NewsManager extends Manager
{
    static $tableName = 'news';

    protected $fields = [
        [
            'name' => 'title',
            'type' => 'string'
        ],
        [
            'name' => 'image',
            'type' => 'string'
        ],
        [
            'name' => 'content',
            'type' => 'text'
        ],
        [
            'name' => 'created',
            'type' => 'datetime'
        ],
    ];
    protected $many2one = [
        'newsCategory',
    ];
}
 