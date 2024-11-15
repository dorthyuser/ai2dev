<?php
include 'db_connect.php';
session_start();
$session_id = $_SESSION['email'];
if ($session_id == '') {
    header('Location: login.php');
    exit();
}

$getData = "SELECT * FROM `loadbalancer` WHERE `email` = '$session_id'";
$resultData = mysqli_query($conn, $getData);
$roenum = mysqli_num_rows($resultData);

$getData1 = "SELECT * FROM `login` WHERE `email` = '$session_id'";
$resultData1 = mysqli_query($conn, $getData1);
$DataArray = mysqli_fetch_assoc($resultData1);

if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $delete_q = "DELETE FROM `loadbalancer` WHERE `id` = '$id'";
    $delete_result = mysqli_query($conn, $delete_q);
    if ($delete_result) {
        $response = [
            'status' => 'success',
            'message' => 'Load Balancer Delete Successfully',
        ];
        echo json_encode($response);
        exit;
    }
}
include 'editimage.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Design</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- <link rel="shortcut icon" href="images/f-icon.png" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./css/lenis.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/custom-style.css" rel="stylesheet" />
    <link href="./sass/main.css" rel="stylesheet" />
</head>

<body>
    <section class="dashboard d-block dark_background">
        <div class="d-flex gap-0">
            <div class="dash_nav ">
                <div class="d-flex flex-column gap-4 py-4 dashboard_fixed">
                    <div
                        class="rel d-flex flex-column gap-3 pb-1  border-bottom justify-content-center align-items-start">
                        <div class="d-flex align-items-center gap-3">
                        <form method="post" class="d-block user_profile" enctype="multipart/form-data"
                                id="profileForm">
                                <img class="w-100 h-100 object-fit-cover priflr" src="uploads/<?php if ($DataArray['profileimage'] == '') {
                                    $DataArray['profileimage'] = 'edit-user.png';
                                }
                                echo $DataArray['profileimage']; ?>" alt="profile image">
                                <input id="changeprofile" name="editprofile" type="file">
                            </form>
                            <div class="d-flex flex-column gap-0 ">
                                <h5><?php echo $DataArray['name'] ?></h5>
                                <p><?php echo $DataArray['email'] ?></p>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-0 justify-content-center align-items-center">
                              <a class="dashboard_link" href="cluster.php">
                                Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="dash_list rel">
                        <ul class="dash_listul">
                        <li>
                                <div class="btn-group">
                                    <button class="btn btn-secondary dropdown-toggle " type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="true">
                                        <div class="d-block nav_icons">
                                            <img class="w-100 h-100 object-fit-contain" src="images/cluster.svg"
                                                alt="image">
                                        </div>
                                        Cluster
                                    </button>
                                    <ul class="dropdown-menu ">
                                        <li><a href="cluster.php" class="dropdown-item" href="#">New Cluster</a>
                                        </li>
                                        <li><a class="dropdown-item " href="listcluster.php">List Cluster</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                        <div class="d-block nav_icons">
                                            <img class="w-100 h-100 object-fit-contain" src="images/node-js.png"
                                                alt="image">
                                        </div>
                                        Nodes
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="node.php">New Node</a></li>
                                        <li><a class="dropdown-item" href="listnode.php">List Nodes</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                        <div class="d-block nav_icons">
                                            <img class="w-100 h-100 object-fit-contain" src="images/data.png"
                                                alt="image">
                                        </div>
                                        Applications
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="application.php">New Application</a></li>
                                        <li><a class="dropdown-item" href="listapplication.php">List Applications</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button class="btn btn-secondary dropdown-toggle show active" type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                        <div class="d-block nav_icons">
                                            <img class="w-100 h-100 object-fit-contain" src="images/load-balaning.png"
                                                alt="image">
                                        </div>
                                        Load Balancer
                                    </button>
                                    <ul class="dropdown-menu show">
                                        <li><a class="dropdown-item" href="loadbalancer.php">New Load Balancer</a>
                                        </li>
                                        <li><a class="dropdown-item active" href="listloadbalancer.php">List Load Balancer</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                        <div class="d-block nav_icons">
                                            <img class="w-100 h-100 object-fit-contain" src="images/load-balaning.png"
                                                alt="image">
                                        </div>
                                        Logs
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="newlogs.php">New Logs</a></li>
                                        <li><a class="dropdown-item" href="listlogs.php">List Logs</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column gap-4 w-100 z-3 h100vh dark_background">
                <div class="d-flex align-items-center px-4 py-2 gap-5 justify-content-between top_nav">
                    <button onclick="open_nav()" class="nav_open"><img class="w-100 h-100 object-fit-contain"
                            src="images/list.png" alt="img"></button>
                    <div class="d-flex align-items-center gap-4">
                        <select class="country" name="wcpbc-manual-country" id="country">

                            <option value="AU" data-iconurl="https://aus.merchnow.com/img/location-aus.png">AU</option>
                            <option value="IN" data-iconurl="https://images0.voylla.com/flags/inr.gif">IN</option>
                        </select>
                        <div class="dropdown">
                            <button class="btn nav_open py-0 btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="w-100 h-100 object-fit-contain p-1" src="images/settings.png" alt="img">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="pe-1 fa-regular fa-pen-to-square"></i>
                                        Edit Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php"> <i
                                            class="pe-1 fa-solid fa-power-off"></i> logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cluster_list px-4 py-3">
                    <div class="row gy-5">
                        <div class="col-12">
                            <h1>List Load Balancer</h1>
                        </div>
                        <div class="col-12 ">
                            <div class="table_component">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Load Balancer Name</th>
                                            <th>Master IP</th>
                                            <th>Worker IP</th>
                                            <th>Infrastructure</th>
                                            <th>Status</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="divlength">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resultData)) {
                                            ?>
                                            <tr id="mainrow<?php echo $row['id'] ?>">
                                                <td><?php echo $row['loadbalancername']; ?></td>
                                                <td><?php echo $row['masternodeip']; ?></td>
                                                <td><?php echo $row['workernodeip']; ?></td>
                                                <td><?php echo implode(", ", json_decode($row['infrastructure'])) ?></td>
                                                <td>Success</td>
                                                <td><button class="edit_btn"><i class="fa-solid fa-eye"></i></button></td>
                                                <td><button onclick="deleteBtn(<?php echo $row['id']; ?>)"
                                                        class="delete_btn"><i class="fa-solid fa-trash"></i></button></td>
                                            </tr>
                                            <?php
                                        }

                                        ?>
                                    </tbody>
                                </table>
                                <div id="no_data" class="pb-3 text-center <?php if ($roenum == '0') {
                                    echo 'd-block';
                                } ?>">
                                    <p>No Data Found</p>
                                </div>
                            </div>
                            <div id="error1"></div>
                            <div id="loader_spin" class="loader_main">
                                <span class="loader"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.16/dist/lenis.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        function deleteBtn(id) {
            const loader = document.getElementById('loader_spin');
            loader.classList.add('d-block');
            const tableLength = document.getElementById('divlength');
            const trElements = tableLength.querySelectorAll('tr.d-none').length + 1;
            const trElements1 = tableLength.querySelectorAll('tr').length;
            $.ajax({
                url: 'listloadbalancer.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (response) {
                    if (response.status === 'success') {
                        const nonerow = document.getElementById('mainrow' + id);
                        nonerow.classList.add('d-none');
                        const message = document.getElementById('error1');
                        message.classList.add('d-block');
                        message.textContent = response.message;
                        loader.classList.remove('d-block');
                        const no_data = document.getElementById('no_data');
                        if (trElements === trElements1) {
                            no_data.classList.add('d-block');
                        }
                        setTimeout(function () {
                            message.textContent = '';
                            message.classList.remove('d-block');
                        }, 2000);

                    }
                }
            })
        }
    </script>

</body>

</html>