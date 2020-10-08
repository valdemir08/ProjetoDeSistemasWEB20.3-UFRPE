<?php include __DIR__."./../template/header.php"?>
<br>
<div >
<button class="greenbtn"><a class="remove" href="/filepriv?create">Enviar ficheiro</a></button><br><br>
<table>
    <thead>
    <tr>
        <td>Nome</td>
        <td>Autor</td>
        <td>&nbsp;</td>
        <td>ações</td>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($dados as $dado){?>

        <td><?php echo $dado->getName()?></td>
        <td><?php echo $dado->getAuthor()?></td>
        <td><?php echo $dado->getType()?></td>
        <td>
            <button ><a href="<?php if (isset($nomec)){
                echo __DIR__."./../../../public/files/".$nomec;
                }else{
                echo "/filepriv?download&id=".$dado->getId();
                }?>" download>Download</a></button>
            
            <!--tentando fazer o download do arquivo passando pelo else e depois o if-->


            <form action="/filepriv?delete&id=<?php echo $dado->getId()?>" method="POST">
                <button type="submit">Excluir</button>
                <input type="hidden" name="_method" value="DELETE">
            </form>
        </td>

    </tr>
    <?php }?>
    </tbody>
</table>
</div>