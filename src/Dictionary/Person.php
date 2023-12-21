<?php

namespace Jimmeak\FakerBundle\Dictionary;

use Jimmeak\FakerBundle\Enum\Sex;

class Person extends AbstractDictionary
{
    public const FEMALE_FIRST_NAMES = [
        'Adéla',     'Alena',     'Andrea',    'Anežka',    'Anna',      'Barbora',   'Božena',    'Dagmar',    'Daniela',   'Dominika',
        'Edita',     'Eliška',    'Eva',       'Gabriela',  'Hana',      'Helena',    'Irena',     'Ivana',     'Iveta',     'Jana',
        'Jarmila',   'Jitka',     'Kamila',    'Karolína',  'Kateřina',  'Klára',     'Kristýna',  'Květoslava', 'Laura',     'Lenka',
        'Libuše',    'Lucie',     'Ludmila',   'Marie',     'Martina',   'Michaela',  'Milada',    'Miloslava', 'Miroslava', 'Monika',
        'Naděžda',   'Nela',      'Nikola',    'Olga',      'Pavla',     'Petra',     'Radka',     'Renata',    'Růžena',    'Simona',
        'Soňa',      'Stanislava', 'Sylvie',    'Tereza',    'Vendula',   'Veronika',  'Vlasta',    'Věra',      'Zuzana',    'Šárka',
    ];

    public const FEMALE_SURNAMES = [
        'Abrahámová', 'Adamová',     'Adámková',  'Andělová',  'Antošová',  'Bartošová', 'Bartůňková',    'Benešová',    'Blažková',  'Burešová',
        'Burianová',  'Bystrá',      'Danielová', 'Daněková',  'Divišová',  'Doležalová', 'Dostálová',     'Dvořáková',   'Fialová',   'Holubová',
        'Horáková',   'Hájková',     'Jelínková', 'Kolářová',  'Konečná',   'Kopecká',   'Kratochvílová', 'Králová',     'Kučerová',  'Malá',
        'Marková',    'Navrátilová', 'Novotná',   'Nováková',  'Němcová',   'Pokorná',   'Pospíšilová',   'Procházková', 'Růžičková', 'Sedláčková',
        'Svobodová',  'Urbanová',    'Vaněková',  'Veselá',    'Zemanová',  'Čapkova',   'Čechová',       'Čejková',     'Čermáková', 'Černá',
    ];

    public const MALE_FIRST_NAMES = [
        'Adam',       'Aleš',       'Alois',     'Antonín',   'Arnošt',    'Bedřich',   'Bohumil',   'Bohumír',   'Bohuslav',   'Bořek',
        'Bořivoj',    'Břetislav',  'Dalibor',   'Daniel',    'David',     'Denis',     'Dominik',   'Dušan',     'Eduard',     'Emil',
        'Erik',       'Filip',      'František', 'Hynek',     'Igor',      'Ivan',      'Ivo',       'Jakub',     'Jan',        'Jarek',
        'Jaromír',    'Jaroslav',   'Jiří',      'Josef',     'Kamil',     'Karel',     'Kevin',     'Kryštof',   'Ladislav',   'Lukáš',
        'Marek',      'Marian',     'Martin',    'Matouš',    'Matyáš',    'Matěj',     'Michael',   'Michal',    'Milan',      'Miloš',
        'Mirek',      'Miroslav',   'Oldřich',   'Ondřej',    'Patrik',    'Pavel',     'Petr',      'Radek',     'Radim',      'Radomír',
        'Radoslav',   'René',       'Richard',   'Robert',    'Roman',     'Rostislav', 'Rudolf',    'Stanislav', 'Tadeáš',     'Tomáš',
        'Viktor',     'Vilém',      'Vladimír',  'Vladislav', 'Vlastimil', 'Vojtěch',   'Václav',    'Vít',       'Vítězslav',  'Zbyněk',
        'Zdeněk',     'Šimon',      'Štěpán',    'Žigmund',
    ];

