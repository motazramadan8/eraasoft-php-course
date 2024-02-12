<?php
  // Navbar
  $brandName = "Apple";

  // Card details
  $cardTitle = "Card Title...";
  $cardDescription = "Card Description...";
  $cardBtn = "Card Button...";
  $cardImg = "https://res.cloudinary.com/dxdgvesog/image/upload/v1695276668/mvptbrfd65tld2ss3orp.png";

  // Table Details
  $firstEmpName = "Motaz";
  $firstEmpEmail = "motaz@gmail.com";
  $firstEmpAge = 20;
  $firstEmpSalary = " 90,000";
  
  $lastEmpName = "Mostafa";
  $lastEmpEmail = "mostafa@gmail.com";
  $lastEmpAge = 30;
  $lastEmpSalary = "75,000";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
  </head>
  <body style="font-family: Arial; background: #212529;">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <?php echo $brandName; ?>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-primary" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- start table -->
    <section class="container my-5">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Salary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <?=$firstEmpName?>
            </th>
            <td>
              <?=$firstEmpEmail?>
            </td>
            <td>
              <?=$firstEmpAge?>
            </td>
            <td>
              <?=$firstEmpSalary?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              <?=$lastEmpName?>
            </th>
            <td>
              <?=$lastEmpEmail?>
            </td>
            <td>
              <?=$lastEmpAge?>
            </td>
            <td>
              <?=$lastEmpSalary?>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <!-- end table -->

    <!-- Start Card -->
    <section class="container mt-5">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem; background: #2B3035; color: #fff;">
            <img src="<?php echo $cardImg; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $cardTitle; ?>
              </h5>
              <p class="card-text">
                <?php echo $cardDescription; ?>
              </p>
              <a href="#" class="btn btn-primary">
                <?php echo $cardBtn; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; background: #2B3035; color: #fff;">
            <img src="<?php echo $cardImg; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $cardTitle; ?>
              </h5>
              <p class="card-text">
                <?php echo $cardDescription; ?>
              </p>
              <a href="#" class="btn btn-primary">
                <?php echo $cardBtn; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; background: #2B3035; color: #fff;">
            <img src="<?php echo $cardImg; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $cardTitle; ?>
              </h5>
              <p class="card-text">
                <?php echo $cardDescription; ?>
              </p>
              <a href="#" class="btn btn-primary">
                <?php echo $cardBtn; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem; background: #2B3035; color: #fff;">
            <img src="<?php echo $cardImg; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $cardTitle; ?>
              </h5>
              <p class="card-text">
                <?php echo $cardDescription; ?>
              </p>
              <a href="#" class="btn btn-primary">
                <?php echo $cardBtn; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
