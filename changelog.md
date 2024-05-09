### [5.1.0](../../compare/5.0.0...5.1.0) - 2023-05-09

- Add conditionnal array shapes on `asVariadic()`
- Add class-string on `setClass()` and `getClass()`
- Add `EnumOptionsBuilder`
- Add `ClassTrait`

### [5.0.0](../../compare/4.4.1...5.5.0) - 2024-04-19

- Move files from root to `src/`
- Change namespace from `steevanb\SymfonyFormOptionsBuilder` to `Steevanb\SymfonyFormOptionsBuilder`
- [BC Break] Remove `BlockPrefixTrait`, symfony does the same trick now
- [BC Break] Fix `removeEntryOptions()` name (it was `removeEntryOotions()`)
- [BC Break] Remove `services.yml`
- Add Symfony ^7.0 compatibility

### [4.4.1](../../compare/4.4.0...4.4.1) - 2023-07-31

- Fix ObjectRepository namespace changed by `doctrine/common`

### [4.4.0](../../compare/4.3.0...4.4.0) - 2022-12-09

- Add compatibility with `symfony/form` ^6.0

### [4.3.0](../../compare/4.2.0...4.3.0) - 2021-11-29

- Add compatibility with PHP ^8.0

### [4.2.0](../../compare/4.1.0...4.2.0) - 2020-04-02

- Add `Html5Trait` to `NumberOptionsBuilder`

### [4.1.0](../../compare/4.0.0...4.1.0) - 2020-04-02

- Allow `symfony/form ^5.0`.

### [4.0.0](../../compare/3.3.2...4.0.0) - 2018-01-18

- PHP 7.1 syntax. When a parameter accept multiple types,
  (like `EntityOptionsBuilder::setQueryBuilder()`, who accept `string` or `QueryBuilder`),
  one setter per type instead of one setter for every types.
  Exemple: `EntityOptionsBuilder::setQueryBuilder()` and `EntityOptionsBuilder::setQueryBuilderClosure()`.
- PHP 7 function return type is strict, so it's hard to use in traits. So, removing lot of traits, which result in copy / paste code.
- Fix `FileOptionsBuilder::setMultiple()`.
- Add `removeFoo()` on each missed option, `EntityOptionsBuilder::removeGroupBy()` for exemple.
- Remove `$name` parameter for `getAttr()` and `removeAttr()`, use `getAttrByName()` and `setAttr()` instead.
- Remove `steevanb\SymfonyFormOptionsBuilder\Option`. So, all getters (`getOption()`, `getLabel()` etc) now return `null` when option is not defined, instead of `Option::DEFAULT_VALUE` before.
- `setLabel()`, `setChoiceLabel()` and `setTranslationDomain()` do not accept `false` now. Use `disableLabel()`, `disableChoiceLabel()` and `disableTranslationDomain()` instead.
- `setChoiceLabel()` do not accept `callable` now. Use `setChoiceLabelCallable()` instead.
- Remove `setAutocomplete()`, use `addAttr('autocomplete', true|false)` instead.
- Remove `setChoiceLabelNotTranslatable()`, use `disableChoiceLabel()` instead.
- Remove `setAutofocus()`, use `addAttr('autofocus', true|false)` instead.


### [3.3.2](../../compare/3.3.1...3.3.2) - 2016-02-15

