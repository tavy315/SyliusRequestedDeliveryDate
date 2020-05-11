<?php

declare(strict_types=1);

namespace Tavy315\SyliusRequestedDeliveryDatePlugin\Model\Order;

interface RequestedDeliveryDateInterface
{
    public function getRequestedDeliveryDate(): ?\DateTimeInterface;

    public function setRequestedDeliveryDate(?\DateTimeInterface $requestedDeliveryDate): void;
}
