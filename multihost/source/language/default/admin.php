<?php
/* 
     // ======================================== \
     // Package: Mihalism Multi Host
     // Version: 5.0.0
     // Copyright (c) 2007, 2008, 2009 Mihalism Technologies
     // License: http://www.gnu.org/licenses/gpl.txt GNU Public License
     // LTE: 1253384592 - Saturday, September 19, 2009, 02:23:12 PM EDT -0400
     // ======================================== /
     
     This file contains some language settings that are a part of Mihalism Multi Host but were not able to 
     be placed into template files. In each setting, %s represents a place holder for a value that will 
     be dynamically generated by Mihalism Multi Host; so be careful while editing to not remove them.
     
     Language file index:
		001 -- Message to be displayed when site settings have been changed
		002 -- Error to be displayed if an user is not an administrator
		003 -- Message to be displayed if no logs are found
		004 -- Notice to be used when there is no referrer for a search engine log
		005 -- Message to be displayed when logs have been emptied
		006 -- Notice to be used for file logs when an image does not exist
		007 -- Notice to be used for file logs when an image does exist
		008 -- Notice to be used for file logs when an image was not uploaded by registered user
		009 -- Error to be displayed if an invalid number of input paramters (GET/POST) are supplied
		010 -- Error to be displayed if a language file does not exist while editing
		011 -- Error to be displayed if a language file is unable to be saved during editing
		012 -- Message to be displayed when language settings have been changed
		362 -- Error to be displayed if all form fields have not been filled in completely
		596 -- Error to be displayed if original values of language file failed to copy over
		666 -- Message to be displayed when the original values of a language file are restored
		383 -- Catchall error for nonexistent pages
		463 -- Message to be displayed if a gallery is empty
		530 -- Error to be displayed if no filename is supplied
		843 -- Error to be displayed if a file does not exist
		460 -- Error to be displayed if a file fails to delete
		687 -- Error to be displayed if a thumbnail fails to delete
		565 -- Message to be displayed when an image has been deleted
		781 -- Notice to be used for standard uploads in file logs
		441 -- Notice to be used for URL uploads in file logs
		317 -- Message to be displayed when ban filter has been updated
		375 -- Error to be displayed if an invalid reCAPTCHA code is given
		997 -- Error to be displayed if a mail send fails
		371 -- Error to be displayed if BBC list could not be created for bulk email
		904 -- Message to be displayed when users have been bulk emailed
		481 -- Notice to be used for private galleries in user list page
		646 -- Notice to be used for public galleries in user list page
		278 -- Error to be displayed if a user does not exist
		112 -- Error to be displayed if an invalid email address is given
		337 -- Error to be displayed if an invalid password is given
		772 -- Error to be displayed if a normal admin tries to change the root admin's settings
		330 -- Message to be displayed when user settings have been saved
		478 -- Error to be displayed if someone tries to delete the root admin
		157 -- Message to be displayed when an user has been deleted
		598 -- Error to be displayed if a search returns no results
		413 -- Message to be displayed when images have been moved
		746 -- Error to be displayed if an album name is already in use
		412 -- Message to be displayed when a new album has been created
		338 -- Error to be displayed if an album cannot be renamed
		101 -- Message to be displayed when an album has been renamed
		442 -- Error to be displayed if an album cannot be deleted
		738 -- Message to be displayed when an album has been deleted
		577 -- Error to displayed if failed to get process list
		899 -- Error to be displayed if error log is empty
		906 -- Error to be displayed if album does not exist when moving images
		914 -- Error to be displayed if site is already up-to-date during upgrade try
		378 -- Error to be displayed if upgrader is unable to get list of changed files
		486 -- Message to be displayed if no file differences are found
		785 -- Message to be displayed when upgrade has completed
		540 -- Error to be displayed if .htaccess file fails to open

*/
    
	$mmhclass->lang['001'] = "Settings have been successfully saved. <br />
<br />
<a href=\"admin.php?act=site_settings\">Return to Site Settings</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['002'] = "You must be logged in as a site administrator to view this page.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['003'] = "Logs are empty.";
	$mmhclass->lang['004'] = "None/Unknown";
	$mmhclass->lang['005'] = "Logs have been successfully emptied.<br />
