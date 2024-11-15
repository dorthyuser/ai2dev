<?php
include 'db_connect.php';
session_start();
$session_id = $_SESSION['email'];
if ($session_id == '') {
    header('Location: login.php');
    exit();
}
$getData = "SELECT * FROM `login` WHERE `email` = '$session_id'";
$resultData = mysqli_query($conn, $getData);
$DataArray = mysqli_fetch_assoc($resultData);

if (!empty($_POST['checkboxes']) && !empty($_POST['clusterName']) && !empty($_POST['masterIP']) && !empty($_POST['workerIP'])) {

    $infrastructure = $_POST['checkboxes'];
    $clusterName = $_POST['clusterName'];
    $masterIP = $_POST['masterIP'];
    $workerIP = $_POST['workerIP'];

    $inf_encode = json_encode($infrastructure);


    $insertData = "INSERT INTO `cluster`(`infrastructure`, `email`, `clustername`, `masternodeip`, `workernodeip`) VALUES ('$inf_encode','$session_id','$clusterName','$masterIP','$workerIP')";

    $resultInsert = mysqli_query($conn, $insertData);

    if ($resultInsert) {
        $response = [
            'status' => 'success',
            'message' => 'Cluster Create successfully',
        ];
        echo json_encode($response);
        exit;
    } else {
        echo "Error Create Cluster";
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
            <div class="dash_nav">
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
                                    <button class="btn btn-secondary dropdown-toggle show active" type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="true">
                                        <div class="d-block nav_icons">
                                            <img class="w-100 h-100 object-fit-contain" src="images/cluster.svg"
                                                alt="image">
                                        </div>
                                        Cluster
                                    </button>
                                    <ul class="dropdown-menu show ">
                                        <li><a href="cluster.php" class="dropdown-item active" href="#">New Cluster</a>
                                        </li>
                                        <li><a class="dropdown-item" href="listcluster.php">List Cluster</a></li>
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
                                        <li><a class="dropdown-item" href="listapplication.php">List Applications</a>
                                        </li>
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
                                        Load Balancer
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="loadbalancer.php">New Load Balancer</a>
                                        </li>
                                        <li><a class="dropdown-item" href="listloadbalancer.php">List Load Balancer</a>
                                        </li>
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
            <div class="d-flex flex-column gap-4 w-100 z-3 dark_background">
                <div class="d-flex align-items-center px-md-4 px-2 py-2 gap-5 justify-content-between top_nav">
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
                <div class="main_content px-md-4 px-2">
                    <div class="d-block pb-5 dark_background">
                        <div class="d-flex flex-column gap-4">
                            <div
                                class="d-flex flex-md-row flex-column align-items-md-center gap-3 justify-content-between">
                                <h1>Clusters</h1>

                                <button class="sign_btn" onclick="addcluster()">Add new clusters <i
                                        class="fa-solid fa-plus"></i></button>
                            </div>
                            <div class="know_more">
                                <div
                                    class="d-flex justify-content-center flex-column gap-4 align-items-center text-center">
                                    <div class="d-flex flex-column gap-3">
                                        <h5>Hi <?php echo $DataArray['name'] ?>, let's get started</h5>
                                        <p>Clusters is a scalable container-based cloud system, ready to run
                                            your
                                            applications in a fault tolerant way.</p>
                                    </div>
                                    <button class="learn_btn" onclick="addcluster()">Launch my first cluster <i
                                            class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-5 know_icons">
                                    <div class="know_icon d-block">
                                        <img class="w-100 h-100 object-fit-contain" src="images/contact1.webp"
                                            alt="img">
                                    </div>
                                    <div class="know_icon d-block">
                                        <img class="w-100 h-100 object-fit-contain" src="images/contact1.webp"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="pop_background">
                        <div class="first_pop py-4">
                            <div class="d-flex flex-column gap-4">
                                <h3>Selecot Infrastructure</h3>
                                <div class="d-block">
                                    <ul class="d-flex flex-wrap gap-3">
                                        <li>
                                            <input type="checkbox" id="aws" name="checkbox" value="AWS" onclick="onlyOne(this)">
                                            <label for="aws">AWS</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="azure" name="checkbox" value="AZURE" onclick="onlyOne(this)">
                                            <label for="azure">AZURE</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="gcp" name="checkbox" value="GCP" onclick="onlyOne(this)">
                                            <label for="gcp">GCP</label>
                                        </li>
                                        <li>
                                            <input id="vps" name="checkbox" type="checkbox" value="VPS" onclick="onlyOne(this)">
                                            <label for="vps">VPS</label>

                                        </li>
                                    </ul>

                                    <p id="error_mess"></p>
                                </div>
                                <div class="d-flex justify-content-end align-items-end">
                                    <button onclick="nextFrom()" class="next_btn">Next</button>
                                </div>
                            </div>
                            <button class="close_sec" onclick="closeFir()">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </button>
                        </div>
                        <div class="sec_pop py-4">
                            <form action="" class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-3">
                                    <ul class="d-flex flex-column gap-3">
                                        <li>
                                            <label for="cluster_name">Cluster Name :</label>
                                            <input id="cluster_name" type="text" name="cluster_name" required />
                                        </li>
                                        <li>
                                            <label for="master_ip">Mater Node IP :</label>
                                            <input id="master_ip" type="text" name="master_ip" pattern="^(([0-9]{1,3}\.){3}[0-9]{1,3}|([0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4})$" required />
                                        </li>
                                        <li>
                                            <label for="worker_ip">Worker Node IP :</label>
                                            <input id="worker_ip" type="text" name="worker_ip" pattern="^(([0-9]{1,3}\.){3}[0-9]{1,3}|([0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4})$" required />
                                        </li>

                                    </ul>

                                    <div class="d-flex align-items-center gap-2">
                                        <input id="install" name="install" type="checkbox" required>
                                        <label for="install"><span>Install Grafana for logging</span></label>
                                    </div>
                                </div>
                                <div id="erro_mess" style="color: red; display: none;"></div>
                                <div class="d-flex justify-content-end align-items-end">
                                    <button onclick="submitFrom()" type="button" class="next_btn">Create</button>
                                </div>
                                <button class="close_sec" onclick="closeSec()">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div id="loader_spin" class="loader_main">
                        <span class="loader"></span>
                    </div>
                    <div id="success1"></div>
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
        function nextFrom() {
            const sec_from = document.getElementsByClassName('sec_pop')[0];
            const firstFrom = document.getElementsByClassName('first_pop')[0];
            const checkboxes = document.querySelectorAll('input[name="checkbox"]:checked');

            if (checkboxes.length > 0) {
                sec_from.style.top = '50%';
                firstFrom.style.top = '-50%';
            } else {
                const errorMess = document.getElementById('error_mess');
                errorMess.textContent = '* Please Select Infrastructure';
                setTimeout(function () {
                    errorMess.textContent = '';
                }, 1000);
            }
        }

        function submitFrom() {
            const checkboxes = document.querySelectorAll('input[name="checkbox"]:checked');
            const selectedValues = [];

            checkboxes.forEach((checkbox) => {
                selectedValues.push(checkbox.value);
            });

            const clusterName = document.getElementById('cluster_name').value;
            const masterIP = document.getElementById('master_ip').value;
            const workerIP = document.getElementById('worker_ip').value;
            const installChecked = document.getElementById('install').checked;
            const loader = document.getElementById('loader_spin');

            const errorMess = document.getElementById('erro_mess');
            errorMess.style.display = 'none';

            if(!installChecked){
                errorMess.textContent = '* Please check the Install Grafana box.';
                errorMess.style.display = 'block';
                setTimeout(function () {
                    errorMess.textContent = '';
                }, 2000);
                return;
            }

            const ipv4Pattern = /^(([0-9]{1,3}\.){3}[0-9]{1,3})$/;
            const ipv6Pattern = /^([0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4}$/;

            if (clusterName === '' || masterIP === '' || workerIP === '' ) {
                errorMess.textContent = '* Please fill in all required fields and check the Install Grafana box.';
                errorMess.style.display = 'block';
                setTimeout(function () {
                    errorMess.textContent = '';
                }, 2000);
                return;
            } 
            
            if (!ipv4Pattern.test(masterIP) && !ipv6Pattern.test(masterIP)) {
                errorMess.textContent = '* Please enter a valid IP address for the Master Node.(e.g : 192.168.1.1)';
                errorMess.style.display = 'block';
                setTimeout(function () {
                    errorMess.textContent = '';
                }, 2000);
                return;
            }


            if (!ipv4Pattern.test(workerIP) && !ipv6Pattern.test(workerIP)) {
                errorMess.textContent = '* Please enter a valid IP address for the Worker Node. (e.g : 192.168.1.1)';
                errorMess.style.display = 'block';
                setTimeout(function () {
                    errorMess.textContent = '';
                }, 2000);
                return;
            } else {

                loader.classList.add('d-block');
            }

            $.ajax({
                url: 'cluster.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    checkboxes: selectedValues,
                    clusterName: clusterName,
                    masterIP: masterIP,
                    workerIP: workerIP,

                },
                success: function (response) {

                    if (response.status === 'success') {
                        const message = document.getElementById('success1');
                        message.classList.add('d-block');
                        message.textContent = response.message;
                        loader.classList.remove('d-block');
                        setTimeout(function () {
                            window.location.href = 'listcluster.php';
                        }, 500);
                    }
                }
            });
        }
    </script>

</body>

</html>