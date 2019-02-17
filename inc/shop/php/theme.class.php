<?php

class Theme
{
  static $theme_dir = "";
  static $css_files = Array();
  static $js_files = Array();

  static function header ()
  {
    if ( self::$theme_dir == '' )
      self::$theme_dir = dirname( __FILE__ ) . '/../../theme';

    if ( file_exists( self::$theme_dir . '/header.php' ) )
      require self::$theme_dir . '/header.php';
    else
      require dirname( __FILE__ ) . '/../html/theme/header.php';
  }

  static function footer ()
  {
    if ( self::$theme_dir == '' )
      self::$theme_dir = dirname( __FILE__ ) . '/../../theme';

    if ( file_exists( self::$theme_dir . '/footer.php' ) )
      require self::$theme_dir . '/footer.php';
    else
      require dirname( __FILE__ ) . '/../html/theme/footer.php';
  }
}
