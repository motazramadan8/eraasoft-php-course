<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet" 
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
      crossorigin="anonymous"
    >
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <h1 class="text-center border p-5 my-3">Users Database</h1>
        <div class="col-6 mx-auto p-2">
          <form action="6_practice_user.php" method="POST" class="p-3 border">
            <div class="form-group">
              <div class="mb-3">
                <input type="email" name="user_email" class="form-control" placeholder="Type email of user">
              </div>
              <div class="mb-3">
                <input type="text" name="user_name" class="form-control" placeholder="Type name of user">
              </div>
              <div class="mb-3">
                <input type="password" name="user_password" class="form-control" placeholder="Type password of user">
              </div>
              <div class="mt-3">
                <input type="submit" value="Send" class="form-control btn btn-success">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
      crossorigin="anonymous"
    ></script>
  </body>
</html>
