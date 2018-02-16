<?php

class Usuario {
  private $idusuario;
  private $dslogin;
  private $dssenha;
  private $dtcadastro;

  public function getIdusuario() {
      return $this->idusuario;
  }
  
  public function getDslogin() {
      return $this->dslogin;
  }
  
  public function getDssenha() {
      return $this->dssenha;
  }
  
  public function getDtcadastro() {
      return $this->dtcadastro;
  }
  
  public function setIdusuario($idusuario) {
      $this->idusuario = $idusuario;
  }
  
  public function setDslogin($dslogin) {
      $this->dslogin = $dslogin;
  }
  
  public function setDssenha($dssenha) {
      $this->dssenha = $dssenha;
  }
  
  public function setDtcadastro($dtcadastro) {
      $this->dtcadastro = $dtcadastro;
  }

  public function loadById($id) {
    $sql = new Sql();
    $result = $sql->select("select * from tb_usuarios where idusuario = :id",array(":id"=>$id));

    if (count($result) > 0) {
      $this->fillClass($result[0]);
    }
  }

  public static function getList() {
    $sql = new Sql();
    return $sql->select("select * from tb_usuarios order by dslogin");
  }

  public static function searchByLogin($login) {
    $sql = new Sql();
    return $sql->select("select * from tb_usuarios where dslogin like :dslogin order by dslogin", array(
        ":dslogin" => "%".$login."%"
    ));
  }
  
  public function login($login, $senha) {
    $sql = new Sql();
    $result = $sql->select("select * from tb_usuarios where dslogin = :login and dssenha = :senha",array(
        ":login"=>$login,
        ":senha"=>$senha
    ));
    
    if (count($result) > 0) {
      $this->fillClass($result[0]);
    } else {
      throw new Exception ("Login e/ou senha inválidos");
    }
  }

  public function fillClass($data) {
    $this->setIdusuario($data["idusuario"]);
    $this->setDslogin($data["dslogin"]);
    $this->setDssenha($data["dssenha"]);
    $this->setDtcadastro(new DateTime($data["dtcadastro"]));
  }
  
  public function insert() {
    $sql = new Sql();
    $result = $sql->select("CALL sp_usuarios_insert(:dslogin, :dssenha)",array(
        ":dslogin"=>$this->getDslogin(),
        ":dssenha"=>$this->getDssenha()
    ));
    
    if (count($result) > 0) {
      $this->fillClass($result[0]);
    }
  }

  public function update() {
    $sql = new Sql();
    $result = $sql->query("update tb_usuarios set dslogin = :dslogin, dssenha = :dssenha where idusuario = :id",array(
        ":dslogin"=>$this->getDslogin(),
        ":dssenha"=>$this->getDssenha(),
        ":id"=>$this->getIdusuario()
    ));
  }

  public function delete() {
    $sql = new Sql();
    $result = $sql->query("delete from tb_usuarios where idusuario = :id",array(
        ":id"=>$this->getIdusuario()
    ));
    
    $this->fillClass(array(
        "idusuario" => 0,
        "dslogin"   => "",
        "dssenha"   => "",
        "dtcadastro"=> ""
    ));
  }
  
  public function __construct($dslogin="", $dssenha="") {
    $this->setDslogin($dslogin);
    $this->setDssenha($dssenha);
  }
  
  public function __toString() {
    return json_encode(array(
        "idusuario" => $this->getIdusuario(),
        "dslogin" => $this->getDslogin(),
        "dssenha" => $this->getDssenha(),
        "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
    ));
  }
}