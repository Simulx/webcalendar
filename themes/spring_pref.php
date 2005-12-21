<?php
/**
 * Custom theme for use with WebCalendar
 *
 * Spring - modify colors for spring
 *
 * @author Ray Jones <rjones@umces.edu>
 * @copyright Craig Knudsen, <cknudsen@cknudsen.com>, http://www.k5n.us/cknudsen
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL
 * @version $Id: 
 * @package WebCalendar
 */

// Define your stuff here...
// Any option in webcal_user_pref can be configured here
//

//This theme changes the color scheme only to the hues of spring.
//This theme will be available to both normal users and System Settings.
$webcal_theme = array (
"BGCOLOR"=>"#CCFFCC",
"CELLBG"=>"#99FF99",
"HASEVENTSBG"=>"#66FF66",
"H2COLOR"=>"#006600",
"OTHERMONTHBG"=>"#999933",
"POPUP_BG"=>"#6699CC",
"POPUP_FG"=>"#000000",
"TABLEBG"=>"#000000",
"TEXTCOLOR"=>"#000000",
"THBG"=>"#669900",
"THFG"=>"#000000",
"TODAYCELLBG"=>"#FFFF66",
"WEEKENDBG"=>"#00CC99"
 );
 

// Displays a screenshot if called directly and a file exists that matches
//this script name 
//Place this in all themes
if ( empty ( $PHP_SELF ) && ! empty ( $_SERVER ) &&
  ! empty ( $_SERVER['PHP_SELF'] ) ) {
  $PHP_SELF = $_SERVER['PHP_SELF'];
}

if ( ! empty ( $PHP_SELF ) && preg_match ( "/\/themes\//", $PHP_SELF ) ) {
  $filename = basename($PHP_SELF, ".php") . ".gif";
  echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n" .
   "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" " .
   "\"DTD/xhtml1-transitional.dtd\">\n" .
   "<html xmlns=\"http://www.w3.org/1999/xhtml\" " .
   "xml:lang=\"en\" lang=\"en\">\n" .
   "<head><body>\n"; 
   
  if (file_exists( $filename )) {   
    echo "<img src=\"$filename\" />   ";
  } else {
    echo "<h2>NO PREVIEW AVAILABLE</H2>";
  }
  echo "</body></html>";
}
?>
