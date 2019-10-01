<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\User\Model\User as BaseUser;

/**
 * @ApiResource()
 * @ORM\Entity
 * @ORM\Table(name="sylius_shop_user")
 */
class User extends BaseUser
{

}