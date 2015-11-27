steevanb\FormUtils\FieldTrait
================================

This trait offer you an object vision of generating options for FormType fields.

Usage in buildForm()
--------------------

```php
class BarType extends AbstractType
{
    use steevanb\FormUtils\FieldTrait;

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
    use steevanb\FormUtils\FieldTrait;

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
getFieldButton($label = null) : Field\Button
getFieldReset($label = null) : Field\Reset
getFieldSubmit($label = null, array $validationGroups = null) :  Field\Submit
getFieldText($label = null, $required = true) : Field\Text
getFieldEmail($label = null, $required = true) : Field\Email
getFieldPassword($label = null, $required = true) : Field\Password
getFieldSearch($label = null, $required = true) : Field\Search
getFieldUrl($label = null, $required = true) : Field\Url
getFieldTextArea($label = null, $required = true) : Field\Textarea
getFieldDate($label = null, $format = null, $widget = Field\Date::WIDGET_CHOICE, $required = true) : Field\Date
getFieldBirthday($label = null, $format = null, $widget = FieldsType\Birthday::WIDGET_CHOICE, $required = true) : Field\Birthday
getFieldTime($label = null, $widget = Field\Time::WIDGET_CHOICE, $required = true) : Field\Time
getFieldDateTime($label = null, $dateFormat = null, $widget = Field\DateTime::WIDGET_CHOICE, $required = true) : Field\DateTime
getFieldInteger($label = null, $required = true) : Field\Integer
getFieldNumber($label = null, $required = true) : Field\Number
getFieldPercent($label = null, $type = Field\Percent::TYPE_FRACTIONAL, $required = true) : Field\Percent
getFieldMoney($label = null, $currency = 'EUR', $required = true) : Field\Money
getFieldChoice($label = null, array $choices = array(), $required = true) : Field\Choice
getFieldEntity($class, $property = null, $label = null, $required = true) : Field\Entity
getFieldCountry($label = null, $required = true) : Field\Country
getFieldLanguage($label = null, $required = true) : Field\Language
getFieldLocale($label = null, $required = true) : Field\Locale
getFieldTimezone($label = null, $required = true) : Field\Timezone
getFieldCurrency($label = null, $required = true) : Field\Currency
getFieldHidden($data = null) : Field\Hidden
getFieldCheckbox($label = null, $required = true) : Field\Checkbox
getFieldCollection($type, $label = null, $required = true) : Field\Collection
```

[Back to index](../README.md)
