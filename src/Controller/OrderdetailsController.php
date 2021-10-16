<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderdetailsController extends AbstractController
{
    public function getOrderdetails(){
        $ordde = $this->getDoctrine()->getManager();
        $query = $ordde->createQuery('SELECT o.orderNumber, o.productCode, o.quantityOrdered
        o.priceEach, o.orderLineNumber FROM App:Orderdetails o ORDER BY o.orderNumber ASC');
        $listOrderdetails = $query->getResult();
        return $this->render("user/orderdetails.html.twig",[
            'lista'=>$listOrderdetails
        ]);
    }
}
