<?php include('../main/session_check.php'); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>


<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar (for larger screens) -->
        <div class="navigation col-md-3 col-lg-3 d-none d-md-flex flex-column p-3 bg-body-tertiary" style="width: 280px; min-height:100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4"><img src="../images/world.png" alt="logo" height="50"></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li><a href="admin_map_main.php" class="nav-link link-body-emphasis">Map</a></li>
                <li><a href="announcement.php" class="nav-link link-body-emphasis">Announcements</a></li>
                <li><a href="warehouse_main.php" class="nav-link link-body-emphasis">Warehouse</a></li>
                <li><a href="createuser_admin_main.php" class="nav-link link-body-emphasis">Create Account</a></li>
                <li><a href="statistics_main.php" class="nav-link link-body-emphasis">Statistics</a></li>
                <li><a href="update_products_main.php" class="nav-link link-body-emphasis">Update Products from JSON</a></li>
                <li><a href="add_product_main.php" class="nav-link active link-body-emphasis">Manage Products</a></li>
                <hr>
            </ul>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Account</button>
                <ul class="dropdown-menu">
                    <li><a href="settings.html" class="dropdown-item">Settings</a></li>
                    <li><a class="dropdown-item" id="logoutButton" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Content area (for all screens) -->
        <div class="col-md-9 col-lg-9">
            <!-- Navbar (for smaller screens) -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="../images/world.png" alt="logo" height="50"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a href="admin_map_main.php" class="nav-link link-body-emphasis">Map</a></li>
                      <li class="nav-item"><a href="announcement.php" class="nav-link link-body-emphasis">Announcements</a></li>
                      <li class="nav-item"><a href="warehouse_main.php" class="nav-link link-body-emphasis">Warehouse</a></li>
                      <li class="nav-item"><a href="createuser_admin_main.php" class="nav-link link-body-emphasis">Create Account</a></li>
                      <li class="nav-item"><a href="statistics_main.php" class="nav-link link-body-emphasis">Statistics</a></li>
                      <li class="nav-item"><a href="update_products_main.php" class="nav-link link-body-emphasis">Update Products from JSON</a></li>
                      <li class="nav-item"><a href="add_product_main.php" class="nav-link active link-body-emphasis">Manage Products</a></li>
                      <hr>
                  </ul>
                  <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Account</button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                          <li><a classdropdown-item" id="logoutButton" href="#">Logout</a></li>
                      </ul>
                  </div>
              </div>
            </nav>
                <!-- New buttons with descriptions and frames -->
                <div class="mt-4 mb-4">
                    <h3 class="mb-3 text-center">Product Management Options</h3>
                    <div class="col-lg-8 mx-auto">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Add New Category</h5>
                                <p class="card-text">Create a new product category for better organization.</p>
                                <a href="new_category_main.php" class="btn btn-primary">New Category</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Add New Product</h5>
                                <p class="card-text">Add a new product to your inventory.</p>
                                <a href="new_product_main.php" class="btn btn-primary">New Product</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Manage Quantity</h5>
                                <p class="card-text">Update the quantity of existing products.</p>
                                <a href="quantity_main.php" class="btn btn-primary">Manage Quantity</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Delete Product</h5>
                                <p class="card-text">Delete a product fromyour inventory.</p>
                                <a href="delete_product_main.php" class="btn btn-primary">Delete Product</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

</body>

</html>