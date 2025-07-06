<?php 

 require('../config/autoload.php'); 
include("index.php");
?>
 <h3 class="text-center"><u><b>PRODUCT</b></u></h3>
<?php
$file=new FileUpload();
$elements=array(
        "pname"=>"","pcat"=>"","description"=>"","price"=>"","pimage"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('pname'=>"Product Name",'pcat'=>"Product Category","description"=>"Description","price"=>"Product price","pimage"=>"Product image");

$rules=array(
    "pname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
    "pcat"=>array("required"=>true),
    "description"=>array("required"=>true,"minlength"=>2,"maxlength"=>500),
    "price"=>array("required"=>true,"minlength"=>2,"maxlength"=>4,"integeronly"=>true),
    "pimage"=> array('filerequired'=>true)

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
    if($fileName=$file->doUploadRandom($_FILES['pimage'],array('.jpg','.png','.jpeg','.webp'),100000,5,'../uploads/product'))
		{
            echo "hai";
$data=array(

        'pname'=>$_POST['pname'],
        'pcat'=>$_POST['pcat'],
        'description'=>$_POST['description'],
        'price'=>$_POST['price'],
        'pimage'=>$fileName,
    );
  
    if($dao->insert($data,"product"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:addprod.php');
    }
      else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php


}
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data" >
 
<div class="row">
                    <div class="col-md-6">
Product Name:

<?= $form->textBox('pname',array('class'=>'form-control')); ?>
<?= $validator->error('pname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Category:

<?php
                    $options = $dao->createOptions('cname','cid',"category");
                    echo $form->dropDownList('pcat',array('class'=>'form-control'),$options); ?>
<?= $validator->error('pcat'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
Description:

<?= $form->textBox('description',array('class'=>'form-control')); ?>
<?= $validator->error('description'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Price:

<?= $form->textBox('price',array('class'=>'form-control')); ?>
<?= $validator->error('price'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
IMAGE:

<?= $form->fileField('pimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('pimage'); ?></span>

</div>
</div>
</br>

<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>


