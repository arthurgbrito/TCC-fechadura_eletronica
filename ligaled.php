<?php 

$ip_esp = '172.20.5.178';
$acao = $_GET['acao'] ?? 'off';

if ($acao === 'on'){
    file_get_contents("http://$ip_esp/led/on");
} else {
    file_get_contents("http://$ip_esp/led/off");
}

echo "Comando enviado: $acao";
  
?>