<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('index.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                 <h3 class="text-center"><u><b>REPORT - PRODUCT</b></u></h3>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Pid</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
	            		<th>Image</th>
                        <th>EDIT/DELETE</th>
                      
                    </tr>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editstudentsimage.php','params'=>array('id'=>'pid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'editstudentsimage.php','params'=>array('id'=>'pid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('pid'),
'actions_td'=>false,
         'images'=>array(
                        'field'=>'pimage',
                        'path'=>'../uploads/product',
                        'attributes'=>array('style'=>'width:100px;'))
        
    );

   
   $join=array(
        'category as dt'=>array('dt.cid=s.pcat','join'),

	
    );  
$fields=array('pid','pname','dt.cname','description','price','pimage');

    
  
$sql = "SELECT s.pid, s.pname, dt.cname, s.description, s.price, s.pimage
        FROM product s
        JOIN category dt ON dt.cid = s.pcat";

$data = $dao->query($sql); // Or your raw query executor method

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>{$row['pid']}</td>";
    echo "<td>{$row['pname']}</td>";
    echo "<td>{$row['cname']}</td>";
    echo "<td>{$row['description']}</td>";
    echo "<td>{$row['price']}</td>";

    // ✅ Show image if available
    $imgPath = "../uploads/product/{$row['pimage']}";
    if (!empty($row['pimage']) && file_exists($imgPath)) {
        echo "<td><img src='{$imgPath}' style='width:100px;'></td>";
    } else {
        echo "<td>No Image</td>";
    }

    // ✅ Action buttons
    echo "<td>
            <a href='editstudentsimage.php?id={$row['pid']}' class='btn btn-success btn-sm'>Edit</a>
            <a href='editstudentsimage.php?id={$row['pid']}' class='btn btn-danger btn-sm'>Delete</a>
          </td>";
    echo "</tr>";
}
?>


                    
                    
                   
    
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