    public const MALE_SURNAMES = [
        'Abrahám',   'Adam',      'Adámek',    'Anděl',     'Antoš',     'Bartoš',    'Bartůněk',   'Beneš',     'Blažek',    'Bureš',
        'Burian',    'Bystrý',    'Daniel',    'Daněk',     'Diviš',     'Doležal',   'Dostál',     'Dvořák',    'Fiala',     'Holub',
        'Horák',     'Hájek',     'Jelínek',   'Kolář',     'Konečný',   'Kopecký',   'Kratochvíl', 'Král',      'Kučera',    'Malý',
        'Marek',     'Navrátil',  'Novotný',   'Novák',     'Němec',     'Pokorný',   'Pospíšil',   'Procházka', 'Růžička',   'Sedláček',
        'Svoboda',   'Urban',     'Vaněk',     'Veselý',    'Zeman',     'Čapek',     'Čech',       'Čejka',     'Čermák',    'Černý',
    ];

    public const SEXES = [
        Sex::MALE->value     => 'Biologicky muž, typicky s chromozomy XY.',
        Sex::FEMALE->value   => 'Biologicky žena, typicky s chromozomy XX.',
        Sex::INTERSEX->value => 'Obecný termín pro různé stavy, kdy je člověk narozen s reprodukčními nebo pohlavními orgány, které neodpovídají typickým definicím muže nebo ženy.',
    ];

    public const GENDERS = [
        'Cisgender'   => 'Termín pro lidi, jejichž genderová identita odpovídá pohlaví, které jim bylo přiřazeno při narození.',
        'Transgender' => 'Termín pro lidi, jejichž genderová identita je odlišná od pohlaví přiřazeného při narození.',
        'Non-Binary'  => 'Genderová identita, která nespadá do tradičního binárního rozdělení na muže a ženu.',
        'Genderqueer' => 'Genderová identita, která není výlučně mužská nebo ženská a může existovat mimo tradiční genderový binarismus.',
        'Agender'     => 'Genderová identita pro jedince, kteří se neztotožňují s žádným genderem.',
        'Bigender'    => 'Genderová identita, kdy jedinec se identifikuje jako dvě odlišná pohlaví.',
        'Pangender'   => 'Genderová identita popisující jedince, kteří se identifikují s širokým spektrem genderů.',
        'Genderfluid' => 'Dynamická genderová identita, která se může časem měnit.',
        'Two-Spirit'  => 'Genderová identita specifická pro některé původní severoamerické kultury, reprezentující osobu, která v sobě spojuje kvality obou pohlaví.',
    ];

    public const ACADEMIC_TITLES = [
        'Ing.', 'Mgr.', 'Bc.', 'JUDr.', 'MUDr.', 'PhDr.', 'RNDr.', 'Doc.', 'Prof.', 'Dr.',
        'Mgr. art.', 'ThLic.', 'ThDr.', 'PharmDr.', 'MVDr.', 'JUC.', 'DSc.', 'Ph. D.',
    ];

