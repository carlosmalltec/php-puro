<?php

/**
 * Produto.class
 * Descricao
 * @copyright (c) year, Carlos Santos
 */
class Cliente {

    private $Data;
    private $IdUpdate;    
    private $Error;
    private $Result;

    const Entity = 'devedores';

    //Primeiro método create

    public function ExeCreate(array $Data) {
        $this->Data = $Data;
        //Verifica se existe campos vazios        
        if (in_array('', $this->Data)):
            $this->Result = false;
            $this->Error = array("Para cadastrar preencha todos os campos", WS_ALERT);
        else:
            //Prepara os dados
            $this->setData();

            //verifica se já foi cadastro com esse nome
            $this->setName();
            
            //faz cadastro no banco
            $this->Create();

        endif;
    }
    
    public function ExeUpdate($IdUpdate, array $Data) {
        $this->Data = $Data;
        $this->IdUpdate = (int) $IdUpdate;
        //Verifica se existe campos vazios        
        if (in_array('', $this->Data)):
            $this->Result = false;
            $this->Error = array("Para atualizar preencha todos os campos", WS_ALERT);
        else:
            //Prepara os dados
            $this->setData();

            //verifica se já foi cadastro com esse nome
            $this->setName();
            
            //faz update no banco
            $this->Update();

        endif;
    }

    public function ExeDelete($id){
        $this->IdUpdate = (int) $id;

        $read = new Read;
        $read->ExeRead(self::Entity,"WHERE deve_codi=:id","id={$this->IdUpdate}");
        if(!$read->getResult()):
            $this->Result = false;
            $this->Error = array("Informação não existe no banco de dados", WS_ALERT);
        else:
            $delete = new Delete;
            $delete->ExeDelete(self::Entity,"WHERE deve_codi=:id","id={$this->IdUpdate}");
            $this->Result = true;
            $this->Error = array("Informação removida com sucesso", WS_ACCEPT);
        endif;

    }

    //Gets
    function getResult() {
        return $this->Result;
    }

    function getError() {
        return $this->Error;
    }

    private function setData() {
        //Limpa tudo que for HTML
        //pega cada índice e passa o strip_tags
        $this->Data = array_map('strip_tags', $this->Data);
        $this->Data = array_map('trim', $this->Data);       
        // $this->Data['cli_codigo'] = substr(md5(uniqid()), 0, 9);
    }

    private function setName() {
        //verifica se cnpj ou cpf do cliente foi cadastrado
        // vai servir para cadastrar e editar
        $Where = (!empty($this->IdUpdate) ? "deve_codi != {$this->IdUpdate} AND " : '');

        //Carregando objeto
        $readName = new Read;
        $readName->ExeRead(self::Entity, "where {$Where} deve_cpf =:cpf or deve_cnpj =:cnpj", "cpf={$this->Data['deve_cpf']}, cnpj={$this->Data['deve_cnpj']}");

        if ($readName->getResult()):
            $this->Result = false;
            $this->Error = array("CPF/CNPJ já em uso", WS_ALERT);
            //se houver resultado acrescenta uma informação a mais.
            // $this->Data['nome'] = $this->Data['nome'] . '-' . $readName->getRowCount();
        endif;
    }
    
    private function Create() {
        //obejeto
        $Cadastra = new Create;
        
        $Cadastra->ExeCreate(self::Entity,$this->Data);
        if($Cadastra->getResult()):
            //retorna o id        
            $this->Result = $Cadastra->getResult();
            //mensagem de erro
            $this->Error = array("Cliente foi {$this->Data['deve_nome']} cadastrado com sucesso", WS_ACCEPT);
        endif;
    }
    
    private function Update(){
        $Update = new Update;
        $Update->ExeUpdate(self::Entity,$this->Data,"WHERE deve_codi =:id","id=".$this->IdUpdate);
        if($Update->getResult()):
            $this->Result = true;           
            $this->Error = array("Cliente foi {$this->Data['deve_nome']} atualizado com sucesso", WS_ACCEPT);
        endif;
    }

}
