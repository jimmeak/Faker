<?php

namespace Jimmeak\FakerBundle\Builder;

use InvalidArgumentException;
use Jimmeak\FakerBundle\Configuration\AbstractConfig;
use Jimmeak\FakerBundle\Configuration\ColorConfig;
use Jimmeak\FakerBundle\Configuration\CompanyConfig;
use Jimmeak\FakerBundle\Configuration\CompanyTypeConfig;
use Jimmeak\FakerBundle\Configuration\EmailConfig;
use Jimmeak\FakerBundle\Configuration\FirstNameConfig;
use Jimmeak\FakerBundle\Configuration\FloatConfig;
use Jimmeak\FakerBundle\Configuration\FullNameConfig;
use Jimmeak\FakerBundle\Configuration\GenderConfig;
use Jimmeak\FakerBundle\Configuration\IntConfig;
use Jimmeak\FakerBundle\Configuration\ItemConfig;
use Jimmeak\FakerBundle\Configuration\JobConfig;
use Jimmeak\FakerBundle\Configuration\LastNameConfig;
use Jimmeak\FakerBundle\Configuration\ParagraphConfig;
use Jimmeak\FakerBundle\Configuration\PhoneConfig;
use Jimmeak\FakerBundle\Configuration\PhoneNumberConfig;
use Jimmeak\FakerBundle\Configuration\SentenceConfig;
use Jimmeak\FakerBundle\Configuration\SexConfig;
use Jimmeak\FakerBundle\Configuration\TextConfig;
use Jimmeak\FakerBundle\Configuration\TitleConfig;
use Jimmeak\FakerBundle\Configuration\UsernameConfig;
use Jimmeak\FakerBundle\Configuration\WordConfig;
use Jimmeak\FakerBundle\Dictionary\Color;
use Jimmeak\FakerBundle\Enum\Sex;
use Jimmeak\FakerBundle\Generator;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

class EntityBuilder
{
    private Sex|null $sex = null;
    private string $entityFqcn;

    /**
     * @var array<int|string, mixed>
     */
    private array $constructorArgs;

    /**
     * @var array<string, AbstractConfig>
     */
    private array $configurations;

    final public function __construct()
    {
    }

    public static function createEntityBuilder(string $entityFqcn): static
    {
        $entityBuilder = new static();
        $entityBuilder->entityFqcn = $entityFqcn;
        $entityBuilder->constructorArgs = [];
        $entityBuilder->configurations = [];

        return $entityBuilder;
    }

    public function setSex(Sex $sex): static
    {
        $this->sex = $sex;

        return $this;
    }

    public function addConstructorArgument(int|string $index, mixed $value): static
    {
        $this->constructorArgs[$index] = $value;

        return $this;
    }

    private static function findGeneratorConfig(string $generatorName): string
    {
        return match ($generatorName) {
            'color' => ColorConfig::class,
            'company' => CompanyConfig::class,
            'companyType' => CompanyTypeConfig::class,
            'email' => EmailConfig::class,
            'firstName' => FirstNameConfig::class,
            'float' => FloatConfig::class,
            'fullName' => FullNameConfig::class,
            'gender' => GenderConfig::class,
            'int' => IntConfig::class,
            'item' => ItemConfig::class,
            'job' => JobConfig::class,
            'lastName' => LastNameConfig::class,
            'paragraph' => ParagraphConfig::class,
            'phone' => PhoneConfig::class,
            'phoneNumber' => PhoneNumberConfig::class,
            'sentence' => SentenceConfig::class,
            'sex' => SexConfig::class,
            'text' => TextConfig::class,
            'title' => TitleConfig::class,
            'username' => UsernameConfig::class,
            'word' => WordConfig::class,
            default => throw new InvalidArgumentException(sprintf('Generator %s does not exist.', $generatorName))
        };
    }

    public function addColor(string $propertyName): static
    {
        $this->addConfiguration(ColorConfig::new($propertyName));

        return $this;
    }

    public function addCompany(string $propertyName): static
    {
        $this->addConfiguration(CompanyConfig::new($propertyName));

        return $this;
    }

    public function addCompanyType(string $propertyName): static
    {
        $this->addConfiguration(CompanyTypeConfig::new($propertyName));

        return $this;
    }

    public function addEmail(string $propertyName): static
    {
        $this->addConfiguration(EmailConfig::new($propertyName));

        return $this;
    }

    public function addFirstName(string $propertyName, Sex $sex = null): static
    {
        $this->addConfiguration(FirstNameConfig::new($propertyName, $sex));

        return $this;
    }

    public function addFloat(string $propertyName, float $from = null, float $to = null, float $precision = null): static
    {
        $this->addConfiguration(FloatConfig::new($propertyName, $from, $to, $precision));

        return $this;
    }

