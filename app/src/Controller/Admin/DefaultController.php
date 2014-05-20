<?php
/**
 * User: dongww
 * Date: 14-3-20
 * Time: 上午10:11
 */

namespace Controller\Admin;

use D\Tool\Image;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Application $app)
    {
        return $app->render('Admin/index.twig');
    }

    public function loginAction(Application $app, Request $request)
    {
        return $app->render('admin/login.twig', array(
            'error'         => $app['translator']->trans($app['security.last_error']($request)),
            'last_username' => $app['session']->get('_security.last_username'),
        ));
    }

    public function ckUploadAction(Application $app, Request $request)
    {
        $file    = new Image($app['root_path'] . '/web/upload/');
        $url     = $file->getUrl($file->uploadFile($request->files->get('upload')));
        $funcNum = $_GET['CKEditorFuncNum'];

        return "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '');</script>";
    }
}
