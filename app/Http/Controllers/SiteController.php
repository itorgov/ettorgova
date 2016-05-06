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

    public function services($name = 'index')
    {
        $viewName = 'site.services.' . $name;

        if (!view()->exists($viewName)) {
            return abort(404);
        }

        return view($viewName);
    }

    public function stati($name = 'index')
    {
        $viewName = 'site.useful.articles.' . $name;

        if (!view()->exists($viewName)) {
            return abort(404);
        }

        return view($viewName);
    }
}