    public function addFullName(string $propertyName, Sex $sex = null): static
    {
        $this->addConfiguration(FullNameConfig::new($propertyName, $sex));

        return $this;
    }

    public function addGender(string $propertyName): static
    {
        $this->addConfiguration(GenderConfig::new($propertyName));

        return $this;
    }

    public function addInt(string $propertyName, int $from = null, int $to = null): static
    {
        $this->addConfiguration(IntConfig::new($propertyName, $from, $to));

        return $this;
    }

    public function addItem(string $propertyName): static
    {
        $this->addConfiguration(ItemConfig::new($propertyName));

        return $this;
    }

    public function addJob(string $propertyName, Sex $sex = null): static
    {
        $this->addConfiguration(JobConfig::new($propertyName, $sex));

        return $this;
    }

    public function addLastName(string $propertyName, Sex $sex = null): static
    {
        $this->addConfiguration(LastNameConfig::new($propertyName, $sex));

        return $this;
    }

    public function addParagraph(string $propertyName, int $amount = 2): static
    {
        $this->addConfiguration(ParagraphConfig::new($propertyName, $amount));

        return $this;
    }

    public function addPhone(string $propertyName): static
    {
        $this->addConfiguration(PhoneConfig::new($propertyName));

        return $this;
    }

    public function addPhoneNumber(string $propertyName): static
    {
        $this->addConfiguration(PhoneNumberConfig::new($propertyName));

        return $this;
    }

    public function addSentence(string $propertyName, int $amount = 1, int $composed = 1): static
    {
        $this->addConfiguration(SentenceConfig::new($propertyName, $amount, $composed));

        return $this;
    }

    public function addSex(string $propertyName): static
    {
        $this->addConfiguration(SexConfig::new($propertyName, true));

        return $this;
    }

    public function addText(string $propertyName, int $words = 2): static
    {
        $this->addConfiguration(TextConfig::new($propertyName, $words));

        return $this;
    }

    public function addTitle(string $propertyName): static
    {
        $this->addConfiguration(TitleConfig::new($propertyName));

        return $this;
    }

    public function addUsername(string $propertyName): static
    {
        $this->addConfiguration(UsernameConfig::new($propertyName));

        return $this;
    }

    public function addWords(string $propertyName, int $amount = 1): static
    {
        $this->addConfiguration(WordConfig::new($propertyName, $amount));

        return $this;
    }

    public function addConfiguration(AbstractConfig $config): static
    {
        $this->configurations[$config->getPropertyName()] = $config;

        return $this;
    }

    /**
     * @throws ReflectionException
     */
    public function build(): object
    {
        if (!class_exists($this->entityFqcn)) {
            throw new RuntimeException(sprintf('Class %s does not exist.', $this->entityFqcn));
        }

        $reflection = new ReflectionClass($this->entityFqcn);
        $entity = $reflection->newInstanceArgs($this->constructorArgs);

        foreach ($this->configurations as $propertyName => $configuration) {
            $methodName = sprintf('set%s', ucfirst($propertyName));

            $config = $configuration->getConfig();
            $generatorName = $config['generatorName'];
            if (!is_string($generatorName)) {
                throw new RuntimeException(sprintf('Invalid generator name for property %s.', $propertyName));
            }


            $generatorMethodName = sprintf('%s', $generatorName);
            $generatorOptions = $this->findGeneratorProps($configuration);

            $value = Generator::$generatorMethodName(...$generatorOptions);

            if (method_exists($entity, $methodName)) {
                $entity->$methodName($value);
                continue;
            }

            if ($reflection->getProperty($propertyName)->isPublic()) {
                $entity->$propertyName = $value;
                continue;
            }

            throw new RuntimeException(sprintf('Provided property %s can not be modified. There is no setter and the variable is not public.', $propertyName));
        }

        return $entity;
    }

    /**
     * @return array<string, string>
     * @throws ReflectionException
     */
    private function findGeneratorProps(AbstractConfig $configuration): array
    {
        if (!method_exists($configuration, 'getProps')) {
            return [];
        }

        $props = $configuration->getProps();

        if ($this->sex instanceof Sex) {
            $havingSexProperties = self::havingSex($configuration->getGeneratorName());
            foreach ($havingSexProperties as $property) {
                if (null === $props[$property] ?? null) {
                    $props[$property] = $this->sex;
                }
            }
        }

        return $props;
    }

    /**
     * @return iterable<string>|false
     *
     * @throws ReflectionException
     */
    private static function havingSex(string $generatorName): iterable|false
    {
        $reflection = new ReflectionClass(Generator::class);
        $method = $reflection->getMethod($generatorName);
        foreach ($method->getParameters() as $parameter) {
            if ($parameter->getType()->getName() === Sex::class) {
                yield $parameter->getName();
            }
        }
    }
}
