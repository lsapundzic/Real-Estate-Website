<?php
include_once "../database/includes/connection.inc.php";

//Headers
include "../components/head_a.php";
?>
    <!-- Additional stylesheet unique to this document-->
    <link rel="stylesheet" href="../styles/estate.present.css">

<?php
include "../components/head_b.php";

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
    echo "<strong>ERROR: The SQL database could not be reached. The number of rows in the database is {$resultCheck} </strong>";
} else {

    // Column is an associative array of SQL $result
    $col = mysqli_fetch_assoc($result);

    // I prefer to have new variables
    $lc_name = $col['name'];
    $lc_region = $col['region'];
    $lc_price = $col['price'];
    $lc_bedrooms = $col['bedrooms'];
    $lc_bathrooms = $col['bathrooms'];
    $lc_plot = $col['plot'];
    $lc_living = $col['living'];
    $lc_description = $col['description'];
    $lc_image = $col['link'];
}

?>

    <!-- Header-Banner -->
    <header>
        <h1><?php echo "{$lc_name}" ?></h1>
        <h2><?php echo "{$lc_region}" ?></h2>
    </header>

    <!-- Main Content -->
    <main>
        <section>
            <img src="<?php echo "{$lc_image}" ?>" alt="Best available image of the property">
        </section>
        <section class="overview">
            <ul>
                <li>
                    <b>Price: &euro;</b> <?php echo "{$lc_price}" ?>
                </li>
                <li>
                    <b>Bedrooms: </b> <?php echo "{$lc_bedrooms}" ?>
                </li>
                <li>
                    <b>Bathrooms: </b> <?php echo "{$lc_bathrooms}" ?>
                </li>
                <li>
                    <b>Plot Size: </b> <?php echo "{$lc_plot}" ?> Acres
                </li>
                <li>
                    <b>Living Area: </b> <?php echo "{$lc_living}" ?> m3
                </li>
            </ul>
        </section>

        <section>
            <h3>Description</h3>
            <article>
                <p>
                    <?php echo "{$lc_description}" ?>
                </p>
            </article>
        </section>


    </main>

<script>
    $('.overview').hide();
    $('.overview').fadeIn('slow');
</script>

    <!-- Footer -->

<?php
include "../components/footer.php"
?>
