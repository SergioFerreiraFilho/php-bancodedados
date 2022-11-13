<?php
include("config.php");
$consulta = "SELECT * FROM store.alunos";
$resultado = $conexao -> query($consulta);
?>;
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div>
    <h1>Alunos</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Matricula</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($resultado as $aluno) {
                echo "<tr>
                <td>{$aluno['nome']}</td>
                <td>{$aluno['cidade']}</td>
                <td>{$aluno['matricula']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

</div>