<?php
/**
 * User: dongww
 * Date: 14-5-12
 * Time: 上午10:47
 */

namespace Controller\Customer;

use Data\OrdersManager;
use SilexBase\Core\Controller;
use App\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Application $app)
    {
        return '<body>customer</body>';
    }

    public function myOrdersAction(Application $app)
    {
        $user = $app->user();
//        $orders = (new OrdersManager())->getLast('created', 10);
        $orders = (new OrdersManager())->findAll(' user_id = ? order by created desc limit 10 ', [$user->getId()]);

        return $app->render('customer/my_orders.twig', [
            'orders' => $orders,
        ]);
    }
}
 