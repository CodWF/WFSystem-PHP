<?php
                    include "banco.php";
                    $cadUsu = $_POST['cadUsu'];
                    $cadSenha = md5($_POST['cadSenha']);
                    //var_dump($cadUsu);
                    //var_dump($cadSenha);
                    $sql = "INSERT INTO `tb_usuarios` (`usu_ID`, `usu_Nome`, `usu_Senha`) VALUES 
                                      (NULL, '$cadUsu', '$cadSenha');";

                    if (mysqli_query($conect, $sql)) {
                        //echo "$nome Cadastrado com SUCESSO!!";
                        echo "<script>window.alert('CADASTRADO COM SUCESSO');
                                               window.location
                                              .href='teste.php'    
                                             </script>";
                    } else {
                        echo "<script>window.alert('ERRO')</script>";
                    }
