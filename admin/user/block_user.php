<?php
    $page_title = "User Block";
    require_once($_SERVER["DOCUMENT_ROOT"]."/admin/nav.php");

    if(isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"]))
    {
        $id = trim($_GET["q"]);
        $user = get_user_details_by_passing_id($id);
    }
    
    if($user["block"] === "0")
    {
        $verified = '1';
        block_user($block,$id);
    }
    else
    {
        $block = '0';
        block_user($block,$id);

    }

    echo "<script>window.location='/admin/user/';</script>";
    exit(0);
?>