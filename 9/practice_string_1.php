<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practice 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="container mt-3">
      <h2>
        Get String Length & Write Result In Alert & Get Random Limit Of String & Put It In Card
      </h2>
    </section>

    <section class="container mt-3">
      <?php
        $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Officiis, quidem praesentium placeat reprehenderit fugit ist 
        necessitatibus alias nobis similique placeat.";

        $str_len = strlen($text)
      ?>
      <div class="alert alert-info" role="alert">
        Number of chars : <?=$str_len?> characters
      </div>
    </section>

    <section class="container mt-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Random text</h5>
          <p class="card-text">
            <?php
              $first_num = rand(0, $str_len - 70);
              $last_num = rand(0, $str_len);
              echo substr($text, $first_num, $last_num);
            ?>
          </p>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
