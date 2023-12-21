<?php

namespace Jimmeak\FakerBundle\Test\Unit;

use InvalidArgumentException;
use Jimmeak\FakerBundle\Builder\EntityBuilder;
use Jimmeak\FakerBundle\Configuration\EmailConfig;
use Jimmeak\FakerBundle\Configuration\FirstNameConfig;
use Jimmeak\FakerBundle\Configuration\LastNameConfig;
use Jimmeak\FakerBundle\Configuration\WordConfig;
use Jimmeak\FakerBundle\Dictionary\Color;
use Jimmeak\FakerBundle\Dictionary\Company;
use Jimmeak\FakerBundle\Dictionary\Item;
use Jimmeak\FakerBundle\Dictionary\Person;
use Jimmeak\FakerBundle\Dictionary\Text;
use Jimmeak\FakerBundle\Enum\Sex;
use Jimmeak\FakerBundle\Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    /**
     * @param string[][] $array
     */
    #[DataProvider('randomDataToChooseFrom')]
    public function testRandomElement(array $array): void
    {
        $item = Generator::randomElementOf($array);
        $this->assertContains($item, $array);
    }

    /**
     * @return string[][][]
     */
    public static function randomDataToChooseFrom(): array
    {
        return [
            [['Petra']],
            [['Petra', 'Václav', 'Žblepta', 'Nemocnice', 'Jablonec', 'Hola hop']],
        ];
    }

    #[DataProvider('randomIntData')]
    public function testRandomInt(int|null $from, int|null $to): void
    {
        $generated = Generator::int($from, $to);

        $this->assertIsInt($generated);

        if (null !== $from) {
            $this->assertGreaterThanOrEqual($from, $generated);
        }

        if (null !== $to) {
            $this->assertLessThanOrEqual($to, $generated);
        }
    }

    /**
     * @return array<int, array{0: int|null, 1:int|null}>
     */
    public static function randomIntData(): array
    {
        return [
            [0, 10],
            [null, 10],
            [-10, null],
            [null, null],
        ];
    }

    #[DataProvider('randomFloatData')]
    public function testRandomFloat(int|null $from, int|null $to, int|null $precision): void
    {
        if (15 < $precision || (null !== $from && null !== $to && $from > $to)) {
            $this->expectException(InvalidArgumentException::class);
        }

        if (null === $from && null === $to && null === $precision) {
            $generated = Generator::float();
        } elseif (null === $from && null === $to) {
            $generated = Generator::float(precision: $precision);
        } elseif (null === $from && null === $precision) {
            $generated = Generator::float(to: $to);
        } elseif (null === $from) {
            $generated = Generator::float(to: $to, precision: $precision);
        } elseif (null === $to && null === $precision) {
            $generated = Generator::float(from: $from);
        } elseif (null === $to) {
            $generated = Generator::float(from: $from, precision: $precision);
        } elseif (null === $precision) {
            $generated = Generator::float(from: $from, to: $to);
        } else {
            $generated = Generator::float(from: $from, to: $to, precision: $precision);
        }

        $this->assertIsFloat($generated);
        if (null !== $from) {
            $this->assertGreaterThanOrEqual($from, $generated, 'Min value error.');
        }
        if (null !== $to) {
            $this->assertLessThanOrEqual($to, $generated, 'Max value error.');
        }
        if (null !== $precision) {
            $integer = floor(10 ** $precision * $generated);
            $this->assertEquals($integer, floor(10 ** $precision * $generated), 'Precision error.');
        }
    }

    /**
     * @return array<int, array{0: int|null, 1: int|null, 2: int|null}>
     */
    public static function randomFloatData(): array
    {
        return [
            [null, null, null],
            [null, null, 0],
            [null, null, 20],
            [null, null, 2],
            [null, 1, 7],
            [10000, null, 6],
            [10, 11, 5],
            [100, 11, 5],
        ];
    }

    public function testFirstName(): void
    {
        $firstName = Generator::firstName();
        $maleFirstName = Generator::firstName(Sex::MALE);
        $femaleFirstName = Generator::firstName(Sex::FEMALE);

        $this->assertContains($firstName, array_merge(Person::FEMALE_FIRST_NAMES, Person::MALE_FIRST_NAMES));
        $this->assertContains($maleFirstName, Person::MALE_FIRST_NAMES);
        $this->assertContains($femaleFirstName, Person::FEMALE_FIRST_NAMES);
    }

    public function testLastName(): void
    {
        $lastName = Generator::lastName();
        $maleLastName = Generator::lastName(Sex::MALE);
        $femaleLastName = Generator::lastName(Sex::FEMALE);

        $this->assertContains($lastName, array_merge(Person::FEMALE_SURNAMES, Person::MALE_SURNAMES));
        $this->assertContains($maleLastName, Person::MALE_SURNAMES);
        $this->assertContains($femaleLastName, Person::FEMALE_SURNAMES);
    }

    public function testFullName(): void
    {
        $fullName = Generator::fullName();
        $maleFullName = Generator::fullName(Sex::MALE);
        $femaleFullName = Generator::fullName(Sex::FEMALE);

        $this->assertNotEmpty($fullName);
        $this->assertNotEmpty($maleFullName);
        $this->assertNotEmpty($femaleFullName);

        $splitName = self::splitName($fullName);
        $splitMaleName = self::splitName($maleFullName);
        $splitFemaleName = self::splitName($femaleFullName);

        $this->assertCount(2, $splitName);
        $this->assertCount(2, $splitMaleName);
        $this->assertCount(2, $splitFemaleName);

        $this->assertContains($splitName[0], array_merge(Person::FEMALE_FIRST_NAMES, Person::MALE_FIRST_NAMES));
        $this->assertContains($splitMaleName[0], Person::MALE_FIRST_NAMES);
        $this->assertContains($splitFemaleName[0], Person::FEMALE_FIRST_NAMES);

        $this->assertContains($splitName[1], array_merge(Person::FEMALE_SURNAMES, Person::MALE_SURNAMES));
        $this->assertContains($splitMaleName[1], Person::MALE_SURNAMES);
        $this->assertContains($splitFemaleName[1], Person::FEMALE_SURNAMES);
    }

    /**
     * @return array<int, string>
     */
    private static function splitName(string $fullName): array
    {
        return explode(' ', $fullName);
    }

    public function testSex(): void
    {
        $sex = Generator::sex();
        $this->assertContains($sex, array_keys(Person::SEXES));

        $sex = Generator::sex(asString: false);
        $this->assertInstanceOf(Sex::class, $sex);
    }

    public function testGender(): void
    {
        $gender = Generator::gender();
        $this->assertContains($gender, array_keys(Person::GENDERS));
    }

    public function testUsernames(): void
    {
        $username = Generator::username();
        $this->assertContains($username, Person::USERNAMES);
    }

    public function testAcademicTitles(): void
    {
        $titles = Generator::title();
        $this->assertContains($titles, Person::ACADEMIC_TITLES);
    }

    public function testEmails(): void
    {
        $email = Generator::email();
        $this->assertContains($email, Person::EMAILS);
    }

    #[DataProvider('jobTitlesProvider')]
    public function testJobTitle(Sex|null $sex): void
    {
        $jobTitle = Generator::job($sex);

        $this->assertIsString($jobTitle);
        $this->assertNotEmpty($jobTitle);
    }

    /**
     * @return array<int, array{0: Sex|null}>
     */
    public static function jobTitlesProvider(): array
    {
        return [
            [Sex::MALE],
            [Sex::FEMALE],
            [Sex::INTERSEX],
            [null],
        ];
    }

    public function testWords(): void
    {
        $count = 12;
        $wordString = Generator::words($count);
        $words = explode(' ', $wordString);

        $this->assertCount($count, $words);
        foreach ($words as $word) {
            $this->assertContains($word, Text::NOUNS);
        }
    }

    #[DataProvider('sentencesConfigProvider')]
    public function testSentences(int $amount, int $composed, bool $valid): void
    {
        if (!$valid) {
            $this->expectException(InvalidArgumentException::class);
        }

        $sentence = Generator::sentence($amount, $composed);
        $this->assertStringStartsNotWith(' ', $sentence);
        $this->assertStringEndsNotWith(' ', $sentence);

        $sentences = explode('. ', $sentence);
        $this->assertCount($amount, $sentences);
        foreach ($sentences as $order => $sentence) {
            if ($order === $amount - 1) {
                break;
            }

            $this->assertNotEmpty($sentence, '$sentence');
            $this->assertCount($composed, explode(', ', $sentence));
        }
    }

    /**
     * @return array<int, array{0: int, 1: int, 2: bool}>
     */
    public static function sentencesConfigProvider(): array
    {
        return [
            [1, 1, true],
            [1, 3, true],
            [2, 3, true],
            [0, 10, false],
            [4, 0, false],
        ];
    }

    #[DataProvider('paragraphConfigProvider')]
    public function testParagraphs(int $amount): void
    {
        if (2 > $amount) {
            $this->expectException(InvalidArgumentException::class);
        }

        $paragraph = Generator::paragraph($amount);
        $this->assertStringStartsNotWith(' ', $paragraph);
        $this->assertStringEndsWith('.', $paragraph);

        $this->assertCount($amount, explode('. ', $paragraph));
    }

    /**
     * @return array<int, array<int, int>>
     */
    public static function paragraphConfigProvider(): array
    {
        return [[0], [5], [10]];
    }

    #[DataProvider('textGenerationConfig')]
    public function testText(int $wantedLength): void
    {
        if ($wantedLength < 1) {
            $this->expectException(InvalidArgumentException::class);
        }

        $text = Generator::text($wantedLength);
        $length = str_word_count($text);

        $this->assertLessThanOrEqual($wantedLength + Text::WORD_TOLERANCE, $length);
        $this->assertGreaterThanOrEqual($wantedLength - Text::WORD_TOLERANCE, $length);
    }

    /**
     * @return int[][]
     */
    public static function textGenerationConfig(): array
    {
        return [[10], [200]];
    }

    public function testColor(): void
    {
        $color = Generator::color();
        $this->assertContains($color, Color::COLORS);
    }

    public function testCompanyName(): void
    {
        $company = Generator::company();
        $this->assertContains($company, Company::NAMES);
    }

    public function testCompanyType(): void
    {
        $company = Generator::companyType();
        $this->assertContains($company, Company::INTITUTIONS);
    }

    public function testItem(): void
    {
        $item = Generator::item();
        $this->assertContains($item, Item::DAILY_ITEMS);
    }

    public function testPhone(): void
    {
        $phone = Generator::phone();
        self::assertContains($phone, Item::PHONES);
    }

    public function testPhoneNumber(): void
    {
        $number = Generator::phoneNumber();

        $this->assertIsString($number);
        $this->assertStringStartsWith('+420', $number);
        $this->assertEquals(13, strlen($number));
    }

    /**
     * @throws \ReflectionException
     */
    public function testObjectCreation(): void
    {
        $entity = EntityBuilder::createEntityBuilder(Citizen::class)
            ->addFirstName('firstName')
            ->addLastName('lastName')
            ->addUsername('username')
            ->addEmail('email')
            ->addPhoneNumber('phoneNumber')
            ->addCompany('companyName')

            ->setSex(Sex::MALE)

            ->build();

        $this->assertInstanceOf(Citizen::class, $entity);

        $this->assertContains($entity->getFirstName(), Person::MALE_FIRST_NAMES);
        $this->assertContains($entity->getLastName(), Person::MALE_SURNAMES);
        $this->assertContains($entity->getUsername(), Person::USERNAMES);
        $this->assertContains($entity->email, Person::EMAILS);
        $this->assertStringStartsWith('+420', $entity->getPhoneNumber());
        $this->assertEquals(13, strlen($entity->getPhoneNumber()));
        $this->assertContains($entity->getCompanyName(), Company::NAMES);
    }
}

class Citizen
{
    private string $firstName;
    private string $lastName;
    private string $username;
    public string $email;
    private string $phoneNumber;
    private string $companyName;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }
}
