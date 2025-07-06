<?php 

 require('../config/autoload.php'); 
include("index.php");
?>
 <h3 class="text-center"><u><b>CATEGORY</b></u></h3>
<?php
$file=new FileUpload();
$elements=array(
        "cname"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('cname'=>"Category Name");

$rules=array(
    "cname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{


$data=array(
    'cname'=>$_POST['cname'],
   
);

  
    if($dao->insert($data,"category"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:addcat.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
<div class="row">
                    <div class="col-md-6">
Category:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>

</br>
<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


