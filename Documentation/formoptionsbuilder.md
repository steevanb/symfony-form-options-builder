steevanb\FormUtils\FormOptionsBuilder\FormOptionsBuilder
========================================================

This objects offer you an object vision of generating options for FormType configureOptions() method.

Usage in configureOption()
--------------------------

```php
use steevanb\FormUtils\FormOptionsBuilder\FormOptionsBuilder;

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

If your FormType is the root one, you can use RootFormOptionsBuilder to access new methods :

```php
use steevanb\FormUtils\FormOptionsBuilder\RootFormOptionsBuilder;

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

RootOptionsBuilder extends FormOptionsBuilder, and add this methods :
```php
setCsrfFieldName(), setCsrfFieldName() and removeCsrfFieldName()
setCsrfMessage(), getCsrfMessage() and removeCsrfMessage()
setCsrfProtection(), getCsrfProtection() and removeCsrfProtection()
setCsrfProvider(), getCsrfProvider() and removeCsrfProvider()
setCsrfTokenId(), getCsrfTokenId() and removeCsrfTokenId()
setCsrfTokenManager(), getCsrfTokenManager() and removeCsrfTokenManager()
setMethod(), getMethod() and removeMethod()
setPostMaxSizeMessage(), getPostMaxSizeMessage() and removePostMaxSizeMessage()
```

What does removeFoo() do exactly
--------------------------------

FormType can define default options, with configureOptions(), like label, translation_domain, etc.

If you override this default values with null, eash FormType will read it differently, but will never read default value.

So, if you have set an option (via setFoo()), and you need to get back the default option value, you need to call removeFoo() and not setFoo(null).

[Back to index](../README.md)
