<?php 

 require('../config/autoload.php'); 
include("index.php");?>
 <h3 class="text-center"><u><b>ADDITIONAL ITEMS</b></u></h3>
 <?php
$file=new FileUpload();
$elements=array(
        "aname"=>"","aprice"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('aname'=>"Additional items Name",'aprice'=>"price");

$rules=array(
    "aname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
    "aprice"=>array("required"=>true,"minlength"=>1,"maxlength"=>4,"integeronly"=>true),
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{


$data=array(
    'aname'=>$_POST['aname'],
    'aprice'=>$_POST['aprice'],
   
);

  
    if($dao->insert($data,"additional"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:addadditional.php');
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
Additional Items Name:

<?= $form->textBox('aname',array('class'=>'form-control')); ?>
<?= $validator->error('aname'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Price:

<?= $form->textBox('aprice',array('class'=>'form-control')); ?>
<?= $validator->error('aprice'); ?>

</div>
</div>
</br>

<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


