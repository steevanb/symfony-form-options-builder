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
