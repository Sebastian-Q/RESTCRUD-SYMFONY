<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentsController extends AbstractController
{
    public function getPayments(){
        $pay = $this->getDoctrine()->getManager();
        $query = $pay->createQuery('SELECT IDENTITY(p.customernumber) customernumber, p.checknumber , p.paymentdate, 
        p.amount FROM App:Payments p ORDER BY p.customernumber ASC');
        $listPayments = $query->getResult();
        return $this->render("user/payments.html.twig",[
            'lista'=>$listPayments
        ]);
    }
}
