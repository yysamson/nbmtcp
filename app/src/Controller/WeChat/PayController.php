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
use Httpful\Request as Req;

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
            'type'    => '支付反馈',
            'content' => \serialize($query),
            'data'    => \serialize($GLOBALS["HTTP_RAW_POST_DATA"]),
        ]);

        return 'success';
    }

    public function warningAction(Application $app, Request $request)
    {
        $query = $request->query->all();

        (new PayLogManager())->add([
            'type'    => '告警',
            'content' => \serialize($query),
            'data'    => \serialize($GLOBALS["HTTP_RAW_POST_DATA"]),
        ]);

        return 'success';
    }

    public function complaintsAction(Application $app, Request $request)
    {
        $query = $request->query->all();

        (new PayLogManager())->add([
            'type'    => '维权',
            'content' => \serialize($query),
            'data'    => \serialize($GLOBALS["HTTP_RAW_POST_DATA"]),
        ]);

        return 'success';
    }

    public function deliverAction(Application $app)
    {
        $token = $app['pay']->getToken();
        $time  = time();
        $sign  = sha1(sprintf('appid=%s&appkey=%s&deliver_msg=%s&deliver_status=%s&deliver_timestamp=%s&openid=%s&out_trade_no=%s&transid=%s',
            $app['pay']->getAppId(),
            $app['pay']->getAppKey(),
            'ok',
            '1',
            $time,
            'odEAYuD-3gV1JEXM9zO7KkyhoYds',
            '12',
            '1218952101201405163384302376'
        ));


        $data = [
            'appid'             => $app['pay']->getAppId(),
            'openid'            => 'odEAYuD-3gV1JEXM9zO7KkyhoYds',
            'transid'           => '1218952101201405163384302376',
            'out_trade_no'      => '12',
            'deliver_timestamp' => $time,
            'deliver_status'    => '1',
            'deliver_msg'       => 'ok',
            'app_signature'     => $sign,
        ];

        $url = 'https://api.weixin.qq.com/pay/delivernotify?access_token=' . $token;

        $response = Req::post($url)
            ->body(json_encode($data))
            ->send();

        return $response;
    }
}
