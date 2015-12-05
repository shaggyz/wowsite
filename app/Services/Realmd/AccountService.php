<?php

namespace WowSite\Services\Realmd;

use WowSite\Models\Account;

/**
 * Realmd account service
 */
class AccountService extends RealmdService
{
	/**
	 * Returns all accounts
	 * 
	 * @return Collection 
	 */
	public function all()
	{
		return Account::all();
	}

	/**
	 * Returns the total number of accounts
	 * 
	 * @return integer 
	 */
	public function total()
	{
		return Account::count();
	}

	/**
	 * Returns an account from its username
	 * 
	 * @param  string $username 
	 * @return Account           
	 */
	public function getByUserName($username)
	{
		return Account::where('username', '=', strtoupper($username))->first();
	}

	/**
	 * Encodes a password for 1.12.1 classicDB account
	 * SHA1(UPPER(username) + ':' + UPPER(password))
	 * 
	 * @param  string $username 
	 * @param  string $password 
	 * 
	 * @return string           
	 */
	protected function encodePassword($username, $password)
	{
		$token = strtoupper($username) . ":" . strtoupper($password);
		return strtoupper(sha1($token));
	}

	/**
	 * Creates a new user account on realmd database
	 * 
	 * @param  string $username 
	 * @param  string $password 
	 * 
	 * @return Account           
	 */
	public function createAccount($username, $password)
	{
		$account = new Account;

		$account->username = strtoupper($username);
		$account->sha_pass_hash = $this->encodePassword($username, $password);
		$account->gmlevel = 0; 
		$account->expansion = 0; 

		// The first available game server
		$account->active_realm_id = 1; 

		$account->save();

		return $account;
	}
}