<?php
    require_once 'config.php';
    
    // Receber o ID do carro a ser excluído
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    // Verificar se o ID é válido
    if (!$id) {
        header('Location: aluguel_admin.php');
        exit;
    }
    
    // Preparar e executar a consulta SQL para excluir o carro com o ID especificado
    $sql = $conn->prepare('DELETE FROM tbcarros WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    // Redirecionar de volta para a página de administração de aluguel
    header('Location: aluguel_admin.php');
    exit;
?>
