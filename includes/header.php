<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (isset($page_title) && !empty($page_title)): ?>
		<title>
			<?php echo trim($page_title); ?> | WritersHouse
		</title>
	<?php else: ?>
		<title>WritersHouse</title>
	<?php endif; ?>
  <?php
    if(isset($_POST["submit_click"]))
    {
      $search = trim($_POST["search-input"]);
      if($search != "")
      {
        echo "<script>window.location='/content/content_search_list?q=$search';</script>";
      }
      else
      {
        echo "<script>window.location='/content/content_list';</script>";
      }
    } 
  ?>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
  <script type="text/javascript" src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="/assets/js/writer_radio.js"></script>
  <script type="text/javascript" src="/assets/js/content_list_radio.js"></script>
  <script type="text/javascript" src="/assets/js/refresh_message.js"></script>
  <script type="text/javascript" src="/assets/js/speak_text.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow navbar-custom">
    <div class="container">
      <a class="navbar-brand writershouse-title fw-bold text-primary" href="/">WritersHouse</a>
      <form role="form" action="<?php echo action_form(); ?>" method="post" enctype="multipart/form-data" class="col-md-4 offset-md-1">
        <div class="input-group">
          <input class="form-control border-end-0 border-secondary text-dark" type="search" placeholder="Search" id="search-input" name="search-input">
          <span class="input-group-append">
            <button class="btn bg-white border-start-0 border-secondary rounded-end" type="submit" id="submit_click" name="submit_click">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <?php if(isset($_SESSION["user_id"]) && ($_SESSION["role"])): ?>
          <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
            <li class="nav-item me-4">
              <a class="nav-link" href="/explore"><span>Explore</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/chat/"><span>Message</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/login/"><span>Account</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/feedback/"><span>Feedback</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/logout"><span>Logout</span></a>
            </li>
          </ul>
        <?php else: ?>
          <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
            <li class="nav-item me-4">
              <a class="nav-link" href="/explore"><span>Explore</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/login/"><span>Sign In</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/registration/"><span>Register</span></a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="/feedback/"><span>Feedback</span></a>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>