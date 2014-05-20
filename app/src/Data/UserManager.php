<?php
/**
 * User: dongww
 * Date: 14-4-23
 * Time: 上午9:08
 */

namespace Data;

use Data\Base\Manager;

class UserManager extends Manager
{
    static $tableName = 'user';

    protected $fields = [
        [
            'name' => 'username',
            'type' => 'string'
        ],
        [
            'name' => 'name',
            'type' => 'string'
        ],
        [
            'name' => 'password',
            'type' => 'string'
        ],
        [
            'name' => 'roles',
            'type' => 'string'
        ],
        [
            'name' => 'tel',
            'type' => 'string'
        ],
        [
            'name' => 'email',
            'type' => 'string'
        ],
        [
            'name' => 'address',
            'type' => 'string'
        ],
    ];
}
