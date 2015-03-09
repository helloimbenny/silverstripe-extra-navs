<?php

/**
 * Provide $SecondaryNav and $FooterNav global template variable for looping through.
 *
 * @author       Benny Lin <benny@bottle.is>
 * @copyright    Bottle Creative
 */
class NavTemplateGlobalProvider implements \TemplateGlobalProvider {
  public static function get_template_global_variables() {
    return array(
      'UtilityNav' => array(
        'method'  => 'getUtilityNav'
      ),
      'FooterNav' => array(
        'method'  => 'getFooterNav'
      )
    );
  }

  public static function getUtilityNav() {
    return DataObject::get('UtilityNav');
  }

  public static function getFooterNav() {
    return DataObject::get('FooterNav');
  }
}
