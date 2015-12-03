[![version](https://img.shields.io/badge/version-2.1.0-green.svg)](https://github.com/steevanb/sf2-form-utils/tree/2.1.0)
[![symfony](https://img.shields.io/badge/symfony-%3E%3D%202.3-blue.svg)](https://symfony.com/)
![Total Downloads](https://poser.pugx.org/steevanb/sf2-form-utils/downloads)
[![SensionLabsInsight](https://img.shields.io/badge/SensionLabsInsight-platinum-brightgreen.svg)](https://insight.sensiolabs.com/projects/0f599bbe-1431-4f4c-aa7a-2b25c4c121df/analyses/26)
[![Scrutinizer](https://img.shields.io/badge/scrutinizer-10%2F10-brightgreen.svg)](https://scrutinizer-ci.com/g/steevanb/sf2-form-utils/)

sf2-form-utils
==============

SF2FormUtils helps you writing your SF2 FormType, with some traits and methods to add fields in buildForm() instead of array with some mysterious keys, and other stuff.

[Installation](Documentation/installation.md)

[Changelog 2.x](Documentation/changelog_2_x.md)

[Changelog 1.x](Documentation/changelog_1_x.md)

Object oriented FormType
------------------------

FormType::buildForm() object oriented instead of array

[Documentation](Documentation/optionsbuilder.md)

steevanb\FormUtils\NameTrait
------------------------------

Add getName(), allows to always return same syntax for form type name : form_type_FormTypeClassName
