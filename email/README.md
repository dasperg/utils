# Simple email send

## Description
Send html email from PHP without local SMTP server.

## Requirements
1. PHP >=5.6
2. [Composer](https://getcomposer.org/) 

## Installation
1. Clone this repository  
2. Run `composer install` from this directory  
3. Set your SMTP server configuration in `send.php`  

## Usage
```
// Add recipient - just add more lines
$mail->addAddress('john.doe@example.com', 'John Doe');

// Define reply to address 
$mail->addReplyTo('no-reply@exaplme.com', 'No reply');

// Add carbon copy recipient
$mail->addCC('cc@example.com');

// Add blind carbon copy recipent
$mail->addBCC('bcc@example.com');

// Attachments
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
```