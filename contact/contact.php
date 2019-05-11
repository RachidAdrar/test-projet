Examples using PHPMailer
1. Advanced Example
This demonstrates sending multiple email messages with binary attachments from a MySQL database using multipart/alternative messages.

require 'PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->setFrom('list@example.com', 'List manager');
$mail->Host   = 'smtp1.example.com;smtp2.example.com';
$mail->Mailer = 'smtp';

@mysqli_connect('localhost','root','password');
@mysqli_select_db("my_company");
$query = "SELECT full_name, email, photo FROM employee";
$result = @mysqli_query($query);

while ($row = mysqli_fetch_assoc($result))
{
    // HTML body
    $body  = "Hello <font size=\"4\">" . $row['full_name'] . "</font>, <p>";
    $body .= "<i>Your</i> personal photograph to this message.<p>";
    $body .= "Sincerely, <br>";
    $body .= "phpmailer List manager";

    // Plain text body (for mail clients that cannot read HTML)
    $text_body  = 'Hello ' . $row['full_name'] . ", \n\n";
    $text_body .= "Your personal photograph to this message.\n\n";
    $text_body .= "Sincerely, \n";
    $text_body .= 'phpmailer List manager';

    $mail->Body    = $body;
    $mail->AltBody = $text_body;
    $mail->addAddress($row['email'], $row['full_name']);
    $mail->addStringAttachment($row['photo'], 'YourPhoto.jpg');

    if(!$mail->send())
        echo "There has been a mail error sending to " . $row['email'] . "<br>";

    // Clear all addresses and attachments for next loop
    $mail->clearAddresses();
    $mail->clearAttachments();
}
2. Extending PHPMailer
Extending classes with inheritance is one of the most powerful features of object-oriented programming. It allows you to make changes to the original class for your own personal use without hacking the original classes, and it's very easy to do:

Here's a class that extends the phpmailer class and sets the defaults for the particular site:
PHP include file: my_phpmailer.php

require 'PHPMailerAutoload.php';

class my_phpmailer extends PHPMailer {
    // Set default variables for all new objects
    public $From     = 'from@example.com';
    public $FromName = 'Mailer';
    public $Host     = 'smtp1.example.com;smtp2.example.com';
    public $Mailer   = 'smtp';                         // Alternative to isSMTP()
    public $WordWrap = 75;

    // Replace the default debug output function
    protected function edebug($msg) {
        print('My Site Error');
        print('Description:');
        printf('%s', $msg);
        exit;
    }

    //Extend the send function
    public function send() {
        $this->Subject = '[Yay for me!] '.$this->Subject;
        return parent::send()
    }

    // Create an additional function
    public function do_something($something) {
        // Place your new code here
    }
}

Now here's a normal PHP page in the site, which will have all the defaults set above:
require 'my_phpmailer.php';

// Instantiate your new class
$mail = new my_phpmailer;

// Now you only need to add the necessary stuff
$mail->addAddress('josh@example.com', 'Josh Adams');
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the message body';
$mail->addAttachment('c:/temp/11-10-00.zip', 'new_name.zip');  // optional name

if(!$mail->send())
{
   echo 'There was an error sending the message';
   exit;
}

echo 'Message was sent successfully';