<?php

namespace Jimmeak\FakerBundle\Enum;

enum Sex: string
{
    case MALE = 'Muž';
    case FEMALE = 'Žena';
    case INTERSEX = 'Intersex';
}
