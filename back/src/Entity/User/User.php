<?php

namespace App\Entity\User;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\User\Model\User as BaseUser;
use Sylius\Component\User\Model\UserOAuthInterface;

/**
 * @ApiResource()
 * @ORM\Entity
 * @ORM\Table(name="sylius_shop_user")
 */
class User extends BaseUser
{

}