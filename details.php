<?php
session_start();
include_once("header.php");
?>

<body>
    <?php include_once("navigation.php"); ?>
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error'];
                                                        session_unset(); ?></div>
    <?php } else if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['success'];
                                                        session_unset(); ?></div>
    <?php } ?>
    <div class="flex_container" id="loginformdiv" style="justify-content: space-around;">
        <?php include("serverside/showProductDetails.php");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div style="background-color: rgba(0,105,217,0.8);flex-basis:40%;">
                    <div class="center prodImg"><img src="<?php echo $row["image"] ?>" alt="product image"></div>
                </div>
                <div class="flex_container" id="details_outer_div">
                    <div id="details_main_div">
                        <div style="height: 64%;">
                            <h4 class="display-3"><?php echo $row["name"] ?></h4>
                            <p class="lead"><?php echo $row["descr"] ?></p>
                        </div>
                        <div class="button_set">
                            <p><span class="badge badge-pill badge-danger" style="font-size: 2em;padding: 0.5em 1.5em;">&#8377;<?php echo $row["price"] ?></span></p>
                            <div>
                                <a href="#home" data-toggle="tab" class="btn btn-primary btn-block">Buy Now</a>
                                <a href="#home" data-toggle="tab" class="btn btn-success btn-block">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div id="details_side_div">

                    </div>
                </div>
        <?php  }
        }
        ?>
    </div>
</body>