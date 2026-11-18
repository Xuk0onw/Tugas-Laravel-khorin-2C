<?php

namespace App\Http\Controllers;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.segitiga');
    }

    public function hitung(string $alas, string $tinggi)
    {
        $alas = (float) $alas;
        $tinggi = (float) $tinggi;

        if ($alas <= 0 || $tinggi <= 0) {
            return view('kalkulator.segitiga', ['error' => 'Alas dan tinggi harus lebih dari 0.']);
        }

        $luas = 0.5 * $alas * $tinggi;

        return view('kalkulator.segitiga', compact('alas', 'tinggi', 'luas'));
    }
}
