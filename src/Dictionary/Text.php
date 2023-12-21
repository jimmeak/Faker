<?php

namespace Jimmeak\FakerBundle\Dictionary;

use InvalidArgumentException;

class Text extends AbstractDictionary
{
    public const WORD_TOLERANCE = 19;

    public const NOUNS = [
        'jablko',    'strom',     'kniha',     'auto',      'dům',       'řeka',      'počítač',   'káva',      'hora',      'kolo',
        'stůl',      'židle',     'okno',      'dveře',     'obraz',     'klobouk',   'loď',       'vlak',      'letadlo',   'pero',
        'klíč',      'telefon',   'náměstí',   'park',      'les',       'kamera',    'světlo',    'ulice',     'město',     'vesnice',
        'zahrada',   'květina',   'stromek',   'láhev',     'sklenice',  'nůž',       'vidlička',  'lžíce',     'talíř',     'hrnek',
        'sešit',     'tužka',     'papír',     'obal',      'sáček',     'pytel',     'batoh',     'taška',     'kufřík',    'peněženka',
        'hodiny',    'televize',  'rádio',     'miska',     'koš',       'křeslo',    'postel',    'polštář',   'deka',      'žárovka',
        'brýle',     'kniha',     'mapa',      'komoda',    'kuchyň',    'lampa',     'záclona',   'obrázek',   'časopis',   'noviny',
        'šálek',     'lahvička',  'krabice',   'víno',      'pivo',      'voda',      'mléko',     'chleba',    'maso',      'sýr',
        'jablko',    'banán',     'pomeranč',  'hruška',    'melon',     'kiwi',      'citron',    'rajče',     'okurka',    'paprika',
        'mrkev',     'brambora',  'cibule',    'česnek',    'brokolice', 'květák',    'špenát',    'salát',     'hrách',     'fazole',
    ];

    public const NOUNS_ACCUSATIVES = [
        'jablko',    'strom',     'knihu',     'auto',      'dům',       'řeku',      'počítač',   'kávu',      'horu',      'kolo',
        'stůl',      'židli',     'okno',      'dveře',     'obraz',     'klobouk',   'loď',       'vlak',      'letadlo',   'pero',
        'klíč',      'telefon',   'náměstí',   'park',      'les',       'kameru',    'světlo',    'ulici',     'město',     'vesnici',
        'zahradu',   'květinu',   'stromeček', 'láhev',     'sklenici',  'nůž',       'vidličku',  'lžíci',     'talíř',     'hrnek',
        'sešit',     'tužku',     'papír',     'obal',      'sáček',     'pytel',     'batoh',     'tašku',     'kufřík',    'peněženku',
        'hodiny',    'televizi',  'rádio',     'misku',     'koš',       'křeslo',    'postel',    'polštář',   'deku',      'žárovku',
        'brýle',     'knihu',     'mapu',      'komodu',    'kuchyň',    'lampu',     'záclonu',   'obrázek',   'časopis',   'noviny',
        'šálek',     'lahvičku',  'krabici',   'víno',      'pivo',      'vodu',      'mléko',     'chleba',    'maso',      'sýr',
        'jablko',    'banán',     'pomeranč',  'hrušku',    'melon',     'kiwi',      'citron',    'rajče',     'okurku',    'papriku',
        'mrkev',     'bramboru',  'cibuli',    'česnek',    'brokolici', 'květák',    'špenát',    'salát',     'hrách',     'fazole',
    ];

