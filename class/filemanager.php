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

	}

	

 ?>