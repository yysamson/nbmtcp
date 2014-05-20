<?php
/**
 * User: dongww
 * Date: 14-1-28
 * Time: 下午3:32
 */

namespace Controller;

use Data\GoodsCategoryManager;
use Data\GoodsManager;
use Data\UserManager;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class DefaultController extends Controller
{
    public function indexAction(Application $app)
    {
        $goods = (new GoodsManager())->findAll(' available = 1 order by created desc limit 10 ');

//$app->d($goods);
        return $app->render('index.twig', [
            'goods' => $goods,
        ]);
    }

    public function productsAction(Application $app, $cate)
    {
        $cateName = (new GoodsCategoryManager())->get($cate)->title;

        return $app->render('products.twig', [
            'cate'      => $cate,
            'cate_name' => $cateName,
        ]);
    }

    public function listBlockAction(Application $app, $cate, $page = 1)
    {
        $goods = (new GoodsManager())->getPaging($page, 10, ' available = 1 and goodscategory_id = ? order by created desc ', [$cate]);

        return $app->render('block/list.twig', [
            'goods' => $goods,
            'cate'  => $cate,
            'page'  => $page,
        ]);
    }

    public function goodsAction(Application $app, $id)
    {
        $goods  = (new GoodsManager())->get($id);
        $images = $goods->ownGoodsimage;
        $app->d($goods);
        $app->d($images);

        return $app->render('goods.twig', [
            'goods'  => $goods,
            'images' => $images,
        ]);
    }

    public function goodsIntroductionAction(Application $app, $id)
    {
        $goods  = (new GoodsManager())->get($id);
        return $app->render('goods_introduction.twig', [
            'goods'  => $goods,
        ]);
    }

    public function loginAction(Application $app, Request $request)
    {
        return $app->render('login.twig', array(
            'error'         => $app['translator']->trans($app['security.last_error']($request)),
            'last_username' => $app['session']->get('_security.last_username'),
        ));
    }

    public function registerAction(Application $app, Request $request)
    {
        $data   = [];
        $errors = [];
        if ($request->get('username')) {
            $encoder          = new MessageDigestPasswordEncoder();
            $data['username'] = trim($request->get('username'));
            $data['password'] = $encoder->encodePassword($request->get('password'), '');
            $data['name']     = trim($request->get('name'));
            $data['tel']      = trim($request->get('tel'));
            $data['email']    = trim($request->get('email'));
            $data['address']  = trim($request->get('address'));
            $data['roles']    = 'ROLE_USER';

            $app->d($data);

            $um = new UserManager();

            $exist = $um->count(' username = ? ', [trim($request->get('username'))]);

            if ($exist) {
                return $app->render('register.twig', [
                    'errors' => [
                        '该用户名已被使用，请更换一个。',
                    ],
                    'data'   => $data,
                ]);
            }

            $id = (new UserManager())->add($data);

            if ($id) {
                return $this->redirect($app->path('login'), '注册成功！');
            } else {
                $errors[] = '注册失败';
            }
        }

        return $app->render('register.twig', [
            'errors' => $errors,
        ]);
    }
}