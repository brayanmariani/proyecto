<?php   include_once "inc/link.php"; ?>


            <body class="fix-header fix-sidebar">
                <!-- Preloader - style you can find in spinners.css -->
                <?php require_once "./controlador/vistasControlador.php";
            $peticionesAjax=false;
            $iv=new vistasControlador();
            $vistas=$iv->obtener_vistas_controlador();
            if ($vistas=="404" || $vistas=="login"  ) {
                require_once "./vistas/contenido/".$vistas."-vistas.php";
            }else{
                session_start(['name'=>'Inmufa']);
            ?>
                <?php   include_once "inc/menucab.php"; ?>
                    <!-- End header header -->
                    <!-- Left Sidebar  -->
                    <?php   include_once 'inc/menu.php'; ?>
                    <!-- End Left Sidebar  -->
                    <!-- Page wrapper  -->
                    <div class="page-wrapper">
                        <!-- Bread crumb -->
                        <!-- End Bread crumb -->
                        <!-- Container fluid  -->
                        <div class="container-fluid">
                        <?php   require_once "./vistas/contenido/".$vistas."-vistas.php";;?>
                        </div>
                        <!-- End Container fluid  -->
                        <!-- footer -->
                        <footer class="footer"> © Brayan Mariani 2023-2024 brayanmariani20@gmail.com</footer>
                        <!-- End footer -->
                    </div>
                    <!-- End Page wrapper  -->
                </div>
                <!-- End Wrapper -->
                <!-- All Jquery -->
                <?php }  include_once 'inc/scrip.php'; ?>

            </body>

</html>