<?php

declare(strict_types=1);

namespace Steevanb\SymfonyFormOptionsBuilder\Type;

use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ObjectManager;
use Steevanb\SymfonyFormOptionsBuilder\{
    QueryBuilderLoader\EditableQueryBuilderConfigInterface,
    QueryBuilderLoader\OrmEditableQueryBuilderLoader
};
use Symfony\Bridge\Doctrine\{
    Form\ChoiceList\ORMQueryBuilderLoader,
    Form\Type\EntityType
};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntityEditableQueryBuilderType extends EntityType implements EditableQueryBuilderConfigInterface
{
    /** @var callable|null */
    protected $queryCallBack;

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefault('query_call_back', null)
            ->setAllowedTypes('query_call_back', ['callable', 'null']);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /** @phpstan-ignore-next-line */
        $this->queryCallBack = $options['query_call_back'];

        parent::buildForm($builder, $options);
    }

    /** @param QueryBuilder $queryBuilder */
    public function getLoader(ObjectManager $manager, object $queryBuilder, string $class): ORMQueryBuilderLoader
    {
        return new OrmEditableQueryBuilderLoader($queryBuilder, $this);
    }

    public function getQueryCallBack(): ?callable
    {
        return $this->queryCallBack;
    }
}
