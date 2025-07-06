<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('index.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                 <h3 class="text-center"><u><b>REPORT - SHOPS</b></u></h3>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>GSTIN</th>
                        <th>Gmail Id</th>
	            		<th>Image</th>
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
<?php
$records = $dao->getData('*', 'shop');

if (!empty($records)) {
    foreach ($records as $row) {
        echo "<tr>";
        echo "<td>{$row['sid']}</td>";
        echo "<td>{$row['sname']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['gstin']}</td>";
        echo "<td>{$row['gmail']}</td>";
        
        // ✅ Image display
        echo "<td><img src='../uploads/shop/{$row['simage']}' style='width:100px;'></td>";
        
        // Action buttons
        echo "<td>
                <a href='editstudentsimage.php?id={$row['sid']}' class='btn btn-success'>Edit</a>
                <a href='editstudentsimage.php?id={$row['sid']}' class='btn btn-danger'>Delete</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No records found</td></tr>";
}
?>

             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
