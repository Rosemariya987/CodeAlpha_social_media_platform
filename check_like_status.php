<?php

include('config.php');

$user_id = $_SESSION['id'];

$post_id = $post['Post_ID'];

$sql = "SELECT * FROM likes WHERE User_ID = $user_id AND Post_ID = $post_id;";

$stmt = $conn->prepare($sql);

$stmt->execute();

$stmt->store_result();

if ($stmt->num_rows() > 0)
{
    $reaction_status = true;
}else
{
    $reaction_status = false;
}

