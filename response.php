<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
    $elements = [];

    $elements['name'] = 'User name';
    $elements['email'] = 'user@testing.com.br';
    $elements['phone'] = '(43) 87744-3234';
    $elements['issue'] = 'Description issue';
    $elements['message'] = 'ausdhasudhasudashduashduashdausdshduahdaushdsd';

    // if($_SERVER['REQUEST_METHOD'] === 'POST') {

    //     $elements['name'] = (isset($_POST['name'])) ? $_POST['name'] : 'Not found name';
    //     $elements['email'] = (isset($_POST['email'])) ? $_POST['email'] : 'Not found email';
    //     $elements['phone'] = (isset($_POST['phone'])) ? $_POST['phone'] : 'Not found phone';
    //     $elements['issue'] =  (isset($_POST['issue'])) ? $_POST['issue'] : 'Not found issue';
    //     $elements['message'] = (isset($_POST['message'])) ? $_POST['message'] : 'Not found message';
    // }
?>

<div class="response-content">
    <div class="response-header">
        <h2><strong>Informações Cadastradas</strong></h2>
    </div>
    <div class ="response-body">
        <table>
            <ul>
                <li>
                    <label><strong>Nome:</strong></label>
                    <p><?php  echo($elements['name']) ?></p>
                </li>
                <li>
                    <label><strong>Email:</strong></label>
                    <p><?php echo($elements['email']) ?></p>
                </li>
                <li>
                    <label><strong>Telefone:</strong></label>
                    <p><?php echo($elements['phone']) ?></p>
                </li>
                <li>
                    <label><strong>Assunto:</strong></label>
                    <p><?php echo($elements['issue']) ?></p>
                </li>
                <li>
                    <label><strong>Mensagem:</strong></label>
                    <p><?php echo($elements['message']) ?></p>
                </li>
            <ul>
        </table>
    </div>
    <div class="button-content">
        <button><a href="index.php?pg=contato.php">Voltar</a></button>
    </div>
<div>