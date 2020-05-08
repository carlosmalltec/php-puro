<?php

/**
 * Produto.class
 * Descricao
 * @copyright (c) year, Carlos Santos
 */
class Cliente
{

    private $Data;
    private $IdUpdate;
    private $Error;
    private $Result;

    const Entity = 'devedores';

    //Primeiro método create

    public function ExeCreate(array $Data)
    {
        $this->Data = $Data;
        //Verifica se existe campos vazios        
        if (empty($this->Data['deve_nome'])) {
            $this->Result = false;
            $this->Error = array("Campo <strong>Nome</strong> obrigatório", null);
        } else if (empty($this->Data['deve_fone'])) {
            $this->Result = false;
            $this->Error = array("Campo <strong>Telefone</strong> obrigatório", null);
        } else if (empty($this->Data['deve_venc'])) {
            $this->Result = false;
            $this->Error = array("Campo <strong>Data de vencimento</strong> obrigatório", null);
        } else if (empty($this->Data['deve_valo'])) {
            $this->Result = false;
            $this->Error = array("Campo <strong>Valor R$</strong> obrigatório", null);
        } else if ($this->Data['deve_valo'] < 1) {
            $this->Result = false;
            $this->Error = array("O valor precisa ser maior que 0 ", null);
        } else if (!empty($this->Data['deve_cpf']) && !empty($this->verificaCPF())) {
            $this->Result = false;
            $this->Error = array("<strong>CPF</strong> informado já em uso", null);
        } else if (!empty($this->Data['deve_cnpj']) && !empty($this->verificaCNPJ())) {
            $this->Result = false;
            $this->Error = array("<strong>CNPJ</strong> informado já em uso", null);
        }  else if (!empty($this->verificaNomeTelefoneEmail())) {
            $this->Result = false;
            $this->Error = array("<strong>ATENÇÂO</strong> dados repetidos", null);
        } else {
            //Prepara os dados
            $this->setData();
            //faz cadastro no banco
            $this->Create();
        }
    }

    public function ExeUpdate($IdUpdate, array $Data)
    {
        $this->Data = $Data;
        $this->IdUpdate = (int) $IdUpdate;
        //Verifica se existe campos vazios        
        if (in_array('', $this->Data)) :
            $this->Result = false;
            $this->Error = array("Para atualizar preencha todos os campos", WS_ALERT);
        else :
            //Prepara os dados
            $this->setData();

            //verifica se já foi cadastro com esse nome
            // $this->setName();

            //faz update no banco
            $this->Update();

        endif;
    }

    public function ExeDelete($id)
    {
        $this->IdUpdate = (int) $id;

        $read = new Read;
        $read->ExeRead(self::Entity, "WHERE deve_codi=:id", "id={$this->IdUpdate}");
        if (!$read->getResult()) :
            $this->Result = false;
            $this->Error = array("Informação não existe no banco de dados", WS_ALERT);
        else :
            $delete = new Delete;
            $delete->ExeDelete(self::Entity, "WHERE deve_codi=:id", "id={$this->IdUpdate}");
            $this->Result = true;
            $this->Error = array("Informação removida com sucesso", WS_ACCEPT);
        endif;
    }

    //Gets
    function getResult()
    {
        return $this->Result;
    }

    function getError()
    {
        return $this->Error;
    }

    private function setData()
    {
        //Limpa tudo que for HTML
        //pega cada índice e passa o strip_tags
        $this->Data = array_map('strip_tags', $this->Data);
        $this->Data = array_map('trim', $this->Data);
        // $this->Data['cli_codigo'] = substr(md5(uniqid()), 0, 9);
    }

    private function verificaCPF()
    {
        $readName = new Read;
        $readName->ExeRead(self::Entity, "where deve_cpf = :cpf", "cpf={$this->Data['deve_cpf']}");
        return $readName->getResult();
    }

    private function verificaCNPJ()
    {
        $readName = new Read;
        $readName->ExeRead(self::Entity, "where deve_cnpj = :cnpj", "cnpj={$this->Data['deve_cnpj']}");
        return $readName->getResult();
    }

    private function verificaNomeTelefoneEmail()
    {
        $readName = new Read;
        $readName->ExeRead(self::Entity, "where deve_nome = :nome and deve_fone = :fone and deve_mail = :mail", "nome={$this->Data['deve_nome']}&fone={$this->Data['deve_fone']}&mail={$this->Data['deve_mail']}");
        return $readName->getResult();
    }

    private function Create()
    {
        //obejeto
        $Cadastra = new Create;

        $Cadastra->ExeCreate(self::Entity, $this->Data);
        if ($Cadastra->getResult()) :
            //retorna o id        
            $this->Result = $Cadastra->getResult();
            //mensagem de erro
            $this->Error = array("Cliente foi {$this->Data['deve_nome']} cadastrado com sucesso", WS_ACCEPT);
        endif;
    }

    private function Update()
    {
        $Update = new Update;
        $Update->ExeUpdate(self::Entity, $this->Data, "WHERE deve_codi =:id", "id=" . $this->IdUpdate);
        if ($Update->getResult()) :
            $this->Result = true;
            $this->Error = array("Cliente foi {$this->Data['deve_nome']} atualizado com sucesso", WS_ACCEPT);
        endif;
    }
}
