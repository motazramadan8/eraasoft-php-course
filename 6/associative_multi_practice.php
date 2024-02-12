<?php
  $students = [
    [
      "id" => "1",
      "name" => "Motaz",
      "email" => "motaz@gmail.com",
      "phone" => "01015615644",
    ],
    [
      "id" => "2",
      "name" => "Ali",
      "email" => "ali@gmail.com",
      "phone" => "01015615644",
    ],
    [
      "id" => "3",
      "name" => "Mostafa",
      "email" => "mostafa@gmail.com",
      "phone" => "01015615644",
    ],
    [
      "id" => "4",
      "name" => "Mostafa",
      "email" => "mostafa@gmail.com",
      "phone" => "01015615644",
    ],
    [
      "id" => "5",
      "name" => "Elzero",
      "email" => "o@gmail.com",
      "phone" => "01015615644",
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body style="font-family: Arial; background: #212529">

    <section class="container mt-5">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <?=$students[0]["id"]?>
            </th>
            <td>
              <?=$students[0]["name"]?>
            </td>
            <td>
              <?=$students[0]["email"]?>
            </td>
            <td>
              <?=$students[0]["phone"]?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              <?=$students[1]["id"]?>
            </th>
            <td>
              <?=$students[1]["name"]?>
            </td>
            <td>
              <?=$students[1]["email"]?>
            </td>
            <td>
              <?=$students[1]["phone"]?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              <?=$students[2]["id"]?>
            </th>
            <td>
              <?=$students[2]["name"]?>
            </td>
            <td>
              <?=$students[2]["email"]?>
            </td>
            <td>
              <?=$students[2]["phone"]?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              <?=$students[3]["id"]?>
            </th>
            <td>
              <?=$students[3]["name"]?>
            </td>
            <td>
              <?=$students[3]["email"]?>
            </td>
            <td>
              <?=$students[3]["phone"]?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              <?=$students[4]["id"]?>
            </th>
            <td>
              <?=$students[4]["name"]?>
            </td>
            <td>
              <?=$students[4]["email"]?>
            </td>
            <td>
              <?=$students[4]["phone"]?>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
