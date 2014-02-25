<?php
/**
* WoltLab Community Framework
* language: en
* encoding: UTF-8
* category: wcf.user.lostPassword
* generated at Sat, 17 Aug 2013 09:22:34 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.user.lostPassword.description'] = 'You only have to fill in one of the fields.';
$this->items[$this->languageID]['wcf.user.lostPassword.error.email.notFound'] = 'No user with the e-mail address &quot;{$email}&quot; has been found.';
$this->dynamicItems[$this->languageID]['wcf.user.lostPassword.error.email.notFound'] = 'No user with the e-mail address &quot;<?php echo StringUtil::encodeHTML($this->v[\'email\']); ?>&quot; has been found.';
$this->items[$this->languageID]['wcf.user.lostPassword.error.lostPasswordKey.invalid'] = 'You have entered an invalid security key.';
$this->items[$this->languageID]['wcf.user.lostPassword.error.tooManyRequests'] = 'At this user account the password was already requested in the last 24h. For security reasons the password can only be requested once a day. You can request the password for this account again in {$hours} hour(s) .';
$this->dynamicItems[$this->languageID]['wcf.user.lostPassword.error.tooManyRequests'] = 'At this user account the password was already requested in the last 24h. For security reasons the password can only be requested once a day. You can request the password for this account again in <?php echo StringUtil::encodeHTML($this->v[\'hours\']); ?> hour(s) .';
$this->items[$this->languageID]['wcf.user.lostPassword.error.userID.invalid'] = 'You have entered an invalid user ID.';
$this->items[$this->languageID]['wcf.user.lostPassword.lostPasswordKey'] = 'Safety key';
$this->items[$this->languageID]['wcf.user.lostPassword.mail'] = 'Dear {$username},

if you have lost your password you can request a new one.
Please click on the following link to request a new password: {PAGE_URL}/index.php?form=NewPassword&action=new&u={$userID}&k={$key}

You can ignore this e-mail if you have not lost your password.

Have a nice day,
Your {PAGE_TITLE} team';
$this->dynamicItems[$this->languageID]['wcf.user.lostPassword.mail'] = 'Dear <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>,

if you have lost your password you can request a new one.
Please click on the following link to request a new password: <?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?form=NewPassword&action=new&u=<?php echo StringUtil::encodeHTML($this->v[\'userID\']); ?>&k=<?php echo StringUtil::encodeHTML($this->v[\'key\']); ?>

You can ignore this e-mail if you have not lost your password.

Have a nice day,
Your <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?> team';
$this->items[$this->languageID]['wcf.user.lostPassword.mail.sent'] = 'You will receive an e-mail with more information shortly.';
$this->items[$this->languageID]['wcf.user.lostPassword.mail.subject'] = 'Lost password at {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.user.lostPassword.mail.subject'] = 'Lost password at <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.user.lostPassword.newPassword.mail'] = 'Dear {$username},

your new password for the web site "{PAGE_TITLE}" is:
{$newPassword}

You can change your password any time at:
{PAGE_URL}/index.php?form=AccountManagement


Have a nice day,
Your {PAGE_TITLE} team';
$this->dynamicItems[$this->languageID]['wcf.user.lostPassword.newPassword.mail'] = 'Dear <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>,

your new password for the web site "<?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>" is:
<?php echo StringUtil::encodeHTML($this->v[\'newPassword\']); ?>

You can change your password any time at:
<?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?form=AccountManagement


Have a nice day,
Your <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?> team';
$this->items[$this->languageID]['wcf.user.lostPassword.newPassword.mail.subject'] = 'New password on the web site: {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.user.lostPassword.newPassword.mail.subject'] = 'New password on the web site: <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.user.lostPassword.newPassword.title'] = 'Request new password';
$this->items[$this->languageID]['wcf.user.lostPassword.success'] = 'You will receive an e-mail with your new password shortly.';
$this->items[$this->languageID]['wcf.user.lostPassword.title'] = 'Lost password';
?>