<?php
include_once "../database/includes/connection.inc.php";
include "../components/header.php";

// Get ID passed from estate.list.php
$id_local = $_GET['id'];


// Variable that holds SQL table row where ID matches GET
$sql_local = "SELECT * FROM properties WHERE id='{$id_local}';";

// Get a result of query $sql from $conn connection
$result = mysqli_query($conn, $sql_local);

// Checking if database actually returns something. Safety measure
$resultCheck = mysqli_num_rows($result);

// Second part of the safety measure
if ($resultCheck > 0) {

    // Keep calling from DB as long as there is data
    // Assign data from $result to an array $row
    while ($row = mysqli_fetch_assoc($result)) {

        $row_data = $row['name'];
    }
}

?>

    <!-- Header-Banner -->
    <header>
        <h1>YES! Your Reached It!</h1>
        <h2>The Art of Architecture | Luxury Properties</h2>
        <h2><?php echo "The passed id of this page is: {$id_local}" ?></h2>
    </header>

    <!-- Main Content -->
    <main>
        <article>
            <h3>Welcome to Individual Real Estate Page</h3>
            <section>
                <p>
                    <?php

                    echo "*DISPLAYED HERE*{$row_data}";
                    ?>
                    <br>
                    <br>
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi
                    asperiores tenetur earum accusamus minus distinctio ut dolorum, iure
                    iusto illo facere autem tempora provident vero rerum. Saepe natus
                    est placeat modi inventore mollitia reprehenderit praesentium
                    cumque. Eos impedit consectetur saepe ad blanditiis repudiandae ab,
                    architecto harum ipsam quos voluptates eaque dolorum veniam totam!
                    Nisi libero quo corrupti omnis, neque sapiente, qui, sunt temporibus
                    nesciunt quisquam nulla atque est inventore totam voluptas maiores
                    quam autem ipsum odio? Debitis quam fugiat reprehenderit corporis at
                    necessitatibus aperiam dicta, eligendi aspernatur. Explicabo,
                    tenetur ullam? Molestias amet consectetur sequi labore eum
                    blanditiis dicta. Adipisci, culpa!
                </p>
            </section>
        </article>
    </main>

    <!-- Footer -->

<?php
include "../components/footer.php"
?>