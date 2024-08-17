<?php
  session_start();
  if (isset($_SESSION["user_name"]) && isset($_SESSION["user_email"]) && isset($_SESSION["user_password"])) {
    header("location:feed.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#18191A] overflow-hidden">
    <section class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
      <h1 class="text-center text-[30px] text-yellow-500 p-5">Signup</h1>
      <form action="form_validation.php" method="POST" class="bg-[#242526] p-4 rounded">
        <div class="errors">
          <?php
            if (isset($_SESSION["errors"])):
              foreach($_SESSION["errors"] as $error):
          ?>
            <div class="bg-[#2C0B0E] border-[#842029] border-[1px] my-2 p-4 text-[rgb(234,134,143)] max-w-[350px]">
              <?php echo $error; ?>
            </div>
          <?php
              endforeach;
              unset($_SESSION["errors"]);
            endif;
          ?>
        </div>
        <input type="text" name="user_name" placeholder="Username" class="bg-[#18191A] p-3 w-[350px] my-2 text-white">
        <br>
        <input type="email" name="user_email" placeholder="Email" class="bg-[#18191A] p-3 w-[350px] my-2 text-white">
        <br>
        <input type="password" name="user_password" placeholder="Password" class="bg-[#18191A] p-3 w-[350px] my-2 text-white">
        <br>
        <input type="password" name="user_confirm_password" placeholder="Confirm Password" class="bg-[#18191A] p-3 w-[350px] my-2 text-white">
        <br>
        <input type="submit" class="bg-yellow-500 w-full my-3 p-2 cursor-pointer" value="Signup">
      </form>
    </section>
  </body>
</html>