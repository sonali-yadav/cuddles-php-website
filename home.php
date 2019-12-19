<?php
include_once("header.php");
session_start();
?>

<body>
    <?php include_once("navigation.php"); ?>
    <?php if (isset($_SESSION['firstname'])) { ?>
        <div>
            <div class="alert alert-success" role="alert">Welcome <?php echo $_SESSION['firstname']; ?> !</div>
        </div>
    <?php } ?>
    <main>
        <section class="mysection" id="catalog">
            <div class="flex_container">
                <?php include("serverside/productFetch.php");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="card mycard" style="width: 17em;">
                            <div class="center"><img src="<?php echo $row["image"] ?>" class="card-img-top mycardimg" alt="product image"></div>
                            <div class="card-body" style="border: 1px solid #cacaca;">
                                <h4 class="card-title mycardtitle"><?php echo $row["name"] ?></h4>
                                <p style="text-align: right;"><span class="badge badge-pill badge-danger" style="font-size: 1em;">&#8377;<?php echo $row["price"] ?></span></p>
                                <div>
                                    <a href="#home" data-toggle="tab" class="btn btn-success mybtn">Add to cart</a>
                                    <a href="details.php?id=<?php echo $row["id"] ?>" target="_blank" class="btn btn-info mybtn">Details</a>
                                </div>
                            </div>
                        </div>
                <?php  }
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>