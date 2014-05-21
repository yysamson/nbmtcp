<?php
/**
 * User: dongww
 * Date: 14-5-16
 * Time: 上午11:11
 */

namespace Data;

use Data\Base\Manager;

class PayLogManager extends Manager
{
    static $tableName = 'paylog';

    protected $fields = [
        [
            'name' => 'content',
            'type' => 'string'
        ],
        [
            'name' => 'type',
            'type' => 'string'
        ],
        [
            'name' => 'data',
            'type' => 'string'
        ],
        [
            'name' => 'created',
            'type' => 'datetime'
        ],
    ];
}
