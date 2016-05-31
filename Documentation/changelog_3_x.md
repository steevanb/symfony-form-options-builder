master
------

- Remove all Symfony 2.8 deprecated, deleted in Symfony 3 :
    - Remove steevanb\FormUtils\Behavior\CascadeValidationTrait,
        so setCascadeValidation() and getCascadeValidation() are removed everywhere.
        If you want to cascade validation like before, add Valid validator to your property.
    - Remove steevanb\FormUtils\Behavior\MaxLengthTrait,
        so setMaxLength() and getMaxLength() are removed everywhere.
        Use setAttr(['maxlength' => 1]) or addAttr('maxlength', 1) instead.
    - Remove steevanb\FormUtils\Behavior\ReadOnlyTrait,
        so setReadOnly and getReadOnly are removed everywhere.
        Use setAttr(['readonly' => 'readonly']) or addAttr('readonly', 'readonly') instead.
    - Remove steevanb\FormUtils\NameTrait, use steevanb\FormUtils\BlockPrefixTrait instead.
    - Remove steevanb\FormUtils\OptionsBuilder::setPattern() and getPattern().
    - Remove ChoiceTypeTrait::setChoiceList() and getChoiceList().
    - Remove steevanb\FormUtils\OptionsBuilder\Behavior\ChoicesListTrait,
        so setChoiceList() and getChoiceList() are removed everywhere
    - Remove ChoiceTypeTrait::setChoicesAsValues() and getChoicesAsValues().
    - Remove ChoiceTypeTrait::setEmptyValue() and getEmptyValue(), use setPlaceholder() and getPlaceholder() instead
    - Remove steevanb\FormUtils\OptionsBuilder\Behavior\ScaleTrait::setPrecision() and getPrecision(),
        so setPrecision() and getPrecision() are removed everywhere.
    - Remove steevanb\FormUtils\OptionsBuilder\CollectionOptionsBuilder::setOptions() and getOptions(),
        use setEntryOptions() and getEntryOptions() instead.
    - Remove steevanb\FormUtils\OptionsBuilder\CollectionOptionsBuilder::setType() and getType(),
        use setEntryType() and getEntryType() instead.
    - Remove steevanb\FormUtils\OptionsBuilder\EntityOptionsBuilder::setProperty() and getProperty(),
        use setChoiceLabel() and getChoiceLabel() instead.
    - Remove steevanb\FormUtils\OptionsBuilder\MoneyOptionsBuilder::getPrecision()
- Fix setAttr() PHPDoc return type

[Back to index](../README.md)
