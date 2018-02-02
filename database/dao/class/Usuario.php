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
      $row = $result[0];
      $this->setIdusuario($row["idusuario"]);
      $this->setDslogin($row["dslogin"]);
      $this->setDssenha($row["dssenha"]);
      $this->setDtcadastro(new DateTime($row["dtcadastro"]));
    }
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