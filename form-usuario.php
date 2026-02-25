<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <p>oiii</p>
    <hr>
    <h3><Table></Table>Todos os usuários</h3>
    <table border="1" cellpadding="8">
        <thead>
            <tbody>
                <?php
                    $existeUsuarios = !empty($usuarios);
                    if ($existeUsuarios) {

                        foreach($usuarios as $idx => $usuario){ 
                                $status = $usuario->status == 1 ? "Ativo" : "Inativo";
                            
                            ?>
                            <tr>
                                <th>
                                    <td><?= $usuario->id ?></td>
                                    <td><?= $usuario->nome ?></td>
                                    <td><?= $usuario->nomeUsuario ?></td>
                                    <td><?= $usuario->status ?></td>
                                    <td><?= $usuario->email ?></td>

                                </th>
                            </tr>
                        <?php }
                      }
                    ?>
            </thead>
        </tbody>
    </table>
</body>
</html>