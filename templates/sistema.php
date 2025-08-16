<?php 
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="../estilos/style-sistema.css">
    <link rel="stylesheet" href="../estilos/medias-sistema.css">
    <link rel="shortcut icon" href="../estilos/imagens/logo-tro.ico" type="image/x-icon">
</head>
<body>

    <header>
        <img src="../estilos/imagens/logo-tro.png" alt="Logo Curso">
        <h1>Controle de Acesso - Curso de Eletrônica</h1>
    </header>

    <main>
        <section id="historico">
            <h1>Histórico</h1>
            <iframe src="historico.html" id="mostra_Historico" frameborder="0"></iframe>
        </section>
        <section id="interacao_Porta">
            <div id="estado_Porta">
                <h1>Estado da Porta</h1>
                <div>
                    <img src="../estilos/imagens/porta-fechada.png" alt="porta-aberta">
                    <h2>FECHADO</h2>
                </div>
            </div>
        
            <div id="modo_Aula">
                <h1>Modo Aula</h1>

                <div class="inter-User">
                    <div class="estado">
                        <label for="modoToggle" class="label_Toggle">Desativado</label>
                        <label class="caixa-checkbox">
                            <input type="checkbox" id="modoToggle">
                            <span class="slider"></span>
                        </label>
                        
                    </div>
                    
                    <div class="entrada-motivo">
                        <label for="motivo">Motivo:</label>
                        <select name="motivos" id="motivo">
                            <option value="Aula no Laboratório"></option>
                            <option value="Aberto para práticas"></option>
                            <option value="Outro"></option>
                        </select>
                    </div>
                </div>
                
                <button onclick="window.location.href='ligaled.php?acao=on'">Ativar Modo Aula</button>
            </div>
        </section>
    </main>
    
</body>
</html>