    public const ADJECTIVES = [
        'modrý',     'velký',     'starý',     'mladý',      'nový',         'dobrý',       'špatný',    'krásný',    'ošklivý',   'rychlý',
        'pomalý',    'zelený',    'červený',   'černý',      'bílý',         'tmavý',       'světlý',    'teplý',     'studený',   'suchý',
        'mokrý',     'tichý',     'hlučný',    'jasný',      'tmavý',        'lehký',       'těžký',     'tvrdý',     'měkký',     'hrubý',
        'hladký',    'prázdný',   'plný',      'široký',     'úzký',         'vysoký',      'nízký',     'dlouhý',    'krátký',    'malý',
        'tenký',     'tlustý',    'čistý',     'špinavý',    'pravý',        'levý',        'chladný',   'tepelný',   'sladký',    'hořký',
        'kyselý',    'slaný',     'pevný',     'měkký',      'silný',        'slabý',       'tvrdý',     'měkký',     'hrubý',     'jemný',
        'vážný',     'směšný',    'šťastný',   'smutný',     'bohatý',       'chudý',       'zdravý',    'nemocný',   'aktivní',   'pasivní',
        'laskavý',   'nelaskavý', 'příjemný',  'nepříjemný', 'veselý',       'smutný',      'odvážný',   'zbabělý',   'mlčenlivý', 'hovorný',
        'věrný',     'nevěrný',   'pracovitý', 'líný',       'inteligentní', 'hloupý',      'zajímavý',  'nudný',     'složitý',   'jednoduchý',
        'elegantní', 'nevkusný',  'módní',     'staromódní', 'bolestivý',    'bezbolestný', 'svěží',     'unavený',   'nadšený',   'znechucený',
    ];

    public const PRONOUNS = [
        'já',       'ty',       'on',        'ona',      'ono',        'my',        'vy',        'oni',       'ony',
        'můj',      'tvůj',     'jeho',      'její',     'náš',        'váš',       'jejich',    'každá',     'každé',
        'ten',      'ta',       'to',        'ti',       'ty',         'ta',        'sebou',     'svým',      'některá',
        'tento',    'tato',     'toto',      'teti',     'tety',       'tato',      'žádný',     'žádná',     'žádné',
        'který',    'která',    'které',     'kteří',    'které',      'která',     'nikdo',     'nic',       'některé',
        'někdo',    'něco',     'nikdo',     'nic',      'nějaký',     'nějaká',    'nějaké',    'každý',     'někteří',
        'sám',      'sama',     'samo',      'samý',     'samá',       'samé',      'sebe',      'sobě',      'některé',
        'svůj',     'svá',      'své',       'svůj',     'svou',       'svoje',     'svoji',     'svého',     'svých',
        'některý',  'některá',
    ];

    public const NUMERALS = [
        'jeden',    'dva',       'tři',       'čtyři',    'pět',        'šest',      'sedm',       'osm',      'devět',       'deset',
        'jedenáct', 'dvanáct',   'třináct',   'čtrnáct',  'patnáct',    'šestnáct',  'sedmnáct',   'osmnáct',  'devatenáct',  'dvacet',
        'třicet',   'čtyřicet',  'padesát',   'šedesát',  'sedmdesát',  'osmdesát',  'devadesát',  'sto',      'dvě stě',     'tři sta',
        'první',    'druhý',     'třetí',     'čtvrtý',   'pátý',       'šestý',     'sedmý',      'osmý',     'devátý',      'desátý',
        'jedenáctý', 'dvanáctý',  'třináctý',  'čtrnáctý', 'patnáctý',   'šestnáctý', 'sedmnáctý',  'osmnáctý', 'devatenáctý', 'dvacátý',
        'třicátý',  'čtyřicátý', 'padesátý',  'šedesátý', 'sedmdesátý', 'osmdesátý', 'devadesátý', 'stý',      'dvoustý',     'třístý',
    ];

    public const VERBS = [
        'být',       'mít',       'dělat',     'jít',        'vidět',      'slyšet',   'číst',        'psát',      'říkat',     'ptát se',
        'moci',      'smět',      'muset',     'chtít',      'umět',       'vědět',    'poznat',      'rozumět',   'pamatovat', 'zapomenout',
        'brát',      'vzít',      'dávat',     'dát',        'nosit',      'nositi',   'přinést',     'odnést',    'házet',     'vrhat',
        'kupovat',   'prodat',    'platit',    'stát',       'sedět',      'ležet',    'spát',        'vstávat',   'jíst',      'pít',
        'vařit',     'péct',      'kreslit',   'malovat',    'stavět',     'bourat',   'opravit',     'rozbít',    'otvírat',   'zavírat',
        'hrát',      'hráti',     'tančit',    'zpívat',     'poslouchat', 'sledovat', 'vidět',       'dívat se',  'obdivovat', 'milovat',
        'nenávidět', 'chtít',     'přát si',   'potřebovat', 'mít rád',    'líbit se', 'disponovat',  'vlastnit',  'vzdát se',  'opustit',
        'pomáhat',   'sloužit',   'pracovat',  'makat',      'řídit',      'vedený',   'přijet',      'odjet',     'najít',     'ztratit',
        'vyhrát',    'prohrát',   'bojovat',   'utkat se',   'diskutovat', 'mluvit',   'konverzovat', 'řešit',     'vyřešit',   'naučit se',
        'učit',      'studovat',  'zkoumat',   'zkoušet',    'testovat',   'zjistit',  'objevit',     'vyvinout',  'vytvářet',  'tvořit',
    ];

