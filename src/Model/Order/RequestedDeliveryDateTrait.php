<?php

declare(strict_types=1);

namespace Tavy315\SyliusRequestedDeliveryDatePlugin\Model\Order;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait RequestedDeliveryDateTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\GreaterThan("now", groups={"sylius"})
     */
    protected $requestedDeliveryDate;

    public function getRequestedDeliveryDate(): ?\DateTimeInterface
    {
        return $this->requestedDeliveryDate;
    }

    public function setRequestedDeliveryDate(?\DateTimeInterface $requestedDeliveryDate): void
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
    }
}
