<?php 
require('NewsletterForm.php');
$form = new NewsletterForm("post","Submit.php");
$form->addFormElement('email', 'Email','email-id','','Email'); 
$form->addFormElement('name', 'Name','name-id','','Name'); 
$form->setValidation("true");
?>	

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Newsletter Form</title>
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <div id="newsletterform">
            <div class="wrap">
                <h3>Subscribe to Newsletter</h3>
                <?php echo $form->showForm();?>
                <div id="response"></div>
                <div>
                <input type=submit onClick="parent.location='subscribers.php'" value='View Subscribers'>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/lib.js"></script>
    </body>
</html>