    public const VERBS_THIRD_PERSON = [
        'je',        'má',        'dělá',      'jde',       'vidí',      'slyší',   'čte',        'píše',     'říká',     'ptá se',
        'může',      'smí',       'musí',      'chce',      'umí',       'ví',      'pozná',      'rozumí',   'pamatuje', 'zapomněl',
        'bere',      'vzal',      'dává',      'dal',       'nese',      'nesl',    'přinesl',    'odnesl',   'hází',     'vrhal',
        'kupuje',    'prodal',    'platí',     'stojí',     'sedí',      'leží',    'spí',        'vstává',   'jí',       'pije',
        'vaří',      'peče',      'kreslí',    'maluje',    'staví',     'bourej',  'opravuje',   'rozbil',   'otvírá',   'zavírá',
        'hraje',     'hrál',      'tančí',     'zpívá',     'poslouchá', 'sleduje', 'vidí',       'dívá se',  'obdivuje', 'miluje',
        'nenávidí',  'chce',      'přeje si',  'potřebuje', 'má rád',    'líbí se', 'disponuje',  'vlastní',  'vzdal se', 'opustil',
        'pomáhá',    'slouží',    'pracuje',   'maká',      'řídí',      'vedl',    'přijel',     'odjel',    'našel',    'ztratil',
        'vyhrál',    'prohrál',   'bojuje',    'utkal se',  'diskutuje', 'mluví',   'konverzuje', 'řeší',     'vyřešil',  'naučil se',
        'učí',       'studuje',   'zkoumá',    'zkouší',    'testuje',   'zjistil', 'objevil',    'vyvinul',  'vytvořil', 'tvoří',
    ];

    public const ADVERBS = [
        'dobře',       'špatně',      'rychle',      'pomalu',      'hlasitě',
        'tiše',        'vysoko',      'nízko',       'brzy',        'pozdě',
        'horko',       'zima',        'hned',        'už',          'pak',
        'teď',         'tady',        'tam',         'též',         'ani',
        'též',         'ani',         'stále',       'nikdy',       'mnoho',
        'málo',        'víc',         'méně',        'vždy',        'někdy',
        'snadno',      'těžko',       'vpravo',      'vlevo',       'venku',
        'uvnitř',      'doma',        'ven',         'zde',         'proč',
        'jak',         'kolik',       'kam',         'kudy',        'odkud',
        'kde',         'co',          'kdy',         'jak',         'proč',
        'ano',         'ne',          'možná',       'určitě',      'náhodou',
        'zřejmě',      'asi',         'nejspíš',     'bohužel',     'škoda',
        'včera',       'dnes',        'zítra',       'nedávno',     'nikdy',
        'často',       'vždycky',     'občas',       'pak',         'když',
        'kdekoliv',    'někde',       'všude',       'hned',        'ještě',
        'spolu',       'přesně',      'příliš',      'již',         'téměř',
        'pravděpodobně', 'možná',     'klidně',      'vcelku',      'podobně',
        'dobře',       'úplně',       'skoro',       'raději',      'najednou',
    ];

    public const PREPOSITIONS = [
        'k',     'na',      'do',     'za',    'pod',
        'před',  'nad',     've',     'pro',   'u',
        'o',     's',       'z',      'v',     'mezi',
        'po',    'pri',     'skrz',   'za',    'kromě',
        'kolem', 'naproti', 'podle',  'během', 'blízko',
        'co',    'kde',     'mimo',   'okolo', 'oproti',
        'při',   'skrz',    'včetně', 'vedle', 'vnitř',
    ];

