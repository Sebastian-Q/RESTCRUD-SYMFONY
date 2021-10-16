<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    public function getCustomers(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT c.customernumber, c.customername , c.contactlastname, c.contactfirstname, c.phone,
        c.addressline1, c.addressline2, c.city, c.state, c.postalcode, c.country, IDENTITY(c.salesrepemployeenumber) salesrepemployeenumber, 
        c.creditlimit FROM App:Customers c ORDER BY c.customername ASC');
        $listCustomers = $query->getResult();
        return $this->render("user/customers.html.twig",[
            'lista'=>$listCustomers
        ]);
    }
}
