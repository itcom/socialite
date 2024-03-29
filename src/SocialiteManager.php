<?php

namespace RingoProject\Socialite;

use RingoProject\Socialite\Two\FacebookProvider;
use RingoProject\Socialite\Two\YahooProvider;
use RingoProject\Socialite\Two\LineProvider;
use RingoProject\Socialite\Two\RakutenProvider;


class SocialiteManager extends \Laravel\Socialite\SocialiteManager
{
	protected function createFacebookDriver()
	{
		$config = $this->config->get('services.facebook');

		return $this->buildProvider(FacebookProvider::class, $config);
	}

	protected function createYahooDriver()
	{
		$config = $this->config->get('services.yahoo');

		return $this->buildProvider(YahooProvider::class, $config);
	}

	protected function createLineDriver()
	{
		$config = $this->config->get('services.line');

		return $this->buildProvider(LineProvider::class, $config);
	}

	protected function createRakutenDriver()
	{
		$config = $this->config->get('services.rakuten');

		return $this->buildProvider(RakutenProvider::class, $config);
	}
}
