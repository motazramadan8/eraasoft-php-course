<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Table">
    <title>Practice - Loops</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body style="background: #1B1F22">
    <?php
      $product = [
        "name" => "T-shirt",
        "price" => 150,
        "offer" => 10,
        "stock" => "available",
      ]
    ?>

    <table class="table table-bordered table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Offer</th>
          <th scope="col">Stock</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <?php foreach($product as $key => $value): ?>
            <td><?=$product[$key]?></td>
          <?php endforeach; ?>
        </tr>
        <tr>
          <?php foreach($product as $value): ?>
            <td><?=$value?></td>
          <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