    public const JOB_TITLES = [
        [Sex::MALE->value => 'Inženýr', Sex::FEMALE->value => 'Inženýrka'],           [Sex::MALE->value => 'Lékař', Sex::FEMALE->value => 'Lékařka'],              [Sex::MALE->value => 'Učitel', Sex::FEMALE->value => 'Učitelka'],
        [Sex::MALE->value => 'Programátor', Sex::FEMALE->value => 'Programátorka'],   [Sex::MALE->value => 'Řidič', Sex::FEMALE->value => 'Řidička'],              [Sex::MALE->value => 'Právník', Sex::FEMALE->value => 'Právnička'],
        [Sex::MALE->value => 'Kuchař', Sex::FEMALE->value => 'Kuchařka'],             [Sex::MALE->value => 'Architekt', Sex::FEMALE->value => 'Architektka'],      [Sex::MALE->value => 'Farmář', Sex::FEMALE->value => 'Farmářka'],
        [Sex::MALE->value => 'Zedník', Sex::FEMALE->value => 'Zednice'],              [Sex::MALE->value => 'Elektrikář', Sex::FEMALE->value => 'Elektrikářka'],    [Sex::MALE->value => 'Malíř', Sex::FEMALE->value => 'Malířka'],
        [Sex::MALE->value => 'Svářeč', Sex::FEMALE->value => 'Svářečka'],             [Sex::MALE->value => 'Tesař', Sex::FEMALE->value => 'Tesařka'],              [Sex::MALE->value => 'Instalatér', Sex::FEMALE->value => 'Instalatérka'],
        [Sex::MALE->value => 'Zahradník', Sex::FEMALE->value => 'Zahradnice'],        [Sex::MALE->value => 'Mechanik', Sex::FEMALE->value => 'Mechanička'],        [Sex::MALE->value => 'Strojní inženýr', Sex::FEMALE->value => 'Strojní inženýrka'],
        [Sex::MALE->value => 'Ekonom', Sex::FEMALE->value => 'Ekonomka'],             [Sex::MALE->value => 'Psycholog', Sex::FEMALE->value => 'Psycholožka'],      [Sex::MALE->value => 'Fotograf', Sex::FEMALE->value => 'Fotografka'],
        [Sex::MALE->value => 'Grafik', Sex::FEMALE->value => 'Grafička'],             [Sex::MALE->value => 'Redaktor', Sex::FEMALE->value => 'Redaktorka'],        [Sex::MALE->value => 'Prodavač', Sex::FEMALE->value => 'Prodavačka'],
        [Sex::MALE->value => 'Kadeřník', Sex::FEMALE->value => 'Kadeřnice'],          [Sex::MALE->value => 'Zubní lékař', Sex::FEMALE->value => 'Zubní lékařka'],  [Sex::MALE->value => 'Veterinář', Sex::FEMALE->value => 'Veterinářka'],
        [Sex::MALE->value => 'Biolog', Sex::FEMALE->value => 'Bioložka'],             [Sex::MALE->value => 'Chemik', Sex::FEMALE->value => 'Chemička'],            [Sex::MALE->value => 'Politik', Sex::FEMALE->value => 'Politička'],
        [Sex::MALE->value => 'Diplomat', Sex::FEMALE->value => 'Diplomatka'],         [Sex::MALE->value => 'Historik', Sex::FEMALE->value => 'Historička'],        [Sex::MALE->value => 'Matematik', Sex::FEMALE->value => 'Matematička'],
        [Sex::MALE->value => 'Fyzik', Sex::FEMALE->value => 'Fyzička'],               [Sex::MALE->value => 'Astronom', Sex::FEMALE->value => 'Astronomka'],        [Sex::MALE->value => 'Geolog', Sex::FEMALE->value => 'Geoložka'],
        [Sex::MALE->value => 'Meteorolog', Sex::FEMALE->value => 'Meteoroložka'],     [Sex::MALE->value => 'Archeolog', Sex::FEMALE->value => 'Archeoložka'],      [Sex::MALE->value => 'Filozof', Sex::FEMALE->value => 'Filozofka'],
        [Sex::MALE->value => 'Sociolog', Sex::FEMALE->value => 'Socioložka'],
    ];

    public const USERNAMES = [
        'bluesky123',      'happysunshine',    'mysteriousshadow', 'oceanbreeze',      'mountainexplorer', 'citylights',     'sunnyday',        'nightowl',         'dreamcatcher',    'stargazer',
        'rainyday',        'snowflake',        'autumnleaves',     'springbloom',      'summerwave',       'winterfrost',    'naturelover',     'bookworm',         'artisticsoul',    'techwizard',
        'musiclover',      'moviebuff',        'fitnessfreak',     'foodie',           'travelbug',        'historybuff',    'sciencegeek',     'mathgenius',       'languagelearner', 'cultureexplorer',
        'animalfriend',    'plantparent',      'coffeeaddict',     'teaenthusiast',    'chocolatelover',   'bakingmaster',   'cookingguru',     'gardeningninja',   'diyexpert',       'fashionista',
        'beautyguru',      'shoppingpro',      'sportsfan',        'gamer',            'cosplayartist',    'photographyace', 'writer',          'poet',             'philosopher',     'peacemaker',
    ];

