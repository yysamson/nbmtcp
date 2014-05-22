<?php
/**
 * User: dongww
 * Date: 14-5-16
 * Time: 上午9:57
 */

namespace Controller\WeChat;

use D\WeChat\Pay\Notify;
use D\WeChat\Pay\Pay;
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

        return $app->render(
            'cart_order_successful.twig', [
                'order' => $order,
                'user'  => $user,
                'id'    => $id,
            ]
        );
    }

    public function payNotifyAction(Application $app, Request $request)
    {
        //todo 安全性 检验来源数据

        $notify = Notify::createFromRequest($request);
//        print_r($notify);exit;
        $data = $app['pay']->getPayNotify($notify);
//print_r($data);exit;
        (new PayLogManager())->add([
                'type'    => '支付反馈',
                'content' => \serialize($data),
                'data'    => $request->query->all(),
            ]
        );

        //todo 记录用户openid
        //todo 订单表记录微信的订单号

        $order = (new OrdersManager())->get($data['out_trade_no']);
        if ($data['trade_state'] === '0') {
            $order->status = OrdersManager::STATUS_PAID;
        }

        $order->wechatpayid = $data['transaction_id'];

        \R::store($order);

        return 'success';
    }

    public function warningAction(Application $app, Request $request)
    {
        $query = $request->query->all();

        (new PayLogManager())->add([
                'type'    => '告警',
                'content' => \serialize($query),
                'data'    => \serialize($GLOBALS["HTTP_RAW_POST_DATA"]),
            ]
        );

        return 'success';
    }

    public function complaintsAction(Application $app, Request $request)
    {
        $query = $request->query->all();

        (new PayLogManager())->add([
                'type'    => '维权',
                'content' => \serialize($query),
                'data'    => \serialize($GLOBALS["HTTP_RAW_POST_DATA"]),
            ]
        );

        return 'success';
    }

    public function deliverAction(Application $app)
    {
        $token = $app['pay']->getToken();
        $time  = time();
        $sign  = sha1(
            sprintf(
                'appid=%s&appkey=%s&deliver_msg=%s&deliver_status=%s&deliver_timestamp=%s&openid=%s&out_trade_no=%s&transid=%s',
                $app['pay']->getAppId(),
                $app['pay']->getAppKey(),
                'ok',
                '1',
                $time,
                'odEAYuD-3gV1JEXM9zO7KkyhoYds',
                '12',
                '1218952101201405163384302376'
            )
        );


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

    /**
     * 处理投诉
     *
     * @param Application $app
     * @return string
     */
    public function payfeedbackAction(Application $app)
    {
        $token = $app['pay']->getToken();

        $url = 'https://api.weixin.qq.com/payfeedback/update?access_token=%s&openid=%s&feedbackid=%s';

        $response = Req::get(
            sprintf($url, $token, 'odEAYuD-3gV1JEXM9zO7KkyhoYds', '13265423569580354213')
        )->send();

        print_r($response);

        return '';
    }
}
