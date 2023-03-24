<?php

/**
 * Open Source Social Network
 *
 * @package   Contact form
 * @author    Red Crested <contact@redcrested.net>
 * @copyright (C) Red Crested
 * @license   Red Crested License  http://www.redcrested.net/license
 * @link      https://www.redcrested.net/
 * 
 */

 class Contact extends OssnMail {
    /**
     * Send email to user. 
     * @param string $email User email address
     * @param string $subject Email subject
     * @param string $body Email body
     * @param string $replyAddress Email address to reply
     * @param string $replyName  Name for reply
     *
     * @return boolean
     */
    public function NotifiyUserWithReplyTo($email, $subject, $body, $replyAddress, $replyName)
    {
        //Emails should be validated before sending emails #1080
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            error_log('Can not send email to empty email address', 0);
        }

        if (empty($replyAddress) || !filter_var($replyAddress, FILTER_VALIDATE_EMAIL)) {
            error_log('Can not send email to empty email reply to address', 0);
        }

        //params contain initial params, while return may contain changed values
        $mail = ossn_call_hook('email', 'config', $this, $this);
        
        $mail->setFrom(ossn_site_settings('notification_email'), ossn_site_settings('site_name'));
        $mail->addAddress($email);
        if (empty($replyName)){
            $mail->addReplyTo($replyAddress);
        } else {
            $mail->addReplyTo($replyAddress, $replyName);
        }
        
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->CharSet = "UTF-8";
        $mail->XMailer = " "; //disable the exposure of x-mailer
        try {
            $send = ossn_call_hook('email', 'send:policy', true, $mail);
            if ($send) {
                if ($mail->send()) {
                    return true;
                }
            } else {
                //allow system to intract with mail
                return ossn_call_hook('email', 'send', false, $mail);
            }
        } catch (phpmailerException $e) {
            error_log("Cannot send email " . $e->errorMessage(), 0);
        }
        return false;
    }

}