<?php

declare(strict_types=1);

namespace App\Entity\User;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ShopUser as BaseShopUser;

/**
 * @ApiResource()
 * @ORM\Entity
 * @ORM\Table(name="sylius_shop_user")
 */
class ShopUser extends BaseShopUser
{
}
