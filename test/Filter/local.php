<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-doctrine-querybuilder for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-doctrine-querybuilder/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-doctrine-querybuilder/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Doctrine\ODM\QueryBuilder\Filter;

use Laminas\ApiTools\Doctrine\ODM\QueryBuilder\Filter;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'doctrine' => [
        'connection' => [
            'odm_default' => [
                'server' => 'mongo',
                'port' => '27017',
                'user' => '',
                'password' => '',
                'dbname' => 'laminas_doctrine_querybuilder_filter_test',
            ],
        ],
    ],
    'api-tools-doctrine-odm-querybuilder-filter' => [
        'aliases' => [
            'eq'        => Filter\Equals::class,
            'neq'       => Filter\NotEquals::class,
            'lt'        => Filter\LessThan::class,
            'lte'       => Filter\LessThanOrEquals::class,
            'gt'        => Filter\GreaterThan::class,
            'gte'       => Filter\GreaterThanOrEquals::class,
            'isnull'    => Filter\IsNull::class,
            'isnotnull' => Filter\IsNotNull::class,
            'in'        => Filter\In::class,
            'notin'     => Filter\NotIn::class,
            'between'   => Filter\Between::class,
            'like'      => Filter\Like::class,
            'regex'     => Filter\Regex::class,
        ],
        'factories' => [
            Filter\Equals::class              => InvokableFactory::class,
            Filter\NotEquals::class           => InvokableFactory::class,
            Filter\LessThan::class            => InvokableFactory::class,
            Filter\LessThanOrEquals::class    => InvokableFactory::class,
            Filter\GreaterThan::class         => InvokableFactory::class,
            Filter\GreaterThanOrEquals::class => InvokableFactory::class,
            Filter\IsNull::class              => InvokableFactory::class,
            Filter\IsNotNull::class           => InvokableFactory::class,
            Filter\In::class                  => InvokableFactory::class,
            Filter\NotIn::class               => InvokableFactory::class,
            Filter\Between::class             => InvokableFactory::class,
            Filter\Like::class                => InvokableFactory::class,
            Filter\Regex::class               => InvokableFactory::class,
        ],
    ],
];