    public const EMAILS = [
        'bluesky123@gmail-exmpl.com',       'happysunshine@seznam-exmpl.cz', 'mysteriousshadow@centrum-exmpl.cz', 'oceanbreeze@atlas-exmpl.cz',       'mountainexplorer@gmail-exmpl.com',
        'citylights@seznam-exmpl.cz',       'sunnyday@centrum-exmpl.cz',     'nightowl@atlas-exmpl.cz',           'dreamcatcher@gmail-exmpl.com',     'stargazer@seznam-exmpl.cz',
        'rainyday@centrum-exmpl.cz',        'snowflake@atlas-exmpl.cz',      'autumnleaves@gmail-exmpl.com',      'springbloom@seznam-exmpl.cz',      'summerwave@centrum-exmpl.cz',
        'winterfrost@atlas-exmpl.cz',       'naturelover@gmail-exmpl.com',   'bookworm@seznam-exmpl.cz',          'artisticsoul@centrum-exmpl.cz',    'techwizard@atlas-exmpl.cz',
        'musiclover@gmail-exmpl.com',       'moviebuff@seznam-exmpl.cz',     'fitnessfreak@centrum-exmpl.cz',     'foodie@atlas-exmpl.cz',            'travelbug@gmail-exmpl.com',
        'historybuff@seznam-exmpl.cz',      'sciencegeek@centrum-exmpl.cz',  'mathgenius@atlas-exmpl.cz',         'languagelearner@gmail-exmpl.com',  'cultureexplorer@seznam-exmpl.cz',
        'animalfriend@centrum-exmpl.cz',    'plantparent@atlas-exmpl.cz',    'coffeeaddict@gmail-exmpl.com',      'teaenthusiast@seznam-exmpl.cz',    'chocolatelover@centrum-exmpl.cz',
        'bakingmaster@atlas-exmpl.cz',      'cookingguru@gmail-exmpl.com',   'gardeningninja@seznam-exmpl.cz',    'diyexpert@centrum-exmpl.cz',       'fashionista@atlas-exmpl.cz',
        'beautyguru@gmail-exmpl.com',       'shoppingpro@seznam-exmpl.cz',   'sportsfan@centrum-exmpl.cz',        'gamer@atlas-exmpl.cz',             'cosplayartist@gmail-exmpl.com',
        'photographyace@seznam-exmpl.cz',   'writer@centrum-exmpl.cz',       'poet@atlas-exmpl.cz',               'philosopher@gmail-exmpl.com',      'peacemaker@seznam-exmpl.cz',
    ];

    private string $firstName;
    private string $lastName;
    private string $username;
    private string $email;
    private string $sex;
    private string $gender;

    public static function generate(): Person
    {
        return new Person();
    }

    public function __construct()
    {
        $this->firstName = self::firstName();
        $this->lastName = self::lastName();
        $this->username = self::username();
        $this->email = self::email();
        $this->sex = self::sex();
        $this->gender = self::gender();
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public static function firstName(Sex $sex = null): string
    {
        $firstNames = match ($sex) {
            Sex::MALE => self::MALE_FIRST_NAMES,
            Sex::FEMALE => self::FEMALE_FIRST_NAMES,
            default => array_merge(self::MALE_FIRST_NAMES, self::FEMALE_FIRST_NAMES),
        };

        return self::toString(self::getRandomElement($firstNames));
    }

    public static function lastName(Sex $sex = null): string
    {
        $lastNames = match ($sex) {
            Sex::MALE => self::MALE_SURNAMES,
            Sex::FEMALE => self::FEMALE_SURNAMES,
            default => array_merge(self::MALE_SURNAMES, self::FEMALE_SURNAMES),
        };

        return self::toString(self::getRandomElement($lastNames));
    }

    public static function sex(): string
    {
        return self::toString(self::getRandomElement(array_keys(self::SEXES)));
    }

    public static function gender(): string
    {
        return self::toString(self::getRandomElement(array_keys(self::GENDERS)));
    }

    public static function academicTitle(): string
    {
        return self::toString(self::getRandomElement(self::ACADEMIC_TITLES));
    }

    public static function username(): string
    {
        return self::toString(self::getRandomElement(self::USERNAMES));
    }

    public static function email(): string
    {
        return self::toString(self::getRandomElement(self::EMAILS));
    }

    public static function job(Sex $sex = null): string
    {
        $jobTitles = (Sex::MALE === $sex || Sex::FEMALE === $sex)
            ? array_map(fn (array $title) => $title[$sex->value], self::JOB_TITLES)
            : array_merge(array_map(fn (array $title) => $title[Sex::MALE->value], self::JOB_TITLES), array_map(fn (array $title) => $title[Sex::FEMALE->value], self::JOB_TITLES));

        return self::toString(self::getRandomElement($jobTitles));
    }

    public static function phoneNumber(bool $onlyCzech = true): string
    {
        $preliminary = $onlyCzech ? ['+420'] : ['+420', '+421'];
        $preliminary = $preliminary[array_rand($preliminary)];
        $phoneNumber = $preliminary . '100';

        for ($i = 0; $i < 6; ++$i) {
            $phoneNumber .= random_int(0, 9);
        }

        return $phoneNumber;
    }
}
