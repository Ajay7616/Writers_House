<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    
    if(!isset($_SESSION["user_id"]) || empty($_SESSION["user_id"]) || !is_numeric($_SESSION["user_id"]) || !isset($_SESSION["role"]) || $_SESSION["role"] !== "admin")
    {
		header("Location: /");
		exit(0);
	}
?>
<nav class="navbar navbar-expand-sm shadow bg-primary navbar-dark" id="admin_nav">
    <div class="container">
        <a class="navbar-brand mx-5 px-3" href="/admin/">
            <span class="fw-bold">Dashboard</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav">
                <li class="nav-item mx-4 px-3">
                    <a class="nav-link" href="/admin/genre/">
                        <span class="fw-bold">Genre</span>
                    </a>
                </li>
                <li class="nav-item mx-4 px-3">
                    <a class="nav-link" href="/admin/user/">
                        <span class="fw-bold">User</span>
                    </a>
                </li>
                <li class="nav-item mx-4 px-3">
                    <a class="nav-link" href="/admin/writer">
                        <span class="fw-bold">Writer</span>
                    </a>
                </li>
                <li class="nav-item dropdown mx-4 px-3">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fw-bold">Content</span>
                    </a>
                    <ul class="dropdown-menu bg-light text-dark fw-bold" aria-labelledby="navbarDropdown">
                        <li><a class="btn dropdown-item fw-bold" href="/admin/content/all_content_list">Content List</a></li>
                        <li><a class="btn dropdown-item fw-bold" href="/admin/content/approve_content_list">Approved Content</a></li>
                        <li><a class="btn dropdown-item fw-bold" href="/admin/content/disapprove_content_list">Disapproved Content</a></li>
                        <li><a class="btn dropdown-item fw-bold" href="/admin/content/pending_content_list">Pending Content</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-4 px-3">
                    <a class="nav-link" href="/admin/feedback/">
                        <span class="fw-bold">Feedback</span>
                    </a>
                </li>
                <li>
                  <a class="nav-link mx-5 px-3" href="/admin/change_password">
                    <span class="fw-bold">Change Password</span>
                  </a>
                </li> 
            </ul>
        </div>    
    </div>
</nav>