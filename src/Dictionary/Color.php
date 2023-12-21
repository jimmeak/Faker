<?php

namespace Jimmeak\FakerBundle\Dictionary;

class Color extends AbstractDictionary
{
    public const COLORS = [
        'Červená', 'Modrá', 'Zelená', 'Žlutá', 'Oranžová',
        'Fialová', 'Růžová', 'Hnědá', 'Šedá', 'Černá',
        'Bílá', 'Tyrkysová', 'Zlatá', 'Stříbrná', 'Neonová',
        'Azurová', 'Indigová', 'Khaki', 'Olivová', 'Purpurová',
        'Korálová', 'Bordó', 'Lavendlová', 'Meruňková', 'Mátová',
        'Námořnická', 'Okrová', 'Perníková', 'Růžové zlato', 'Smaragdová',
        'Teal', 'Tmavě modrá', 'Tmavě šedá', 'Tmavě zelená', 'Tyrkysově modrá',
        'Umbravá', 'Vínová', 'Vojenská zelená', 'Zrzavá', 'Světle modrá',
    ];

    public static function color(): string
    {
        return self::getRandomString(self::COLORS);
    }
}
