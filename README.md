[![version](https://img.shields.io/badge/version-1.0.0-green.svg)](https://github.com/steevanb/sf2-form-utils/tree/1.0.0)
[![symfony](https://img.shields.io/badge/symfony-%3E%3D%202.3-blue.svg)](https://symfony.com/)
[![SensionLabsInsight](https://img.shields.io/badge/SensionLabsInsight-platinum-brightgreen.svg)](https://insight.sensiolabs.com/projects/0f599bbe-1431-4f4c-aa7a-2b25c4c121df/analyses/7)
[![scrutinizer](https://img.shields.io/badge/scrutinizer-10%2F10-brightgreen.svg)](https://scrutinizer-ci.com/g/steevanb/sf2-form-utils/inspections/750fc534-d699-4710-905a-79ac5e9e01cd)

sf2-form-utils
==============

SF2FormUtils helps you writing your SF2 FormType, with some traits and methods to add fields in buildForm() instead of array with some mysterious keys, and other stuff.

[Installation](Documentation/installation.md)

[Changelog](Documentation/changelog.md)

Documentation
-------------

steevanb\FormUtils\Traits\Name : FormType::getName() always same return syntax

[steevanb\FormUtils\Traits\Fields](Documentation/fields.md) : FormType::buildForm() object oriented instead of array

steevanb\FormUtils\Traits\TranslatorAware : add setTranslator(TranslatorInterface $translator) and getTranslator()

steevanb\FormUtils\Traits\TranslatorAwareWithConstruct : based on TranslatorAware, add setTranslator() call in __construct(TranslatorInterface $translator)
