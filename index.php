<?php include('mail.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Validate Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <aside>
            <div>
                <p></p>
            </div>
            <div>
                <form name="form" id="f" method="POST" onsubmit="return submitForm();" accept-charset="UTF-8">
                    <fieldset>
                        <legend>Send Email</legend>
                        <p id="err"></p>
                        <label for="n">First Name:</label><br />
                        <input type="text" id="n" name="fname" placeholder="Name"><span class="error"><?php echo $nameErr;?></span><br />
                        <label for="e">Email:</label><br />
                        <input type="text" id="e" name="email" placeholder="Email Address">
                    <p>Message: </p>
                    <textarea id="m" name="message" placeholder="write your message here" rows="12" cols="30"></textarea>
                    <p><input id="mybtn" type="submit" value="Submit Form"> <span id="status"></span></p>
                    </fieldset>
                </form>
            </div>
        </aside>
        <script src="myJS.js" type="text/javascript"></script>
    </body>
</html>
