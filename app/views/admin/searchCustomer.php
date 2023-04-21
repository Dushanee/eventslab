<h1>Search Results</h1>

<?php

// var_dump( $data['results'] );

?>

<form action="<?php echo BASEURL ?>/adminFunction/search" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
<?php
// echo $data['results'];




                // $path = BASEURL;
                // echo " <table>";
                // echo "<thead>";
                // echo "<tr>";
                // echo " <th>Id</th>";
                // echo "  <th>Name</th>";
                // echo "  <th>Email</th>";
                // echo " <th>Actions</th>";
                // echo " </tr>";
                // echo "</thead>";
                // echo " <tbody>";
                if (isset($data['results'])) {
                    while ($row = $data['results']->fetch_assoc()) {
                        echo  $row["cust_fname"] ;
                        
                } 

}
?>

