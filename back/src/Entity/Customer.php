<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Customer\Model\Customer as Base;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer extends Base
{
    /** @var CustomerGroup|null */
    protected $group;
}
