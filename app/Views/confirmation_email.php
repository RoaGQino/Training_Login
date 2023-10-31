<!DOCTYPE html>
<html>
<head>
    <title>Account Confirmation</title>
</head>
<body>
    <p>Hello,</p>
    <p>Please click the following link to confirm your account:</p>
    <p><a href="<?php echo site_url('confirm/' . $confirmation_token); ?>">Confirm Account</a></p>
</body>
</html>
