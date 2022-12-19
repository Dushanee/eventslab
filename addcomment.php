<?php
    
    $post_id = 1;
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <form action="comment.php" method="post">
 
 <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>

 <p>
     <label>Your name</label>
     <input type="text" name="name" required>
 </p>

 <p>
     <label>Your email address</label>
     <input type="email" name="email" required>
 </p>

 <p>
     <label>Comment</label>
     <textarea name="comment" required></textarea>
 </p>

 <p>
     <input type="submit" value="Add Comment" name="post_comment">
 </p>
</form>
    </body>
</html>