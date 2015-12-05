<?php

namespace WowSite\Http\Controllers;

use Illuminate\Http\Request;

use WowSite\Http\Requests;
use WowSite\Services\Realmd\AccountService;
use WowSite\Services\Realmd\CharacterService;

use Krumo;
use View;

/**
 * Site front controller
 * @author Nicolás Palumbo <n@xinax.net>
 */
class HomeController extends WowSiteController
{
    /**
     * Accounts service
     * 
     * @var AccountService
     */
    protected $accounts;

    /**
     * Game characters service
     * 
     * @var CharacterService
     */
    protected $characters;

    /**
     * Some service injections
     * 
     * @param AccountService   $accounts   
     * @param CharacterService $characters 
     */
    public function __construct(
        AccountService $accounts, 
        CharacterService $characters)
    {
        $this->accounts = $accounts;
        $this->characters = $characters;

        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     * GET /
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('home.index')
                        ->withCharacters($this->characters->total())
                        ->withOnline($this->characters->online())
                        ->withAccounts($this->accounts->total());
    }

    /**
     * Creates a new user account
     * POST /accounts/create
     * 
     * @param  Request $request 
     * @return \Illuminate\Http\Response
     */
    public function createAccount(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|email|max:25|unique:realmd.account',
            'password' => 'required|min:5',
            'repassword' => 'required|same:password',
        ]);

        $this->accounts->createAccount($request->username, $request->password);

        return redirect()
                ->route('home.index')
                ->withMessage('Account created. Enjoy!');
    }
}
    