<?php
/**
 * Custom theme for use with WebCalendar
 *
 * Default System Settings
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

//This theme will reset the System Settings to the default values from the 
//installation script. This will not affect colors or options that users have
//already saved under preferences.
$webcal_theme = array (
"ADD_LINK_IN_VIEWS"=>"N",
"ALLOW_ATTACH"=>"N",
"ALLOW_ATTACH_ANY"=>"N",
"ALLOW_ATTACH_PART"=>"N",
"ALLOW_COLOR_CUSTOMIZATION"=>"Y",
"ALLOW_COMMENTS"=>"N",
"ALLOW_COMMENTS_ANY"=>"N",
"ALLOW_COMMENTS_PART"=>"N",
"ALLOW_CONFLICT_OVERRIDE"=>"Y",
"ALLOW_CONFLICTS"=>"N",
"ALLOW_EXTERNAL_HEADER"=>"N",
"ALLOW_EXTERNAL_USERS"=>"N",
"ALLOW_HTML_DESCRIPTION"=>"Y",
"ALLOW_SELF_REGISTRATION"=>"N",
"ALLOW_USER_HEADER"=>"N",
"ALLOW_USER_THEMES"=>"Y",
"ALLOW_VIEW_OTHER"=>"Y",
"APPLICATION_NAME"=>"Title",
"AUTO_REFRESH_TIME"=>"0",
"AUTO_REFRESH"=>"N",
"BGCOLOR"=>"#FFFFFF",
"BOLD_DAYS_IN_YEAR"=>"Y",
"CATEGORIES_ENABLED"=>"Y",
"CELLBG"=>"#C0C0C0",
"CONFLICT_REPEAT_MONTHS"=>"6",
"CUSTOM_HEADER"=>"N",
"CUSTOM_SCRIPT"=>"N",
"CUSTOM_TRAILER"=>"N",
"DATE_FORMAT_MD"=>"LANGUAGE_DEFINED",
"DATE_FORMAT_MY"=>"LANGUAGE_DEFINED",
"DATE_FORMAT"=>"LANGUAGE_DEFINED",
"DEMO_MODE"=>"N",
"DISABLE_ACCESS_FIELD"=>"N",
"DISABLE_LOCATION_FIELD"=>"N",
"DISABLE_PARTICIPANTS_FIELD"=>"N",
"DISABLE_POPUPS"=>"N",
"DISABLE_PRIORITY_FIELD"=>"N",
"DISABLE_REPEATING_FIELD"=>"N",
"DISPLAY_ALL_DAYS_IN_MONTH"=>"N",
"DISPLAY_DESC_PRINT_DAY"=>"Y",
"DISPLAY_LOCATION"=>"N",
"DISPLAY_SM_MONTH"=>"Y",
"DISPLAY_TASKS"=>"N",
"DISPLAY_TASKS_IN_GRID"=>"N",
"DISPLAY_UNAPPROVED"=>"Y",
"DISPLAY_WEEKENDS"=>"Y",
"DISPLAY_WEEKNUMBER"=>"Y",
"EMAIL_EVENT_ADDED"=>"Y",
"EMAIL_EVENT_DELETED"=>"Y",
"EMAIL_EVENT_REJECTED"=>"Y",
"EMAIL_EVENT_UPDATED"=>"Y",
"EMAIL_HTML"=>"N",
"EMAIL_MAILER"=>"mail",
"EMAIL_REMINDER"=>"Y",
"ENABLE_GRADIENTS"=>"N",
"EXTERNAL_NOTIFICATIONS"=>"N",
"EXTERNAL_REMINDERS"=>"N",
"FREEBUSY_ENABLED"=>"N",
"FONTS"=>"Arial, Helvetica, sans-serif",
"GROUPS_ENABLED"=>"N",
"HASEVENTSBG"=>"#FFFF33",
"H2COLOR"=>"#000000",
"ICS_TIMEZONES"=>"Y",
"IMPORT_CATEGORIES"=>"Y",
"LANGUAGE"=>"none",
"LIMIT_APPTS_NUMBER"=>"6",
"LIMIT_APPTS"=>"N",
"LIMIT_DESCRIPTION_SIZE"=>"N",
"NONUSER_AT_TOP"=>"Y",
"NONUSER_ENABLED"=>"Y",
"OTHERMONTHBG"=>"#D0D0D0",
"OVERRIDE_PUBLIC_TEXT"=>"Not available",
"OVERRIDE_PUBLIC"=>"N",
"PLUGINS_ENABLED"=>"N",
"POPUP_BG"=>"#FFFFFF",
"POPUP_FG"=>"#000000",
"PUBLIC_ACCESS_ADD_NEEDS_APPROVAL"=>"N",
"PUBLIC_ACCESS_CAN_ADD"=>"N",
"PUBLIC_ACCESS_DEFAULT_SELECTED"=>"N",
"PUBLIC_ACCESS_DEFAULT_VISIBLE"=>"N",
"PUBLIC_ACCESS_OTHERS"=>"Y",
"PUBLIC_ACCESS_VIEW_PART"=>"N",
"PUBLIC_ACCESS"=>"N",
"PUBLISH_ENABLED"=>"Y",
"PULLDOWN_WEEKNUMBER"=>"N",
"REMEMBER_LAST_LOGIN"=>"N",
"REPORTS_ENABLED"=>"N",
"REQUIRE_APPROVALS"=>"Y",
"RSS_ENABLED"=>"N",
"SELF_REGISTRATION_BLACKLIST"=>"N",
"SELF_REGISTRATION_FULL"=>"Y",
"SEND_EMAIL"=>"N",
"SERVER_TIMEZONE"=>"America/New_York",
"SITE_EXTRAS_IN_POPUP"=>"N",
"SMTP_AUTH"=>"N",
"SMTP_HOST"=>"localhost",
"SMTP_PASSWORD"=>"",
"SMTP_PORT"=>"25",
"SMTP_USERNAME"=>"",
"STARTVIEW"=>"month.php",
"SUMMARY_LENGTH"=>"80",
"TABLEBG"=>"#000000",
"TEXTCOLOR"=>"#000000",
"THBG"=>"#FFFFFF",
"THFG"=>"#000000",
"TIME_FORMAT"=>"12",
"TIME_SLOTS"=>"24",
"TIMED_EVT_LEN"=>"D",
"TIMEZONE"=>"",
"TODAYCELLBG"=>"#FFFF33",
"TZ_COMPLETE_LIST"=>"N",
"UAC_ENABLED"=>"N",
"USER_SEES_ONLY_HIS_GROUPS"=>"Y",
"WEEK_START"=>"0",
"WEEKENDBG"=>"#D0D0D0",
"WORK_DAY_END_HOUR"=>"17",
"WORK_DAY_START_HOUR"=>"8" 
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
    echo "<img src=\"$filename\" />	 ";
	} else {
	  echo "<h2>NO PREVIEW AVAILABLE</H2>";
	}
	echo "</body></html>";
}
?>
