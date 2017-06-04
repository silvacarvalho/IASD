<?php

namespace IASD\Http\Controllers;


class IasdController extends Controller
{
    public function index()
    {
        return view('home');
    }
}