<br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['006'] = "Offline";
	$mmhclass->lang['007'] = "Online";
	$mmhclass->lang['008'] = "Guest";
	$mmhclass->lang['009'] = "An invalid number of input parameters (<a href=\"http://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods\">GET / POST</a>) have been supplied.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['010'] = "The requested language file does not exist.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['011'] = "The language file <b>%s</b> failed to save. Please try again. <br />
 <br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['012'] = "Language settings have been successfully saved.<br />
<br />
<a href=\"admin.php?act=language_settings\">Return to Language Settings</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['362'] = "The form on the previous page has not been filled in completely. <br />
One or more fields have been left blank. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['596'] = "Failed to restore the original version of the language file <b>%s</b>. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['666'] = "The original version of the language file <b>%s</b> has been restored.<br />
<br />
<a href=\"admin.php?act=language_settings\">Return to Language Settings</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['383'] = "You have reached this page in error. Please use your back button to return to the previous page.";
	$mmhclass->lang['463'] = "Gallery is empty.";
	$mmhclass->lang['530'] = "No filename has been supplied.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['843'] = "The image file <b>%s</b> does not exist. <br />
Please ensure the filename is spelled correctly.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['460'] = "The image file <b>%s</b> is unable to be deleted.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['687'] = "The thumbnail of the image file <b>%s</b> could not be deleted.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['565'] = "Images have been successfully deleted.<br />
<br />
<a href=\"index.php?rurl=%s\">Return to Previous Page</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['781'] = "Normal";
	$mmhclass->lang['441'] = "URL";
	$mmhclass->lang['317'] = "Ban filter has been successfully updated. <br />
<br />
<a href=\"admin.php?act=ban_control\">Return to Previous Page</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['375'] = "The security code entered did not match the one displayed. <br />
A new code has been generated. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['997'] = "Failed to send email due to an error with the mail server. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['371'] = "List of email addresses to contact could not be created.<br />
Possibly no users found matching requested settings. <br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['904'] = "Email has been successfully sent out. <br />
<br />
<a href=\"admin.php?act=mass_email\">Return To Previous Page</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['481'] = "Private";
	$mmhclass->lang['646'] = "Public";
	$mmhclass->lang['278'] = "User does not exist. Please try again. <br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['112'] = "The email address <b>%s</b> appears to be in an invalid format.<br />
A valid address would look like: <b>username@example.com</b>.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['337'] = "The password entered is not valid based on the specified requirements. <br />
It is either too long or too short. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['772'] = "Protected User. Root Access Required.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['330'] = "User settings have been successfully saved. <br />
<br />
<a href=\"admin.php?act=user_list\">Return to User Management</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['478'] = "The root administrator is not allowed to be deleted.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['157'] = "User has been successfully deleted. <br />
<br />
<a href=\"admin.php?act=user_list\">Return to User Management</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['598'] = "No results found.";
	$mmhclass->lang['413'] = "Images have been successfully moved.<br />
<br />
<a href=\"index.php?rurl=%s\">Return to Previous Page</a><br />
<a href=\"admin.php?gal=%s&cat=%s\">Go to New Album</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['746'] = "The album name <b>%s</b> is already in use. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['412'] = "The album <b>%s</b> has been successfully created.<br />
<br />
<a href=\"index.php?rurl=%s\">Return to Previous Page</a><br />
<a href=\"admin.php?gal=%s&cat=%s\">Go to New Album</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['338'] = "The requested album is unable to be renamed.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['101'] = "The album <b>%s</b> has been successfully renamed to <b>%s</b>.<br />
<br />
<a href=\"index.php?rurl=%s\">Return to Previous Page</a><br />
<a href=\"admin.php?gal=%s&cat=%s\">Go to Renamed Album</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['442'] = "The requested album is unable to be deleted.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['738'] = "The requested album has been successfully deleted.<br />
<br />
<a href=\"admin.php?gal=%s\">Return to User Gallery</a><br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['577'] = "Failed to retrieve list of running processes. <br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['899'] = "No errors have been logged for today. <br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['906'] = "Destination album does not exist.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['914'] = "Website is running latest version already.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['378'] = "Failed to retrieve list of changed files.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['486'] = "No differences were found between local and SVN version.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";
	$mmhclass->lang['785'] = "Upgrade complete. <br />
Now running v%s.<br />
<br />
<a href=\"admin.php\">Admin CP Index</a>";
	$mmhclass->lang['540'] = "Failed to open .htaccess file for writing. Please try again.<br />
<br />
<a href=\"javascript:void(0);\" onclick=\"history.go(-1);\">Return to Previous Page</a>";


?>