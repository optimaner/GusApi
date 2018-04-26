<?php

/**
 * JsonSerializable interface. This file provides backwards compatibility to PHP 5.3 and ensures
 * the interface is present in systems where JSON related code was removed.
 *
 * @link   http://www.php.net/manual/en/jsonserializable.jsonserialize.php
 * @since  1.0
 */
interface JsonSerializable
{
	/**
	 * Return data which should be serialized by json_encode().
	 *
	 * @return  mixed
	 *
	 * @since   1.0
	 */
	public function jsonSerialize();
}
