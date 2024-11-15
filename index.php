<?php
include 'db_connect.php';
session_start();
if (!empty($_POST)) {
  $session_id = $_SESSION['email'];
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
  <link rel="stylesheet" href="./css/slick-theme.css" />
  <link rel="stylesheet" href="./css/slick.css" />
  <link rel="stylesheet" href="./css/lenis.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet" />
  <link href="./css/custom-style.css" rel="stylesheet" />
  <link href="./sass/main.css" rel="stylesheet" />
</head>

<body>
  <header id="header">
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
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fal fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse py-md-0 py-3" id="navbarSupportedContent">
            <ul class="navbar-nav gap-md-3 gap-0 mx-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Link</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Link</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Link</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Link</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Link</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Link</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Resources
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Link</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Link</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Link</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Navigate</a>
              </li>
            </ul>

            <div class="d-flex gap-4 cabtn ">
              <button onclick="loginBtn()">Log in</button>
              <a href="create-account.php">Create account</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section class="herobanner d-block">
    <div class="container-xxl">
      <div class="row mb-5 justify-content-start gy-4 align-items-center pt-4">
        <div class="col-md-6">
          <div class="d-flex flex-column gap-3 position-relative">
            <div class="d-flex align-items-center gap-1">
              <div class="d-flex flex-column gap-5 ms-3">
                <div class="hero_quation ">
                  <div class="hero_q1 d-flex flex-column  align-items-start gap-0">
                    <div class="front ">
                    </div>
                    <div class="front_p d-flex align-items-center gap-1 infrs_icons"></div>
                  </div>
                </div>
                <div class="hero_quation0 hero_quation">
                </div>
                <div class="hero_quation1 hero_quation">
                </div>
                <div class="hero_quation2 hero_quation">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column gap-4">
            <div class="d-flex gap-4 justify-content-center rel">
              <a href="cluster.php" class="dfbtn whitebtn"><span>Get started </span> <i
                  class="fal fa-arrow-right"></i></a>
              <a href="#" class="arrowdown">
                <i class="fal fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center gap-5">

          </div>
        </div>
      </div>
    </div>
    <div class="bggh"></div>
    <div class="hero_slider">
      <div class="hero_s1 position-relative">
        <div class="heroimage ofit">
          <img src="images/hero.jpg" alt="image" />
        </div>
        <div class="slider_content d-flex flex-column gap-3">
          <h4>Kubernetes </h4>
          <p>
            Kubernetes manages, scales, and deploys containerized applications across environments efficiently.</p>
          <button class="learn_btn"> <span> Get started today </span> <i
              class="fa-solid fa-arrow-right-long"></i></button>
        </div>
      </div>
      <div class="hero_s1 position-relative">
        <div class="heroimage ofit">
          <img src="images/hero.jpg" alt="image" />
        </div>
        <div class="slider_content d-flex flex-column gap-3">
          <h4>AWS </h4>
          <p>
            AWS provides scalable cloud computing, storage, databases, and AI services.</p>
          <button class="learn_btn"> <span> Get started today </span> <i
              class="fa-solid fa-arrow-right-long"></i></button>
        </div>
      </div>
      <div class="hero_s1 position-relative">
        <div class="heroimage ofit">
          <img src="images/hero.jpg" alt="image" />
        </div>
        <div class="slider_content d-flex flex-column gap-3">
          <h4>Azure </h4>
          <p>
            Azure is Microsoft's cloud platform, offering computing, storage, AI, and analytics solutions for scalable,
            secure, and flexible business applications.</p>
          <button class="learn_btn"> <span> Get started today </span> <i
              class="fa-solid fa-arrow-right-long"></i></button>
        </div>
      </div>
      <div class="hero_s1 position-relative">
        <div class="heroimage ofit">
          <img src="images/hero.jpg" alt="image" />
        </div>
        <div class="slider_content d-flex flex-column gap-3">
          <h4>GCP </h4>
          <p>
            GCP (Google Cloud Platform) provides cloud services for computing, storage, machine learning, and analytics,
            enabling scalable, secure infrastructure for diverse business applications.</p>
          <button class="learn_btn"> <span> Get started today </span> <i
              class="fa-solid fa-arrow-right-long"></i></button>
        </div>
      </div>
      <div class="hero_s1 position-relative">
        <div class="heroimage ofit">
          <img src="images/hero.jpg" alt="image" />
        </div>
        <div class="slider_content d-flex flex-column gap-3">
          <h4>VPS </h4>
          <p>A VPS (Virtual Private Server) is a virtualized server offering dedicated resources on a shared host,
            providing flexibility, control, and scalability for hosting websites or applications.</p>
          <button class="learn_btn"> <span> Get started today </span> <i
              class="fa-solid fa-arrow-right-long"></i></button>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block py-5 content_slide dark_background">
    <div class="cslide_main">
      <span>*</span>
      <h5>Reduce your Kubernetes cluster cost by 50%</h5>
      <span>*</span>
      <h5>Reduce your development time by 80%</h5>
      <span>*</span>
      <h5>Automated Development tool
      </h5>
      <span>*</span>
      <h5>Automated CI/CD from day 1
      </h5>
      <span>*</span>
      <h5>Reduce your Kubernetes cluster cost by 50%</h5>
      <span>*</span>
      <h5>Reduce your development time by 80%</h5>
      <span>*</span>
      <h5>Automated Development tool
      </h5>
      <span>*</span>
      <h5>Automated CI/CD from day 1
      </h5>

    </div>
  </section>
  <section class="d-block gapy pb-5 dark_background">
    <div class="container-xxl">
      <div class="row">
        <div class="col-12">
          <div class="d-flex flex-column gap-5 text-center">
            <h2>Trusted by industry leading businesses</h2>
            <div class="d-flex flex-column flex-md-row gap-5 logo_slide">
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo1.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo2.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo3.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo4.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo1.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo2.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo3.svg" alt="logo">
              </div>
              <div class="logoblock">
                <img class="w-100 h-100 object-fit-contain" src="images/logo4.svg" alt="logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block py-5 what_do dark_background">
    <div class="container-xxl">
      <div class="row justify-content-between">
        <div class="col-md-5">
          <div class="d-block what_weleft">
            <div class="d-block left_img">
              <img class="w-100 h-100 object-fit-cover" src="images/cloud.jpg" alt="image">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column gap-4 whatdo_right">
            <div class="d-flex flex-column gap-2">
              <h5>The cloud,</h5>
              <h4>Simplified for business</h4>
            </div>
            <ul class="d-flex flex-column gap-4 p-0">
              <li class="d-flex flex-column gap-2">
                <div class="d-flex align-items-start gap-3">
                  <div class="d-block headr_icon">
                    <img class="w-100 h-100 object-fit-contain" src="images/server.png" alt="image">
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <h6>Cloud made easy</h6>
                    <p>Setup should be easy. We've listened to real user feedback from our community to simplify the
                      developer experience.</p>
                  </div>
                </div>
              </li>
              <li class="d-flex flex-column gap-2">
                <div class="d-flex align-items-start gap-3">
                  <div class="d-block headr_icon">
                    <img class="w-100 h-100 object-fit-contain" src="images/pricing.png" alt="image">
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <h6>Predictable pricing</h6>
                    <p>Our billing model has been designed from scratch for cloud native - only pay for the resources
                      you need, with no surprises.</p>
                  </div>
                </div>
              </li>
              <li class="d-flex flex-column gap-2">
                <div class="d-flex align-items-start gap-3">
                  <div class="d-block headr_icon">
                    <img class="w-100 h-100 object-fit-contain" src="images/pre-release-access.png" alt="image">
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <h6>Superfast launch times</h6>
                    <p>Boost productivity through industry-leading launch times. Accelerate development cycles,
                      innovate, and deliver results faster.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block py-5 testmonial dark_background">
    <div class="container-xxl">
      <div class="test_slider">
        <div class="test_slide">
          <div class="row">
            <div class="col-md-8">
              <div class="d-flex flex-column gap-4">
                <div class="d-flex flex-column gap-1">
                  <h4>Garry Paxinos</h4>
                  <p>Chief Technology Officer, NT Connect</p>
                </div>
                <p class="content">
                  “We use AI2DEV for production as well as quickly spinning up test clusters to try out new extensions
                  and
                  configurations. This has also allowed us to stage clusters for testing development releases outside of
                  production”
                </p>
                <div class="pb-4 d-flex flex-md-row flex-column align-items-center justify-content-between gap-3">
                  <div class="d-block company_logo">
                    <img class="w-100 h-100 object-fit-contain" src="images/logo2.svg" alt="images">
                  </div>
                  <button class="learn_btn">View case study <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="test_profile d-block h-100">
                <img class="w-100 h-100 object-fit-cover" src="images/hero.jpg" alt="images">
              </div>
            </div>
          </div>
        </div>
        <div class="test_slide">
          <div class="row">
            <div class="col-md-8">
              <div class="d-flex flex-column gap-4">
                <div class="d-flex flex-column gap-1">
                  <h4>Sam Simpson</h4>
                  <p>Chief Technology Officer, NT Connect</p>
                </div>
                <p class="content">
                  “One of the things that stood out to us was AI2DEV's genuine commitment to our success. They were not
                  just a service provider; they were a partner in our growth, invested in ensuring that our
                  infrastructure scaled with us”
                </p>
                <div class="pb-4 d-flex flex-md-row flex-column align-items-center justify-content-between gap-3">
                  <div class="d-block company_logo">
                    <img class="w-100 h-100 object-fit-contain" src="images/logo3.svg" alt="images">
                  </div>
                  <button class="learn_btn">View case study <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="test_profile d-block h-100">
                <img class="w-100 h-100 object-fit-cover" src="images/cloud.jpg" alt="images">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block simplify_dev pb-5 dark_background">
    <div class="container-xxl">
      <div class="row gy-5">
        <div class="col-12">
          <h4 class="text-center">Simplify development and reduce infrastructure costs</h4>
        </div>
        <div class="col-12">
          <div class="row pt-3 gy-5">
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M15 1c-.44 0-.796.405-.796.904l.002.023c0 .067-.004.15-.002.208.01.288.072.508.11.774.066.567.122 1.038.087 1.476-.033.165-.152.315-.258.42l-.018.344a10.17 10.17 0 0 0-6.63 3.263 13.346 13.346 0 0 1-.287-.208c-.142.02-.285.064-.472-.047-.356-.245-.68-.584-1.072-.991-.18-.195-.31-.38-.523-.569-.048-.042-.122-.1-.176-.144a.932.932 0 0 0-.554-.214.758.758 0 0 0-.633.287c-.274.352-.186.888.195 1.2l.012.008c.052.044.116.1.165.136.226.171.433.259.658.395.476.3.87.55 1.182.85.122.133.144.367.16.469l.255.233a10.726 10.726 0 0 0-1.622 7.34l-.333.098c-.088.116-.212.299-.341.353-.41.132-.87.18-1.425.24-.26.022-.486.009-.762.063-.061.011-.146.034-.213.05l-.007.002-.011.003c-.469.116-.77.557-.673.991.097.434.555.699 1.026.595l.012-.002.015-.005c.066-.015.148-.032.205-.047.272-.075.47-.184.714-.28.526-.193.961-.355 1.385-.417.178-.014.364.112.457.165l.347-.061a10.544 10.544 0 0 0 4.583 5.858l-.144.355c.052.138.11.324.07.46-.154.41-.418.841-.719 1.323-.146.223-.295.396-.426.65-.032.062-.072.155-.102.22-.204.447-.055.962.338 1.155.395.195.885-.01 1.097-.458l.001-.002v-.002c.03-.063.073-.147.099-.207.113-.264.15-.49.23-.745.21-.541.325-1.108.614-1.462.08-.097.209-.134.343-.17l.18-.334a10.046 10.046 0 0 0 7.334.019c.051.091.145.268.17.313.136.045.285.068.406.252.217.378.365.826.545 1.368.08.255.119.481.231.745.026.06.068.145.099.209.211.45.703.656 1.098.46.393-.193.543-.708.338-1.155-.03-.065-.072-.158-.103-.22-.132-.254-.28-.425-.426-.648-.301-.482-.551-.882-.705-1.291-.065-.212.01-.343.06-.48-.03-.035-.094-.235-.132-.329 2.199-1.329 3.82-3.45 4.582-5.9.103.017.282.05.34.061.12-.08.23-.186.445-.168.424.062.86.224 1.385.417.245.096.442.207.714.281.057.016.14.03.205.046.005 0 .01.003.015.005.004 0 .009 0 .012.002.471.103.93-.16 1.026-.595.097-.434-.204-.875-.673-.99-.068-.017-.164-.044-.23-.056-.277-.054-.502-.04-.763-.063-.556-.06-1.016-.108-1.425-.24-.166-.066-.285-.27-.343-.353l-.32-.096a10.748 10.748 0 0 0-.167-3.798 10.66 10.66 0 0 0-1.49-3.523c.083-.077.238-.218.282-.26.013-.145.002-.298.15-.46.312-.3.706-.55 1.182-.85.225-.136.434-.224.66-.395.052-.038.122-.1.175-.144.381-.311.47-.848.196-1.2-.274-.35-.805-.384-1.186-.072-.054.044-.128.1-.176.144-.214.188-.345.373-.525.568-.392.408-.716.748-1.072.993-.154.092-.38.06-.482.054l-.302.22c-1.724-1.85-4.07-3.033-6.598-3.262a21.263 21.263 0 0 1-.018-.364c-.104-.101-.229-.188-.26-.406-.035-.438.023-.909.09-1.476.037-.266.098-.486.109-.774.002-.065-.002-.16-.002-.231 0-.5-.356-.904-.795-.904Zm-.996 6.31-.236 4.268-.017.008a.708.708 0 0 1-.7.687.686.686 0 0 1-.412-.137l-.007.003-3.418-2.48a8.134 8.134 0 0 1 4.79-2.349Zm1.992 0a8.181 8.181 0 0 1 4.762 2.35l-3.397 2.465-.012-.005a.69.69 0 0 1-.96-.132.723.723 0 0 1-.154-.415l-.003-.002-.236-4.26Zm-8.022 3.943 3.121 2.858-.003.017c.281.25.323.686.088.987a.7.7 0 0 1-.363.245l-.004.014-4 1.182a8.539 8.539 0 0 1 1.16-5.303Zm14.028.002c.464.769.815 1.628 1.024 2.56.207.92.259 1.84.174 2.728l-4.022-1.186-.003-.017a.72.72 0 0 1-.498-.852.715.715 0 0 1 .223-.38l-.002-.01 3.104-2.844ZM14.36 14.33h1.279l.794 1.017-.285 1.27-1.148.564-1.151-.566-.286-1.27.797-1.015Zm4.1 3.48a.68.68 0 0 1 .16.013l.008-.009 4.138.716a8.358 8.358 0 0 1-3.313 4.26l-1.607-3.971.005-.007a.725.725 0 0 1 .34-.93.688.688 0 0 1 .268-.072Zm-6.951.018c.316.005.599.229.672.558a.726.726 0 0 1-.039.441l.012.016-1.59 3.932a8.39 8.39 0 0 1-3.302-4.23l4.102-.714.007.01a.7.7 0 0 1 .138-.013Zm3.466 1.723a.703.703 0 0 1 .642.377h.015l2.022 3.74c-.262.09-.532.168-.808.232a8.037 8.037 0 0 1-4.485-.236l2.018-3.734h.003a.7.7 0 0 1 .593-.38Z"
                        fill="#fff" stroke="#fff" stroke-width=".25"></path>
                    </svg>
                  </div>
                  <h6>Kubernetes</h6>
                  <p>Blazing fast, simplified, managed Kubernetes. Host your applications and scale as and when you
                    need,
                    with 90-second cluster launch times and a free control plane.</p>
                </div>
                <a class="learn_btn" href="#">Learn more about Kubernetes <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M26.6 25.198h-4.198a1.399 1.399 0 0 1-1.399-1.4v-4.204a6.993 6.993 0 0 0 4.538-1.728 7.007 7.007 0 0 0-2.55-11.973 9.802 9.802 0 0 0-4.202-4.646A9.787 9.787 0 0 0 7.043 2.911a9.81 9.81 0 0 0-2.749 5.63 5.598 5.598 0 0 0-3.289 2.246 5.608 5.608 0 0 0 .88 7.398 5.594 5.594 0 0 0 3.724 1.41h1.4v4.202a1.402 1.402 0 0 1-1.4 1.401H1.411a1.398 1.398 0 0 0-1.4 1.401A1.402 1.402 0 0 0 1.412 28H5.61a4.196 4.196 0 0 0 2.969-1.231 4.205 4.205 0 0 0 1.23-2.972v-4.203h2.799V26.6A1.401 1.401 0 0 0 14.006 28a1.399 1.399 0 0 0 1.4-1.4v-7.006h2.798v4.203A4.205 4.205 0 0 0 22.402 28h4.199A1.399 1.399 0 0 0 28 26.6a1.401 1.401 0 0 0-1.4-1.402ZM5.61 16.793a2.797 2.797 0 0 1-2.8-2.802 2.803 2.803 0 0 1 2.8-2.802 1.399 1.399 0 0 0 1.399-1.401 7.01 7.01 0 0 1 1.666-4.521 6.995 6.995 0 0 1 11.95 2.265 1.401 1.401 0 0 0 1.092.939A4.197 4.197 0 0 1 25.2 12.59a4.205 4.205 0 0 1-4.198 4.203H5.609Z"
                        fill="#fff"></path>
                    </svg>
                  </div>
                  <h6>Compute</h6>
                  <p>Enterprise-class compute instances powered by Kubernetes. With multi-region support, DDoS
                    protection,
                    bandwidth pooling and all the developer tools you need.</p>
                </div>
                <a class="learn_btn" href="#">Learn more about Compute <i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg width="28" height="28" fill="none">
                      <path
                        d="M14 12.833a1.167 1.167 0 1 0 0 2.334 1.167 1.167 0 0 0 0-2.334ZM22.89 14l.128-.163c1.575-2.17 1.949-4.165 1.085-5.67-.863-1.505-2.8-2.17-5.436-1.902h-.21C17.395 3.85 15.82 2.333 14 2.333c-1.82 0-3.395 1.517-4.445 3.967l-.222-.035c-2.636-.268-4.573.397-5.436 1.902-.864 1.505-.49 3.5 1.085 5.67L5.11 14l-.128.163c-1.575 2.17-1.949 4.165-1.085 5.67.77 1.284 2.251 1.96 4.27 1.96.361 0 .735 0 1.166-.058h.21c1.062 2.415 2.637 3.932 4.457 3.932 1.82 0 3.395-1.517 4.445-3.967h.21c.397 0 .77.058 1.167.058 2.065 0 3.581-.676 4.316-1.96.864-1.505.49-3.5-1.085-5.67L22.89 14ZM5.915 9.333c.292-.513 1.167-.793 2.333-.793h.572c-.183.718-.32 1.446-.408 2.182-.595.45-1.16.936-1.692 1.458-.887-1.167-1.143-2.263-.805-2.847Zm0 9.334c-.338-.584 0-1.68.782-2.882a17.492 17.492 0 0 0 1.691 1.458c.09.74.226 1.472.409 2.194-1.447.093-2.544-.187-2.882-.77Zm8.085-14c.653 0 1.435.77 2.1 2.135-.713.206-1.414.452-2.1.735a20.527 20.527 0 0 0-2.1-.735c.665-1.365 1.447-2.135 2.1-2.135Zm0 18.666c-.653 0-1.435-.77-2.1-2.135a20.556 20.556 0 0 0 2.1-.735c.686.283 1.387.528 2.1.735-.665 1.365-1.447 2.135-2.1 2.135Zm3.418-7.361c-.536.373-1.085.723-1.668 1.061a20.92 20.92 0 0 1-1.75.91 23.546 23.546 0 0 1-1.75-.91c-.583-.338-1.167-.688-1.668-1.061-.082-.63-.082-1.284-.082-1.972s0-1.342.082-1.972a23.845 23.845 0 0 1 1.668-1.061 20.89 20.89 0 0 1 1.75-.91 23.47 23.47 0 0 1 1.75.91c.583.338 1.167.688 1.668 1.061 0 .63.082 1.284.082 1.972s0 1.342-.082 1.972Zm4.667 2.695c-.338.583-1.435.875-2.882.77.183-.722.32-1.455.409-2.194.594-.45 1.16-.936 1.691-1.458.864 1.202 1.12 2.298.782 2.882Zm-.782-6.452a17.505 17.505 0 0 0-1.691-1.458 17.225 17.225 0 0 0-.409-2.182h.572c1.167 0 2.018.28 2.333.793.315.514.059 1.645-.805 2.847Z"
                        fill="#fff"></path>
                    </svg>
                  </div>
                  <h6>Machine learning</h6>
                  <p>A fully managed, auto-scaling machine learning environment. No Kubernetes or ML expertise needed,
                    with prices starting at $250/month.</p>
                </div>
                <a class="learn_btn" href="#">Learn more about Machine learning <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main border-none">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg width="28" height="28" fill="none">
                      <g>
                        <path
                          d="M26.6 25.198h-4.198a1.4 1.4 0 0 1-1.399-1.4v-4.204a6.994 6.994 0 0 0 6.575-4.79 7.006 7.006 0 0 0-4.587-8.91 9.802 9.802 0 0 0-4.202-4.647A9.787 9.787 0 0 0 7.043 2.911a9.81 9.81 0 0 0-2.749 5.63 5.608 5.608 0 0 0-2.409 9.644 5.595 5.595 0 0 0 3.724 1.41h1.4v4.202a1.402 1.402 0 0 1-1.4 1.401H1.411a1.398 1.398 0 0 0-1.4 1.401A1.402 1.402 0 0 0 1.412 28H5.61a4.196 4.196 0 0 0 2.969-1.23 4.205 4.205 0 0 0 1.23-2.973v-4.203h2.799V26.6a1.4 1.4 0 0 0 2.388.99 1.398 1.398 0 0 0 .41-.99v-7.006h2.798v4.203A4.205 4.205 0 0 0 22.402 28h4.199a1.4 1.4 0 1 0-.001-2.802ZM5.61 16.793a2.797 2.797 0 0 1-2.8-2.802 2.803 2.803 0 0 1 2.8-2.802 1.4 1.4 0 0 0 1.399-1.4 6.995 6.995 0 0 1 13.616-2.256 1.401 1.401 0 0 0 1.092.938 4.197 4.197 0 0 1 3.483 4.12 4.205 4.205 0 0 1-4.198 4.202H5.609h.001Z"
                          fill="#fff"></path>
                      </g>
                    </svg>
                  </div>
                  <h6>Cloud GPUs</h6>
                  <p>AI2DEV offers Cloud GPUs for high-performance computing in AI and ML, and Carbon Neutral GPUs for
                    sustainable, climate-friendly cloud compute, both powered by NVIDIA A100 GPUs. </p>
                </div>
                <a class="learn_btn" href="#">Learn more about Cloud GPUs <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg width="28" height="28" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 101.15 122.88">
                      <title>database</title>
                      <path
                        d="M18,27.19c8.26,2.76,19.76,4.46,32.53,4.46S74.83,30,83.09,27.19c7.25-2.42,11.73-5.35,11.73-8.22s-4.48-5.79-11.73-8.21C74.83,8,63.33,6.29,50.56,6.29S26.29,8,18,10.76C2.65,15.89,2.22,21.91,18,27.19Zm62,70.5a5,5,0,1,1-4.94,5,4.94,4.94,0,0,1,4.94-5Zm0-28a4.95,4.95,0,1,1-4.94,5,4.94,4.94,0,0,1,4.94-5Zm0-29.13a4.95,4.95,0,1,1-4.94,4.95A4.94,4.94,0,0,1,80,40.59Zm14.8,45a39.45,39.45,0,0,1-9.76,4.62C76.18,93.18,64,95,50.56,95S24.94,93.18,16,90.21a39.87,39.87,0,0,1-9.68-4.55V104.5c.57,2.68,4.92,5.37,11.67,7.62,8.26,2.76,19.76,4.47,32.53,4.47s24.27-1.71,32.53-4.47c5-1.67,8.69-3.58,10.49-5.55,1.49-1.63,1.26-2.7,1.26-4.64V85.59ZM0,19C0,13.1,6.13,8.12,16,4.81,24.94,1.84,37.15,0,50.56,0S76.18,1.84,85.08,4.81,100,12.22,101,17.41a3.11,3.11,0,0,1,.18,1.06v86.74c0,6-11.49,11.33-16.07,12.86-8.9,3-21.11,4.81-34.52,4.81S24.94,121,16,118.07c-4.69-1.56-16-6.71-16-12.86v-2Q.07,61.09,0,19ZM6.36,76.64C6.93,79.32,11.28,82,18,84.26c8.26,2.76,19.76,4.47,32.53,4.47S74.83,87,83.09,84.26c7.25-2.42,11.73-5.35,11.73-8.21h0V57.73a39.79,39.79,0,0,1-9.78,4.62c-8.9,3-21.11,4.81-34.52,4.81S24.94,65.32,16,62.35A39.87,39.87,0,0,1,6.36,57.8V76.64Zm0-27.86c.57,2.68,4.92,5.37,11.67,7.62,8.26,2.76,19.76,4.47,32.53,4.47s24.27-1.71,32.53-4.47c7.25-2.42,11.73-5.35,11.73-8.21h0V28.52a40.15,40.15,0,0,1-9.78,4.62C76.18,36.11,64,38,50.56,38S24.94,36.11,16,33.14a39.87,39.87,0,0,1-9.68-4.56v20.2Z"
                        fill="#fff" />
                    </svg>
                  </div>
                  <h6>Databases</h6>
                  <p>Effortlessly set up and scale managed databases straight from your AI2DEV dashboard or via our
                    developer API. Scale up and down as you need, only pay for what you use.</p>
                </div>
                <a class="learn_btn" href="#">Learn more about Databases <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28" height="28"
                      viewBox="0 0 122.879 101.018" enable-background="new 0 0 122.879 101.018" xml:space="preserve">
                      <g>
                        <path
                          d="M4.923,28.587h87.663c1.357,0,2.588,0.553,3.479,1.444c0.891,0.891,1.445,2.123,1.445,3.479v62.584 c0,1.356-0.553,2.589-1.445,3.479c-0.078,0.079-0.16,0.152-0.246,0.221c-0.867,0.761-1.998,1.223-3.232,1.223H4.923 c-1.356,0-2.588-0.553-3.479-1.443C0.553,98.684,0,97.451,0,96.095V33.51c0-1.357,0.553-2.588,1.444-3.479 C2.334,29.14,3.566,28.587,4.923,28.587L4.923,28.587z M32.734,5.852c-1.616,0-2.926-1.31-2.926-2.926 c0-1.615,1.31-2.926,2.926-2.926h87.221c1.615,0,2.924,1.311,2.924,2.926v61.476c0,1.616-1.309,2.926-2.924,2.926 c-1.617,0-2.926-1.31-2.926-2.926V5.852H32.734L32.734,5.852z M19.531,20.651c-1.616,0-2.925-1.31-2.925-2.926 s1.31-2.926,2.925-2.926h87.221c1.615,0,2.926,1.31,2.926,2.926v61.476c0,1.616-1.311,2.926-2.926,2.926s-2.926-1.31-2.926-2.926 v-58.55H19.531L19.531,20.651z M91.658,34.438H5.851v60.729h85.807V34.438L91.658,34.438z"
                          fill="#fff" />
                      </g>
                    </svg>
                    </svg>
                  </div>
                  <h6>Object storage</h6>
                  <p>AI2DEV Object Store pricing is simple. Prices start at $5.43 /month for 500GB plus, unlimited data
                    transfer at no extra charge</p>
                </div>
                <a class="learn_btn" href="#">Learn more about Object storage <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg fill="#fff" width="28px" height="28px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17 12h-6v4h1v4H8v-4h1v-4H3v4h1v4H0v-4h1v-4a2 2 0 0 1 2-2h6V6H7V0h6v6h-2v4h6a2 2 0 0 1 2 2v4h1v4h-4v-4h1v-4z" />
                    </svg>
                  </div>
                  <h6>Load balancers</h6>
                  <p>Add a load balancer to your cluster for just $10.86 a month, and maximize availability and
                    performance with our managed load balancing service.</p>
                </div>
                <a class="learn_btn" href="#">Learn more about Load balancers <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-column gap-3 simple_main border-none">
                <div class="d-flex flex-column gap-3">
                  <div class="simple_icons">
                    <svg width="28" height="28" fill="none">
                      <g>
                        <path
                          d="M26.6 25.198h-4.198a1.4 1.4 0 0 1-1.399-1.4v-4.204a6.994 6.994 0 0 0 6.575-4.79 7.006 7.006 0 0 0-4.587-8.91 9.802 9.802 0 0 0-4.202-4.647A9.787 9.787 0 0 0 7.043 2.911a9.81 9.81 0 0 0-2.749 5.63 5.608 5.608 0 0 0-2.409 9.644 5.595 5.595 0 0 0 3.724 1.41h1.4v4.202a1.402 1.402 0 0 1-1.4 1.401H1.411a1.398 1.398 0 0 0-1.4 1.401A1.402 1.402 0 0 0 1.412 28H5.61a4.196 4.196 0 0 0 2.969-1.23 4.205 4.205 0 0 0 1.23-2.973v-4.203h2.799V26.6a1.4 1.4 0 0 0 2.388.99 1.398 1.398 0 0 0 .41-.99v-7.006h2.798v4.203A4.205 4.205 0 0 0 22.402 28h4.199a1.4 1.4 0 1 0-.001-2.802ZM5.61 16.793a2.797 2.797 0 0 1-2.8-2.802 2.803 2.803 0 0 1 2.8-2.802 1.4 1.4 0 0 0 1.399-1.4 6.995 6.995 0 0 1 13.616-2.256 1.401 1.401 0 0 0 1.092.938 4.197 4.197 0 0 1 3.483 4.12 4.205 4.205 0 0 1-4.198 4.202H5.609h.001Z"
                          fill="#fff"></path>
                      </g>
                    </svg>
                  </div>
                  <h6>Cloud GPUs</h6>
                  <p>AI2DEV offers Cloud GPUs for high-performance computing in AI and ML, and Carbon Neutral GPUs for
                    sustainable, climate-friendly cloud compute, both powered by NVIDIA A100 GPUs. </p>
                </div>
                <a class="learn_btn" href="#">Learn more about Cloud GPUs <i
                    class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block py-5 dark_background">
    <div class="container-xxl">
      <div class="know_more">
        <div class="d-flex justify-content-center flex-column gap-4 align-items-center text-center">
          <h5>Want to know more? Get in touch and see how we can help</h5>
          <a target="_blank" href="create-account.php" class="learn_btn">Sign up and get a FREE node<i
              class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-5 know_icons">
          <div class="know_icon d-block">
            <img class="w-100 h-100 object-fit-contain" src="images/contact1.webp" alt="img">
          </div>
          <div class="know_icon d-block">
            <img class="w-100 h-100 object-fit-contain" src="images/contact1.webp" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block pb-5 expert_insights dark_background">
    <div class="container-xxl">
      <div class="row gy-5">
        <div class="col-12">
          <h5>Expert insights and resources</h5>
        </div>
        <div class="col-12 pt-4">
          <div class="row gy-4 align-items-center">
            <div class="col-md-3">
              <div class="d-block expert_img">
                <img class="w-100 h-100 object-fit-cover" src="images/hero1.jpg" alt="imagse" />
              </div>
            </div>
            <div class="col-md-3">
              <h6>Case Studies</h6>
            </div>
            <div class="col-md-5">
              <div class="d-flex flex-column gap-3">
                <p>Explore real-world applications of AI2DEV through our customer experiences.</p>
              </div>
            </div>
            <div class="col-md-1">
              <div class="d-flex justify-content-start align-items-start">
                <a class="learn_btn" href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row gy-4 align-items-center">
            <div class="col-md-3">
              <div class="d-block expert_img">
                <img class="w-100 h-100 object-fit-cover" src="images/hero2.jpg" alt="imagse" />
              </div>
            </div>
            <div class="col-md-3">
              <h6>White papers</h6>
            </div>
            <div class="col-md-5">
              <div class="d-flex flex-column gap-3">
                <p>Take a look at the challenges and opportunities in the cloud native landscape through our in-depth
                  analysis.</p>
              </div>
            </div>
            <div class="col-md-1">
              <div class="d-flex justify-content-start align-items-start">
                <a class="learn_btn" href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row gy-4 align-items-center">
            <div class="col-md-3">
              <div class="d-block expert_img">
                <img class="w-100 h-100 object-fit-cover" src="images/hero3.jpg" alt="imagse" />
              </div>
            </div>
            <div class="col-md-3">
              <h6>Meetups</h6>
            </div>
            <div class="col-md-5">
              <div class="d-flex flex-column gap-3">
                <p>Join our online meetups for insights into Kubernetes, ML, and the wider cloud native landscape.</p>
              </div>
            </div>
            <div class="col-md-1">
              <div class="d-flex justify-content-start align-items-start">
                <a class="learn_btn" href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row gy-4 align-items-center">
            <div class="col-md-3">
              <div class="d-block expert_img">
                <img class="w-100 h-100 object-fit-cover" src="images/hero4.jpg" alt="imagse" />
              </div>
            </div>
            <div class="col-md-3">
              <h6>AI2DEV blog</h6>
            </div>
            <div class="col-md-5">
              <div class="d-flex flex-column gap-3">
                <p>Get the latest product news, company updates, and educational content.</p>
              </div>
            </div>
            <div class="col-md-1">
              <div class="d-flex justify-content-start align-items-start">
                <a class="learn_btn" href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block py-5 dark_background">
    <div class="container-xxl">
      <div class="know_more">
        <div class="d-flex justify-content-center flex-column gap-4 align-items-center text-center">
          <div class="d-flex flex-column gap-3">
            <h5>Empower yourself and your organization with the ai2dev tools.</h5>
            <p>See how we can help your move to cloud native.</p>
          </div>
          <a href="create-account.php" class="learn_btn">Sign up and get a FREE node to practice <i
              class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-5 know_icons">
          <div class="know_icon d-block">
            <img class="w-100 h-100 object-fit-contain" src="images/contact1.webp" alt="img">
          </div>
          <div class="know_icon d-block">
            <img class="w-100 h-100 object-fit-contain" src="images/contact1.webp" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="d-block pb-5 faq dark_background">
    <div class="container-xxl">
      <div class="row gy-5">
        <div class="col-md-6">
          <div class="d-block">
            <h4>Frequently Asked
              Questions</h4>
          </div>
        </div>
        <div class="col-12">
          <div class="row gy-4">
            <div class="col-md-4">
              <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-1">
                  <p><span>Can't find What you are 100king for?</span></p>
                  <h6>We would like to chat with you.</h6>
                </div>
                <button class="chat_btn">
                  <svg focusable="false" aria-hidden="true" viewBox="0 0 28 32" width="28" height="28">
                    <path
                      d="M28,32 C28,32 23.2863266,30.1450667 19.4727818,28.6592 L3.43749107,28.6592 C1.53921989,28.6592 0,27.0272 0,25.0144 L0,3.6448 C0,1.632 1.53921989,0 3.43749107,0 L24.5615088,0 C26.45978,0 27.9989999,1.632 27.9989999,3.6448 L27.9989999,22.0490667 L28,22.0490667 L28,32 Z M23.8614088,20.0181333 C23.5309223,19.6105242 22.9540812,19.5633836 22.5692242,19.9125333 C22.5392199,19.9392 19.5537934,22.5941333 13.9989999,22.5941333 C8.51321617,22.5941333 5.48178311,19.9584 5.4277754,19.9104 C5.04295119,19.5629428 4.46760991,19.6105095 4.13759108,20.0170667 C3.97913051,20.2124916 3.9004494,20.4673395 3.91904357,20.7249415 C3.93763774,20.9825435 4.05196575,21.2215447 4.23660523,21.3888 C4.37862552,21.5168 7.77411059,24.5386667 13.9989999,24.5386667 C20.2248893,24.5386667 23.6203743,21.5168 23.7623946,21.3888 C23.9467342,21.2215726 24.0608642,20.9827905 24.0794539,20.7254507 C24.0980436,20.4681109 24.0195551,20.2135019 23.8614088,20.0181333 Z"
                      fill="#fff">
                    </path>
                  </svg>
                </button>
                <div class="chat_box">

                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      What is AI2DEV ?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum fugiat officiis facere
                      necessitatibus distinctio id minus. Itaque tempore facilis omnis magnam voluptatibus veniam
                      numquam similique veritatis culpa consectetur, tempora accusamus.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What makes AI2DEV a cloud native service provider?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem deleniti alias est, totam, minus
                      voluptatem omnis illum obcaecati consectetur asperiores rerum eveniet saepe sunt dignissimos
                      explicabo iusto laboriosam earum repellendus!
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How can I get started with AI2DEV ?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt necessitatibus atque ipsum? In
                      dolorum voluptatem tempore sed delectus cumque earum aspernatur corporis tempora nam obcaecati
                      quia, aperiam dolores inventore magnam.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                      Lorem ipsum dolor sit amet consectetur adipisicing AI2DEV ?
                    </button>
                  </h2>
                  <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt necessitatibus atque ipsum? In
                      dolorum voluptatem tempore sed delectus cumque earum aspernatur corporis tempora nam obcaecati
                      quia, aperiam dolores inventore magnam.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                      What makes AI2DEV a cloud native service provider?
                    </button>
                  </h2>
                  <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem deleniti alias est, totam, minus
                      voluptatem omnis illum obcaecati consectetur asperiores rerum eveniet saepe sunt dignissimos
                      explicabo iusto laboriosam earum repellendus!
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                      How can I get started with AI2DEV ?
                    </button>
                  </h2>
                  <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt necessitatibus atque ipsum? In
                      dolorum voluptatem tempore sed delectus cumque earum aspernatur corporis tempora nam obcaecati
                      quia, aperiam dolores inventore magnam.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="try_free pb-5 dark_background">
    <div class="container-xxl">
      <div class="row gy-4 align-items-center">
        <div class="col-md-6 h-100">
          <div class="d-flex flex-column gap-3 justify-content-center try_left px-4 py-5">
            <div class="d-flex flex-column gap-2">
              <h4>Try AI2DEV for free</h4>
              <p>A new era of cloud computing where speed, simplicity, and predictable billing unite. Begin your journey
                with us today and experience...</p>
            </div>
            <ul class="d-flex flex-column gap-3">
              <li class="d-flex align-items-center gap-3">
                <div class="d-block check_icon">
                  <img class="w-100 h-100 object-fit-contain" src="images/checked.png" alt="check">
                </div>
                <p>Blazing fast set up and launch</p>
              </li>
              <li class="d-flex align-items-center gap-3">
                <div class="d-block check_icon">
                  <img class="w-100 h-100 object-fit-contain" src="images/checked.png" alt="check">
                </div>
                <p>Simplified developer experience</p>
              </li>
              <li class="d-flex align-items-center gap-3">
                <div class="d-block check_icon">
                  <img class="w-100 h-100 object-fit-contain" src="images/checked.png" alt="check">
                </div>
                <p>Transparent pricing from just $5.43 a month</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <form class="create_account py-5" action="">
            <div class="d-flex flex-column gap-4">
              <h5>Try AI2DEV for 1 month
                with $250 free credit</h5>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-1">
                  <label for="">First Name</label>
                  <input type="text">
                </div>
                <div class="d-flex flex-column gap-1">
                  <label for="">Last Name</label>
                  <input type="text">
                </div>
                <div class="d-flex flex-column gap-1">
                  <label for="">Email Address</label>
                  <input type="text">
                </div>
                <div class="d-flex flex-column gap-1">
                  <label for="">Password</label>
                  <input type="text">
                </div>
              </div>
              <div class="d-flex align-items-center gap-2">
                <input id="confirm" type="checkbox">
                <label for="#confirm">I confirm I have read and agree to <a href="#">AI2DEV 's Terms </a> and <a href="#">
                    Offer Terms </a> .</label>
              </div>
              <button class="learn_btn w-fit">Create your free account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->
  <footer class="pt-5 pb-3 dark_background">
    <div class="container-xxl">
      <div class="row gy-4 justify-content-between">
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
        <!-- <div class="col-md-2">
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
        </div> -->
        <div class="col-md-2">
          <div class="d-flex flex-column gap-2">
            <h5>Resources</h5>
            <ul class="d-flex flex-column gap-0">
              <li><a href="#">Academy</a></li>
              <li><a href="#">API documentation</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">AI2DEV documentation</a></li>
              <li><a href="#">Cloud native A to Z</a></li>
              <li><a href="#">AI2DEV Github repo</a></li>
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
          <div class="d-flex flex-md-row flex-column gy-4 footer_bot align-items-center justify-content-between gap-3">
            <a href="index.php" class="d-flex align-items-center gap-0 nav-log">
              <div class="footer_logo">
                <img class="w-100 h-100 object-fit-cover" src="images/logo.png" alt="Logo" />
              </div>
              <h2>AI2DEV </h2>
            </a>
            <p>© AI2DEV 2024. All rights reserved.</p>
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
  <div class="progress-circle-container">
    <svg class="progress-circle" viewBox="0 0 100 100">
      <circle class="progress-background" cx="50" cy="50" r="45"></circle>
      <circle class="progress-circle-bar" cx="50" cy="50" r="45"></circle>
    </svg>
    <div class="scroll-to-top">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 19V5M5 12l7-7 7 7" />
      </svg>
    </div>
  </div>
  <input id="session_id" type="hidden" value="<?php echo $session_id; ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://unpkg.com/lenis@1.1.16/dist/lenis.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

  <script src="js/slick.js"></script>
  <script>

    function loginBtn() {
      const sessionID = document.getElementById('session_id').value;

      if (sessionID) {
        window.location.href = "cluster.php";
      } else {
        window.location.href = "login.php";
      }
    }

    new Typed(".front", {
      strings: [
        '',
        '<div class="d-flex flex-column gap-1 "><div class="d-flex align-items-start gap-2"><span class="icon"><i class="fa-brands fa-hive"></i></span><h6>Platform infrastructure sorted on</h6></div></div>'
      ],
      typeSpeed: 50,
      delaySpeed: 30,
      loop: false,
      contentType: 'html',
      cursorChar: "|",
      showCursor: false,
      backSpeed: 30,
      backDelay: 30,
    });
    new Typed(".front_p", {
      strings: [
        '',
        '<div class="d-flex align-items-center gap-2"><i class="fas fa-server"></i><p>VPS</p></div>', '<div class="d-flex align-items-center gap-2"><i class="fas fa-cloud"></i><p>Azure</p></div>', '<div class="d-flex align-items-center gap-2"><i class="fas fa-cloud-sun"></i><p>AWS</p></div>', '<div class="d-flex align-items-center gap-2"><i class="fas fa-layer-group"></i><p>Hybrid</p></div> <i class="ms-1 fa-solid fa-thumbs-up"></i></div>'
      ],
      startDelay:5500,
      typeSpeed: 50,
      delaySpeed: 30,
      loop: false,
      contentType: 'html',
      cursorChar: "|",
      showCursor: false,
      backSpeed: 30,
      backDelay: 30,
    });

    new Typed(".hero_quation0", {
      strings: [
        '',
        '<div class="d-flex flex-column gap-1 hero_q1"><div class="d-flex align-items-start gap-2"><span class="icon"><i class="fas fa-exclamation-circle"></i></span><h6>Having a problem statement?</h6></div><p class="ans_q1">I have a solution for your problem. <i class="ms-1 fa-solid fa-thumbs-up"></i></p></div>',
      ],
      startDelay: 9000,
      typeSpeed: 50,
      delaySpeed: 30,
      loop: false,
      contentType: 'html',
      cursorChar: "|",
      showCursor: false,
      backSpeed: 30,
      backDelay: 30,
    });
    new Typed(".hero_quation1", {
      strings: [
        '',
        '<div class="d-flex flex-column gap-1 hero_q1"><div class="d-flex align-items-start gap-2"><span class="icon"><i class="fas fa-code-branch"></i></span><h6>Where to get this coded</h6></div><p class="ans_q1">Get your coding done here and pushed to a repository. <i class="ms-1 fa-solid fa-thumbs-up"></i></p></div>'
      ],
      startDelay: 15000,
      typeSpeed: 50,
      delaySpeed: 30,
      loop: false,
      contentType: 'html',  // Ensures HTML content is rendered
      cursorChar: "|",      // Customize the cursor character
      showCursor: false,     // Show the cursor
      backSpeed: 30,       // Speed for backspacing
      backDelay: 30,        // Delay before starting the backspace
    });
    new Typed(".hero_quation2", {
      strings: [
        '',
        '<div class="d-flex flex-column gap-1 hero_q1"><div class="d-flex align-items-start gap-2"><span class="icon"><i class="fas fa-question-circle spinning"></i></span><h6>Wondering how to deploy?</h6></div><p class="ans_q1">CICD ready for deployment! <i class="ms-1 fa-solid fa-thumbs-up"></i></p></div>'
      ],
      startDelay: 22000,
      typeSpeed: 50,
      delaySpeed: 30,
      loop: false,
      contentType: 'html',  // Ensures HTML content is rendered
      cursorChar: "|",      // Customize the cursor character
      showCursor: false,     // Show the cursor
      backSpeed: 30,       // Speed for backspacing
      backDelay: 30,        // Delay before starting the backspace
    });

    $(document).ready(function () {
      var $slider = $(".cslide_main");
      $slider.slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: false,
        speed: 2000,
        autoplaySpeed: 0,
        autoplay: true,
        pauseOnHover: false,
        cssEase: "linear",
        responsive: [{
          breakpoint: 1300,
          settings: {
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
        ],
      });

      var $slider3 = $('.hero_slider');
      $slider3.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: false,
        speed: 1000,
        autoplaySpeed: 5000,
        autoplay: true,
        pauseOnHover: false,
        cssEase: "linear",
        centerMode: true,
        centerPadding: '00px',
        responsive: [{
          breakpoint: 1300,
          settings: {
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
        ],
      });


      var $slider2 = $(".logo_slide");
      $slider2.slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: false,
        speed: 3000,
        autoplaySpeed: 5000,
        autoplay: true,
        pauseOnHover: false,
        cssEase: "linear",
        responsive: [{
          breakpoint: 1300,
          settings: {
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
        ],
      });


      var $slider3 = $(".test_slider");
      $slider3.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        fade: true,
        dots: false,
        speed: 1000,
        autoplay: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 1300,

          settings: {
            arrows: false,
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1,
          },
        },
        ],
      });

    });
  </script>

  <script>
    function updateProgressCircle() {
      const progressElement = document.querySelector('.progress-circle-bar');
      const scrollToTopElement = document.querySelector('.scroll-to-top');
      const totalHeight = document.body.scrollHeight - window.innerHeight;
      let progress = (window.pageYOffset / totalHeight) * 283;
      progress = Math.min(progress, 283);
      progressElement.style.strokeDashoffset = 283 - progress;

      if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight) {
        scrollToTopElement.style.opacity = '1';
      } else {
        scrollToTopElement.style.opacity = '0';
      }
    }

    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }


    const scrollToTopElement = document.querySelector('.scroll-to-top');
    scrollToTopElement.addEventListener('click', scrollToTop);


    updateProgressCircle();
    window.addEventListener('scroll', updateProgressCircle);
    window.addEventListener('resize', updateProgressCircle);
    const lenis = new Lenis({
      lerp: 0.1, // Smoothness of scroll
      smoothWheel: true, // Smooth scrolling with mouse wheel
      smoothTouch: true, // Smooth scrolling on touch devices
      direction: "vertical", // Direction of scroll (default is vertical)
      easing: "ease-out", // Easing function for smooth transition
      scrollSpeed: 3, // Speed of scroll (higher = faster)
      smoothMobile: true, // Enable smooth scroll on mobile devices
      scrollBar: true, // Enables custom scrollbar
      wheelSensitivity: 1, // Sensitivity of mouse wheel
      scrolling: true, // Ensure scrolling is enabled
    });

    function animate(time) {
      lenis.raf(time); // Request animation frame for smooth scroll
      requestAnimationFrame(animate);
    }
    requestAnimationFrame(animate);


    jQuery(document).ready(function () {
      jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 1) {
          jQuery("header").addClass("sticky");
        } else {
          jQuery("header").removeClass("sticky");
        }
      });
      jQuery(".navbar-toggler").click(function () {
        jQuery(".navbar-toggler i").toggleClass("fa-times");
      });
    });
  </script>
  <script>
    document.addEventListener("contextmenu", function (e) {
      e.preventDefault();
    });
    document.onkeydown = function (e) {
      if (event.keyCode == 123) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "E".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "S".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "H".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "A".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "F".charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == "E".charCodeAt(0)) {
        return false;
      }
    };
  </script>
</body>

</html>