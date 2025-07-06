<?php
require('../config/autoload.php');
$dao = new DataAccess();

//session_start();
$id=$_GET['id'];
$_SESSION['email'] = "sample@gmail.com";

// Run the query safely
$q = "SELECT * FROM product WHERE userid=$id and status=1";
$info = $dao->query($q);

if (!$info) {
    die("Error fetching data from database.");
}
?>
<?php include("nav1.php");	?>
	
	<div class="plans-section" id="rooms">
				 <div class="container">
<?php    
if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];

?>
</br>
 <div class="container">
  <h3 class="title-w3-agileits title-black-wthree text-center"><u>PRODUCT</u></h3></br>
  <div class="row">
    <?php
    $i = 0;
    foreach ($info as $shop) {
        $imagePath = BASE_URL . "uploads/product/" . $shop["pimage"];
        ?>
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= $imagePath ?>" class="card-img-top img-fluid" style="height: 250px; object-fit: cover;" alt="<?= $shop["pname"] ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $shop["pname"] ?></h5>
              <div class="mb-2">
                <?php for ($star = 0; $star < 4; $star++): ?>
                    <i class="fa fa-star text-warning"></i>
                <?php endfor; ?>
                <i class="fa fa-star-o text-warning"></i>
              </div>
<a href="additional.php?id=<?= $shop["pid"] ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart"></i> Add to Cart
</a>
            </div>
          </div>
        </div>
        <?php
        $i++;
    }
}
    ?>
  </div>
</div>

	
	
		<?php include("footer1.php");	?>
	
