<form action="delet.php" method="post">
    <p> Escreva o comodo da pasta para ser deletado <input type="text" name="Deletar"></p>
    <?php
    $delet = $_POST['Deletar'];
    if(is_dir($delet)){
        $nova = scandir($delet);
        array_shift($nova);
        array_shift($nova);
        foreach($nova as $novaV){
            unlink("$delet/$novaV");
        }
        rmdir($delet);
    }
    ?>
    <button type="submit"> Deletar </button>
</form>