<?php

$hieraquia = array 
(
	array
	(
		'nome_cargo' => 'CEO', 
        'subordinados' =>  
        array
        (
			//inicio : Diretor Comercial
			array
			( 'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>
					//inicio gerente de vendas
					 array
					(
						'nome_cargo'=> 'Gerente de Vendas' 
						//termino gerente de vendas
					)
			)
		),
			//terminor diretor comercial
			//inicio diretor financeiro
		array
		( 
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=> 
				array
				(
				//Inicio gerente de contas a pagar

					'nome_cargo' => 'Adiel',
					 'subordinados'=>
					array 
					(
					 //inicio de supervisor de pagamentos

					 	'nome_cargo' => 'supervisor de pagamentos'	
					)
					 //termino de supervisor de pagamentos
				),
					//termino de gerente de contas a pagar
					//inicio gerente de compras
				array
				(
					'nome_cargo' => 'gerente de compras',
					'subordinados' => 
					array
					(
						//inicio supervisor de suprimentos
						'nome_cargo'=>'supervisor de suprimentos'
					)
				)
				//termino gerente de compras
			

			//termino diretor financeiro
		)
	)
);

function exibe ($cargos)
{

	$html = '<ul>';

	foreach ($cargos as $cargo) 
	{
		
		$html .= "<li>";
		
		$html .= $cargo['nome_cargo'];

			if(isset($cargo['subordinados']) && $cargo['subordinados'] > 0)
			{

				$html .= exibe($cargo['subordinados']);
			}

		$html .= "</li>";

		
	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hieraquia);

?>