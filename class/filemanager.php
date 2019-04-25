<?php 

	class FileManager { // Classe para gerenciar arquivos

		public function criarPasta($nome) { // Função para criar pastas

		if (!is_dir($nome)) {

		mkdir($nome);

		echo "O diretório <strong>$nome</strong> foi criado com sucesso!";

		} 

		else {

			echo "O diretório <strong>$nome</strong> já existe! ";

			}

		}

		public function apagarPasta($nome) { // Função para apagar pastas

		if (is_dir($nome)) {

			rmdir($nome);

			echo "Diretório <strong>$nome</strong> apagado! ";
			
		}

		else {

				echo "Diretório <strong>$nome</strong> não existe!";	

			}

	}

	public function escanearPasta($nome) {

		if (is_dir($nome)) {

			$arquivos = scandir($nome);

			$dados = array();
			
			foreach ($arquivos as $arq) {

				if (!in_array($arq, array(".", ".."))) {
					
					$filename = $nome . DIRECTORY_SEPARATOR . $arq;

					$info = pathinfo($filename);

					array_push($dados, $info);

				}
				
			}

			return $dados;

		} else {

			echo "Diretório $nome não existe!";

		}

	}

	}

	

 ?>