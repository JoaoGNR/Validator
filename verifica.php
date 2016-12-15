<?php

	require 'vendor/autoload.php'; //Carregamento das classes necessárias

	use Symfony\Component\Validator\Validation;
	use Symfony\Component\Validator\Constraints\Length;

		if($_POST){
			
			$verifica = $_POST['verifica']; //Acessando o resultado do formulário
			
			if(isset($verifica)){
			
				$valida = Validation::createValidator(); //Instanciando um objeto Validator

				$palavra = $valida->validate('$verifica', array(
				    new Length(array('min' => 10)), //Determinando o padrão de validação
				));

				if (count($palavra) !== 0) { //Caso a palavra não fuja do padrão
				    foreach ($palavra as $resultado) {
				        echo "Palavra com menos de 10 letras";
				    }
				} else { //Caso não fuja
						echo "Palavra com mais do que 10 letras";
				}
			
			}
		
		}
	?>