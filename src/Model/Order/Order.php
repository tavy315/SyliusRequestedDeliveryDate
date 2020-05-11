<?php

declare(strict_types=1);

namespace Tavy315\SyliusRequestedDeliveryDatePlugin\Model\Order;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Order as BaseOrder;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_order")
 */
class Order extends BaseOrder implements RequestedDeliveryDateInterface
{
    use RequestedDeliveryDateTrait;
}
