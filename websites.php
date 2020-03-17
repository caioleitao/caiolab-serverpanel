<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>caiolab-cloud</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/sidebar-1.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<?php
    include "includes/sidebar.php";
?>

<div class="div-websites">
    <h1>example.com</h1>
    <br/>
    <div class="btn-group btn-group-toggle">
        <label class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-eye"></i>
            <p style='color: #fff;'>Visit your website</p>
        </label>
        <label class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-users-cog"></i>
            <p style='color: #fff;'>Website Admin</p>
        </label>
        <label class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-database"></i>
            <p style='color: #fff;'>Phpmyadmin</p>
        </label>
        <label class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-memory"></i>
            <p style='color: #fff;'>Change plan</p>
        </label>
        <label class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-power-off"></i>
            <p style='color: #fff;'>Cancel website</p>
        </label>
    </div>
    <br/>
    <br/>
    <div class="container text-center">
        <div class="row">

            <h3>Specs:</h3>
            <table class="table table-bordered">
                <thead class="text-white" style='background-color: #4555D1;'>
                    <tr>
                        <th scope="col">Application</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Bandwidth</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Uptime</th>
                        <th scope="col">CDN</th>
                        <th scope="col">SSL</th>
                        <th scope="col">Price</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>Wordpress</td>
                        <td>5gb SSD</td>
                        <td>Unlimited</td>
                        <td>Medium</td>
                        <td>99%</td>
                        <td>No</td>
                        <td>Let's Encrypt</td>
                        <td>BRL 25</td>
                    </tr>
                </tbody>
                </thead>
            </table>

            <br/>

            <h4>Application / FTP Access</h4>
            <table class="table table-bordered">
                <thead class="text-white" style='background-color: #4555D1;'>
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Password</th>

                </tr>
                <tbody>
                <tr>
                    <td>Example342</td>
                    <td>664654654</td>

                </tr>
                </tbody>
                </thead>
            </table>

            <br/>

            <h4>Database Access</h4>
            <table class="table table-bordered">
                <thead class="text-white" style='background-color: #4555D1;'>
                <tr>
                    <th scope="col">Mysql User</th>
                    <th scope="col">Mysql Password</th>

                </tr>
                <tbody>
                <tr>
                    <td>Example435</td>
                    <td>45535435</td>

                </tr>
                </tbody>
                </thead>
            </table>

        </div>
    </div>
</div>


<?php
    include "includes/header.php";
?>


</body>

</html>