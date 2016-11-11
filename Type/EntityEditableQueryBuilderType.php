<?php

namespace steevanb\SymfonyFormOptionsBuilder\Type;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\QueryBuilder;
use steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader\EditableQueryBuilderConfigInterface;
use steevanb\SymfonyFormOptionsBuilder\QueryBuilderLoader\OrmEditableQueryBuilderLoader;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntityEditableQueryBuilderType extends EntityType implements EditableQueryBuilderConfigInterface
{
    /** @var callable|null */
    protected $queryCallBack;

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefault('query_call_back', null)
            ->setAllowedTypes('query_call_back', ['callable', 'null']);
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->queryCallBack = $options['query_call_back'];

        parent::buildForm($builder, $options);
    }

    /**
     * @param ObjectManager $manager
     * @param QueryBuilder $queryBuilder
     * @param string $class
     * @return OrmEditableQueryBuilderLoader
     */
    public function getLoader(ObjectManager $manager, $queryBuilder, $class)
    {
        return new OrmEditableQueryBuilderLoader($queryBuilder, $this);
    }

    /**
     * @return callable|null
     */
    public function getQueryCallBack()
    {
        return $this->queryCallBack;
    }
}
