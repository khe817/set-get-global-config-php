<?php
/**
 * class for setting and getting configurations globally
 */
class Config
{
	static $vars;

	public function __construct( $configs_array = array() ) {
		self::$vars = $configs_array;
	}

	/**
	 * get configuration
	 * @param string $key   configuration key
	 * @return mixed        configuration value
	 */
	public static function get( $key ) {

		if ( !isset(self::$vars[$key]) ) {
			//this attribute is not defined!
			throw new Exception('Configuration key does not exist. ' . print_r(self::$vars));
		}	else {
			return self::$vars[$key];
		}

	}

	/**
	 * Set configuration
	 * @param string $key   configuration key
	 * @param mixed  $value configuration value
	 */
	public static function set( $key, $value ) {
		self::$vars[$key] = $value;
	}

	/**
	 * check if a configuration is set
	 * @param  string  $key configuration key
	 * @return boolean
	 */
	public static function is_set( $key ) {
		if ( isset(self::$vars[$key]) ) {
			return true;
		} else {
			return false;
		}
	}
}
