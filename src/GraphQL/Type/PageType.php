<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;

class PageType extends ObjectType implements AliasedInterface
{
    public function __construct()
    {
        $config = [
            'name' => 'Page',
            'description' => 'Sulu CMS Page Type.',
            'fields' => [
                'id' => Type::id(),
                'title' => Type::string(),
                'url' => Type::string(),
            ],
        ];

        parent::__construct($config);
    }

    public static function getAliases()
    {
        return ['Page'];
    }
}

