<?php
require ('../Config.inc.php');
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$acao = $post['acao'];
unset($post['acao']);
$ob_memoria = new Cliente;

 switch ($acao) {
		case 'cadastrar':
    		// unset($post['deve_codi']);
    		$ob_memoria->ExeCreate($post); 
			if (!$ob_memoria->getResult()):
				$msg =  '<div class="alert alert-'.$ob_memoria->getError()[1].'" role="alert"> '.$ob_memoria->getError()[0].'</div>';
				$data = array('acao' => 'error', 'msg' => $msg);
				echo json_encode($data);
			else:
				$msg =  'Cadastro com sucesso.';
				$data = array('acao' => 'success', 'msg' => $msg,'dataResult'=>$ob_memoria->getResult());
				echo json_encode($data);
			endif;   		
    	break;

    	case 'editar':
			$ob_memoria->ExeUpdate($post['deve_codi'],$post);
			
			if (!$ob_memoria->getResult()):
				$msg =  '<div class="alert alert-'.$ob_memoria->getError()[1].'" role="alert"> '.$ob_memoria->getError()[0].'</div>';
				$data = array('acao' => 'error', 'msg' => $msg);
				echo json_encode($data);
			else:
				$msg =  'Cadastro com sucesso.';
				$data = array('acao' => 'success', 'msg' => $msg);
				echo json_encode($data);
			endif; 
    	break;
    	
		case 'deletar':
    		$ob_memoria->ExeDelete($post['id']);
    		if (!$ob_memoria->getResult()):
				$msg =  '<div class="alert alert-'.$ob_memoria->getError()[1].'" role="alert"> '.$ob_memoria->getError()[0].'</div>';
				$data = array('acao' => 'error', 'msg' => $msg);
				echo json_encode($data);
			else:
				$data = array('acao' => 'success', 'msg' => "Registro deletado com sucesso.");
				echo json_encode($data);
			endif; 
    	break;

    	default:
    		# code...
    		break;
    }   


      
?>