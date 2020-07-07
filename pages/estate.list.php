<?php
//Headers
include "../components/head_a.php";
include_once "../database/includes/connection.inc.php";
?>

    <!-- Additional stylesheet unique to this document-->
    <link rel="stylesheet" href="../styles/estate.list.css"/>

<?php
include "../components/head_b.php";

// Getting data from SQL is here

// SQL search pattern
$sql = "SELECT * FROM properties";

// Get a result of query $sql from $conn connection
$result = mysqli_query($conn, $sql);

// Checking if database actually returns something. Safety measure
$resultCheck = mysqli_num_rows($result);
?>

    <!-- Main Content -->
    <main>
        <aside class="filter">
            <div class="buttonsBox">
                <button class="bttn" id="all">ALL</button>
                <button class="bttn" id="littoral">Littoral</button>
                <button class="bttn" id="upper">Upper Carniola</button>
                <button class="bttn" id="inner">Inner Carniola</button>
                <button class="bttn" id="lower">Lower Carniola</button>
                <button class="bttn" id="carinthia">Carinthia</button>
                <button class="bttn" id="styria">Styria</button>
                <button class="bttn" id="prekmurje">Prekmurje</button>
            </div>
        </aside>

        <!--    Main Page Content-->
        <div class="showcase">
            <?php

            // Second part of the safety measure
            if ($resultCheck > 0) {

                // Keep calling from DB as long as there is data
                // Assign data from $result to an array $row
                while ($row = mysqli_fetch_assoc($result)) {

                    // Database item id I want separate from the string below
                    $id = "id=" . $row['id'];

                    // Filling out the fields
                    echo "<div class='estate'><a href='estate.present.php?id={$row['id']}'><h3>{$row['name']}</h3>
                        <img src='{$row['link']}' alt='An icon of {$row['name']}'>
                        <h4> {$row['region']}</h4><p>&euro;{$row['price']}</p><p>Bedrooms: {$row['bedrooms']}</p></a></div>";
                }
            } else {
                echo "<strong>ERROR: The SQL database could not be reached</strong>";
            }
            ?>
        </div>
    </main>

    <!-- Footer -->

<?php
include "../components/footer.php"
?>