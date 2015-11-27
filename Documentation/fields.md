steevanb\FormUtils\OptionsBuilderTrait
================================

This trait offer you an object vision of generating options for FormType fields.

Usage in buildForm()
--------------------

```php
class BarType extends AbstractType
{
    use steevanb\FormUtils\OptionsBuilderTrait;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('field', 'text', $this
            ->getFieldText()
            ->asArray()
        );
        
        // another example with more calls
        $builder->add('email', 'email', $this
            ->getFieldEmail('E-mail')
            ->setRequired(false)
            ->setEmptyData('default@mail.com')
            ->setTrim(false)
            ->asArray()
        );
    }
}
```

Usage in form event
-------------------

```php
class BarType extends AbstractType
{
    use steevanb\FormUtils\OptionsBuilderTrait;

    public function onPreSetData(FormEvent $event)
    {
        $form = $event->getForm();
        
        $form->add('field', 'text', $this
            ->getFieldText()
            ->asArray()
        );
        
        // another example with more calls
        $form->add('email', 'email', $this
            ->getFieldEmail('E-mail')
            ->setRequired(false)
            ->setEmptyData('default@mail.com')
            ->setTrim(false)
            ->asArray()
        );
    }
}
```

Helpers for SF2 form types
--------------------------

```php
getFieldButton($label = null) : OptionsBuilder\Button
getFieldReset($label = null) : OptionsBuilder\Reset
getFieldSubmit($label = null, array $validationGroups = null) :  OptionsBuilder\Submit
getFieldText($label = null, $required = true) : OptionsBuilder\Text
getFieldEmail($label = null, $required = true) : OptionsBuilder\Email
getFieldPassword($label = null, $required = true) : OptionsBuilder\Password
getFieldSearch($label = null, $required = true) : OptionsBuilder\Search
getFieldUrl($label = null, $required = true) : OptionsBuilder\Url
getFieldTextArea($label = null, $required = true) : OptionsBuilder\Textarea
getFieldDate($label = null, $format = null, $widget = OptionsBuilder\Date::WIDGET_CHOICE, $required = true) : OptionsBuilder\Date
getFieldBirthday($label = null, $format = null, $widget = FieldsType\Birthday::WIDGET_CHOICE, $required = true) : OptionsBuilder\Birthday
getFieldTime($label = null, $widget = OptionsBuilder\Time::WIDGET_CHOICE, $required = true) : OptionsBuilder\Time
getFieldDateTime($label = null, $dateFormat = null, $widget = OptionsBuilder\DateTime::WIDGET_CHOICE, $required = true) : OptionsBuilder\DateTime
getFieldInteger($label = null, $required = true) : OptionsBuilder\Integer
getFieldNumber($label = null, $required = true) : OptionsBuilder\Number
getFieldPercent($label = null, $type = OptionsBuilder\Percent::TYPE_FRACTIONAL, $required = true) : OptionsBuilder\Percent
getFieldMoney($label = null, $currency = 'EUR', $required = true) : OptionsBuilder\Money
getFieldChoice($label = null, array $choices = array(), $required = true) : OptionsBuilder\Choice
getFieldEntity($class, $property = null, $label = null, $required = true) : OptionsBuilder\Entity
getFieldCountry($label = null, $required = true) : OptionsBuilder\Country
getFieldLanguage($label = null, $required = true) : OptionsBuilder\Language
getFieldLocale($label = null, $required = true) : OptionsBuilder\Locale
getFieldTimezone($label = null, $required = true) : OptionsBuilder\Timezone
getFieldCurrency($label = null, $required = true) : OptionsBuilder\Currency
getFieldHidden($data = null) : OptionsBuilder\Hidden
getFieldCheckbox($label = null, $required = true) : OptionsBuilder\Checkbox
getFieldCollection($type, $label = null, $required = true) : OptionsBuilder\Collection
```

[Back to index](../README.md)
