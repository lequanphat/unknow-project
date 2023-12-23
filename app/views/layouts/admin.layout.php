<?php require_once './app/views/components/head.php'  ?>

<body>

    <!-- SIDEBAR -->
    <?php require_once './app/views/components/admin.sidebar.php' ?>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <?php require_once './app/views/components/admin.navbar.php' ?>
        <!-- NAVBAR -->
        <!-- MAIN -->
        <?php require_once './app/views/pages/admin/' . $params['page'] . '.php' ?>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="./public/js/admin.js"></script>
</body>

</html>