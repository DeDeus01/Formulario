<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
    $elements = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $elements['name'] = (isset($_POST['name'])) ? $_POST['name'] : 'Not found name';
        $elements['email'] = (isset($_POST['email'])) ? $_POST['email'] : 'Not found email';
        $elements['phone'] = (isset($_POST['phone'])) ? $_POST['phone'] : 'Not found phone';
        $elements['issue'] =  (isset($_POST['issue'])) ? $_POST['issue'] : 'Not found issue';
        $elements['message'] = (isset($_POST['message'])) ? $_POST['message'] : 'Not found message';
    }
?> 

<div class="resp-body">
    <div class="content">
        <div class="resp-header">
            <h2><strong>Informações Cadastradas</strong></h2>
        </div>
        <div class="resp-content">
            <div class="image-with-information-content">
                <div class="image-content">
                    <img src="img/icon.png"/>
                </div>
                <div class="info-content">
                    <table>
                        <tr>
                            <td><label><?php echo($elements['name'])?></label></td>
                        </tr>
                        <tr>
                            <td><label><?php echo($elements['email'])?></label></td>
                        </tr>
                        <tr>
                            <td><label><?php echo($elements['phone'])?></label></td>
                        </tr>
                        <tr>
                            <td><label><?php echo($elements['issue'])?></label></td>
                        </tr>  
                    </table>   
                </div>
            </div>
            <div class="message-content">
                <p><?php echo($elements['message'])?></p>
            </div>
        </div>
        <div class="button-content">
            <div id="resp-button">
                <a href="index.php?pg=contact.php">Voltar</a>
            </div>
        </div>  
    </div>
<div>