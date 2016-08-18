3.2.1 (2016-09-18)
------------------

- Add setFlippedChoices() to ChoiceOptionsBuilder, CountryOptionsBuilder, CurrencyOptionsBuilder, EntityOptionsBuilder, LanguageOptionsBuilder, LocaleOptionsBuilder and TimezoneOptionsBuilder, to replace remove choice_as_values config
- Fix Symfony documentation links to 3.0 instead of current

3.2.0 (2016-07-04)
------------------

- Fix PHPDoc to allow false to setLabel() and setTranslationDomain()
- Add steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\FileOptionsBuilder

3.1.0 (2016-06-09)
------------------

- Add steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\FixDisabledBugOptionsBuilder, to fix a bug who delete your record when all FormType fields are disabled

3.0.0 (2016-06-01)
------------------

- Remove all Symfony 2.8 deprecated, deleted in Symfony 3 :
    - Remove steevanb\SymfonyFormOptionsBuilder\Behavior\CascadeValidationTrait,
        so setCascadeValidation() and getCascadeValidation() are removed everywhere.
        If you want to cascade validation like before, add Valid validator to your property.
    - Remove steevanb\SymfonyFormOptionsBuilder\Behavior\MaxLengthTrait,
        so setMaxLength() and getMaxLength() are removed everywhere.
        Use setAttr(['maxlength' => 1]) or addAttr('maxlength', 1) instead.
    - Remove steevanb\SymfonyFormOptionsBuilder\Behavior\ReadOnlyTrait,
        so setReadOnly and getReadOnly are removed everywhere.
        Use setAttr(['readonly' => 'readonly']) or addAttr('readonly', 'readonly') instead.
    - Remove steevanb\SymfonyFormOptionsBuilder\NameTrait, use steevanb\SymfonyFormOptionsBuilder\BlockPrefixTrait instead.
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder::setPattern() and getPattern().
    - Remove ChoiceTypeTrait::setChoiceList() and getChoiceList().
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\ChoicesListTrait,
        so setChoiceList() and getChoiceList() are removed everywhere
    - Remove ChoiceTypeTrait::setChoicesAsValues() and getChoicesAsValues().
    - Remove ChoiceTypeTrait::setEmptyValue() and getEmptyValue(), use setPlaceholder() and getPlaceholder() instead
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\Behavior\ScaleTrait::setPrecision() and getPrecision(),
        so setPrecision() and getPrecision() are removed everywhere.
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\CollectionOptionsBuilder::setOptions() and getOptions(),
        use setEntryOptions() and getEntryOptions() instead.
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\CollectionOptionsBuilder::setType() and getType(),
        use setEntryType() and getEntryType() instead.
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\EntityOptionsBuilder::setProperty() and getProperty(),
        use setChoiceLabel() and getChoiceLabel() instead.
    - Remove steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\MoneyOptionsBuilder::getPrecision()
- Fix setAttr() PHPDoc return type
- Fix CompoundTrait::setCompound(), who always et compound option to null
- Fix AbstractOptionsBuilder::setAutoInitialize() PHPDoc return type

[Back to index](../README.md)

