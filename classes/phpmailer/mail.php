<?php
include('phpmailer.php');
class Mail extends PhpMailer
{
    // Set default variables for all new objects
    public $From = 'karavaanhunt@iplug.co.in';
    public $FromName = 'KARAVAAN';
    //public $Host     = 'mx1.hostinger.in;
    //public $Mailer   = 'smtp';
    //public $SMTPAuth = true;
    //public $Username = 'karavaanhunt@iplug.co.in';
    //public $Password = '!K@r@v@@n1!';
    //public $SMTPSecure = 'tls';
    public $WordWrap = 75;

    public function subject($subject)
    {
        $this->Subject = $subject;
    }

    public function body($body)
    {
        $this->Body = $body;
    }

    public function send()
    {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace("&nbsp;", "\n\n", $this->AltBody);
        return parent::send();
    }
}