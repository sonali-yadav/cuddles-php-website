    <header>
        <div class="myheading">
            <a href="home.php" id="title">&hearts;Cuddles&hearts;</a></div>
        <nav class="navbar navbar-expand-lg navbar-dark mynavbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav" id="navlist">
                    <?php include("serverside/fetchCategories.php");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // echo $row["id"].' '.$row["name"]."<br>";
                    ?>
                            <div class="nav-item active">
                                <a class="nav-link" href="#" style="font: 1.2vw 'Raleway', sans-serif;"><?php echo $row["name"] ?></a>
                            </div>
                    <?php }
                    } ?>
                    </ul>
                </div>
            </div>
            <div>
                <?php if (isset($_SESSION['firstname'])) { ?>
                    <a class="nav-link" href="serverside/logout.php" style="font: 1.2vw 'Raleway', sans-serif;color:#ffffff;">Logout</a>
                <?php } else { ?>
                    <a class="nav-link" href="/cuddles/" style="font: 1.2vw 'Raleway', sans-serif;color:#ffffff;">Login</a>
                <?php } ?>
            </div>
            </div>
            <div class="nav-item active">
                <?php if (isset($_SESSION['firstname'])) { ?>
                    <i class="fa fa-shopping-cart" style="font-size:2em;color:#ffffff;"></i>
                <?php } ?>
            </div>
        </nav>
    </header>