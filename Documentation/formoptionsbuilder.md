SymfonyFormOptionsBuilder\FormOptionsBuilder\FormOptionsBuilder
========================================================

This objects offer you an object vision of generating options for `FormType::configureOptions()`.

Usage in configureOption()
--------------------------

```php
use steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\FormOptionsBuilder;

class BarType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            FormOptionsBuilder::create()
                ->setDataClass(Foo::class)
                ->setValidationGroups([ 'foo', 'bar' ])
                ->setTranslationDomain('foo')
                ->asArray()
        );
    }
}
```

Root FormType
-------------

If your FormType is the root one, you should use `RootFormOptionsBuilder`:

```php
use steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\RootFormOptionsBuilder;

class BarType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            RootFormOptionsBuilder::create()
                ->setDataClass(Foo::class)
                ->setValidationGroups([ 'foo', 'bar' ])
                ->setTranslationDomain('foo')
                ->setCsrfFieldName('csrf_foo')
                ->setCsrfMessage('CSRF Error')
                ->asArray()
        );
    }
}
```

Sub FormType
------------

If your FormType is a sub form (Collection for example), you should use `SubFormOptionsBuilder`:

```php
use steevanb\SymfonyFormOptionsBuilder\FormOptionsBuilder\SubFormOptionsBuilder;

class BarType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(SubFormOptionsBuilder::create()->asArray());
    }
}
```


What does removeFoo() do exactly
--------------------------------

FormType can define default options, with `configureOptions()`, like `label`, `translation_domain`, etc.

If you override this default values with `null`, each FormType will read it differently, but will never read default value.

So, if you have set an option (via `setFoo()`), and you need to get back the default option value, you need to call `removeFoo()` and not `setFoo(null)`.

[Back to index](../README.md)
