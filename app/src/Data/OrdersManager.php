<?php
/**
 * User: dongww
 * Date: 14-5-14
 * Time: 上午8:59
 */

namespace Data;

use Data\Base\Manager;

class OrdersManager extends Manager
{
    const STATUS_UNPAID           = '未支付';
    const STATUS_PAID             = '已支付';
    const STATUS_HAS_BEEN_SENT    = '已寄出';
    const STATUS_COMPLETED        = '已完成';
    const STATUS_APPLY_FOR_RETURN = '申请退货中';
    const STATUS_HAS_RETURNED     = '已退货';
    const STATUS_OBSOLETE         = '已作废';

    static $tableName = 'orders';

    protected $fields = [
        [
            'name' => 'name',
            'type' => 'string'
        ],
        [
            'name' => 'created',
            'type' => 'datetime'
        ],
        [
            'name' => 'status',
            'type' => 'string'
        ],
        [
            'name' => 'price',
            'type' => 'float'
        ],
        [//微信订单编号
            'name' => 'wechatpayid',
            'type' => 'string'
        ],
    ];

    protected $many2one = [
        'user',
    ];

    /**
     * 获得所有订单状态的列表
     *
     * @return array
     */
    public function getStatusMap()
    {
        $className = get_class($this);
        $constArr  = (new \ReflectionClass ($className))->getConstants();

        $map = [];
        foreach ($constArr as $k => $v) {
            if (strstr($k, 'STATUS_')) {
                $map[$k] = $v;
            }
        }

        return $map;
    }

    /**
     * 获得某个订单的所有子项
     *
     * @param $orderId
     * @return mixed
     */
    public function getItems($orderId)
    {
        $order = $this->get($orderId);
        return $order->ownOrdersItem;
    }
}
