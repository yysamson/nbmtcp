<?php
/**
 * User: dongww
 * Date: 14-5-6
 * Time: 下午4:41
 */

namespace Controller\Admin;

use Data\GoodsCategoryManager as GoodsCategory;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function indexAction(Application $app)
    {
        return $app->render('admin/goods/category.twig', [
            'tree' => (new GoodsCategory())->getTreeView(),
        ]);
    }

    public function addJsonAction(Application $app, Request $request)
    {
        $success       = false;
        $errorMessages = array();

        if ($request->get('title')) {
            $title      = trim($request->get('title'));
            $category   = new GoodsCategory();
            $s          = explode('_', $request->get('selected'));
            $selectedId = $s[count($s) - 1];
            switch ($request->get('position')) {
                case 'child':
                    if ($category->addChildNode($title, $selectedId)) {
                        $success = true;
                    }
                    break;
                case 'pre':
                    if ($category->addPreNode($title, $selectedId)) {
                        $success = true;
                    }
                    break;
                case 'next':
                    if ($category->addNextNode($title, $selectedId)) {
                        $success = true;
                    }
                    break;
            }
        } else {
            $errorMessages[] = '名称为空';
        }

        return $app->json(array(
            'success' => $success,
            'error'   => $errorMessages
        ));
    }

    public function moveJsonAction(Application $app, Request $request)
    {
        $success       = false;
        $errorMessages = array();

        if ($request->get('selected')) {
            $category   = new GoodsCategory();
            $s          = explode('_', $request->get('selected'));
            $selectedId = $s[count($s) - 1];
            $p          = explode('_', $request->get('parent'));
            $parentId   = $p[count($p) - 1] == '#' ? null : $p[count($p) - 1];

            if ($category->move($selectedId, $parentId, $request->get('position') + 1)) {
                $success = true;
            }
        } else {
            $errorMessages[] = '数据结构名称为空';
        }

        return $app->json(array(
            'success' => $success,
            'error'   => $errorMessages
        ));
    }

    public function renameJsonAction(Application $app, Request $request)
    {
        $success       = false;
        $errorMessages = array();

        if ($request->get('title')) {
            $title      = trim($request->get('title'));
            $category   = new GoodsCategory();
            $s          = explode('_', $request->get('selected'));
            $selectedId = $s[count($s) - 1];

            if ($category->rename($title, $selectedId)) {
                $success = true;
            }
        } else {
            $errorMessages[] = '数据结构名称为空';
        }

        return $app->json(array(
            'success' => $success,
            'error'   => $errorMessages
        ));
    }

    public function deleteJsonAction(Application $app, Request $request)
    {
        $success       = false;
        $errorMessages = array();

        if ($request->get('selected')) {
            $category   = new GoodsCategory();
            $s          = explode('_', $request->get('selected'));
            $selectedId = $s[count($s) - 1];

            if ($category->delete($selectedId)) {
                $success = true;
            }
        } else {
            $errorMessages[] = '数据结构名称为空';
        }

        return $app->json(array(
            'success' => $success,
            'error'   => $errorMessages
        ));
    }
}
 