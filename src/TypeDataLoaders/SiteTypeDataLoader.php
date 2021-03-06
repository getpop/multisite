<?php

declare(strict_types=1);

namespace PoP\Multisite\TypeDataLoaders;

use PoP\Multisite\ObjectFacades\SiteObjectFacade;
use PoP\ComponentModel\TypeDataLoaders\AbstractTypeDataLoader;

class SiteTypeDataLoader extends AbstractTypeDataLoader
{
    public function getObjects(array $ids): array
    {
        // Currently it deals only with the current site and nothing else
        $ret = [];
        $cmsengineapi = \PoP\Engine\FunctionAPIFactory::getInstance();
        if (in_array($cmsengineapi->getHost(), $ids)) {
            $ret[] = SiteObjectFacade::getInstance();
        }
        return $ret;
    }
}
