<?php

namespace WowSite\Http\Controllers;

use Illuminate\Http\Request;

use WowSite\Http\Requests;
use WowSite\Http\Controllers\Controller;
use WowSite\Services\Realmd\AccountService;
use WowSite\Services\Realmd\CharacterService;

use Krumo;
use View;

class HomeController extends Controller
{
    protected $accounts;

    protected $characters;

    public function __construct(AccountService $accounts, CharacterService $characters)
    {
        $this->accounts = $accounts;
        $this->characters = $characters;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //k($this->accounts->all()->toArray());
        //k($this->accounts->getByUserName('admin')->sha_pass_hash);
        //k($this->accounts->encodePassword('admin', 'azius_1039'));
        return View::make('home.index')
                        ->withCharacters($this->characters->total())
                        ->withOnline($this->characters->online())
                        ->withAccounts($this->accounts->total());
    }

    public function createAccount(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:5|max:25',
            'password' => 'required|min:5',
            'repassword' => 'required|same:password',
        ]);


    }

}
    