<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'thing/crash_add/*',
        'form/*',
        'thing/add',
        'thing/new',
        'type/add',
        'type/new',
        'user/edit/*',
        'user/editmail/*',
    ];
}
