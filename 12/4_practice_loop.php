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
      $users = [
        1 => ["Motaz", "Ramadan", "motaz@email.com"],
        2 => ["John", "Jogn", "john@email.com"],
        3 => ["Hany", "Ramadan", "hany@email.com"],
        4 => ["Mohammed", "Ramadan", "mohammed@email.com"],
        5 => ["Omar", "Omar", "omar@email.com"],
        6 => ["Osama","Elzero", "o@email.com"],
        7 => ["Mostafa","Mahmoud", "mostafa@email.com"],
        8 => ["Abdo","Alaa", "abdo@email.com"],
      ]
    ?>
    <table class="table table-bordered table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">E-mail</th>
        </tr>
      </thead>

      <!-- Old Way -->
      <!-- <tbody>
        <?php
          // for ($i = 1; $i <= count($users); $i++) {
          //   echo "<tr>";
          //       echo "<th scope=\"row\">$i</th>";
          //       echo "<td>" . $users[$i][0] . "</td>";
          //       echo "<td>" . $users[$i][1] . "</td>";
          //       echo "<td>" . $users[$i][2] . "</td>";
          //   echo "</tr>";
          // }
        ?>
      </tbody> -->

      <!-- New Way -->
      <tbody>
        <?php for ($i = 1; $i <= count($users); $i++): ?>
            <tr>
                <th scope="row"><?=$i?></th>
                <td><?=$users[$i][0]?></td>
                <td><?=$users[$i][1]?></td>
                <td><?=$users[$i][2]?></td>
            </tr>
        <?php endfor; ?>
      </tbody>
    </table>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
