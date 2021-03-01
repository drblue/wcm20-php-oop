<?php

namespace drblue\JohansHelpers;

class Strings {
	public static function leetSpeak($msg) {
		return str_replace(['a', 'e', 'l', 'h'], ['@', '3', '1', '4'], $msg);
	}
}
