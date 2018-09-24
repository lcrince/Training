<?php
    include 'header.php';
?>


        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search">
            <button type="submit" name="submit-search">Search</button>
        </form>
        <h1>Home page</h1>
        <h2>All articles</h2>

        <div class="article-container">
            <?php
                $sql = "SELECT * FROM clients";
                $result = mysqli_query($conn, $sql);
                $queryresults = mysqli_num_rows();

                if ($queryresults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='article-box'>
                                <p>".$row['client_id']."</p>
                                <p>".$row['name_company']."</p>
                                <p>".$row['total_placements']."</p>
                                <p>".$row['active_placements']."</p>
                                <p>".$row['core_buissines']."</p>
                                <p>".$row['acquired_by']."</p>
                                <p>".$row['telephone_number']."</p>
                              </div>";
                    }
                }
            ?>

        </div>
    </body>
</html>
