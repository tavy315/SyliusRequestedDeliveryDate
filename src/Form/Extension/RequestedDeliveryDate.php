<?php

declare(strict_types=1);

namespace Tavy315\SyliusRequestedDeliveryDatePlugin\Form\Extension;

use Sylius\Bundle\CoreBundle\Form\Type\Checkout\CompleteType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

final class RequestedDeliveryDate extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('requestedDeliveryDate', DateType::class, [
            'attr' => [
                'max' => (new \DateTime('+1 year'))->format('Y-m-d'),
                'min' => (new \DateTime('+1 weekday'))->format('Y-m-d'),
                'pattern' => "(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)",
                'placeholder' => 'yyyy-mm-dd',
            ],
            'help' => 'tavy315_sylius_requested_delivery_date.form.requested_delivery_date_note',
            'label' => 'tavy315_sylius_requested_delivery_date.form.requested_delivery_date',
            'required' => false,
            'widget' => 'single_text',
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [CompleteType::class];
    }
}
