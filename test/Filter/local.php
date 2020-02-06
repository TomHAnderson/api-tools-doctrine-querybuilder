<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-doctrine-querybuilder for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-doctrine-querybuilder/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-doctrine-querybuilder/blob/master/LICENSE.md New BSD License
 */

use Laminas\ApiTools\Doctrine\QueryBuilder\Filter;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'configuration' => 'orm_default',
                'eventmanager'  => 'orm_default',
                'driverClass'   => 'Doctrine\DBAL\Driver\PDOSqlite\Driver',
                'params' => [
                    'memory' => true,
                ],
            ],
        ],
    ],
    'api-tools-doctrine-querybuilder-filter-orm' => [
        'aliases' => [
            'eq'         => Filter\ORM\Equals::class,
            'neq'        => Filter\ORM\NotEquals::class,
            'lt'         => Filter\ORM\LessThan::class,
            'lte'        => Filter\ORM\LessThanOrEquals::class,
            'gt'         => Filter\ORM\GreaterThan::class,
            'gte'        => Filter\ORM\GreaterThanOrEquals::class,
            'isnull'     => Filter\ORM\IsNull::class,
            'isnotnull'  => Filter\ORM\IsNotNull::class,
            'in'         => Filter\ORM\In::class,
            'notin'      => Filter\ORM\NotIn::class,
            'between'    => Filter\ORM\Between::class,
            'like'       => Filter\ORM\Like::class,
            'notlike'    => Filter\ORM\NotLike::class,
            'ismemberof' => Filter\ORM\IsMemberOf::class,
            'orx'        => Filter\ORM\OrX::class,
            'andx'       => Filter\ORM\AndX::class,
            'innerjoin'  => Filter\ORM\InnerJoin::class,
            'leftjoin'  => Filter\ORM\LeftJoin::class,
        ],
        'factories' => [
            Filter\ORM\Equals::class              => InvokableFactory::class,
            Filter\ORM\NotEquals::class           => InvokableFactory::class,
            Filter\ORM\LessThan::class            => InvokableFactory::class,
            Filter\ORM\LessThanOrEquals::class    => InvokableFactory::class,
            Filter\ORM\GreaterThan::class         => InvokableFactory::class,
            Filter\ORM\GreaterThanOrEquals::class => InvokableFactory::class,
            Filter\ORM\IsNull::class              => InvokableFactory::class,
            Filter\ORM\IsNotNull::class           => InvokableFactory::class,
            Filter\ORM\In::class                  => InvokableFactory::class,
            Filter\ORM\NotIn::class               => InvokableFactory::class,
            Filter\ORM\Between::class             => InvokableFactory::class,
            Filter\ORM\Like::class                => InvokableFactory::class,
            Filter\ORM\NotLike::class             => InvokableFactory::class,
            Filter\ORM\IsMemberOf::class          => InvokableFactory::class,
            Filter\ORM\OrX::class                 => InvokableFactory::class,
            Filter\ORM\AndX::class                => InvokableFactory::class,
            Filter\ORM\InnerJoin::class           => InvokableFactory::class,
            Filter\ORM\LeftJoin::class            => InvokableFactory::class,
        ],
    ],
];
