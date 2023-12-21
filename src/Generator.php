<?php

namespace Jimmeak\FakerBundle;

use InvalidArgumentException;
use Jimmeak\FakerBundle\Dictionary\Color;
use Jimmeak\FakerBundle\Dictionary\Company;
use Jimmeak\FakerBundle\Dictionary\Item;
use Jimmeak\FakerBundle\Dictionary\Person;
use Jimmeak\FakerBundle\Dictionary\Text;
use Jimmeak\FakerBundle\Enum\Sex;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

class Generator
{
    /**
     * @param array<string, array<int, string>> $configuration
     *
     * @throws ReflectionException
     */
    public static function object(string $entityFqcn, array $configuration, bool $autoconfiguration = false): object
    {
        $entity = new $entityFqcn();

        $reflection = new ReflectionClass($entity);

        var_dump($configuration);

        foreach ($configuration as $column => $generator) {
            $methodName = 'set' . ucfirst($column);
            if ($reflection->getMethod($methodName)->isPublic()) {
                $entity->$methodName(self::{$generator[0]}());
                continue;
            }

            $property = $reflection->getProperty($column);
            if ($property->isPublic()) {
                $name = $property->getName();
                $entity->$name = self::{$generator[0]}();
            }
        }

        return $entity;
    }

    /**
     * @param array<string|int, mixed> $array
     */
    public static function randomElementOf(array $array): mixed
    {
        return $array[array_rand($array)];
    }

    public static function int(int $from = null, int $to = null): int
    {
        $from ??= PHP_INT_MIN;
        $to ??= PHP_INT_MAX;

        if ($from > $to) {
            throw new InvalidArgumentException('Parameter $from must have lower value than $to.');
        }

        return random_int($from, $to);
    }

    public static function float(float $from = null, float $to = null, int $precision = null): float
    {
        $from ??= PHP_FLOAT_MIN;
        $to ??= PHP_FLOAT_MAX;
        $precision ??= PHP_FLOAT_DIG;

        if ($precision > 15 || $from > $to) {
            throw new InvalidArgumentException('Float precision can not exceed 15 digits.');
        }

        // can this work, if the generated number is bigger than 1/2?
        return round(random_int(0, PHP_INT_MAX) / PHP_INT_MAX * ($to - $from) + $from, $precision);
    }

    /**
     * Retrieves the first name of a person based on their sex.
     *
     * @param Sex|null $sex The sex of the person. If not provided, a random first name will be returned.
     *
     * @return string The first name of the person.
     */
    public static function firstName(Sex $sex = null): string
    {
        return Person::firstName($sex);
    }

    public static function lastName(Sex $sex = null): string
    {
        return Person::lastName($sex);
    }

    public static function username(): string
    {
        return Person::username();
    }

    public static function title(): string
    {
        return Person::academicTitle();
    }

    public static function job(Sex $sex = null): string
    {
        return Person::job($sex);
    }

    public static function email(): string
    {
        return Person::email();
    }

    public static function fullName(Sex $sex = null): string
    {
        $sex ??= self::sex(asString: false);
        if (!$sex instanceof Sex) {
            throw new RuntimeException('Sex must be an instance of Sex');
        }

        return sprintf('%s %s', Person::firstName($sex), Person::lastName($sex));
    }

    public static function sex(bool $asString = true): Sex|string
    {
        return $asString ? Person::sex() : Sex::from(Person::sex());
    }

    public static function gender(): string
    {
        return Person::gender();
    }

    public static function words(int $amount = 1): string
    {
        if ($amount < 1) {
            throw new InvalidArgumentException('You can not insert amount of words less than 1.');
        }

        $string = '';
        for ($i = 0; $i < $amount; ++$i) {
            $string .= ' ' . Text::word();
        }

        return trim($string);
    }

    public static function sentence(int $amount = 1, int $composed = 1): string
    {
        if ($amount < 1 || $composed < 0) {
            throw new InvalidArgumentException('Amount or Composed arguments bust be positive integers.');
        }

        $string = '';
        for ($i = 0; $i < $amount; ++$i) {
            $string .= ' ' . (1 === $composed ? Text::createSimpleSentence() : Text::createComposedSentence($composed));
        }

        return trim($string);
    }

    public static function paragraph(int $sentences = 2): string
    {
        if ($sentences < 1) {
            throw new InvalidArgumentException('There must be at least 1 sentence in paragraphs');
        }

        if (1 === $sentences) {
            throw new InvalidArgumentException('If you want to generate one sentence, use sentence() instead.');
        }

        $string = '';
        for ($i = 0; $i < $sentences; ++$i) {
            $string .= ' ' . self::sentence(composed: 2);
        }

        return trim($string);
    }

    public static function text(int $words = 200): string
    {
        return Text::text($words);
    }

    public static function color(): string
    {
        return Color::color();
    }

    public static function company(): string
    {
        return Company::companyName();
    }

    public static function companyType(): string
    {
        return Company::companyType();
    }

    public static function item(): string
    {
        return Item::item();
    }

    public static function phone(): string
    {
        return Item::phone();
    }

    public static function phoneNumber(): string
    {
        return Person::phoneNumber();
    }
}
