<?php
 
// index.php
 
$conn = mysqli_connect("localhost:8889", "root", "root", "yourdbname");
 
if (isset($_POST["post_comment"]))
{
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $post_id = mysqli_real_escape_string($conn, $_POST["post_id"]);
    $reply_of = 0;
 
    mysqli_query($conn, "INSERT INTO comments(name, email, comment, post_id, created_at, reply_of) VALUES ('" . $name . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
    echo "<p>Comment has been posted.</p>";
}
 
?>