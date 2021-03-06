<?php
$titulo = 'Cadastro';
require 'header.php';
	
require 'nav.php';


?>


<main>
<h1>Ficha de inscrição de cursos</h1>
<form name="cliente" method="POST" action="inserir">

	<fieldset>
		<legend>Dados do Participante</legend>

		<p>
			<label>Nome Completo (como no passaporte): <input type="text"
				size="35" name="nome">
			</label>
		</p>

		<p>
			<label>Endereço: <input type="text" size="50" name="endereco">
			</label>
		</p>

		<p>
			<label>Complemento: <input type="text" size="30" name="complemento">
			</label>
		</p>

		<p>
			<label>Bairro: <input type="text" size="30" name="bairro">
			</label>
		</p>

		<p>
			<label>Cidade: <input type="text" size="25" name="cidade">
			</label>
		</p>

		<p>
			<label>Estado: <input type="text" size="25" name="estado">
			</label>
		</p>

		<p>
			<label>CEP: <input type="text" size="25" name="cep">
			</label>
		</p>

		<p>
			<label>Telefones: <span>Residencial:</span> <input type="tel"
				name="residencial"> <span> Celular:</span> <input type="tel"
				name="celular"> <span> Comercial:</span> <input type="tel"
				name="comercial">
			</label>
		</p>

		<p>
			<label>Data de Nascimento: <input type="date" size="25"
				name="nascimento">
			</label>
		</p>

		<p>
			<label>Nacionalidade: <input type="text" size="25"
				name="nacionalidade">
			</label>
		</p>

		<p>
			<label>RG: <input type="text" size="25" name="rg">
			</label>
		</p>

		<p>
			<label>CPF: <input type="text" size="25" name="cpf">
			</label>
		</p>

		<p>
			<label>Passaporte: <input type="text" size="25" name="passaporte">
			</label>
		</p>

		<p>
			<label>Valido até: <input type="date" size="25" name="validade">
			</label>
		</p>

		<p>
			<label>Profissão: <input type="text" size="25" name="profissao">
			</label>
		</p>

		<p>
			<label>E-mail: <input type="email" size="25" name="email">
			</label>
		</p>

		<p>
			<label>Nome completo da mãe: <input type="text" size="25"
				name="mae">
			</label>
		</p>

		<p>
			<label>Telefones: <span>Cel:</span> <input type="tel" size="25"
				name="celmae"> <span>Comercial:</span><input type="text"
				name="commae">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailmae"></label>
		</p>

		<p>
			<label>Nome completo do pai: <input type="text" size="25"
				name="pai">
			</label>
		</p>

		<p>
			<label>Telefones: <span>Cel:</span> <input type="text" size="25"
				name="celpai"> <span>Comercial:</span><input type="text"
				name="compai">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailpai"></label>
		</p>

		<p>
			<label>Contato em caso de emergência:<input type="text"
				name="emergencia" size="50"></label>
		</p>

		<p>
			<label>Telefones: <span>Cel:</span> <input type="tel" size="25"
				name="celemergencia"> <span>Comercial:</span><input type="tel"
				name="comemergencia">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailemergencia"></label>
		</p>

		<p>
			<label>Nivel de conhecimento: <input type="radio" name="conhecimento"
				value="ini"> <span> Iniciante </span> <input type="radio"
				name="conhecimento" value="bas"> <span> Basico</span> <input
				type="radio" name="conhecimento" value="int"> <span>
					Intermediário</span> <input type="radio" name="conhecimento"
				value="ava"> <span> Avançado</span>
			</label>
		</p>

		<p>
			<label>Fumante: <input type="radio" name="fumante" value="1"> <span>
					Sim</span> <input type="radio" name="fumante" value="0"> <span>
					Não</span>
			</label>
		</p>

		<p>
			<label>Vegetariano: <input type="radio" name="vegetariano"
				value="1"> <span> Sim</span> <input type="radio"
				name="vegetariano" value="0"> <span> Não</span>
			</label>
		</p>

		<p>
			<label>Alergias?: <input type="radio" name="alergico" value="1"> <span>
					Sim</span> <input type="radio" name="alergico" value="0"> <span>
					Não</span>
			</label>
		</p>

		<p>
			<label for="">Caso seja alérgico, indique quais alergias possui:<input
				type="text" name="alergias"></label>
		</p>

		<p>
			<label for="">OBS: <textarea name="obs"></textarea>
			</label>
		</p>

	</fieldset>

	<fieldset>
		<legend>Dados do Pagante (caso seja diferente do participante)</legend>

		<p>
			<label>Nome completo:<input type="text" name="nomepagante"></label>
		</p>

		<p>
			<label>Endereço:<input type="text" name="enderecopagante"></label>
		</p>

		<p>
			<label>Complemento:<input type="text" name="complementopagante"></label>
		</p>

		<p>
			<label>Bairro:<input type="text" name="bairropagante"></label>
		</p>

		<p>
			<label>Cidade:<input type="text" name="cidadepagante"></label>
		</p>

		<p>
			<label>Estado:<input type="text" name="estadopagante"></label>
		</p>

		<p>
			<label>CEP:<input type="text" name="ceppagante"></label>
		</p>

		<p>
			<label>Telefones: <span>Residencial</span> <input type="tel"
				name="respagante"> <span> Celular:</span> <input type="tel"
				name="celpagante"> <span> Comercial:</span> <input type="tel"
				name="compagante">
			</label>
		</p>

		<p>
			<label>E-mail:<input type="email" name="emailpagante"></label>
		</p>

		<p>
			<label>CPF:<input type="text" name="cpfpagante"></label>
		</p>

	</fieldset>

	<fieldset>
		<legend>Dados do Curso</legend>

		<p>
			<label>Nome da escola/Agente:<input type="text" name="escolaagente"></label>
		</p>

		<p>
			<label>País: <input type="text" name="pais"></label>
		</p>

		<p>
			<label>Cidade: <input type="text" name="cidadeescola"></label>
		</p>

		<p>
			<label>Tipo de curso <input type="text" name="tipocurso"></label>
		</p>

		<p>
			<label>Data de Inicio: <input type="date" name="datainicio"></label>
		</p>

		<p>
			<label>Data de Termino: <input type="date" name="datatermino"></label>
		</p>

		<p>
			<label>Duração: <input type="text" name="duracao"></label>
		</p>

		<p>
			<label>Material didático: <input type="radio" name="materialdidatico"
				value="incluso"> <span>Incluso</span> <input type="radio"
				name="materialdidatico" value="naoincluso"> <span>Não Incluso</span>
			</label>
		</p>



	</fieldset>

	<input type="submit" name="submit" value="Enviar">

</form>

</main>

<?php
require_once 'footer.php';
?>

			