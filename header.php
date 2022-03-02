<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <meta name="description" content="A portfolio website contains personal information, projects, and UI design, etc.">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Aniket Dhulap">
  <meta name="keywords" content="web developer, web designer, aniket">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Aniket Dhulap</title>
</head>

<body>

  <header class="sticky-top">
    <nav class="navbar navbar-expand navbar-light navigation">
      <a class="navbar-brand" href="index.php">
        <picture>
          <source media="(max-width:576px)" srcset="logo/aniket-dhulap.png">
          <img src="logo/front-end-developer.png" alt="aniket's logo" width="25%">
        </picture>


      </a>
      <!-- Default dropleft button -->
      <div class="btn-group dropleft right-btn">
        <a class="drop-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="fa fa-cog fa-spin menu-btn"></span>

        </a>
        <div class="dropdown-menu drop-list">
          <!-- Dropdown menu links -->
          <h4 class="text-center setting-text"><b>Explore More</b></h4>
          <a class="dropdown-item" href="index.php">
            <i class="fa fa-home left-icon a-icon" aria-hidden="true"></i>
            <label class="right-label">Home</label>
          </a>
          <a class="dropdown-item" href="work.php">
            <i class="fa fa-briefcase left-icon b-icon" aria-hidden="true"></i>
            <label class="right-label">My Work</label>
          </a>
          <!-- <a class="dropdown-item" href="skills.php">
            <i class="fa fa-user-secret left-icon e-icon" aria-hidden="true"></i>
            <label class="right-label">My Skills</label>
          </a> -->
          <a class="dropdown-item" href="about-me.php">
            <i class="fa fa-user left-icon c-icon" aria-hidden="true"></i>
            <label class="right-label">About Me</label>
          </a>
          <a class="dropdown-item" href="contact-me.php">
            <i class="fa fa-phone left-icon d-icon" aria-hidden="true"></i>
            <label class="right-label">Contact me</label>
          </a>
        </div>
      </div>
    </nav>
  </header>