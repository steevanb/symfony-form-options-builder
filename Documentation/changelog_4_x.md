# 4.4.0 (2022-12-09)

- Add compatibility with `symfony/form` 6.0

# 4.3.0 (2021-11-29)

- Add compatibility with PHP 8.0

# 4.2.0 (2020-04-02)

- Add `Html5Trait` to `NumberOptionsBuilder`

# 4.1.0 (2020-04-02)

- Allow `symfony/form ^5.0`.

# 4.0.0 (2018-01-18)

- PHP 7.1 syntax. When a parameter accept multiple types,
(like `EntityOptionsBuilder::setQueryBuilder()`, who accept `string` or `QueryBuilder`),
one setter per type instead of one setter for every types.
Exemple : `EntityOptionsBuilder::setQueryBuilder()` and `EntityOptionsBuilder::setQueryBuilderClosure()`.
- PHP 7 function return type is strict, so it's hard to use in traits. So, removing lot of traits, which result in copy / paste code.
- Fix `FileOptionsBuilder::setMultiple()`.
- Add `removeFoo()` on each missed option, `EntityOptionsBuilder::removeGroupBy()` for exemple.
- Remove `$name` parameter for `getAttr()` and `removeAttr()`, use `getAttrByName()` and `setAttr()` instead.
- Remove `steevanb\SymfonyFormOptionsBuilder\Option`. So, all getters (`getOption()`, `getLabel()` etc) now return `null` when option is not defined, instead of `Option::DEFAULT_VALUE` before. 
- `setLabel()`, `setChoiceLabel()` and `setTranslationDomain()` do not accept `false` now. Use `disableLabel()`, `disableChoiceLabel()` and `disableTranslationDomain()` instead.
- `setChoiceLabel()` do not accept `callable` now. Use `setChoiceLabelCallable()` instead.
- Remove `setAutocomplete()`, use `addAttr('autocomplete', true|false)` instead.
- Remove `setChoiceLabelNotTranslatable()`, use `disableChoiceLabel()` instead.
- Remove `setAutofocus()`, use `addAttr('autofocus', true|false)` instead.
