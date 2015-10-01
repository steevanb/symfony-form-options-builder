[![version](https://img.shields.io/badge/version-1.3.4-green.svg)](https://github.com/steevanb/sf2-form-utils/tree/1.3.4)
[![symfony](https://img.shields.io/badge/symfony-%3E%3D%202.3-blue.svg)](https://symfony.com/)
[![SensionLabsInsight](https://img.shields.io/badge/SensionLabsInsight-platinum-brightgreen.svg)](https://insight.sensiolabs.com/projects/0f599bbe-1431-4f4c-aa7a-2b25c4c121df/analyses/18)
[![Scrutinizer](https://img.shields.io/badge/scrutinizer-10%2F10-brightgreen.svg)](https://scrutinizer-ci.com/g/steevanb/sf2-form-utils/inspections/d7a12ac5-c856-4d39-86a7-93e6f5591059)

sf2-form-utils
==============

SF2FormUtils helps you writing your SF2 FormType, with some traits and methods to add fields in buildForm() instead of array with some mysterious keys, and other stuff.

[Installation](Documentation/installation.md)

[Changelog](Documentation/changelog.md)

Traits\Fields
--------------------------------

FormType::buildForm() object oriented instead of array

[Documentation](Documentation/fields.md)

Traits\Name
------------------------------

Add getName(), allows to always return same syntax for form type name

Traits\TranslatorAware
-----------------------------------------

Add setTranslator(TranslatorInterface $translator) and getTranslator()

Traits\TranslatorAwareWithConstruct
------------------------------------------------------

Based on TranslatorAware, add __construct(TranslatorInterface $translator) with setTranslator($translator) call
