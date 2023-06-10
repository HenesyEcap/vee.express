<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>UserDashboard</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>A<span>ccount</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(assets/images/3.png)"></div>
                <h4>VEE EXPRESS</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="home.php" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-user-alt"></span>
                            <small>User Account</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-tasks"></span>
                            <small>About</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for=""> 
                    <div class="user">
                        <div class="bg-img" style="background-image: url(assets/images/1.jpg)"></div>
                        <body>
                        <button class="custom-button" onclick="window.location.href='index.php'">Log out</button>
                         </body>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>WELCOMETO VEE EXPRESS</h1>
                <small>User Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>BOOKING</h2>
                        </div>
                        <div class="card-progress">
                            <small>book your destination here</small>
                           
                        </div>
                    </div>

                    <div class="card" id="train">
                        <div class="card-head">
                            <h2>TRAINS</h2>
                        </div>
                        <div class="card-progress">
                            <small>Available train</small>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-head">
                            <h2>CANCEL</h2>
                        </div>
                        <div class="card-progress">
                            <small>Cancel anytime and anywhere</small>
                            
                        </div>
                    </div>

                </div>


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>History of transaction</span>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><span class="las la-sort"></span> Train</th>
                                    <th><span class="las la-sort"></span> Date</th>
                                    <th><span class="las la-sort"></span> Destination</th>
                                    <th><span class="las la-sort"></span> AC/GS</th>
                                    <th><span class="las la-sort"></span> Fare</th>
                                    <th><span class="las la-sort"></span> Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>
                                     <h4>TRAIN1</h4>
                                    </td>
                                    <td>
                                        June 20, 2020
                                    </td>
                                    <td>
                                        CDO - DAVAO
                                    </td>
                                    <td>
                                        AC
                                    </td>
                                    <td>
                                        -500
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#02</td>
                                    <td>
                                    <h4>TRAIN2</h4>
                                    </td>
                                    <td>
                                        JULY 6, 2020
                                    </td>
                                    <td>
                                        DAVAO - CDO
                                    </td>
                                    <td>
                                       GS
                                    </td>
                                    <td>
                                        -500
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#03</td>
                                    <td>
                                    <h4>TRAIN4</h4>
                                    </td>
                                    <td>
                                        Aug 11, 2021
                                    </td>
                                    <td>
                                        CDO - GENSAN
                                    </td>
                                    <td>
                                        AC
                                    </td>
                                    <td>
                                        350
                                    </td>
                                    <td>
                                        UNPAID
                                    </td>
                                </tr>
                                <tr>
                                    <td>#04</td>
                                    <td>
                                        <h4>TRAIN4</h4>
                                    </td>
                                    <td>
                                        Oct 02, 2021
                                    </td>
                                    <td>
                                        CDO - DIPOLOG
                                    </td>
                                    <td>
                                        AC
                                    </td>
                                    <td>
                                        -550
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#05</td>
                                    <td>
                                        <h4>TRAIN5</h4>
                                    </td>
                                    <td>
                                        Sept 02, 2020
                                    </td>
                                    <td>
                                        DIPOLOG - MARAMAG
                                    </td>
                                    <td>
                                        GS
                                    </td>
                                    <td>
                                       -310
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>
</body>
</html>