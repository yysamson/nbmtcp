<?php
/**
 * User: dongww
 * Date: 14-5-8
 * Time: 上午9:42
 */

namespace Controller\Admin;

use D\Tool\Image;
use Data\GoodsCategoryManager;
use Data\GoodsImageManager;
use Data\GoodsManager;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class GoodsController extends Controller
{
    public function indexAction(Application $app, Request $request, $page)
    {
        $app->d((new GoodsCategoryManager())->getChildrenIds(17, false, true));

        return $app->render('admin/goods/index.twig', [
            'goods' => (new GoodsManager())->getPaging($page),
            'page'  => $page,
        ]);
    }

    public function showAction(Application $app, Request $request, $id)
    {
        $goods = (new GoodsManager())->get($id);

        return $app->render('admin/goods/show.twig', [
            'goods' => $goods,
            'id'    => $id,
        ]);
    }

    public function imageUploadAction(Application $app, Request $request)
    {
        if ($request->files->get('image') == null) {
            return $this->redirect($request->server->get('HTTP_REFERER'), '未选择文件！');
        }
        $file = new Image($app['root_path'] . '/web/upload/');
        $url  = $file->getUrl($file->uploadFile($request->files->get('image')));
        (new GoodsImageManager())->add([
            'path'     => $url,
            'goods_id' => $request->get('id'),
        ]);

        return $this->redirect($app->path('admin_goods_show', ['id' => $request->get('id')]));
    }

    public function imageDeleteAction(Application $app, Request $request, $id)
    {
        $image = (new GoodsImageManager())->get($id);
        (new GoodsImageManager())->delete($id, ['base_dir' => $app['web_path']]);

        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

    public function setDefaultImageAction(Application $app, Request $request, $id, $image_id)
    {
        $goods        = (new GoodsManager())->get($id);
        $image        = (new GoodsImageManager())->get($image_id);
        $goods->image = $image->path;
        \R::store($goods);

        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

    public function addAction(Application $app, Request $request)
    {
        $data = [];
        $form = require_once __DIR__ . '/Form/goods_form.php';
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            $id = (new GoodsManager())->add($data);

            return $this->redirect($app->path('admin_goods_show', ['id'=>$id]));
        }

        return $app->render('admin/goods/add.twig', [
            'form' => $form->createView()
        ]);
    }

    public function updateAction(Application $app, Request $request, $id)
    {
        $data = (new GoodsManager())->asArray($id);
//        $data['available'] = true;
//        var_dump($data);
//        exit;
        $form = require_once __DIR__ . '/Form/goods_form.php';
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            (new GoodsManager())->update($data, $id);

            return $this->redirect($app->path('admin_goods_show', ['id' => $id]));
        }

        return $app->render('admin/goods/update.twig', [
            'form' => $form->createView(),
            'id'   => $id,
        ]);
    }

    public function deleteAction(Application $app, Request $request, $id)
    {
        $gm = new GoodsManager();

        $gm->deleteAllImages($id, $app['web_path']);
        $gm->delete($id);

        return $this->redirect($app->path('admin_goods'));
    }
}
 