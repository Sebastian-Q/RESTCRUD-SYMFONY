<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    public function getOrders(){
        $or = $this->getDoctrine()->getManager();
        $query = $or->createQuery('SELECT o.ordernumber, o.orderdate , o.requireddate, o.shippeddate, o.status,
        o.comments, IDENTITY(o.customernumber) customernumber FROM App:Orders o ORDER BY o.orderdate ASC');
        $listOrders = $query->getResult();
        return $this->render("user/orders.html.twig",[
            'lista'=>$listOrders
        ]);
    }
}
