<?php
/*caminho da pasat do projeto*/
define('DIR_ROOT','/application/');
define('URL_ROOT','/application/index.php?exe=');

// CONFIGRAÇÕES DO SITE ####################
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBSA', 'base_devedores');

// AUTO LOAD DE CLASSES ####################
function __autoload($Class) {

    $cDir = array('conn','models','helpers');
    $iDir = null;

    foreach ($cDir as $dirName):
        if (!$iDir && file_exists(__DIR__ . "\\{$dirName}\\{$Class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.class.php")):
            include_once (__DIR__ . "\\{$dirName}\\{$Class}.class.php");
            $iDir = true;
        endif;
    endforeach;

    if (!$iDir):
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
        die;
    endif;
}

// TRATAMENTO DE ERROS #####################
//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'alert alert-success');
define('WS_INFO', 'alert alert-info');
define('WS_ALERT', 'alert alert-warning');
define('WS_ERROR', 'alert alert-danger');

//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $msg_padrao='';
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFO : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    $CssIcon = ($CssClass == WS_INFO ? 'icon fa fa-info' : ($CssClass == WS_ALERT ? 'icon fa fa-warning' : ($CssClass == WS_ERROR ? 'icon fa fa-ban' : 'icon fa fa-check')));
    //echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";
    $msg_padrao .= "<div class=\"$CssClass alert-dismissible\">";
    $msg_padrao .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
    $msg_padrao .= "<h4><i class=\"{$CssIcon}\"></i> Alerta!</h4>";
    $msg_padrao .= "{$ErrMsg}";
    $msg_padrao .= "</div>";
    echo $msg_padrao;

    if ($ErrDie):
        die;
    endif;
}


//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFO : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');
