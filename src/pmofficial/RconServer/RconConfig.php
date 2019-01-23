<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pmofficial\RconServer;

class RconConfig{

	/** @var string */
	private $ip;
	/** @var int */
	private $port;
	/** @var int */
	private $maxConnections;
	/** @var string */
	private $password;

	public function __construct(string $ip, int $port, int $maxConnections, string $password){
		$this->ip = $ip;
		$this->port = $port;
		$this->maxConnections = $maxConnections;
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	public function getIp() : string{
		return $this->ip;
	}

	/**
	 * @return int
	 */
	public function getPort() : int{
		return $this->port;
	}

	/**
	 * @return int
	 */
	public function getMaxConnections() : int{
		return $this->maxConnections;
	}

	/**
	 * @return string
	 */
	public function getPassword() : string{
		return $this->password;
	}
}
