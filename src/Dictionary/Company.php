<?php

namespace Jimmeak\FakerBundle\Dictionary;

class Company extends AbstractDictionary
{
    public const NAMES = [
        'Česká Energetika',     'Moravské Stavby',          'Pražská Voda',             'Brněnská Mlékárna',    'Ostravské Hutě',
        'Liberecké Textilky',   'Plzeňský Pivovar',         'Olomoucké Sýrárny',        'Karlovarské Lázně',    'Českobudějovický Budvar',
        'Zlínská Obuv',         'Hradecké Delikatesy',      'Pardubický Permon',        'Jihlavská Papírna',    'Opavské Optiky',
        'Frýdecké Pekárny',     'Teplické Termály',         'Kladenská Kovárna',        'Vsetínské Vlnařství',  'Havířovská Hasičská',
        'Ústecké Účetnictví',   'Kolínská Kosmetika',       'Jablonecké Sklo',          'Litvínovská Chemie',   'Třebíčské Tiskárny',
        'Šumperkské Strojírny', 'Kroměřížské Květinářství', 'Jičínská Jídelna',         'Rakovnické Rámy',      'Chomutovské Chlazení',
        'Sokolovský Solárium',  'Děčínský Dopravce',        'Trutnovské Textilní',      'Berounské Betonárny',  'Kutnohorský Křišťál',
        'Chebské Chlebárny',    'Lounské Lékárny',          'Roudnické Roury',          'Mělnický Most',        'Chrudimská Chovatelství',
        'Nymburský Nábytek',    'Prostějovské Prádlo',      'Ústí nad Orlicí Úpravny',  'Pelhřimovské Papírny', 'Vyškovské Výrobky',
        'Blatenské Baterie',    'Sušické Svařování',        'Jindřichohradecké Jezera', 'Rokycanské Rolničky',  'Vrchlabské Vodárny',
        'Benešovské Bio',       'Strakonické Stavebniny',   'Rychnovské Reality',       'Novojičínské Nástroje',
    ];

    public const INTITUTIONS = [
        'Nemocnice', 'Knihovna', 'Univerzita', 'Muzeum',      'Divadlo',    'Galerie', 'Radnice', 'Škola',   'Pošta',   'Bazén',
        'Kino',      'Zoo',      'Park',       'Supermarket', 'Restaurace', 'Kavárna', 'Banka',   'Lékárna', 'Fitness', 'Hasičská stanice',
    ];

    public static function companyName(): string
    {
        return self::getRandomString(self::NAMES);
    }

    public static function companyType(): string
    {
        return self::getRandomString(self::INTITUTIONS);
    }
}
