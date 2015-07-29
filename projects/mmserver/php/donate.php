<?php
/**
 * Created by PhpStorm.
 * User: gonzal99
 * Date: 7/27/2015
 * Time: 11:04 AM
 */
session_start();
?>
<form method=post action="https://www.paypal.com/cgi-bin/webscr">
    <input type="hidden" name="cmd" value="_notify-synch">
    <input type="hidden" name="tx" value="TransactionID">
    <input type="hidden" name="at" value="z8-n-Tom0hWOgDacp5_buC8HiBqkD4x5prUQ9U2RVyWD5SIBXOsIJVBpGcK">
    <input type="submit" value="PDT">
</form>
