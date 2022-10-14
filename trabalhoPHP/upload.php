
<?php


$dir= $_POST['diretorio'];
if(is_dir($dir)){
    //nada
}else{
    mkdir($dir);
}

 
$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];
$noneFile = $_POST['nome'];
$parInfo = pathinfo("$nomeF");
$ext =$parInfo['extension'];
$extenções = array("jpeg","jpg","png");

if(in_array($ext,$extenções)){       
    
$ctr = move_uploaded_file($nomeTemp,$dir."/".$nomeF.".$ext");
}


 
 if($ctr){
    echo "Upload realizado!";
 }else{
     echo "Upload não realizado!";
 }
 
 echo "<a href=\"galeria.php\"> <button> Ir para galeria </button> </a> <br>";

 echo "<a href=\"delet.php\"> <button> Deletar  Imagem </button> </a>";


