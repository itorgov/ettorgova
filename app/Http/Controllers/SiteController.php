<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function services()
    {
        return view('site.services.index');
    }

    public function yuridicheskoeKonsultirovanie()
    {
        return view('site.services.yuridicheskoe-konsultirovanie');
    }

    public function registraciyaPredprinimatelej()
    {
        return view('site.services.registraciya-predprinimatelej');
    }

    public function registraciyaOrganizacij()
    {
        return view('site.services.registraciya-organizacij');
    }

    public function yuridicheskoeSoprovozhdenieBiznesa()
    {
        return view('site.services.yuridicheskoe-soprovozhdenie-biznesa');
    }

    public function predstavitelstvoVArbitrazhnyhSudah()
    {
        return view('site.services.predstavitelstvo-v-arbitrazhnyh-sudah');
    }

    public function predstavitelstvoVSude()
    {
        return view('site.services.predstavitelstvo-v-sude');
    }

    public function podgotovkaYuridicheskihDokumentov()
    {
        return view('site.services.podgotovka-yuridicheskih-dokumentov');
    }

    public function soprovozhdenieSdelokSNedvizhimostyu()
    {
        return view('site.services.soprovozhdenie-sdelok-s-nedvizhimostyu');
    }
}
