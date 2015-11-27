<?php

namespace steevanb\FormUtils;

use Symfony\Component\OptionsResolver\OptionsResolver;

trait ConfigureOptionsTrait
{
    /**
     * @param OptionsResolver $resolver
     * @param string $name
     * @param mixed $default
     * @param bool $required
     * @param array $allowedTypes
     * @param array $allowedValues
     */
    protected function configureOption(
        OptionsResolver $resolver,
        $name,
        $default,
        $required,
        array $allowedTypes,
        array $allowedValues = array()
    ) {
        $resolver->setDefault($name, $default);
        if ($required) {
            $resolver->setRequired($name);
        }
        if (count($allowedTypes) > 0) {
            $resolver->setAllowedTypes($name, $allowedTypes);
        }
        if (count($allowedValues) > 0) {
            $resolver->setAllowedValues($name, $allowedValues);
        }
    }

    /**
     * @param OptionsResolver $resolver
     * @param string $dataclass
     * @param bool $required
     * @param array $allowedValues
     */
    protected function configureDataClassOption(
        OptionsResolver $resolver,
        $dataclass,
        $required = true,
        array $allowedValues = array()
    ) {
        $this->configureOption($resolver, 'data_class', $dataclass, $required, [ 'string' ], $allowedValues);
    }

    /**
     * @param OptionsResolver $resolver
     * @param string|array $groups
     * @param bool $required
     * @param array $allowedValues
     */
    protected function configureValidationGroupsOption(
        OptionsResolver $resolver,
        $groups,
        $required = true,
        array $allowedValues = array()
    ) {
        $this->configureOption(
            $resolver,
            'validation_groups',
            $groups,
            $required,
            [ 'boolean', 'string', 'array', 'Closure' ],
            $allowedValues
        );
    }

    /**
     * @param OptionsResolver $resolver
     * @param string $translationDomain
     * @param bool $required
     * @param array $allowedValues
     */
    protected function configureTranslationDomainOption(
        OptionsResolver $resolver,
        $translationDomain,
        $required = true,
        array $allowedValues = array()
    ) {
        $this->configureOption(
            $resolver,
            'translation_domain',
            $translationDomain,
            $required,
            [ 'string' ],
            $allowedValues
        );
    }
}
