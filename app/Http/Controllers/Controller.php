<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $needRedirectUrls = [
        '/uslugi/yuridicheskoe-konsultirovanie' => '/uslugi/yuridicheskaya-konsultaciya',
        '/uslugi/registraciya-predprinimatelej' => '/uslugi/registraciya-ip',
        '/uslugi/registraciya-organizacij' => '/uslugi/registraciya-ooo'
    ];

    protected function getRedirectUrl()
    {
        $request = request();
        $url = $request->getRequestUri();

        if (array_key_exists($url, $this->needRedirectUrls)) {
            return $this->needRedirectUrls[$url];
        }

        return null;
    }
}
