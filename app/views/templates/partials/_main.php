<div id="main">
    <div class="container">
        <div class="row">
            <!-- About Me (Left Sidebar) Start -->
            <?php include_once '../app/views/templates/partials/_aside.php'; ?>
            <!-- About Me (Left Sidebar) End -->

            <!-- Blog Post (Right Sidebar) Start -->
            <div class="col-md-9">
                <div class="col-md-12 page-body">
                    <div class="row">
                        <div class="col-md-12 content-page">

                            <!-- Blog Post Start -->
                            <?php echo $content; ?>
                            <!-- Blog Post End -->



                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <?php include_once '../app/views/templates/partials/_footer.php'; ?>
                <!-- Footer End -->
            </div>
            <!-- Blog Post (Right Sidebar) End -->
        </div>
    </div>
</div>