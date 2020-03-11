    <?php if (strpos($_SERVER["REQUEST_URI"], '/dws/') !== false) : ?>
    <?php require TEMPLATEPATH . "/module/footer_dws.php"; ?>
    <?php else : ?>
    <?php require TEMPLATEPATH . "/module/footer_default.php"; ?>
    <?php endif; ?>

    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.css' />
    </body>

    </html>