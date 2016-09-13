<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function kontakty()
    {
        return view('site.kontakty');
    }

    public function skidki()
    {
        return view('site.skidki');
    }

    public function sudebnayaPraktika()
    {
        return view('site.sudebnaya-praktika');
    }

    public function novosti()
    {
        return view('site.novosti');
    }

    public function online()
    {
        return view('site.online');
    }

    public function services($name = 'index')
    {
        if ($newUrl = $this->getRedirectUrl()) {
            return redirect($newUrl, 301);
        }

        $viewName = 'site.services.' . $name;

        if (!view()->exists($viewName)) {
            return abort(404);
        }

        return view($viewName);
    }

    public function stati($name = 'index')
    {
        if ($newUrl = $this->getRedirectUrl()) {
            return redirect($newUrl, 301);
        }

        $viewName = 'site.useful.articles.' . $name;

        if (!view()->exists($viewName)) {
            return abort(404);
        }

        return view($viewName);
    }
}
