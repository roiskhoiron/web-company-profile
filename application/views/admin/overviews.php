<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- head.php -->
        <?php $this->load->view("admin/_partialss/head.php") ?>
    </head>

    <body class="sb-nav-fixed">

        <!-- nav.js -->
        <?php $this->load->view("admin/_partialss/nav.php")?>
        <div id="layoutSidenav">
            
            <!-- sidenav.php -->
            <?php $this->load->view("admin/_partialss/sidenav.php")?>
            <div id="layoutSidenav_content">
                
                <!-- main.php -->
                <?php $this->load->view("admin/_partialss/main.php")?>

                <!-- footer.php -->
                <?php $this->load->view("admin/_partialss/footer.php")?>
            </div>
        </div>

        <!-- js.php -->
        <?php $this->load->view("admin/_partialss/js.php") ?>
    </body>
</html>