steevanb\FormUtils\OptionsBuilder\FooOptionsBuilder
===================================================

Thisd objects offer you an object vision of generating options for FormType fields.

Usage in buildForm()
--------------------

```php
use steevanb\FormUtils\OptionsBuilder\TextOptionsBuilder;
use steevanb\FormUtils\OptionsBuilder\EmailOptionsBuilder;

class BarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('field', 'text', TextOptionsBuilder::create()->asArray());
        
        # Since PHP 5.6, you can use the variadic syntax
        $builder->add(
            ...EmailOptionsBuilder::create()
                ->setRequired(false)
                ->setEmptyData('default@mail.com')
                ->setTrim(false)
                ->asVariadic('myField')
        );
    }
}
```

Usage in form event
-------------------

```php
use steevanb\FormUtils\OptionsBuilder\TextOptionsBuilder;
use steevanb\FormUtils\OptionsBuilder\EmailOptionsBuilder;

class BarType extends AbstractType
{
    use steevanb\FormUtils\OptionsBuilderTrait;

    public function onPreSetData(FormEvent $event)
    {
        $form = $event->getForm();
        
        $form->add('field', 'text', TextOptionsBuilder::create()->asArray());
                
        # Since PHP 5.6, you can use the variadic syntax
        $form->add(
            ...EmailOptionsBuilder::create()
                ->setRequired(false)
                ->setEmptyData('default@mail.com')
                ->setTrim(false)
                ->asVariadic('myField')
        );
    }
}
```

Helpers for SF2 form types
--------------------------

Do not hesitate to call autocompletion, to see all methods of each OptionsBuilder.

You will have one setter, and one getter, for each option allowed for the field type.

Some of them have extra methods, to help you.

```php
BirthdayOptionsBuilder::create()
ButtonOptionsBuilder::create()
CheckboxOptionsBuilder::create()
ChoiceOptionsBuilder::create()
CollectionOptionsBuilder::create()
    - setPrototype($prototype = true, $setAllowAdd = true) will call setAllowAdd(), needed when prototype is set to true
    - setPrototypeName($name, $setAllowAdd = true) will call setPrototype() and setAllowAdd(), needed when prototype is set to true
CountryOptionsBuilder::create()
CurrencyOptionsBuilder::create()
DateOptionsBuilder::create()
DateTimeOptionsBuilder::create()
EmailOptionsBuilder::create()
EntityOptionsBuilder::create()
    - setRepositoryMethod($method, $params = array()) call setQueryBuilder() with a generic closure, who will call $method on your repository
HiddenOptionsBuilder::create()
IntegerOptionsBuilder::create()
LanguageOptionsBuilder::create()
LocaleOptionsBuilder::create()
MoneyOptionsBuilder::create()
NumberOptionsBuilder::create()
PasswordOptionsBuilder::create()
PercentOptionsBuilder::create()
ResetOptionsBuilder::create()
SearchOptionsBuilder::create()
SubmitOptionsBuilder::create()
TextareaOptionsBuilder::create()
TextOptionsBuilder::create()
TimeOptionsBuilder::create()
TimezoneOptionsBuilder::create()
UrlOptionsBuilder::create()
```

Build your own OptionsBuilder
-----------------------------

You need to implements steevanb\FormUtils\OptionsBuilder\OptionsBuilderInterface,
or extends steevanb\FormUtils\OptionsBuilder\AbstractOptionsBuilder.

Of course, you can extends an existing OptionsBuilder to override some methods, or add new ones.

To use it, it's same as other OptionsBuilder, just call FooOptionsBuilder::create().

[Back to index](../README.md)