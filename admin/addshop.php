<?php 

 require('../config/autoload.php'); 
include("index.php");
?>
 <h3 class="text-center"><u><b>ADD SHOP</b></u></h3>
 <?php
$file=new FileUpload();
$elements=array(
        "sname"=>"","address"=>"","gstin"=>"","gmail"=>"","simage"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('sname'=>"Shop Name","address"=>"Shop address","gstin"=>"Shop gstin","gmail"=>"Shop gmail","simage"=>"Shop Logo" );

$rules=array(
    "sname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),
    "address"=>array("required"=>true,"minlength"=>5,"maxlength"=>100),
    "gstin"=>array("required"=>true,"minlength"=>2,"maxlength"=>20),
    "gmail"=>array("required"=>true,"minlength"=>12,"maxlength"=>30, "email"=>true),
"simage"=> array('filerequired'=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	
if($fileName=$file->doUploadRandom($_FILES['simage'],array('.jpg','.png','.jpeg','.webp','.avif'),100000,5,'../uploads/shop'))
		{

$data=array(
    'sname'=>$_POST['sname'],
    'address'=>$_POST['address'],
    'gstin'=>$_POST['gstin'],
    'gmail'=>$_POST['gmail'],
    'password'=>$_POST['gmail'],
    'simage'=>$fileName,
);

  
    if($dao->insert($data,"shop"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:addshop.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
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
Shop Name:

<?= $form->textBox('sname',array('class'=>'form-control')); ?>
<?= $validator->error('sname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Shop Address:

<?= $form->textBox('address',array('class'=>'form-control')); ?>
<?= $validator->error('address'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
GSTIN:

<?= $form->textBox('gstin',array('class'=>'form-control')); ?>
<?= $validator->error('gstin'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Gmail:

<?= $form->textBox('gmail',array('class'=>'form-control')); ?>
<?= $validator->error('gmail'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Shop Logo:

<?= $form->fileField('simage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('simage'); ?></span>

</div>
</div>






<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


