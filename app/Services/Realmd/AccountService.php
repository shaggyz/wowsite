<?php

namespace WowSite\Services\Realmd;

use WowSite\Models\Account;

class AccountService extends RealmdService
{
	public function all()
	{
		return Account::all();
	}

	public function total()
	{
		return Account::count();
	}

	public function getByUserName($username)
	{
		return Account::where('username', '=', strtoupper($username))->first();
	}

	protected function encodePassword($username, $password)
	{
		$token = strtoupper($username) . ":" . strtoupper($password);
		return strtoupper(sha1($token));
	}

	public function createAccount($username, $password)
	{

	}
}