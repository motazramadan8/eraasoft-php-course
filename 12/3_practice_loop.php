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
    <table class="table table-bordered table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Number</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <!-- Old Way -->
      <!-- <tbody>
        <?php
          // for ($i = 1; $i <= 100; $i++) {
          //   echo "<tr>";
          //       echo "<th scope=\"row\">$i</th>";
          //       if ($i % 2 == 0) {
          //         echo "<td> Number Is Even </td>";
          //       } else {
          //         echo "<td> Number Is Odd </td>";
          //       }
          //   echo "</tr>";
          // }
        ?>
      </tbody> -->

      <!-- New Way -->
      <tbody>
        <?php for ($i = 1; $i <= 50; $i++): ?>
          <tr>
            <th scope="row"><?=$i?></th>
            <td>
              <?php
                if ($i % 2 == 0) {
                  echo "$i Is Even";
                } else {
                  echo "$i Is Odd";
                }
              ?>
            </td>
          </tr>
        <?php endfor ?>
      </tbody>
    </table>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
