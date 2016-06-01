[![version](https://img.shields.io/badge/version-3.0.0-green.svg)](https://github.com/steevanb/symfony-form-options-builder/tree/3.0.0)
[![symfony](https://img.shields.io/badge/symfony-%3E%3D%202.3-blue.svg)](https://symfony.com/)
![Total Downloads](https://poser.pugx.org/steevanb/symfony-form-options-builder/downloads)
[![SensionLabsInsight](https://img.shields.io/badge/SensionLabsInsight-platinum-brightgreen.svg)](https://insight.sensiolabs.com/projects/1353611f-3e46-4f92-a473-8a34cf2f23ec/analyses/2)
[![Scrutinizer](https://scrutinizer-ci.com/g/steevanb/symfony-form-options-builder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/steevanb/symfony-form-options-builder/)

symfony-form-options-builder
============================

SF2FormUtils helps you writing your SF2 FormType, with some traits and methods to add fields in buildForm() instead of
array with some mysterious keys, and other stuff.

[Installation](Documentation/installation.md)

[Changelog 3.* (Symfony ^3)](Documentation/changelog_3_x.md)

[Changelog 2.* (Symfony ^2.3)](Documentation/changelog_2_x.md)

[Changelog 1.* (Symfony ^2.3)](Documentation/changelog_1_x.md)

Object oriented FormType
------------------------

FormType::buildForm() object oriented instead of array

[Documentation](Documentation/optionsbuilder.md)

steevanb\SymfonyFormOptionsBuilder\BlockPrefixTrait
---------------------------------------------------

Add getBlockPrefix(), to always return same syntax for form type getBlockPrefix() method : form_type_FormTypeClassName
