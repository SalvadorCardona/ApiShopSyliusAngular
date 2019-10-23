<?php

namespace App\Controller\User;

use JMS\Serializer\Tests\Serializer\SerializableClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customer;
use Sylius\Bundle\ResourceBundle\Controller\ResourceController;

class CustomerController extends AbstractController
{
    public function addAction(Request $request)
    {
        $author = $this->get('serializer')->deserialize($request->getContent(), Customer::class, 'json');

        return new Response();
    }
}
