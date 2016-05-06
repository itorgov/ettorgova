<?php

namespace App\Services;


class RouteHelper
{
    public function checkActiveMenuItem($itemName, $activeClass = '', $itemDepth = 0)
    {
        $routeUri = request()->path();
        $uriParts = explode('/', $routeUri);

        if (!array_key_exists($itemDepth, $uriParts)) {
            return '';
        }

        return $uriParts[$itemDepth] == $itemName ? $activeClass : '';
    }
}