<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_pricecalculators
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
/**
 * Hello World Component Controller
 *
 * @since  0.0.1
 */
class PriceCalculatorController extends JControllerLegacy
{

  public function send_claim_email(){


    $input = JFactory::getApplication()->input;
    $post_array = $input->getArray($_POST);

    $input = JFactory::getApplication()->input;

    if($post_array['emailaddress']==''){
      $this->setRedirect(JRoute::_('/',false),'Something went wrong - Please enter your email address.', '');
    } else {
      $recipientEmail=$post_array['emailaddress'];
      // send email:
      $mailer = JFactory::getMailer();
      $config = JFactory::getConfig();
      $sender = array(
      $config->get( 'mailfrom' ),
      $config->get( 'fromname' )
      );

      $mailer->addRecipient($recipientEmail);

      $body   = "Thank you for contacting SmartCanDo! One of our experience technical consultant will contact you shortly!\n Here is your discount code: smart10!\nThanks,\nSmartCando Team";
      $mailer->setSubject('Excited to have a smart home?');
      $mailer->setBody($body);

      $mailer->setSender($sender);
      $send = $mailer->Send();
      if ( $send !== true ) {
          echo 'Error sending email: ';
      } else {
          echo 'Mail sent';
      }

      $mailer->ClearAllRecipients( ); // clear all
      $recipient = array( 'shabnam.koosha@gmail.com', 'bahman.koosha@gmail.com');

      $mailer->addRecipient($recipient);

      $mailer->setSubject('New Query for Smarthome');
      $body   = "Email: ".$post_array['emailaddress']." What this client need:</br> Bulb:".$post_array['bulb']."<br>Shade: ".$post_array['shade']."<br>TV: ".$post_array['smart_tv']."<br>Sound System: ".$post_array['sousnd_sys']
      ."<br>Thermostat: ".$post_array['smart_thermostat']."<br>Security Camera: ".$post_array['sec_camera']."<br>Door Bell: ".$post_array['door_bell']
      ."<br>Door Lock: ".$post_array['door_lock']."<br>Smart Kitchen: ".$post_array['smart_kitchen']."<br>Smart Bed: ".$post_array['smart_bed']."<br>Smart Mirror: ".$post_array['smart_mirror']
      ."<br>Smart Bathroom: ".$post_array['smart_bathroom']."<br>Have Products: ".$post_array['haveprods'];
      $mailer->setBody($body);
      $mailer->setSender($sender);
      $send = $mailer->Send();
      if ( $send !== true ) {
          echo 'Error sending email: ';
      } else {
          echo 'Mail sent';
      }
        $this->setRedirect(JRoute::_('/',false),'Your discount code is on the way. One of our technical support crew will contact you soon.', '');
    }
    //exit();

  }
}
