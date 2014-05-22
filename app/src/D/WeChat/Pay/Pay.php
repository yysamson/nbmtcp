<?php
/**
 * User: dongww
 * Date: 14-5-16
 * Time: 上午10:33
 */

namespace D\WeChat\Pay;

use Httpful\Request;
use Symfony\Component\HttpFoundation\Request as Req;

class Pay
{
    const WECHAT_PAY_TOKEN_URL           = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';
    const WECHAT_PAY_DELIVER_NOTIFY__URL = 'https://api.weixin.qq.com/pay/delivernotify?access_token=%s';

    protected $appId;
    protected $appSecret;
    protected $token;
    protected $appKey;

    public function __construct($appId, $appSecret, $appKey)
    {
        $this->appId     = $appId;
        $this->appSecret = $appSecret;
        $this->appKey    = $appKey;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    public function getToken()
    {
        if ($this->token) {
            return $this->token;
        }

        $response = Request::get(
            sprintf(self::WECHAT_PAY_TOKEN_URL, $this->appId, $this->appSecret)
        )->send();

        $this->token = $response->body->access_token;

        return $this->token;
    }

    public function deliver()
    {
        $data = [
            'appid' => (string)$this->appId,
//            'openid' => (string)
        ];
    }

    /**
     * 获得支付后的反馈信息
     *
     * @param Notify $notify
     * @return array
     */
    public function getPayNotify(Notify $notify)
    {
        /*[
            'sign_type'       => $request->get('sign_type'),
            'service_version' => $request->get('service_version'),
            'input_charset'   => $request->get('input_charset'),
            'sign'            => $request->get('sign'),
            'sign_key_index'  => $request->get('sign_key_index'),
            'trade_mode'      => $request->get('trade_mode'),
            'trade_state'     => $request->get('trade_state'),
            'pay_info'        => $request->get('pay_info'),
            'partner'         => $request->get('partner'),
            'bank_type'       => $request->get('bank_type'),
            'bank_billno'     => $request->get('bank_billno'),
            'total_fee'       => $request->get('total_fee'),
            'fee_type'        => $request->get('fee_type'),
            'notify_id'       => $request->get('notify_id'),
            'transaction_id'  => $request->get('transaction_id'),
            'out_trade_no'    => $request->get('out_trade_no'),
            'attach'          => $request->get('attach'),
            'time_end'        => $request->get('time_end'),
            'transport_fee'   => $request->get('transport_fee'),
            'product_fee'     => $request->get('product_fee'),
            'discount'        => $request->get('discount'),
            'buyer_alias'     => $request->get('buyer_alias'),
        ];*/

        $xml = $notify->getRequestXml();

        $request = [
            'OpenId'       => $xml->OpenId,
            'AppId'        => $xml->AppId,
            'IsSubscribe'  => $xml->IsSubscribe,
            'TimeStamp'    => $xml->TimeStamp,
            'NonceStr'     => $xml->NonceStr,
            'AppSignature' => $xml->AppSignature,
            'SignMethod'   => $xml->SignMethod,
        ];

        return array_merge($request, $notify->getQuery());
    }
}
 