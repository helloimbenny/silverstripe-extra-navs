<?php
class UtilityNavAdmin extends ModelAdmin {

  public static $managed_models = array( 'UtilityNav', 'FooterNav', 'SocialMediaNav' );
  private static $menu_icon = 'silverstripe-extra-navs/Code/Admins/Icons/nav.png';

  static $url_segment = 'extra-nav';
  static $menu_title = 'Extra Nav';
  static $menu_priority = 3;

}

?>
