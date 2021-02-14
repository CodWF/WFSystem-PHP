<?php
include "banco.php";

$id =  filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {
    $sql = "DELETE from  tb_usuarios WHERE usu_ID = '$id'";
    $dados = mysqli_query($conect, $sql);

    if (mysqli_affected_rows($conect)) {
        echo "<script>
                        window.alert('Usuario deletedo com sucesso..');
                        window.location
                        .href='teste.php'                
                   </script>";
    } else
        echo "<script>
    window.alert('Usuario nao excluido...') ;
    window.location
    .href='teste.php'                
</script>";
} else {
    echo "<script>
                        window.alert('Usuario nao encontrado...');
                        window.location
                        .href='teste.php'                
                   </script>";
}
