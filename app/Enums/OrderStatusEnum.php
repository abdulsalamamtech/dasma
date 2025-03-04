<?php 

namespace App\Enums;

Enum OrderStatusEnum : string
{

    case PENDING = 'pending';
    case CONFIRM = 'confirm';
    case PROCESSING = 'processing';
    case SHIPPED = 'shipped';
    case RECEIVED = 'received';
    case DELIVERED = 'deliverd';

}