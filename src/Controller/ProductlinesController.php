<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductlinesController extends AbstractController
{
    public function getProductlines(){
        $pline = $this->getDoctrine()->getManager();
        $query = $pline->createQuery('SELECT p.productline, p.textdescription , p.htmldescription, p.image
        FROM App:ProductLines p ORDER BY p.productline ASC');
        $listProductlines = $query->getResult();
        return $this->render("user/productlines.html.twig",[
            'lista'=>$listProductlines
        ]);
    }
}
