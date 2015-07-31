steevanb\FormUtils\Traits\Fields
================================

It change the way of buildForm() is written. With this trait, it is object oriented instead of array with some mysterious keys.

Usage
-----

```php
<?php

namespace FooBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use steevanb\FormUtils\Traits\Fields;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BarType extends AbstractType
{
    use Fields;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // call this to save $builder, used by all Fields::getFieldXXX methods
        $this->setBuilder($builder);
        
        // now, you can call $this->getFieldXXX() methods, and always call add() at the end
        // each getFieldXXX() constructors are different, to ask you required parameters and common used one (like label and required)
        $this->getFieldText('name', 'Name')->add();
        
        // another example with more calls
        $this
            ->getFieldEmail('email', 'E-mail')
            ->setRequired(false)
            ->setEmptyData('default@mail.com')
            ->setTrim(false)
            ->add()
        ;
    }
}
```

Helpers for SF2 form types
--------------------------

```php
getFieldButton($id, $label = null) : Fields\Button
getFieldReset($id, $label = null) : Fields\Reset
getFieldSubmit($id, $label = null, array $validationGroups = null) :  Fields\Submit
getFieldText($id, $label = null, $required = true) : Fields\Text
getFieldEmail($id, $label = null, $required = true) : Fields\Email
getFieldPassword($id, $label = null, $required = true) : Fields\Password
getFieldSearch($id, $label = null, $required = true) : Fields\Search
getFieldUrl($id, $label = null, $required = true) : Fields\Url
getFieldTextArea($id, $label = null, $required = true) : Fields\Textarea
getFieldDate($id, $label = null, $format = null, $widget = Fields\Date::WIDGET_CHOICE, $required = true) : Fields\Date
getFieldBirthday($id, $label = null, $format = null, $widget = FieldsType\Birthday::WIDGET_CHOICE, $required = true) : Fields\Birthday
getFieldTime($id, $label = null, $widget = Fields\Time::WIDGET_CHOICE, $required = true) : Fields\Time
getFieldDateTime($id, $label = null, $dateFormat = null, $widget = Fields\DateTime::WIDGET_CHOICE, $required = true) : Fields\DateTime
getFieldInteger($id, $label = null, $required = true) : Fields\Integer
getFieldNumber($id, $label = null, $required = true) : Fields\Number
getFieldPercent($id, $label = null, $type = Fields\Percent::TYPE_FRACTIONAL, $required = true) : Fields\Percent
getFieldMoney($id, $label = null, $currency = 'EUR', $required = true) : Fields\Money
getFieldChoice($id, $label = null, array $choices = array(), $required = true) : Fields\Choice
getFieldEntity($id, $class, $property = null, $label = null, $required = true) : Fields\Entity
getFieldCountry($id, $label = null, $required = true) : Fields\Country
getFieldLanguage($id, $label = null, $required = true) : Fields\Language
getFieldLocale($id, $label = null, $required = true) : Fields\Locale
getFieldTimezone($id, $label = null, $required = true) : Fields\Timezone
getFieldCurrency($id, $label = null, $required = true) : Fields\Currency
getFieldHidden($id, $data = null) : Fields\Hidden
getFieldCheckbox($id, $label = null, $required = true) : Fields\Checkbox
getFieldCollection($id, $type, $label = null, $required = true) : Fields\Collection
```

[Back to index](../README.md)
