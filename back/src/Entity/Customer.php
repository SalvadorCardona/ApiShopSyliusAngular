<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Customer\Model\Customer as Base;
use Sylius\Component\Customer\Model\CustomerGroupInterface;


/**
 * @ApiResource(itemOperations={
 *     "get",
 *     "post_publication"={
 *         "method"="POST",
 *         "path"="/books/{id}/publication",
 *         "controller"="App\Controller\User\CustomerController::addAction",
 *         "read"=false,
 *     }
 * })
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer extends Base
{
}
