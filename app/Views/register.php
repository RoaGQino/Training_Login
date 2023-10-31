// application/views/register.php
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <?php echo form_open('authController/register'); ?>
    
    <!-- First Name -->
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required><br>

    <!-- Last Name -->
    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required><br>

    <!-- Email Address -->
    <label for="email">Email Address:</label>
    <input type="email" name="email" required><br>

    <!-- Phone Number -->
    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" required><br>

    <!-- Password -->
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <!-- Add more registration fields as needed -->

    <input type="submit" value="Register">
    <?php echo form_close(); ?>
</body>
</html>
