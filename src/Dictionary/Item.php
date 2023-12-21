<?php

namespace Jimmeak\FakerBundle\Dictionary;

class Item extends AbstractDictionary
{
    public const PHONES = [
        'Galaxy S21',      'iPhone 13',      'Pixel 5',      'OnePlus 9',           'Xiaomi Mi 11',
        'Nokia 8.3',       'Sony Xperia 5',  'Oppo Find X3', 'Huawei P40',          'Motorola Edge',
        'LG Wing',         'Asus Zenfone 8', 'Realme GT',    'Vivo X60',            'HTC U12+',
        'Blackberry Key2', 'Razer Phone 2',  'Fairphone 4',  'Lenovo Legion Phone', 'Microsoft Surface Duo',
    ];

    public const DAILY_ITEMS = [
        'Hrnek',   'Pero',  'Notebook', 'Klíče',   'Nůž',  'Brýle', 'Hodinky', 'Kniha',      'Batoh',      'Peněženka',
        'Deštník', 'Lampa', 'Zrcadlo',  'Polštář', 'Stůl', 'Židle', 'Hodiny',  'Fotoaparát', 'Kalkulačka', 'Termoska',
    ];

    public static function item(): string
    {
        return self::getRandomString(self::DAILY_ITEMS);
    }

    public static function phone(): string
    {
        return self::getRandomString(self::PHONES);
    }
}
