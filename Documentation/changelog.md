1.3.3 (2015-09-30)
------------------

- Add steevanb\FormUtils\Fields\Traits\ByReference, use it in getFieldCollection() and add it to getFieldEntity(). This allows both to call setByReference() and getByReference()

1.3.2 (2015-09-28)
------------------

- Add setChoiceAttr() and getChoiceAttr() to getFieldEntity(), getFieldCountry() and getFieldLocale()

1.3.1 (2015-09-18)
------------------

- Add PlaceHolder trait to Email, Integer, Money, Number, Password, Precent, Search, Textarea and Url

1.3.0 (2015-09-18)
------------------

- Add BaseType::removeAttr()
- Add setAutofocus() and getAutofocus() on Button, Email, Entity, Integer, Money, Number, Password, Percent, Reset, Search, Submit, Text, Textarea, DateTimeCommon and Url

1.2.0 (2015-09-16)
------------------

- Add default value to true to setAllowAdd(), setAllowDelete(), setDeleteEmpty(), setPrototype(), setCascadeValidation(), setExpanded() and setByReference()
- Add setRepositoryMethod() to getFieldEntity()
- Fix PHPDoc @return for setTranslationDomain()

1.1.2 (2015-08-21)
------------------

- Fix getFieldHidden() with empty $data

1.1.1 (2015-08-11)
------------------

- Add $name parameter to getAttr()
- Fix setPlaceHolder() and getPlaceHolder()
- Add PlaceHolder trait to Text field

1.1.0 (2015-08-03)
------------------

- Add getFieldCollection() to steevanb\FormUtils\Traits\Fields
- Add steevanb\FormUtils\Traits\TranslatorAware
- Add steevanb\FormUtils\Traits\TranslatorAwareWithConstruct
- Create documentation

1.0.0 (2015-07-13)
------------------

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

[Back to index](../README.md)
