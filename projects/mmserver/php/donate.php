<?php
/**
 * Created by PhpStorm.
 * User: gonzal99
 * Date: 7/27/2015
 * Time: 11:04 AM
 */
session_start();
?>
<div class="row panel">
    <ul class="pricing-table">
        <li class="title">Monthly</li>
        <li class="price">$1.99</li>
        <li class="title">Yearly</li>
        <li class="price">$19.99</li>
        <li class="description">Save $3.99 by subscribing for a year!</li>
    </ul>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="LRCB3B7GYVE3G">
        <table>
            <tr>
                <td><input type="hidden" name="on0" value=""></td>
            </tr>
            <tr>
                <td><select name="os0">
                        <option value="Monthly">Monthly : $1.99 USD - monthly</option>
                        <option value="Yearly">Yearly : $19.99 USD - yearly</option>
                    </select></td>
            </tr>
        </table>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0"
               name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</div>

