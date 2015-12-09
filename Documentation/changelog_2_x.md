2.1.2 (2015-12-09)
------------------

- Rename setPlaceHolder() to setAttrPlaceHolder() in EmailOptionsBuilder, IntegerOptionsBuilder,
MoneyOptionsBuilder, NumberOptionsBuilder, PasswordOptionsBuilder, PercentOptionsBuilder,
SearchOptionsBuilder, TextOptionsBuilder, TextareaOptionsBuilder and UrlOptionsBuilder

2.1.1 (2015-12-08)
------------------

- NameTrait is deprecated since Symfony 2.8, use BlockPrefixTrait instead
- OptionBuilder::getBuilderType() new return FQCN, instead of service id (deprecated since Symfony 2.8)
- Add setEntryType() and getEntryType() to CollectionOptionsBuilder, to replace deprecated setType() and getType() since Symfony 2.8
- Add setEntryOptions() and getEntryOptions() to CollectionOptionsBuilder, to replace deprecated setOptions() and getOptions() since Symfony 2.8
- Remove EntityOptionsBuilder::setRequireOptions() (not a good idead)
 
2.1.0 (2015-12-03)
------------------

- Add [FormOptionsBuilder](formoptionsbuilder.md) and [RootFormOptionsBuilder](formoptionsbuilder.md)
- Fix some PHPDoc types and links
- Add removeFoo() for each option, to really remove option in array result instead of set it to null
- Add setBlockName() and getBlockName() to all types
- Add setCompound() and getCompound() to all types

2.0.2 (2015-12-02)
------------------

- Fix use of ChoicesListTrait in EntityOptionsBuilder

2.0.1 (2015-12-02)
------------------

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

2.0.0 (2015-11-27)
------------------

- Completly rewritten
- Remove default value for getters and __construct()
- You can use PHP 5.6 variadic syntax to add your options easily

[Back to index](../README.md)