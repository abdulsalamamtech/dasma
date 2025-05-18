<?php 

namespace App\Enums;

Enum OrderStatusEnum : string
{

    case PENDING = 'pending';
    case CONFIRM = 'confirmed';
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case RECEIVED = 'received';
    case DELIVERED = 'delivered';

}