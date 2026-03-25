<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{

    public $countries = [
        'italy' => [
            'currency' => 'EUR',
            'social_security_rate' => 0.0919, // Employee's social security contribution (INPS)
            'income_tax_brackets' => [
                ['threshold' => 28000, 'rate' => 0.23],
                ['threshold' => 50000, 'rate' => 0.35],
                ['threshold' => null, 'rate' => 0.43],
            ],
            'local_tax_rate' => 0.02, // Average for regional and municipal additional taxes
        ],

        'spain' => [
            'currency' => 'EUR',
            'social_security_rate' => 0.0635, // Social Security contribution
            'income_tax_brackets' => [
                ['threshold' => 12450, 'rate' => 0.19],
                ['threshold' => 20200, 'rate' => 0.24],
                ['threshold' => 35200, 'rate' => 0.30],
                ['threshold' => 60000, 'rate' => 0.37],
                ['threshold' => 300000, 'rate' => 0.45],
                ['threshold' => null, 'rate' => 0.47],
            ],
            // In Spain, local tax is already included in the IRPF brackets (State + Regional split)
        ],

        'uk' => [
            'currency' => 'GBP',
            'social_security_rate' => 0.08, // National Insurance (applied above the £1,048/month threshold)
            'income_tax_brackets' => [
                ['threshold' => 12570, 'rate' => 0.00], // Personal Allowance (Tax-free)
                ['threshold' => 50270, 'rate' => 0.20],
                ['threshold' => 125140, 'rate' => 0.40],
                ['threshold' => null, 'rate' => 0.45],
            ],
        ],
    ];

    public function index()
    {
        return view('welcome', ['countries' => $this->countries]);
    }
}