- [ZeMarine](https://github.com/zemarine) Fix EntityOptionsBuilder::setRepositoryMethod() with $params is an array of params

### [3.3.1](../../compare/3.3.0...3.3.1) - 2016-11-17

- Rename service to steevanb.symfony_form_options_builder.entity_editable_query_builder_type

### [3.3.0](../../compare/3.2.2...3.3.0) - 2016-11-11

- Add steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\EntityEditableQueryBuilderOptionsBuilder, to add a callback called when getQuery() is performed.
  setCallBack() allow you to add your own callback, setPartialQueryCallBack() add a callback who add Query::HINT_FORCE_PARTIAL_LOAD hint.

### [3.2.2](../../compare/3.2.1...3.2.2) - 2016-08-31

- Use Doctrine\Common\Persistence\ObjectRepository instead of Doctrine\ORM\EntityRepository in EntityOptionsBuilder::setRepositoryMethod()

### [3.2.1](../../compare/3.2.0...3.2.1) - 2016-08-18

- Add setFlippedChoices() to ChoiceOptionsBuilder, CountryOptionsBuilder, CurrencyOptionsBuilder, EntityOptionsBuilder, LanguageOptionsBuilder, LocaleOptionsBuilder and TimezoneOptionsBuilder, to replace removed choice_as_values config
- Fix Symfony documentation links to 3.0 instead of current

### [3.2.0](../../compare/3.1.0...3.2.0) - 2016-07-04

- Fix PHPDoc to allow false to setLabel() and setTranslationDomain()
- Add steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\FileOptionsBuilder

### [3.1.0](../../compare/3.0.0...3.1.0)- 2016-06-09

- Add steevanb\SymfonyFormOptionsBuilder\OptionsBuilder\FixDisabledBugOptionsBuilder, to fix a bug who delete your record when all FormType fields are disabled

### 3.0.0 - 2016-06-01

- Remove all Symfony 2.8 deprecated, deleted in Symfony 3:
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

### 2.1.4 - 2016-05-30

- Change Symfony version, allow all 3.x

### 2.1.2 - 2015-12-09

- Rename setPlaceHolder() to setAttrPlaceHolder() in EmailOptionsBuilder, IntegerOptionsBuilder,
  MoneyOptionsBuilder, NumberOptionsBuilder, PasswordOptionsBuilder, PercentOptionsBuilder,
  SearchOptionsBuilder, TextOptionsBuilder, TextareaOptionsBuilder and UrlOptionsBuilder

### 2.1.1 - 2015-12-08

- NameTrait is deprecated since Symfony 2.8, use BlockPrefixTrait instead
- OptionBuilder::getBuilderType() new return FQCN, instead of service id (deprecated since Symfony 2.8)
- Add setEntryType() and getEntryType() to CollectionOptionsBuilder, to replace deprecated setType() and getType() since Symfony 2.8
- Add setEntryOptions() and getEntryOptions() to CollectionOptionsBuilder, to replace deprecated setOptions() and getOptions() since Symfony 2.8
- Remove EntityOptionsBuilder::setRequireOptions() (not a good idead)

### 2.1.0 - 2015-12-03

- Add [FormOptionsBuilder](formoptionsbuilder.md) and [RootFormOptionsBuilder](formoptionsbuilder.md)
- Fix some PHPDoc types and links
- Add removeFoo() for each option, to really remove option in array result instead of set it to null
- Add setBlockName() and getBlockName() to all types
- Add setCompound() and getCompound() to all types

### 2.0.2 - 2015-12-02

- Fix use of ChoicesListTrait in EntityOptionsBuilder

### 2.0.1 - 2015-12-02

- Remove CascadeValidationTrait, setCascadeValidation() and getCascadeValidation() included in AbstractOptionsBuilder
- Fix some PHPDoc for missing option value type
- Add setAction() and getAction() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setMethod() and getMethod() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setAllowExtraFields() and getAllowExtraFields() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setExtraFieldsMessage() and getExtraFieldsMessage() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setCompound() and getCompound() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setInheritData() and getInheritData() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setPattern() and getPattern() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setPostMaxSizeMessage() and getPostMaxSizeMessage() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setBlockName() and getBlockName() to AbstractOptionsBuilder (so, to each OptionsBuilder)
- Add setChoiceList() and getChoiceList() to ChoiceOptionsBuilder
- Add setChoiceLoader() and getChoiceLoader() to ChoiceOptionsBuilder
- Add setPlaceholderInChoices() and getPlaceholderInChoices() to ChoiceOptionsBuilder
- Add @deprecated for setChoiceList() and getChoiceList()
- Add MaxLengthTrait (setMaxLength() and getMaxLength()) to EmailOptionsBuilder, IntegerOptionsBuilder, NumberOptionsBuilder, PasswordOptionsBuilder, PercentOptionsBuilder, SearchOptionsBuilder, TextOptionsBuilder, TextareaOptionsBuilder and UrlOptionsBuilder
- Create DataClassTrait, and use it in EntityOptionsBuilder

### 2.0.0 - 2015-11-27

- Completly rewritten
- Remove default value for getters and __construct()
- You can use PHP 5.6 variadic syntax to add your options easily

### 1.4.2 - 2015-28-09

- Fix default value for getParameter(), in getAttr() and removeAttr()

### 1.4.1 - 2015-10-09

- Fix PHPDoc for setLabel() and setTranslationDomain() parameter
- Add setAutocomplete() and getAutocomplete() for getFieldEmail(), getFieldInteger(), getFieldMoney(), getFieldNumber(), getFieldPassword(), getFieldPercent(), getFieldText() and getFieldUrl()
- Fix PHPDoc return type for getAutofocus() 

### 1.4.0 - 2015-10-01

- Add all new Symfony 2.7 Choice options: setChoiceLabel(), setChoiceTranslationDomain(), setChoiceLabelNotTranslatable(), setChoiceName(), setChoiceValue(), setGroupBy() and setChoicesAsValues().
  Imply added to getFieldChoice(), getFieldCountry(), getFieldCurrency(), getFieldEntity(), getFieldLanguage(), getFieldLocale(), getFieldTimezone().

### 1.3.4 - 2015-10-01

- Add asMultipleSelect(), asSelect(), asRadioButtons() and asCheckboxes() to Choice types.
  Imply added to getFieldChoice(), getFieldCountry(), getFieldCurrency(), getFieldEntity(), getFieldLanguage(), getFieldLocale(), getFieldTimezone().

### 1.3.3 - 2015-09-30

- Add steevanb\FormUtils\Fields\Traits\ByReference, use it in getFieldCollection() and add it to getFieldEntity().
  This allows both to call setByReference() and getByReference()

### 1.3.2 - 2015-09-28

- Add setChoiceAttr() and getChoiceAttr() to getFieldEntity(), getFieldCountry() and getFieldLocale()

### 1.3.1 - 2015-09-18

- Add PlaceHolder trait to Email, Integer, Money, Number, Password, Precent, Search, Textarea and Url

### 1.3.0 - 2015-09-18

- Add BaseType::removeAttr()
- Add setAutofocus() and getAutofocus() on Button, Email, Entity, Integer, Money, Number, Password, Percent, Reset, Search, Submit, Text, Textarea, DateTimeCommon and Url

### 1.2.0 - 2015-09-16

- Add default value to true to setAllowAdd(), setAllowDelete(), setDeleteEmpty(), setPrototype(), setCascadeValidation(), setExpanded() and setByReference()
- Add setRepositoryMethod() to getFieldEntity()
- Fix PHPDoc @return for setTranslationDomain()

### 1.1.2 - 2015-08-21

- Fix getFieldHidden() with empty $data

### 1.1.1 - 2015-08-11

- Add $name parameter to getAttr()
- Fix setPlaceHolder() and getPlaceHolder()
- Add PlaceHolder trait to Text field

### 1.1.0 - 2015-08-03

- Add getFieldCollection() to steevanb\FormUtils\Traits\Fields
- Add steevanb\FormUtils\Traits\TranslatorAware
- Add steevanb\FormUtils\Traits\TranslatorAwareWithConstruct
- Create documentation

### 1.0.0 - 2015-07-13

- Add steevanb\FormUtils\Traits\Name, to have a generic FormType::getName()
- Add steevanb\FormUtils\Traits\Fields, to make FormType generation easiest
    - Add getFieldButton()
    - Add getFieldReset()
    - Add getFieldSubmit()
    - Add getFieldText()
    - Add getFieldEmail()
    - Add getFieldPassword()
    - Add getFieldSearch()
    - Add getFieldUrl()
    - Add getFieldTextArea()
    - Add getFieldDate()
    - Add getFieldBirthday()
    - Add getFieldTime()
    - Add getFieldDateTime()
    - Add getFieldInteger()
    - Add getFieldNumber()
    - Add getFieldPercent()
    - Add getFieldMoney()
    - Add getFieldChoice()
    - Add getFieldEntity()
    - Add getFieldCountry()
    - Add getFieldLanguage()
    - Add getFieldLocale()
    - Add getFieldTimezone()
    - Add getFieldCurrency()
    - Add getFieldHidden()
    - Add getFieldCheckbox()
