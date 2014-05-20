<?php
/**
 * User: dongww
 * Date: 14-5-14
 * Time: 上午9:19
 */

namespace Data;

use Data\Base\Manager;

class OrdersItemManager extends Manager
{
    static $tableName = 'ordersitem';

    protected $fields = [
        [
            'name' => 'price',
            'type' => 'float'
        ],
        [
            'name' => 'amount',
            'type' => 'integer'
        ],
    ];

    protected $many2one = [
        'goods',
        'orders'
    ];
}
 