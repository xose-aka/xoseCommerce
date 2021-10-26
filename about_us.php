<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php
/**
 * @var Database $pdo
 */
?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>

    <div class="content-wrapper">
        <div class="container">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="header clearfix">
                            <h3 class="text-muted">About Us</h3>
                        </div>

                        <div class="box box-solid">
                            <div class="box-body">
                                <h1>Xose aka</h1>
                                <p class="lead">Ecommerce platforms are one of the most used types of CMSes and there are more and more apps popping out (more than 120!). That's why comparison websites started to include ecommerce platforms to their inventory.</p>
                                <p><a class="btn btn-lg btn-success" href="category.php?category=laptops" role="button">Buy something</a></p>
                            </div>
                        </div>

                        <div class="box box-solid">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <h4>Product and service configurations</h4>
                                    <p>Allow buyers to navigate the online store and seamlessly self-serve the right product combinations they need..</p>

                                    <h4>Sales opportunity insights</h4>
                                    <p>Help companies capture more wallet-share by delivering personalized product recommendations along the buying journey.</p>

                                    <h4>Omnichannel price management</h4>
                                    <p>To build and manage dynamic price strategies for eCommerce, harmonized with other sales channels.</p>
                                </div>

                                <div class="col-md-6">
                                    <h4>Customer-specific price optimization</h4>
                                    <p>To ensure personalization in pricing, tailored to the expectations of today’s digital buyers.</p>

                                    <h4>Real-time price delivery</h4>
                                    <p>Using the most robust and highly scalable pricing engine, designed for eCommerce growth.</p>

                                    <h4>Platform </h4>
                                    <p>eCommerce drives greater trust in digital channels and empowers buyers to transact in your eCommerce and self-service portals.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="sidenav">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>