<?php

namespace WowSite\Http\Controllers;

use Illuminate\Http\Request;
use WowSite\Http\Requests;
use WowSite\Http\Controllers\Controller;

use View;

/**
 * Base application controller
 * @author Nicolás Palumbo <n@xinax.net>
 */
class WowSiteController extends Controller
{
    /**
     * Shares global view values
     */
    public function __construct()
    {
        View::share([
            'wowServerName'     => env('WOW_SERVER_NAME'),
            'wowServerVersion'  => env('WOW_SERVER_VERSION'),
        ]);
    }
}
