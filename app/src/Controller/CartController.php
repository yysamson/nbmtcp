<?php
/**
 * User: dongww
 * Date: 14-5-14
 * Time: 上午10:16
 */

namespace Controller;

use Data\OrdersItemManager;
use Data\OrdersManager;
use Data\UserManager;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;

class CartController extends Controller
{
    public function indexAction(Application $app)
    {
        return $app->render('cart.twig', [
            'items' => $app['cart']->getItems(),
            'cart'  => $app['cart'],
        ]);
    }

    public function addAction(Application $app, Request $request)
    {
        $gid    = $request->get('gid');
        $amount = $request->get('amount');

        /** @var \D\Component\Cart\Cart $cart */
        $cart = $app['cart'];
        $cart->add($gid, $amount);

        return $this->redirect($app->path('cart'), '添加成功');
    }

    public function updateAction(Application $app, Request $request)
    {
        $gid    = $request->get('gid');
        $amount = $request->get('amount');

        $cart = $app['cart'];
        $cart->update($gid, $amount);

        return $this->redirect($app->path('cart'), '更新成功');
    }

    public function deleteAction(Application $app, Request $request, $gid)
    {
        $cart = $app['cart'];
        $cart->delete($gid);

        return $this->redirect($app->path('cart'), '删除成功');
    }

    public function orderAction(Application $app, Request $request)
    {
        $user = $app->user();

        $cart = $app['cart'];

        $count = $cart->getCount();
        if ($count < 1) {
            return $this->redirect($app->path('home'), '购物车为空，不能下单');
        }

        $items = $app['cart']->getItems();
        $order = [];

        $firstArr         = current($items);
        $firstGoods       = $firstArr['goods'];
        $order['name']    = $firstGoods->name . '等' . $count . '件商品';
        $order['status']  = OrdersManager::STATUS_UNPAID;
        $order['price']   = $cart->getTotalPrice();
        $order['user_id'] = $user->getId();

        $om      = new OrdersManager();
        $orderId = $om->add($order);

        $oim = new OrdersItemManager();
        foreach ($items as $i) {
            $item              = [];
            $item['price']     = $i['goods']->price;
            $item['amount']    = $i['amount'];
            $item['goods_id']  = $i['goods']->id;
            $item['orders_id'] = $orderId;

            $oim->add($item);
        }

        $app['session']->set('cart', null);

        return $this->redirect($app->path('wechat_pay', ['id' => $orderId]));
    }



//    public function payAction(Application $app, Request $request, $id)
//    {
//        $order = (new OrdersManager())->get($id);
//
//        if (!$order) {
//            return $this->redirect($app->path('home'), '对不起，订单不存在！');
//        }
//        $user = $order->user;
//
//        if ($user->id != $app->user()->getId()) {
//            return $this->redirect($app->path('home'), '对不起，这不是您的订单！');
//        }
//
//        return $app->render('pay.twig', [
//            'order' => $order,
//            'user'  => $user,
//        ]);
//    }
}
 