    public const CONJUNCTIONS = [
        'a',        'nebo',     'ale',      'také',     'kromě',
        'protože',  'navíc',    'přesto',   'ačkoliv',  'poté',
        'tedy',     'ovšem',    'jelikož',  'zatímco',  'tudíž',
        'přitom',   'avšak',    'nicméně',  'takže',    'ať',
        'jednak',   'zároveň',  'přece',    'jednak',   'především',
    ];

    public const PARTICLES = [
        'ano', 'ne', 'tak', 'ať', 'jak', 'kde', 'kdo', 'kdy', 'co', 'že',
    ];

    public const CZECH_ONOMATOPOEIAS = [
        'baf',   'blb',   'blýsk',  'bom',   'bum',     'bzz', 'čik',  'cink',  'cvak',   'dětsk',
        'děvč',  'chlup', 'chrchl', 'chrup', 'chrocht', 'čip', 'dříč', 'flak',  'fňuk',   'fú',
        'grgr',  'haf',   'hak',    'hap',   'hrk',     'jup', 'klap', 'klip',  'klep',   'klonk',
        'krab',  'křup',  'kvak',   'kvík',  'mňau',    'níp', 'plác', 'plesk', 'plouf',  'plum',
        'plump', 'škub',  'štěk',   'ťaf',   'víř',     'vrč', 'vrsk', 'vytí',  'žbluňk', 'žbluňk',
    ];

    public static function createSimpleSentence(): string
    {
        $firstWord = sprintf('%s', self::getRandomElement(self::ADJECTIVES));

        return sprintf(
            '%s %s %s %s %s. ',
            ucfirst($firstWord),
            self::getRandomElement(self::NOUNS),
            self::getRandomElement(self::VERBS_THIRD_PERSON),
            self::getRandomElement(self::PREPOSITIONS),
            self::getRandomElement(self::NOUNS)
        );
    }

    public static function word(): string
    {
        return sprintf('%s', self::getRandomElement(self::NOUNS));
    }

    public static function createComposedSentence(int $sentences = 2): string
    {
        if (1 > $sentences) {
            throw new InvalidArgumentException('Number of sentences must be greater than 1');
        }

        if (1 === $sentences) {
            return self::createSimpleSentence();
        }

        $simpleSentence = '%s %s %s %s %s %s';
        $template = $simpleSentence;

        $firstWord = sprintf('%s', self::getRandomElement(self::ADJECTIVES));

        $words = [
            ucfirst($firstWord),
            self::getRandomElement(self::NOUNS),
            self::getRandomElement(self::ADVERBS),
            self::getRandomElement(self::VERBS_THIRD_PERSON),
            self::getRandomElement(self::PREPOSITIONS),
            self::getRandomElement(self::NOUNS),
        ];

        for ($i = 1; $i < $sentences; ++$i) {
            $template .= ', %s ' . $simpleSentence;
            $words[] = self::getRandomElement(self::CONJUNCTIONS);
            $words[] = self::getRandomElement(self::ADJECTIVES);
            $words[] = self::getRandomElement(self::NOUNS);
            $words[] = self::getRandomElement(self::ADVERBS);
            $words[] = self::getRandomElement(self::VERBS_THIRD_PERSON);
            $words[] = self::getRandomElement(self::PREPOSITIONS);
            $words[] = self::getRandomElement(self::NOUNS);
        }
        $template .= '. ';

        return trim(str_replace('  ', ' ', ucfirst(sprintf($template, ...$words))));
    }

    public static function text(int $words = 200): string
    {
        if ($words < 1) {
            throw new InvalidArgumentException('Number of words must be greater than 0');
        }

        if ($words <= 2 * self::WORD_TOLERANCE) {
            return self::createComposedSentence();
        }

        $text = self::createComposedSentence();
        while (self::wordsCount($text) < $words - self::WORD_TOLERANCE) {
            $text .= ' ' . ucfirst(self::createComposedSentence());
        }

        return trim(str_replace('  ', ' ', $text));
    }

    private static function wordsCount(string $text): int
    {
        return str_word_count($text);
    }
}
