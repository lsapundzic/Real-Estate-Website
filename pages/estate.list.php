<?php
include "../components/header.estates.php";
include_once "../database/includes/connection.inc.php";
?>

<!-- Main Content -->
<main>
    <aside class="filter">
        <h4>Filter Content:</h4>
        <div class="buttonsBox">
            <div class="bttn" id="all">ALL</div>
            <div class="bttn" id="gorenjska">Littoral</div>
            <div class="bttn" id="gorenjska">Upper Carniola</div>
            <div class="bttn" id="gorenjska">Inner Carniola</div>
            <div class="bttn" id="gorenjska">Lower Carniola</div>
            <div class="bttn" id="gorenjska">Carinthia</div>
            <div class="bttn" id="gorenjska">Styria</div>
            <div class="bttn" id="gorenjska">Prekmurje</div>

        </div>
    </aside>

    <!--    Main Page Content-->
    <div class="showcase">
        <?php
        // Variable that holds SQL table
        $sql = "SELECT * FROM properties;";

        // Get a result of query $sql from $conn connection
        $result = mysqli_query($conn, $sql);

        // Checking if database actually returns something. Safety measure
        $resultCheck = mysqli_num_rows($result);

        // Second part of the safety measure
        if ($resultCheck > 0) {

            // Keep calling from DB as long as there is data
            // Assign data from $result to an array $row
            while ($row = mysqli_fetch_assoc($result)) {

                // Database item id
                $id = $row['id'];

                // Filling out the fields
                echo "<div class='estate'><a href='estate.single.php'> <h3>" . $row['name'] . "</h3><h4>" . $row['region'] . "</h4><p>&euro;"
                . $row['price'] . "</p><p>Bedrooms: " . $row['bedrooms'] . "</p></a></div>";
//                echo $row['name'] . "<br>";
            }
        }
        ?>
    </div>
</main>

<!-- Footer -->

<?php
include "../components/footer.php"
?>
