<?php

  $hierarquia = array(
    array(
      "nome_cargo" => 'CEO',
      'subordinados' => array(
        //INI Diretor comercial
        array(
          "nome_cargo" => 'Diretor comercial',
          'subordinados' => array(
            //INI Gerente de vendas
            array (
                "nome_cargo" => 'Gerente de vendas'
            )
            //FIM Gerente de vendas

          )
        ),
        //FIM Diretor comercial
        //INI Diretor financeiro
        array(
          'nome_cargo' => 'Diretor financeiro',
          'subordinados' => array (
            //INI Gerente de contas a pagar
            array(
              'nome_cargo' => 'Gerente de contas a pagar',
              'subordinados' => array (
                //INI Supervisor de contas a pagar
                array(
                  'nome_cargo' => 'Supervisor de contas a pagar'
                  )
                )
                //FIM Supervisor de contas a pagar
              )
            ),
            //FIM Gerente de contas a pagar

            //INI Gerente de compras
            array(
              'nome_cargo' => 'Gerente de compras',
              'subordinados' => array (
                //INI Supervisor de suprimentos
                array(
                  'nome_cargo' => 'Supervisor de suprimentos'
                  )
                )
                //FIM Supervisor de suprimentos
              )
            )
            //FIM Gerente de compras
          )
        //FIM Diretor financeiro
    )
  );

  function exibe($cargos) {
    $html = '<ul>';

    foreach ($cargos as $cargo) {
      $html .= '<li>';
      $html .= $cargo['nome_cargo'];

      if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
        $html .= exibe($cargo['subordinados']);
      }
      $html .= '</li>';
    }

    $html .= '</ul>';
    return $html;
  }

  echo exibe($hierarquia);

 ?>
