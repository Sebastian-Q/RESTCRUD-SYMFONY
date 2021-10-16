<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
    
    public function getOffices(){
        $of = $this->getDoctrine()->getManager();
        $query = $of->createQuery('SELECT o.officecode, o.city , o.phone, o.addressline1, o.addressline2, o.state,
        o.country, o.postalcode , o.territory FROM App:Offices o ORDER BY o.city ASC');
        $listOffices = $query->getResult();
        return $this->render("user/offices.html.twig",[
            'lista'=>$listOffices
        ]);
    }
}
