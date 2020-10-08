<?php include __DIR__."./../template/header.php";
?>
<br>
<form action="/filepriv?update&id=<?php echo $dado->getId()?>" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="<?php echo $dado->getName()?>">
    <button> Alterar</button>
</form>