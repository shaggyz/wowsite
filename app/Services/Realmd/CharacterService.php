<?php

namespace WowSite\Services\Realmd;

use WowSite\Services\Realmd\RealmdService;
use DB;
use WowSite\Models\RealmCharacter;
use WowSite\Models\GameCharacter;

class CharacterService extends RealmdService
{
	public function total()
	{
		return RealmCharacter::select(DB::raw('SUM(numchars) AS total'))
								->first()
								->total;
	}

	public function online()
	{
		return GameCharacter::where('online', '=', 1)->count();
	}
}