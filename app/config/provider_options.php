<?php
use D\Component\Cart\Cart;

/***********************
 * 邮件设置选项
 **********************/
if ($config['mail']) {
    $app['swiftmailer.options'] = array(
        'host'       => 'localhost',
        'port'       => 25,
        'username'   => null,
        'password'   => null,
        'encryption' => null,
        'auth_mode'  => null,
    );
}

/***********************
 * Doctrine 设置
 **********************/
if ($config['doctrine']) {
    $app['db.options'] = array(
        'driver'   => 'pdo_sqlite',
        'path'     => $app['data_path'] . '/db/app.db',
        'dbname'   => '',
        'host'     => '',
        'user'     => '',
        'password' => '',
        'charset'  => 'utf8',
        'port'     => '',
    );
}

/***********************
 * 安全设置选项
 **********************/

$app['security.firewalls'] = array(
    'admin'     => array(
        'pattern'     => '^/admin',
        'form'        => array(
            'login_path' => '/a_login',
            'check_path' => '/admin/login_check'
        ),
        'logout'      => array(
            'logout_path' => '/admin/logout'
        ),
//        'http' => true,
        'remember_me' => array(
            'key'                => 'asergb(^$866',
            'always_remember_me' => false,
            /* Other options */
        ),
        'users'       => $app->share(function () use ($app) {
                return new D\Provider\UserProvider();
            }),
    ),
    'customer'  => array(
        'pattern'     => '(^/customer)|(^/wechat/pay)',
        'form'        => array(
            'login_path' => '/login',
            'check_path' => '/customer/login_check'
        ),
        'logout'      => array(
            'logout_path' => '/customer/logout'
        ),
//        'http' => true,
        'remember_me' => array(
            'key'                => 'asergb(^$866',
            'always_remember_me' => false,
            /* Other options */
        ),
        'users'       => $app->share(function () use ($app) {
                return new D\Provider\UserProvider();
            }),
    ),
    'unsecured' => array(
        'anonymous' => true,
        'pattern'   => '^/',
    ),
);

$app['security.role_hierarchy'] = array(
    'ROLE_ADMIN' => array('ROLE_USER', 'ROLE_ALLOWED_TO_SWITCH'),
);

$app['security.access_rules'] = array(
    array('^/customer', 'ROLE_USER'),
    array('^/wechat/pay', 'ROLE_USER'),
    array('^/admin', 'ROLE_ADMIN'),
);

//RedBean 数据库设置
\R::setup(
    'mysql:host=localhost;dbname=shop',
    'root',
    ''
);

//购物车
$app['cart'] = $app->share(function () use ($app) {
    if (!($app['session']->get('cart'))) {
        $app['session']->set('cart', new Cart());
    }

    return $app['session']->get('cart');
});

//微信支付类
$app['pay'] = $app->share(function () use ($app) {
    return new \D\WeChat\Pay\Pay(
        $app['config.main']['wechat_pay']['app_id'],
        $app['config.main']['wechat_pay']['app_secret']
    );
});

//\R::debug( TRUE );