<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product extends BaseProduct
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
