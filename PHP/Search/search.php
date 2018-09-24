<?php
    include 'header.php';
?>



<h1>Search page</h1>

<div class="article-container">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM clients WHERE name_company LIKE '%$search%' or";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "There are ".$queryResult." results!";

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a href='article.php?title='><div class='article-box'>
                                <p>".$row['client_id']."</p>
                                <p>".$row['name_company']."</p>
                                <p>".$row['total_placements']."</p>
                                <p>".$row['active_placements']."</p>
                                <p>".$row['core_buissines']."</p>
                                <p>".$row['acquired_by']."</p>
                                <p>".$row['telephone_number']."</p>
                              </div></a>";
                }
            } else {
                echo "There are no results matching your search!";
            }
        }
    ?>
</div>
