<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <header>
        <a href="interessado.php">Voltar</a>
    </header>

    <div>
        <?php
            if ( isset($msg) ) echo $msg;
        ?>
    </div>

    <div>
        <form class="mx-auto" method="POST" action="editar_interessado.php">
            <div class="col-10 py-2">
                <span class="d-block pb-2">Nome</span>
                <input type="text" id="nome" name="nome" placeholder="Nome completo" size="40" value="<?php echo $interessado['nome'] ?>">
            </div>

            <div class="col-10 py-2">
                <span class="d-block pb-2">Telefone</span>
                <input type="text" id="telefone" name="telefone" placeholder="(DD) 1111-11111" size="40" value=" <?php echo $interessado['telefone'] ?>">
            </div>

            <div class="col-10 py-2">
                <span class="d-block pb-2">Email</span>
                <input type="text" id="email" name="email" placeholder="Usuario@email.com" size="40" value="<?php echo $interessado['email'] ?>">
            </div>

            <div class="col-10 py-2">
                <span class="d-block pb-2">Já estudou inglês?</span>
                <select id="estudouIngles" name="estudouIngles" value="<?php echo $interessado['estudouIngles'] ?>">
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>


            <div class="col-10 py-2">
                <span class="d-block pb-2">Nota do teste de nivel</span>
                <input type="text" id="nota" name="nota" placeholder=" 7" size="40" value="<?php echo $interessado['nota'] ?>">
            </div>

            <div class="col-10 py-2">
                <span class="d-block pb-2">Anexar arquivo (Teste de nivel)</span>
                <input type="file" id="imagemTeste" name="MAX_FILE_SIZE" value="4194304" size="40" value="<?php echo $interessado['MAX_FILE_SIZE'] ?>">
            </div>

            <div class="col-10 py-2">
                <span class="d-block pb-2">Mensagem</span>
                <input type="textarea" id="mensagem" name="mensagem" placeholder="Mande uma mensagem para nós"
                    size="65" value="<?php echo $interessado['mensagem'] ?>">
            </div>

            <div class="col-10 py-2">
                <span class="d-block pb-2">Data</span>
                <input type="text" id="data" name="data" placeholder="YYYY/MM/DD" size="40" value="<?php echo $interessado['data'] ?>">
            </div>

            <div class="col-11 d-flex justify-content-end pt-4">
                <input type="hidden" name="id" value="<?php echo $interessado['id'] ?>" >
            </div>
            
            <div class="col-11 d-flex justify-content-end pt-4">
                <input type="submit" value="Gravar">
            </div>

        </form>
    </div>
</body>

</html>