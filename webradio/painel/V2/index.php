<?phpsession_start();/** * WR-Panel * * @version 1.0.15 * @author Miller P. Magalhães * @link http://www.millerdev.com.br * */#############INCLUDES#############require_once("wr_inc/config/wr_inc_config.php");require_once("wr_inc/class/wr_inc_class_licence.class.php");require_once("wr_inc/class/wr_inc_class_mysql.class.php");require_once("wr_inc/class/wr_inc_class_login.class.php");require_once("wr_inc/wr_inc_mysql_init.php" );require_once("wr_inc/class/url.class.php" );##################################//#####CARREGAMENTO DAS PÁGINAS#####$url = new url();$url->GetString = $_GET['paginas'];$url->GetLocal = $_GET['local'];$url->writepage();##################################?><!DOCTYPE html><html>  <?php require_once( "wr_inc/wr_inc_header.php" ); ?>  <?php require_once( "wr_inc/wr_inc_css.php" ); ?>  <body>    <?php if ($_SESSION['logado']) { ?>      <?php require_once( "wr_inc/wr_inc_top_menu.php" ); ?>      <div id="mws-wrapper">        <?php require_once( "wr_inc/wr_inc_left_menu.php" ); ?>        <!-- Container Wrapper -->        <div id="mws-container" class="clearfix">          <!-- Main Container -->          <div class="container" id="container">            <script>load_wr('?paginas=home&local=paginas', 'container', 'GET');</script>          </div>          <!-- End Main Container -->          <!-- Footer -->          <?php require_once( "wr_inc/wr_inc_footer.php" ); ?>          <!-- End Footer -->        </div>        <!-- End Container Wrapper -->      </div>      <?php require_once( "wr_inc/wr_inc_javascript.php" ); ?>    <?php } else { ?>      <?php require_once( "wr_inc/wr_inc_login.php" ); ?>    <?php } ?>  </body></html>