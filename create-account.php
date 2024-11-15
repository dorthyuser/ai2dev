<?php
include 'db_connect.php';

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = md5($password);

    $getData = "SELECT * FROM `login` WHERE `email` = '$email'";
    $getresult = mysqli_query($conn, $getData);
    $getRow = mysqli_num_rows($getresult);

    if ($getRow > 0) {
        $response = [
            'status' => 'email',
            'message' => 'Email is Already exist',
        ];
        echo json_encode($response);
        exit;
    } else {
        $login_insert = "INSERT INTO `login`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";

        $result_insert = mysqli_query($conn, $login_insert);

        if ($result_insert) {
            $response = [
                'status' => 'success',
                'message' => 'Account Create successfully',
            ];
            echo json_encode($response);
            exit;
        } else {
            echo "Error Create Account";
        }
    }

}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Design</title>
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

<body class="login_body">
    <header id="header" class="py-md-0 py-3 position-relative">
        <div class="main-nav d-block">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-xxl">
                    <a href="index.php" class="d-flex align-items-center gap-0 nav-log">
                        <div class="navbar-brand">
                            <img class="w-100 h-100 object-fit-cover" src="images/logo.png" alt="Logo" />
                        </div>
                        <h2>AI2DEV </h2>
                    </a>
                    <button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <div class="d-flex gap-4 cabtn ms-auto">
                            <a href="login.php">Log in</a>
                            <a href="create-account.php">Create account</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="d-block login">
        <div class="container-xxl h-100">
            <div class="d-flex justify-content-center align-items-center h-100">
                <form action="">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-column gap-0">
                            <label for="name">Name</label>
                            <input id="name" type="text" required />
                        </div>
                        <div class="d-flex flex-column gap-0">
                            <label for="email">Email</label>
                            <input id="email" type="email" required />
                        </div>
                        <div class="d-flex flex-column gap-0">
                            <label for="password">Password</label>
                            <input id="password" type="password" required />
                        </div>
                        <div class="d-flex justify-content-end align-items-end">
                            <button onclick="createAcc()" type="button" class="learn_btn">Create</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="success"></div>
            <div id="error"></div>
        </div>
    </section>

    <footer class="pt-5 pb-3 dark_background bordertop-none">
        <div class="container-xxl">
            <div class="row gy-4">
                <div class="col-md-2">
                    <div class="d-flex flex-column gap-2">
                        <h5>Company</h5>
                        <ul class="d-flex flex-column gap-0">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Case studies</a></li>
                            <li><a href="#">White papers</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Newsroom</a></li>
                            <li><a href="#">Brand assets</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Tech Junction</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex flex-column gap-2">
                        <h5>Products</h5>
                        <ul class="d-flex flex-column gap-0">
                            <li><a href="#">Kubernetes</a></li>
                            <li><a href="#">Compute</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Load balancers</a></li>
                            <li><a href="#">Machine Learning</a></li>
                            <li><a href="#">Kubeflow as a Service</a></li>
                            <li><a href="#">Cloud GPU</a></li>
                            <li><a href="#">Carbon Neutral GPU</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex flex-column gap-2">
                        <h5>Solutions</h5>
                        <ul class="d-flex flex-column gap-0">
                            <li><a href="#">VMware for Service Providers</a></li>
                            <li><a href="#">VMware Alternative</a></li>
                            <li><a href="#">VMware migration tool</a></li>
                            <li><a href="#">UK Sovereign Cloud</a></li>
                            <li><a href="#">Startup solutions</a></li>
                            <li><a href="#">Small and mid-market</a></li>
                            <li><a href="#">SaaS companies</a></li>
                            <li><a href="#">CI/CD and testing</a></li>
                            <li><a href="#">Move to Kubernetes</a></li>
                            <li><a href="#">Consultancy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex flex-column gap-2">
                        <h5>Community</h5>
                        <ul class="d-flex flex-column gap-0">
                            <li><a href="#">Developers</a></li>
                            <li><a href="#">Meetups</a></li>
                            <li><a href="#">Ambassadors</a></li>
                            <li><a href="#">KubeQuest</a></li>
                            <li><a href="#">Write for us</a></li>
                            <li><a href="#">Developer demo program</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex flex-column gap-2">
                        <h5>Resources</h5>
                        <ul class="d-flex flex-column gap-0">
                            <li><a href="#">Academy</a></li>
                            <li><a href="#">API documentation</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Civo documentation</a></li>
                            <li><a href="#">Cloud native A to Z</a></li>
                            <li><a href="#">Civo Github repo</a></li>
                            <li><a href="#">Tutorials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex flex-column gap-2">
                        <h5>Contact</h5>
                        <ul class="d-flex flex-column gap-0">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Sales inquiries</a></li>
                            <li><a href="#">Status</a></li>
                            <li><a href="#">Bug Bounty</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <div
                        class="d-flex flex-md-row flex-column gy-4 footer_bot align-items-center justify-content-between gap-3">
                        <div class="d-block footer_logo">
                            <img class="w-100 h-100 object-fit-contain" src="images/logo.png" alt="img">
                        </div>
                        <p>© Abcd 2024. All rights reserved.</p>
                        <div class="d-flex align-items-center gap-3">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.16/dist/lenis.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script>
        function createAcc() {
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const password = document.getElementById('password');

            if (name.value === '' || email.value === '' || password.value === '') {
                const message = document.getElementById('error');
                message.classList.add('d-block');
                message.textContent = 'Please fill out all fields';
                setTimeout(function () {
                    message.classList.remove('d-block');
                    message.textContent = '';
                }, 1000);
            }

            $.ajax({
                url: 'create-account.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.value,
                    email: email.value,
                    password: password.value,
                },

                success: function (response) {
                    if (response.status === 'success') {
                        console.log(response.status);
                        name.value = '';
                        email.value = '';
                        password.value = '';
                        const message = document.getElementById('success');
                        message.classList.add('d-block');
                        message.textContent = response.message;
                        setTimeout(function () {
                            window.location.href = 'login.php';
                        }, 500);
                    } else if (response.status === 'email') {
                        const message = document.getElementById('error');
                        message.classList.add('d-block');
                        message.textContent = response.message;
                        setTimeout(function () {
                            message.classList.remove('d-block');
                        }, 1000);
                    }
                }
            });
        }

    </script>

</body>

</html>