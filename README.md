[![version](https://img.shields.io/badge/version-5.0.0-green.svg)](https://github.com/steevanb/symfony-form-options-builder/tree/5.0.0)
[![php](https://img.shields.io/badge/php-^7.1||^8.0-blue.svg)](https://php.net)
[![symfony](https://img.shields.io/badge/symfony/form-^3||^4||^5||^6||^7-blue.svg)](https://symfony.com)
![Lines](https://img.shields.io/badge/code%20lines-4918-green.svg)
![Total Downloads](https://poser.pugx.org/steevanb/symfony-form-options-builder/downloads)
[![Scrutinizer](https://scrutinizer-ci.com/g/steevanb/symfony-form-options-builder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/steevanb/symfony-form-options-builder/)

symfony-form-options-builder
============================

It helps you writing your Symfony FormType, with some traits and methods to add fields in buildForm() instead of
array with some mysterious keys, and other stuff.

[Installation](documentation/installation.md)

[Changelog](changelog.md)

Object-oriented FormType
------------------------

FormType::buildForm() object oriented instead of array

Example:
```php
namespace FooBundle\Form\Type;

use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\EmailOptionsBuilder;
use Steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\TextOptionsBuilder;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        # Since PHP 5.5, you can use FooClass::class
        $builder->add('field_text', TextType::class, TextOptionsBuilder::create()->asArray());

        # Since PHP 5.6, you can use the variadic syntax. asVariadic() parameter is field name.
        $builder->add(
            ...EmailOptionsBuilder::create()
                ->setRequired(false)
                ->setPlaceHolder('default@mail.com')
                ->setTrim(false)
                ->asVariadic('field_email')
        );
    }
}
```

[More documentation](documentation/optionsbuilder.md)

BlockPrefixTrait
----------------

Add getBlockPrefix(), to always return same syntax for form type getBlockPrefix() method: form_type_formtypeclassname

Example:
```php
namespace FooBundle\Form\Type;

use Steevanb\SymfonyFormOptionsBuilder\BlockPrefixTrait;

class BarType extends AbstractType
{
    # Use this trait to define getBlockPrefix() required method. It will return form_type_bar
    use BlockPrefixTrait;
}
```
