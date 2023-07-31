This version is for symfony/form ^3||^4 and PHP ^7.1.

If you want to use it with symfony/symfony ^2.3 (Symfony 2.3.* , 2.4.* , 2.5.* , 2.6.* , 2.7.* or 2.8.*),
[use 2.* version instead](https://github.com/steevanb/symfony-form-options-builder/tree/symfony-2).

Composer
--------
```bash
composer require steevanb/symfony-form-options-builder ^4.2
```

Or add it manually:
```json
# composer.json
{
    "require": {
        "Steevanb/symfony-form-options-builder": "^4.2"
    }
}
```
Add EntityEditableQueryBuilderType
----------------------------------

If you want to use `EntityEditableQueryBuilderType`, who allow you to add a callback when `EntityType` will call `getQuery()` on your query_builder option, you need to add a service:
```yml
services:
    Steevanb\SymfonyFormOptionsBuilder\Type\EntityEditableQueryBuilderType: ~
```

[Back to index](../README.md)
