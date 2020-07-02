<?php
include_once "../database/includes/connection.inc.php";
include "../components/header.standard.php";

// Get ID passed from estate.list.php
$id_local = $_GET['id'];


// Variable that holds SQL table row where ID matches GET
$sql_local = "SELECT * FROM properties WHERE id='{$id_local}';";

// Get a result of query $sql from $conn connection
$result = mysqli_query($conn, $sql_local);

// Checking if database actually returns something. Safety measure
$resultCheck = mysqli_num_rows($result);

// Second part of the safety measure
if (!$resultCheck > 0) {
    echo "ERROR: The SQL database could not be reached. The number of rows in the database is {$resultCheck}";
} else {

    // Column is an associative array of SQL $result
    $col = mysqli_fetch_assoc($result);

    $local_name = $col['name'];
    $local_region = $col['region'];
    $local_price = $col['price'];
    $local_bedrooms = $col['bedrooms'];
    $local_bathrooms = $col['bathrooms'];
    $local_plot = $col['plot'];
    $local_living = $col['living'];
    $local_description = $col['description'];
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
            <h3> <?php echo "{$local_name}" ?> </h3>
            <section>
                <p>

                    <?php echo "{$local_description}" ?>
                </p>
            </section>
        </article>
    </main>

    <!-- Footer -->

<?php
include "../components/footer.php"
?>