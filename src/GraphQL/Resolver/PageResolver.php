<?php

namespace App\GraphQL\Resolver;

use GraphQL\Type\Definition\ResolveInfo;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class PageResolver implements ResolverInterface
{
    public function __invoke(ResolveInfo $info, $name)
    {

        if($info->fieldName === 'title'){
            return 'Page Title';
        }

        return 'page';
    }
}
