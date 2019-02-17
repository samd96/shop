<?php

class Settings
{
  static $settings = '';

  static private function check_status ()
  {
    if ( self::$settings != '' )
      return;

    if ( file_exists(dirname( __FILE__ ) . '/../../settings.json') )
    {
      $json = file_get_contents( dirname( __FILE__ ) . '/../../settings.json' );
      self::$settings = json_decode( $json, true );
    }
    else
    {
      self::$settings = Array();
    }
  }

  static function title ()
  {
    self::check_status();

    if ( isset( self::$settings['site_title'] ) )
      return self::$settings['site_title'];
    else
      return "SITE_TITLE";
  }

  static function tagline ()
  {
    self::check_status();

    if ( isset( self::$settings['site_tagline'] ) )
      return self::$settings['site_tagline'];
    else
      return "SITE_TAGLINE";
  }
}
