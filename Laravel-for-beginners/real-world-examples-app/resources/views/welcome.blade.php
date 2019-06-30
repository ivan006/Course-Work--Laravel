
<?php
require_once "../app/libraries/Parsedown.php";
$parsedown = new Parsedown();

$subsiteName = "Hex Motion";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  </head>
  <body style="padding: 20px; background-color: WhiteSmoke;" >
    <div class="container s-heightMinFullPage" style="background-color: white;">

      <?php ob_start(); ?>




      /*
      |--------------------------------------------------------------------------
      | Web Routes
      |--------------------------------------------------------------------------
      |
      | Here is where you can register web routes for your application. These
      | routes are loaded by the RouteServiceProvider within a group which
      | contains the "web" middleware group. Now create something great!
      |
      */

      Route::get('/', function () {
          return view('welcome');
      });

      Route::get('/phpversion', function () {
          echo phpversion();
        });

      Route::get('/a/read/{a}', 'TypeAEntity_Controller@MethodRead');
      Route::get('/a/create/{a}', 'TypeAEntity_Controller@MethodCreate');
      Route::get('/a/update', 'TypeAEntity_Controller@MethodUpdate');
      Route::get('/a/delete', 'TypeAEntity_Controller@MethodDelete');
      Route::get('/a/Softdelete/{a}', 'TypeAEntity_Controller@MethodSoftDelete');

      Route::get('/b/create/{a}/{b}', 'TypeBEntity_Controller@create');
      Route::get('/b/read/{a}', 'TypeBEntity_Controller@show');
      Route::get('/b/update/{a}/{b}', 'TypeBEntity_Controller@update');
      Route::get('/b/delete/{a}', 'TypeBEntity_Controller@destroy');


      Route::get('/b/read/a/create/{a}', 'TypeBEntity_Controller@showACreate');
      Route::get('/b/read/a/read/{a}', 'TypeBEntity_Controller@showAShow');
      Route::get('/b/read/a/update/{a}/{b}', 'TypeBEntity_Controller@showAUpdate');
      Route::get('/b/read/a/delete/{a}', 'TypeBEntity_Controller@showADestroy');



      Route::get('/c/create/{a}', 'TypeCEntity_Controller@create');
      Route::get('/c/delete/{a}', 'TypeCEntity_Controller@destroy');

      Route::get('/b/read/CLink/create/{a}/{b}/{c}', 'TypeBEntity_Controller@showCLinkCreate');
      Route::get('/b/read/CLink/read/{a}', 'TypeBEntity_Controller@showCLinkShow');
      Route::get('/b/read/CLink/delete/{a}', 'TypeBEntity_Controller@showCLinkDestroy');


      Route::get('/b/read/c/read/{a}', 'TypeBEntity_Controller@showCShow');
      Route::get('/b/read/c/update/{a}/{b}/{c}', 'TypeBEntity_Controller@showCUpdate');
      Route::get('/b/read/c/delete/{a}/{b}', 'TypeBEntity_Controller@showCDestroy');

      Route::get('/c/read/b/read/{a}', 'TypeCEntity_Controller@showBShow');

      Route::get('/d/create/{a}', 'TypeDEntity_Controller@create');
      Route::get('/d/delete/{a}', 'TypeDEntity_Controller@destroy');

















      <?php
      $markdownInstance = ob_get_contents();
      ob_end_clean();
      echo $parsedown->text($markdownInstance);
      ?>

      <!-- <div id="hellomarkdown">
      </div> -->

</div>

<!-- <script src="../app/libraries/showdown-1/showdown.js"></script>
<script src="../app/libraries/showdown-1/showdown-customisation.js"></script> -->

</body>
</html>
