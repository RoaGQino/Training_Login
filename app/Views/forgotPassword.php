<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- custom css file link  -->
 <link rel="stylesheet" href="public/css/style.css">
 <link rel="stylesheet"  href="<?php echo base_url('public/css/style.css'); ?>">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
}

.container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding:20px;
    padding-bottom: 60px;
}

.container .content{
    text-align: center;
}

.container .content h3{
    font-size: 30px;
    color:#333;
}

.container .content h3 span{
    background: dimgrey;
    color:#111;
    border-radius: 5px;
    padding:0 15px;
}

.container .content h1{
    font-size: 50px;
    color:#333;
}

.container .content h1 span{
    color:dimgrey;
}

.container .content p{
    font-size: 25px;
    margin-bottom: 20px;
}

.container .content .btn{
    display: inline-block;
    padding:10px 30px;
    font-size: 20px;
    background: dimgrey;
    color:#111;
    margin:0 5px;
    text-transform: capitalize;
}

.container .content .btn:hover{
    background: dimgrey;
}

.form-container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding:20px;
    padding-bottom: 60px;
    background: #eee;
}

.form-container form{
    padding:20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    background: #fff;
    text-align: center;
    width: 500px;
}

.form-container form h3{
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color:#333;
}

.form-container form input,
.form-container form select{
    width: 100%;
    padding:10px 15px;
    font-size: 17px;
    margin:8px 0;
    background: #eee;
    border-radius: 5px;
}

.form-container form select option{
    background: #fff;
}

.form-container form .form-btn{
    background: #fbd0d9;
    color:dimgrey;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}

.form-container form .form-btn:hover{
    background: dimgrey;
    color:#fff;
}

.form-container form p{
    margin-top: 10px;
    font-size: 20px;
    color:#333;
}

.form-container form p a{
    color:dimgrey;
}



</style>
</head>

<body>
<div class="form-container" style="background-color: lavenderblush;">

<div class="shadow w-350 p-3 text-center" style="background-color: white;">
    

    <h1>Forgot Password</h1>
    <form method="post" action="<?=  base_url('forgotPassword'); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Reset Password</button>
    </form>
    </div>
  
   
  </div>
</body>
</html>
