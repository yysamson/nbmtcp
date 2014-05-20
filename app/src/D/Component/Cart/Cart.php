<?php
/**
 * User: dongww
 * Date: 14-5-9
 * Time: 下午2:13
 */

namespace D\Component\Cart;

use Data\GoodsManager;

class Cart
{
    /**
     * 购物车数据
     *
     * ~~~
     * $data => [
     *      [ $id => [
     *          'amount' => $amount,
     *      ]],
     * ];
     * ~~~
     *
     * @var array
     */
    protected $data = [];

    protected $gm;

    public function getItems()
    {
        $return = [];
        foreach ($this->data as $k => $v) {
            $goods    = $this->getGoods($k);
            $return[] = [
                'goods' => $goods,
                'amount' => $v['amount'],
            ];
        }

        return $return;
    }

    /**
     * 添加到购物车，
     * 若该商品已经存在，则数量相加
     *
     * @param int $goodsId
     * @param int $amount
     * @throws \Exception
     */
    public function add($goodsId, $amount = 1)
    {
        $goodsId = (int)$goodsId;
        if ($goodsId < 1) {
            throw new \Exception('商品ID无效');
        }

        $amount = (int)$amount;

        if ($this->data[$goodsId]) {
            $this->data[$goodsId]['amount'] += $amount;

            return;
        }

        $this->update($goodsId, $amount);
    }

    /**
     * 更改购物车商品
     *
     * @param int $goodsId
     * @param int $amount
     * @throws \Exception
     */
    public function update($goodsId, $amount)
    {
        $goodsId = (int)$goodsId;
        if ($goodsId < 1) {
            throw new \Exception('商品ID无效');
        }

        $this->data[(int)$goodsId] = [
            'amount' => (int)$amount,
        ];
    }

    /**
     * 删除一项
     *
     * @param int $goodsId
     */
    public function delete($goodsId)
    {
        unset($this->data[(int)$goodsId]);
    }

    /**
     * 获得总价
     *
     * @return int
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->data as $id => $data) {
            $totalPrice += $this->getItemPrice($id);
        }

        return $totalPrice;
    }

    public function getItemPrice($goodsId)
    {
        $goodsId = (int)$goodsId;
        if (!$this->data[$goodsId]) {
            return 0;
        }

        $g = $this->getGoods($goodsId);
        if (!$g) {
            return 0;
        }

        return $g->price * $this->data[$goodsId]['amount'];
    }

    /**
     * 获取购物车中所有商品的总数。
     * 如果某件商品数量为 2，则累加 2。
     */
    public function getCount()
    {
        $count = 0;
        foreach ($this->data as $d) {
            $count += $d['amount'];
        }

        return $count;
    }

    public function getGoods($goodsId)
    {
        if (!$this->gm) {
            $this->gm = new GoodsManager();
        }

        return $this->gm->get($goodsId);
    }
}
 