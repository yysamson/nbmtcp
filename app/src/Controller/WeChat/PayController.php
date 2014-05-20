<?php
/**
 * User: dongww
 * Date: 14-5-16
 * Time: 上午9:57
 */

namespace Controller\WeChat;

use Data\OrdersManager;
use Data\PayLogManager;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;

class PayController extends Controller
{
    public function payAction(Application $app, Request $request)
    {
        $id    = $request->get('id');
        $order = (new OrdersManager())->get($id);
        if (!$order) {
            return $this->redirect($app->path('home'), '对不起，订单不存在！');
        }

        $user = $order->user;

        if ($user->id != $app->user()->getId()) {
            return $this->redirect($app->path('home'), '对不起，这不是您的订单！');
        }

        return $app->render('cart_order_successful.twig', [
            'order' => $order,
            'user'  => $user,
            'id'    => $id,
        ]);
    }

    public function getTokenAction(Application $app)
    {
//        $arr = [
//            'a' => (string)1,
//            'b' => 'xx'
//        ];
//
//        echo json_encode($arr);

        $token = $app['pay']->getToken();

        return $token;
    }

    public function payReturnAction(Application $app, Request $request)
    {
        $query = $request->query->all();

        (new PayLogManager())->add([
            'content' => \serialize($query),
            'data'    => \serialize($GLOBALS["HTTP_RAW_POST_DATA"]),
        ]);

        return 'success';
    }
}
