<?
/***
ATIVE A OPÇÃO "SHORT OPEN TAG" EM SEU PHP PARA QUE O ARQUIVO FUNCIONE NORMALMENTE.

O PHP fica embutido no proprio HTML e é reconhecido pelas tags
<?php comandos; ?>
<? comandos; ?>
<% comandos; %>
<script language="php">
comandos;
</script>

Os comentarios no PHP podem ser feitos utilizando
Dual Slash (//)
Slash Hash (/#)
Slash Star (/*)


***/


// Para imprimir qualquer conteudo no navegador utilizando o PHP usa-se echo ou print.
$a=10;
$b=20;
$mais=$a+$b;
$menos=$b-$a;

echo $mais;
echo "</br>";
print $menos;
echo "</br>";

/***

Toda variável em PHP tem seu nome composto pelo caracter $(dólar) e uma string, que deve iniciar por uma letra ou o caracter “_”. O PHP é case sensitive, ou seja, as variáveis $vivas e $VIVAS são diferentes.
Por isso é preciso ter muito cuidado ao definir os nomes das variáveis. É bom evitar os nomes em maiúsculas, pois como veremos mais adiante, o PHP já possui algumas variáveis pré-definidas cujos nomes são formados por letras maiúsculas.

Exemplo de variáveis:

$teste = nome correto de variável
teste= nome errado de variável.
_teste= nome correto de variável 

Obs.: Normalmente, a variável é criada utilizando-se, na maioria das vezes, o caracter $ (dólar).

Tipos Suportados
O PHP suporta os seguintes tipos de dados:

Inteiro
Ponto flutuante
String
Array
Objeto 
O PHP utiliza checagem de tipos dinâmica, ou seja, uma variável pode conter valores de diferentes tipos em diferentes momentos da execução do script. Por este motivo não é necessário declarar o tipo de uma variável para usá-la. O interpretador PHP decidirá qual o tipo daquela variável, verificando o conteúdo em tempo de execução. Ainda assim, é permitido converter os valores de um tipo para outro desejado, utilizando o typecasting ou a função settype (ver adiante).

Inteiros (integer ou long)

Uma variável pode conter um valor inteiro com atribuições que sigam as seguintes sintaxes:

$vivas = 1234; # inteiro positivo na base decimal
$vivas = -234; # inteiro negativo na base decimal
$vivas = 0234; # inteiro na base octal-simbolizado pelo 0 equivale a 156 decimal
$vivas = 0x34; # inteiro na base hexadecimal(simbolizado pelo 0x) – equivale a 52 decimal. 
A diferença entre inteiros simples e long está no número de bytes utilizados para armazenar a variável. Como a escolha é feita pelo interpretador PHP de maneira transparente para o usuário, podemos afirmar que os tipos são iguais.

Ponto Flutuante (double ou float)

Uma variável pode ter um valor em ponto flutuante com atribuições que sigam as seguintes sintaxes:

$vivas = 1.234;
$vivas = 23e4; # equivale a 230.000 
Strings

Strings podem ser atribuídas de duas maneiras:

a) utilizando aspas simples ( ' ) – Desta maneira, o valor da variável será exatamente o texto contido entre as aspas (com exceção de e ' – ver exemplo abaixo)

b) utilizando aspas duplas ( " ) – Desta maneira, qualquer variável ou caracter de escape será expandido antes de ser atribuído.

Exemplo:


***/
$teste="Mauricio";
$vivas="---$teste---\n";
echo $vivas;
echo "</br>";

/***
Abaixo está a lista dos caracteres de saida.
\n		Nova Linha
\r		Retorno do Carro (semelhante ao \n)
\t		Tabulação Horizontal
\\		A propria barra (SLASH)
\$		O simbolo $(CASH)
\'		Aspa simples
\"		Aspa dupla

Arrays
Arrays em PHP podem ser observados como mapeamentos ou como vetores indexados. Mais precisamente, um valor do tipo array é um dicionário onde os índices são as chaves de acesso. Vale ressaltar que os índices podem ser valores de qualquer tipo e não somente inteiros. Inclusive, se os índices forem todos inteiros, estes não precisam formar um intervalo contínuo Como a checagem de tipos em PHP é dinâmica, valores de tipos diferentes podem ser usados como índices de array, assim como os valores mapeados também podem ser de diversos tipos.

Exemplo:

//	$cor[0]="amarelo";
//	$cor[1]="vermelho";
//	$cor[2]="verde";
//	$cor[3]="azul";
//	$cor[4]="anil";
//	$cor["teste"]=1;
De forma equivalente se pode escrever
$cor=array(0=>"amarelo",1=>"vermelho",2=>"verde",3=>"azul",4=>"anil",teste=>1);
Listas
As listas são utilizadas em PHP para realizar atribuições múltiplas.

Através de listas é possível atribuir valores que estão num array para variáveis. Vejamos o exemplo:

Exemplo:
list($a, $b, $c) = array("a", "b", "c");
O comando acima atribui valores às três variáveis simultaneamente. É bom notar que só são atribuídos às variáveis da lista os elementos do array que possuem índices inteiros e não negativos. No exemplo acima as três atribuições foram bem sucedidas porque ao inicializar um array sem especificar os índices eles passam a ser inteiros, a partir do zero.
Um fator importante é que cada variável da lista possui um índice inteiro e ordinal, iniciando com zero, que serve para determinar qual valor será atribuído. No exemplo anterior temos $a com índice 0, $b com índice 1 e $c com índice 2.
Vejamos um outro exemplo:
***/
$arr=array(1=>"um",3=>"tres",a=>"letraA",2=>"dois");
list($a,$b,$c,$d)=$arr;
echo $a;
echo "</br>";
echo $b;
echo "</br>";
echo $c;
echo "</br>";
echo $d;
echo "</br>";
/***
Após a execução teremos algo como $a == null (vazio,não aparece nada), $b == "um" , $c == "dois" , $d == "tres"
Devemos observar que à variável $a não foi atribuído valor, pois no array não existe elemento com índice 0 (zero).
Outro detalhe importante é que o valor “tres” foi atribuído à variável $d, e não a $b, pois seu índice é 3, o mesmo que $d na lista. Por fim, vemos que o valor “letraA” não foi atribuído a elemento algum da lista pois seu índice não é inteiro.
Os índices da lista servem apenas como referência ao interpretador PHP para realizar as atribuições, não podendo ser acessados de maneira alguma pelo programador.
De maneira diferente do array, uma lista não pode ser atribuída a uma variável, servindo apenas para fazer múltiplas atribuições através de um array.

Booleanos
O PHP não possui um tipo booleano, mas é capaz de avaliar expressões e retornar true ou false, através do tipo integer: é usado o valor 0 (zero) para representar o estado false, e qualquer valor diferente de zero (geralmente 1) para representar o estado true.
Transformação De Tipos
A transformação de tipos em PHP pode ser feita das seguintes maneiras:

A) Coerções
Quando ocorrem determinadas operações (“+”, por exemplo) entre dois valores de tipos diferentes, o PHP converte o valor de um deles automaticamente (coerção). É interessante notar que se o operando for uma variável, seu valor não será alterado.
O tipo para o qual os valores dos operandos serão convertidos é determinado da seguinte forma: Se um dos operandos for float, o outro será convertido para float, senão, se um deles for integer, o outro será convertido para integer.

Exemplo:
***/

$vivaz="1";			//$vivaz é a string "1"
$vivaz=$vivaz+1;	//$vivaz é o integer 2
$vivaz=$vivaz+3.7;	//vivaz é o double 5.7

echo "O valor de <b>\$vivaz</b> é <b>$vivaz</b></br>";

/***
Como podemos notar, o PHP converte string para integer ou double mantendo o valor. O sistema utilizado pelo PHP para converter de strings para números é o seguinte:

É analisado o início da string. Se contiver um número, ele será avaliado. Senão, o valor será 0 (zero);
O número pode conter um sinal no início (“+” ou “-“);
Se a string contiver um ponto em sua parte numérica a ser analisada, ele será considerado, e o valor obtido será double;
Se a string contiver um “e” ou “E” em sua parte numérica a ser analisada, o valor seguinte será considerado como expoente da base 10, e o valor obtido será double;
Exemplos:
***/

$Vivaz=1+"10.5";		// $Vivaz == 11.5
$Vivaz=1+"-1.3e3";		// $Vivaz == -1299
$Vivaz=1+"teste10.5";	// $Vivaz == 1
$Vivaz=1+"10testes";	// $Vivaz == 11
$Vivaz=1+"+ 10testes";	// $Vivaz == 1

echo "O valor \$Vivaz é <b>$Vivaz</b></br>";

/***

B) Transformação Explícita De Tipos
A sintaxe do typecast de PHP é semelhante ao C: basta escrever o tipo entre parênteses antes do valor.
Exemplo:
***/

$vIvaz=15;				// $vIvaz= é integer (15)
$vIvaz=(double)$vIvaz;	// $vIvaz= é double (15.0)
$vIvaz=3.9;				// $vIvaz= é double (3.9)
$vIvaz=(int)$vIvaz;		// $vIvaz= é integer (3)
						// O valor decimal é truncado
						
echo "O valor de \$vIvaz é <b>$vIvaz</b></br>";
/***
Os tipos permitidos na Transformação explícita são:
(int),(integer) ------------- = muda para integer;
(real),(double),(float) ----- = muda para float;
(string) -------------------- = muda para string;
(array) --------------------- = muda para array;
(object) -------------------- = muda para object;

Com A Função Settype
A função settype converte uma variável para o tipo especificado, que pode ser “integer”, “double”, “string”, “array” ou “object”.

Sintaxe:
Settype(nomedavariável,novo tipo da variávbel)

Exemplo:
***/
$viVaz=15;					// $viVaz é integer
settype($viVaz,double);		// $viVaz é double
$viVaz=15;					// $viVaz é integer
settype($viVaz,string);		// $viVaz é string

echo "O valor de \$viVaz é <b>$viVaz</b></br>";

/***
4 - Operadores
Operadores Aritméticos
Só podem ser utilizados quando os operandos são números (integer ou float). Se forem de outro tipo, terão seus valores convertidos antes da realização da operação.
São eles:
+	adição
-	subtração
*	multiplicação
/	divisão
%	módulo

Operadores De Strings
Só há um operador exclusivo para strings:

.	Concatenação

Exemplo:
***/

$concatenacao1="Black";
$concatenacao2="Orchid";
echo "Seu nome é <b>".$concatenacao1."</b> e seu sobrenome é <b>".$concatenacao2."</b>.</br>";

/***
A saída do script acima será: Seu nome é Black e seu sobrenome é Orchid.

Operadores De Atribuição
Existe um operador básico de atribuição e diversos derivados. Sempre retornam o valor atribuído.
No caso dos operadores derivados de atribuição, a operação é feita entre os dois operandos, sendo atribuído o resultado para o primeiro.
A atribuição é sempre por valor, e não por referência.

=		Atribuição Simples
+=		Atribuição com Adição
-=		Atribuição com subtração
*=		Atribuição com multiplicação
/=		Atribuição com divisão
%=		Atribuição com módulo
.=		Atribuição com concatenação

Exemplo:
$a = 7;
$a +=2;	//	 $A passa a conter o valor 9

Operadores Bit A Bit
Comparam dois números bit a bit.

&		"e" lógico
|		"ou" lógico
^		ou exclusivo
~		não (inversão)
<<		shift left
>>		shift right

Operadores Lógicos
Utilizados para inteiros representando valores booleanos

and		"e" lógico
or		"ou" lógico
xor		ou exclusivo
!		não (inversão)
&&		"e" lógico
||		"ou" lógico

Existem dois operadores para “e” e para “ou” porque eles têm diferentes posições na ordem de precedência.

Operadores De Comparação
As comparações são feitas entre os valores contidos nas variáveis, e não as referências. Sempre retornam um valor booleano.

==		igual a
!=		diferente de
<		menor que
>		maior que
<=		menor ou igual a
>=		maior ou igual a

Operadores De Expressão Condicional
Existe um operador de seleção que é ternário. Funciona assim:

(expressao1)?(expressao2):(expressao3)

O interpretador PHP avalia a primeira expressão. Se ela for verdadeira, a expressão retorna o valor de expressão2. Senão, retorna o valor de expressão3.

Operadores De Incremento E Decremento
++ incremento
-- decremento 
Podem ser utilizados de duas formas: antes ou depois da variável. Quando utilizado antes, retorna o valor da variável antes de incrementá-la ou decrementá-la.

Quando utilizado depois, retorna o valor da variável já incrementado ou decrementado.

Exemplos:
$a = $b = 10;	// $a e $b recebem o valor 10
$c = $a++;		// $c recebe 10 e $a passa a ter 11
$d = ++$b;		// $d recebe 11,valor de $b já incrementado

Estruturas De Controle
As estruturas que veremos a seguir são comuns para as linguagens de programação imperativas, bastando, portanto, descrever a sintaxe de cada uma delas, resumindo o funcionamento.

Blocos
Um bloco consiste de vários comandos agrupados com o objetivo de relacioná-los com determinado comando ou função. Em comandos como if, for, while, switch e em declarações de funções blocos podem ser utilizados para permitir que um comando faça parte do contexto desejado. Blocos em PHP são delimitados pelos caracteres “{” e “}”. A utilização dos delimitadores de bloco em uma parte qualquer do código não relacionada com os comandos citados ou funções não produzirá efeito algum, e será tratada normalmente pelo interpretador.

Exemplo:
if ($x == $y)
	comando1;
	comando2;

Para que comando2 esteja relacionado ao if é preciso utilizar um bloco:

if ($x == $y){
	comando1;
	comando2;
}

Estrutura If / Else / Elseif
O mais trivial dos comandos condicionais é o if. Ele testa a condição e executa o comando indicado se o resultado for true (valor diferente de zero). Ele possui duas sintaxes:

Sintaxes:

<? if (expressão)
	comando;
?>

ou

<?
if (expressão){
	comando;
	...
	...
	...
	comando;
}
?>

Para incluir mais de um comando no if da primeira sintaxe, é preciso utilizar um bloco, demarcado por chaves.

Exemplo 1:


if ($a>$b)

echo "O valor de \$a é: ".$a+$b.".</br>";

Exemplo 2:

***/
if($b>=$a){
	$media=($b+$a)/2;
	echo "O valor de \$a é: ".$a."</br>";
	echo "O valor de \$b é: ".$b."</br>";
	echo "O valor da média é: ".$media."</br>";
};
/***

Else
O else é um complemento opcional para o if. Se utilizado, o comando será executado se a expressão retornar o valor
false (zero). Suas duas sintaxes são:

if(expressão)
	comando;
else
	comando;

ou

if(expressao){
	comando1;
	comando n;
}
	else {
		comando 2;
		comando m;
	}
	
Exemplos:
if($a+$b){
	$maior=$a;
} else {
	$maior=$b;
};

O exemplo acima coloca em $maior o maior valor entre $a e $b.

Em determinadas situações é necessário fazer mais de um teste, e executar condicionalmente diversos comandos ou blocos de comandos.
Para facilitar o entendimento de uma estrutura do tipo:

if(expressao1)
	comando1;
else
	if(expressao2)
		comando2;
	else
		if(expressao3)
			comando3;
		else
			comando4;

foi criado o comando, também opcional elseif. Ele tem a mesma função de um else e um if usados sequêncialmente, como no exemplo acima. Num mesmo if podem ser utilizados diversos elseif´s, ficando essa utilização a critério do programador, que deve zelar pela legibilidade de seu script.

Elseif
O comando elseif também pode ser utilizado com dois tipos de sintaxe.
Em resumo, a sintaxe geral do comando if fica das seguintes maneiras:

Sintaxes:

if(expressao1)
	comando;
elseif(expressao2)
	comando;
	else
	comando;

ou

if(expressao1){
	comando1; 
	}elseif(expressão2){
		comando2;
		}else{
			comando3
			}

Exemplo:
***/
$nota1=6;
$nota2=8;
$media=($nota1+$nota2)/2;

if($media>7){
	echo "Média ".$media."</br>";
	echo "Aluno Aprovado";
} elseif($media<7){
	echo "Média ".$media."</br>";
	echo "Aluno Reprovado";
} else {
	echo "Média ".$media."</br>";
	echo "Aluno em recuperação</br>";
}

/***
Estrutura Switch Case
O comando switch atua de maneira semelhante a uma série de comandos if na mesma expressão. Freqüentemente o programador pode querer comparar uma variável com diversos valores, e executar um código diferente a depender de qual valor é igual ao da variável.
Quando isso for necessário, deve-se usar o comando switch.

Sintaxe:

switch($valor){
	case "____";
	comando;
	comando;
	break;
	case "____";
	comando;
	comando;
	break;
	case "____";
	comando;
	comando;
	break;
	case "____";
	comando;
	comando;
	break;
	default;
	comando;
	comando;
	break;

O exemplo seguinte mostra dois trechos de código que fazem a mesma coisa,
sendo que o primeiro utiliza uma série de if’s e o segundo utiliza switch:

Exemplos 1: Estrutura IF

if($i==0)
	print "i é igual a zero";
elseif($i==1)
	print "i é igual a um";
elseif($i==2)
	print "i é igual a dois";
	
Exemplo 2: Estrutura SWITCH
	
	switch($i){
		case 0:
			print "i é igual a zero";
			break;
		case 1:
			print "i é igual a um";
			break;
		case 2:
			print "i é igual a dois";
			break;
	}

É importante compreender o funcionamento do switch para não cometer enganos.
O comando switch testa linha a linha os cases encontrados, e a partir do momento que encontra um valor igual ao da variável testada,
passa a executar todos os comandos seguintes, mesmo os que fazem parte de outro teste, até o fim do bloco.
Por isso usa-se o comando break, quebrando o fluxo e fazendo com que o código seja executado da maneira desejada.
Veremos mais sobre o break mais adiante.

switch($i){
	case 0:
		print "i é igual a zero";
	case 1:
		print "i é igual a um";
	case 2:
		print "i é igual a dois";
}

No exemplo acima, se $i for igual a zero, os três comandos “print” serão executados.
Se $i for igual a 1, os dois últimos “print” serão executados.
O comando só funcionará da maneira desejada se $i for igual a 2.
Em outras linguagens que implementam o comando switch, ou similar, os valores a serem testados só podem ser do tipo inteiro.
Em PHP é permitido usar valores do tipo string como elementos de teste do comando switch.
O exemplo abaixo funciona perfeitamente:

Exemplo:

switch($s){
	case "casa":
		print "A casa é amarela";
	case "arvore":
		print "A árvore é bonita";
}

Estruturas De Repetição
As estruturas de repetição são utilizadas quando o programador precisa, por exemplo, repetir o mesmo comando várias vezes. Vamos ver as estruturas de repetição existentes.

While
O while é o comando de repetição (laço) mais simples. Ele testa uma condição e executa um comando, ou um bloco de comandos, até que a condição testada seja falsa.
Assim como o if, o while também possui duas sintaxes alternativas:

Sintaxe:

while(condição)
	comando;

ou

while(condição){
	comandos;
	comandos;
}

Exemplo:
***/
$while=0;
while($while<=10){
	echo $while."</br>";
	$while++;
};

/***

A expressão só é testada a cada vez que o bloco de instruções termina, além do teste inicial.
Se o valor da expressão passar a ser false no meio do bloco de instruções, a execução segue até o final do bloco.
Se no teste inicial a condição for avaliada como false, o bloco de comandos não será executado.

O exemplo a seguir mostra o uso do while para imprimir os números de 1 a 10:
$i = 1;
while ($i <=10) 
print $i++;
print "<br>";

Do ... While
O laço do..while funciona de maneira bastante semelhante ao while, com a simples diferença que a expressão é
testada ao final do bloco de comandos.

Sintaxe
do {
	comando
	...
	comando
}
while(<condição>);

Exemplo:
***/
do {
	echo $a++;
	echo "</br>";
}
while($a<=10);
/***
For
O tipo de laço mais complexo é o for. Para os que programam em C, C++ ou Java, a assimilação do funcionamento do for é natural.
Mas para aqueles que estão acostumados a linguagens como Pascal, há uma grande mudança para o uso do for.

Sintaxe:

for(<inicializacao>;<condição>;<incremento>){
	<comando>;
	...
	<comando>;
}

As três expressões que ficam entre parênteses têm as seguintes finalidades:

• Inicialização: comando ou sequência de comandos a serem realizados antes do inicio do laço. Serve para inicializar variáveis.

• Condição: Expressão booleana que define se os comandos que estão dentro do laço serão executados ou não. Enquanto a expressão for verdadeira (valor diferente de zero) os comandos serão executados.

• Incremento: Comando executado ao final de cada execução do laço. 

Um comando for funciona de maneira semelhante a um while escrito da seguinte forma:

<inicializacao>
while(<condicao>){
	comandos
	...
	<incremento>
}

Exemplo:
***/
for($A=0;$A<10;$A++){
	echo "O valor de \$A é: ".$A;
	echo "</br>";
};

/***
Quebra De Fluxo
Break

O comando break pode ser utilizado em laços de do, for e while, além do uso já visto no comando switch.
Ao encontrar um break dentro de um desses laços, o interpretador PHP pára imediatamente a execução do laço, seguindo normalmente o fluxo do script.

Exemplo 1:
***/

$x=20;
while($x>=0){
	if($x==5){
		echo "Numero Invalido</br>";
		break;
	}else{
	echo "Numero ".$x."</br>"; 
$x--;
	}
};
/***
No trecho de código acima, o laço while tem uma condição para seu término normal ($x >= 0), mas foi utilizado o break para o caso de um término não previsto no início do laço.
Assim o interpretador seguirá para o comando seguinte ao laço.

Continue
O comando continue também deve ser utilizado no interior de laços, e funciona de maneira semelhante ao break
com a diferença que o fluxo ao invés de sair do laço volta para o início dele.

Exemplo:
***/

for ($i = 0; $i < 100; $i++) {
if ($i % 2) 
continue;
echo $i."</br>";
};

/***
O exemplo acima é uma maneira ineficiente de imprimir os números pares entre 0 e 99.
O que o laço faz é testar se o resto da divisão entre o número e 2 é 0.
Se for diferente de zero (valor lógico true) o interpretador encontrará um continue,
que faz com que os comandos seguintes do interior do laço sejam ignorados, seguindo para a próxima interação.

Funções

Sintaxe:

function nome_da_function([arg1,arg2,arg3]){
	...;
	[return<valor de retorno>];
};

Qualquer código PHP válido pode estar contido no interior de uma função. Como a checagem de tipos em PHP é dinâmica, o tipo de retorno não deve ser declarado, sendo necessário que o programador esteja atento para que a função retorne o tipo desejado. É recomendável que esteja tudo bem documentado para facilitar a leitura e compreensão do código. Para efeito de documentação, utiliza-se o seguinte formato de declaração de função:
tipo function nome_da_funcao(tipo arg1, tipo arg2, ...);
Este formato só deve ser utilizado na documentação do script, pois o PHP não aceita a declaração de tipos. Isso significa que em muitos casos o programador deve estar atento aos tipos dos valores passados como parâmetros, pois se não for passado o tipo esperado não é emitido nenhum alerta pelo interpretador PHP, já que este não testa os tipos.

Valor de retorno

Toda função pode opcionalmente retornar um valor, ou simplesmente executar os comandos e não retornar valor algum.
Não é possível que uma função retorne mais de um valor, mas é permitido fazer com que uma função retorne um valor composto, como listas ou arrays.
Argumentos
É possível passar argumentos para uma função. Eles devem ser declarados logo após o nome da função, entre parênteses, e tornam-se variáveis pertencentes ao escopo local da função. A declaração do tipo de cada argumento também é utilizada apenas para efeito de documentação.

Exemplos:

function imprime($texto){
	echo $texto;
};

function soma($v1,$v2){
	$soma=$v1+$v2;
	return $soma;
};

Passagem De Parâmetros Por Referência
Normalmente, a passagem de parâmetros em PHP é feita por valor, ou seja, se o conteúdo da variável for alterado, essa alteração não afeta a variável original.

Exemplo:

function mais8($numero){
	$numero += 8;
	echo $numero."</br">;
};
$a=3;
mais8($a);		//	$a continua valendo 3

echo $a;

No exemplo acima, como a passagem de parâmetros é por valor, a função mais8 é inútil, já que após a execução sair da função o valor anterior da variável é recuperado. Se a passagem de valor fosse feita por referência, a variável $a teria 8 como valor.
O que ocorre normalmente é que ao ser chamada uma função, o interpretador salva todo o escopo atual, ou seja, os conteúdos das variáveis. Se uma dessas variáveis for passada como parâmetro, seu conteúdo fica preservado, pois a função irá trabalhar na verdade com uma cópia da variável. Porém, se a passagem de parâmetros for feita por referência, toda alteração que a função realizar no valor passado como parâmetro afetará a variável que o contém.
Há duas maneiras de fazer com que uma função tenha parâmetros passados por referência: indicando isso na declaração da função, o que faz com que a passagem de parâmetros sempre seja assim; e também na própria chamada da função.
Nos dois casos utiliza-se o modificador “&”. Vejamos um exemplo que ilustra os dois casos:

function mais5($num1,$num2){
	$num1 +=5;
	$num2 +=5;
}

//////////////////////	Neste caso,só $num1 teve seu valor alterado,a passagem por referencia
//	$a=$b=1;		//	foi definida na declaração da função.
//	mais5($a,$b);	//	O & antes do $num1 dentro da function mais5
//////////////////////		
-----------------------------------------------------------------------------------------------
mais5($a,&$b);		//	Aqui as duas variaveis terão seus valores alterados. (O & definido dentro da function e o & definido na execução da function junto ao $b)

Argumentos Com Valores Pré-Definidos (Default)
Em PHP é possível ter valores default para argumentos de funções, ou seja, valores que serão assumidos em caso de nada ser passado no lugar do argumento.
Quando algum parâmetro é declarado desta maneira, a passagem do mesmo na chamada da função torna-se opcional.

Exemplo:
***/
function testes($vivAs="testando"){
	echo $vivAs."</br>";
};
testes();				//	Imprime "testando"
testes("outro teste</br>");	//	Imprime "Outro teste"
/***
É bom lembrar que quando a função tem mais de um parâmetro,
o que tem valor default deve ser declarado por último.

Exemplo:
***/
function test($figura,$cor="azul"){
	echo "a figura é um ".$figura." e sua cor é ".$cor."</br>";
};
test("circulo</br>");
/***
Contexto
O contexto é o conjunto de variáveis e seus respectivos valores num determinado ponto do programa. Na chamada de uma função, ao iniciar a execução do bloco que contém a implementação da mesma é criado um novo contexto, contendo as variáveis declaradas dentro do bloco, ou seja, todas as variáveis utilizadas dentro daquele bloco serão eliminadas ao término da execução da função.

Escopo De Variáveis
O escopo de uma variável em PHP define a porção do programa onde ela pode ser utilizada. Na maioria dos casos todas as variáveis têm escopo global.

Entretanto, em funções definidas pelo usuário um escopo local é criado. Uma variável de escopo global não pode ser utilizada no interior de uma função sem que haja uma declaração. Os escopos de variáveis existentes no PHP são:

Globais;
Locais;
Estáticas;
Constantes;
Globais
As variáveis globais são, por definição, as variáveis que podem ser acessadas dentro de todo o script. Porém, quando se cria escopo local como nas funções, precisaremos utilizar um tipo de chamada especial, ou seja, definir aquela variável como uma variável global.

Exemplo:
***/
$cursode="PHP";
function mostra(){
	global $cursode;
	echo $cursode."</br>";
};
mostra();
/***
Uma declaração “global” pode conter várias variáveis, separadas por vírgulas. Uma outra maneira de acessar variáveis de escopo global dentro de uma função é utilizando um array pré-definido pelo PHP cujo nome é $GLOBALS. O índice para a variável referida é o próprio nome da variável, sem o caracter $. O exemplo acima e o abaixo produzem o mesmo resultado:

Exemplo:
***/
function mostra1(){
	echo $GLOBALS["cursode"];
	echo $cursode;
};
mostra1();
/***
Locais
As variáveis Locais são os tipos mais restritos dentro do PHP. Elas funcionam apenas dentro desse escopo.

Exemplo:
***/
function mostra2(){
	$var_local="variable local";
	echo $var_local;
};
echo $var_local;
echo "</br>";
/***
Estáticas
As variáveis Estáticas são variáveis que possuem o mesmo tempo de vida das variáveis globais,
com a diferença de funcionarem apenas em escopos locais e serem inicializadas apenas uma vez.

Exemplo:
***/
function contador(){
	static $a=0;
	echo $a++."</br>";
};
for($a=0;$a<=5;$a++){
	contador();
};
/***
Constantes
Variáveis Constantes são variáveis que recebem um único valor que não será alterado dentro da função,
permanecendo sempre o mesmo valor. Uma constante só pode conter valores escalares, não podendo conter nem um array nem um objeto.

Sintaxe:

int define(string nome_da_constante, mixed valor); onde:
• string nome_da_contante é o nome da variável;
• mixed valor é o valor que essa constante irá receber. 

A função retorna true se for bem-sucedida. Veja um exemplo de sua utilização a seguir:

Exemplo:

define ("pi", 3.1415926536);
$circunf = 2*pi*$raio; 

Definindo Um Formulário
Por ser uma linguagem de marcação, a sintaxe do HTML na maioria dos casos exige uma “tag” de início e uma de final daquele bloco. É exatamente isso que ocorre com a definição de um formulário: uma tag no início e outra no final, sendo que todos os elementos do formulário devem estar entre as duas tags. Isto torna possível a inclusão de mais de um formulário num mesmo html. As tags citadas são:

<form name=”” action=”” method=”” enctype=””>

Onde temos:

name: o identificador do formulário. Utilizado principalmente em Scripts client-side (JavaScript);
action: nome do script que receberá os dados do formulário ao ser submetido;
method: método de envio dos dados: get ou post;
enctype: formato em que os dados serão enviados. O default é urlencoded. Se for utilizado um elemento do tipo upload de arquivo (file) é preciso utilizar o tipo multipart/form-data. 
***/
echo "Exemplo: ";
echo "<form action='exemplo.php' method='post'>";
echo "(textos e elementos do form)";
echo "</form>";
echo "</br>";
/***
Cada elemento do formulário deve possuir um nome que irá identificá-lo no momento em que o script indicado no ACTION for tratar os dados.

A tag <input>

Muitos elementos de um formulário html são definidos pela tag . Cada tipo de elemento possui parâmetros próprios, mas todos possuem pelo menos dois parâmetros em comum: type, que define o tipo de elemento, e name, que como já foi dito define o nome daquele elemento. Existem, ainda, outros parâmetros, também chamados atributos que são comuns a maioria dos campos de um formulário. São eles:

Value - o valor pré-definido do elemento, que aparecerá quando a página for carregada;
Size - O tamanho do elemento na tela, em caracteres;
Maxlength - O tamanho máximo do texto contido no elemento, em caracteres; 

Campo De Texto (Text)
Exibe na tela um campo para entrada de texto com apenas uma linha.

Sintaxe:

<input type="text" name="" value="" size="" maxlength="">

Campo De Texto Com Máscara (Password)
Tipo de campo semelhante ao anterior, com a diferença que neste caso os dados digitados são substituídos por asteriscos, e por isso são os mais recomendados para campos que devam conter senhas. É importante salientar que nenhuma criptografia é utilizada. Apenas não aparece na tela o que está sendo digitado.

Sintaxe:
<input type="password" name="" value="" size="" maxlength="">

Checkbox
Utilizado para campos de múltipla escolha, onde o usuário pode marcar mais de uma opção.

Sintaxe:
<input type="checkbox" name="" value="" checked>

Onde:

Value - o valor que será enviado ao servidor quando o formulário for submetido, no caso do campo estar marcado;
Checked - O estado inicial do elemento. Quando presente, o elemento já aparece marcado; 
Sintaxe:
<input type="checkbox" name="" value="" checked>

Radio Button
Utilizado para campos de múltipla escolha, onde o usuário pode marcar apenas uma opção. Para agrupar vários elementos deste tipo, fazendo com que eles sejam exclusivos, basta atribuir o mesmo nome a todos do grupo.

onde:

• Value - o valor que será enviado ao servidor quando o formulário for submetido, no caso do campo estar marcado;
• Checked - O estado inicial do elemento. Quando presente, o elemento já aparece marcado; 

Sintaxe:
<input type="radio" name="" value="" checked>

Upload De Arquivos (File)
Exibe na tela do browser um campo de texto e um botão, que ao clicado abre uma janela para localizar um arquivo no disco. Para utilizar este tipo de componente, o formulário deverá utilizar o método “POST” e ter o parâmetro “enctype” com o valor "multipart/form-data".

Sintaxe:
<form name="form1" enctype="multipart/form-data" method="post" action="">
        <input type="file" name="" size="30">
</form> 

Onde:

• Size - O tamanho do campo de texto exibido.

TextArea
Exibe na tela uma caixa de texto, com o tamanho definido pelos parâmetros “cols” e “rows”.

Sintaxe:
<textarea cols="" rows="" name="" wrap="">texto</textarea> 

Onde:

Cols - número de colunas do campo, em caracteres;
Rows - número de linhas do campo, em caracteres;
Wrap - Maneira como são tratadas as quebras de linha automáticas. O valor soft faz com que o texto “quebre” somente na tela, sendo enviado para o servidor o texto da maneira como foi digitado; O valor “hard” faz com que seja enviado para o servidor da maneira como o texto aparece na tela, com todas as quebras de linhas inseridas automaticamente; o valor “off” faz com que o texto não quebre na tela e nem quando enviado ao servidor. 
Obs.: O elemento do tipo textarea não possui o parâmetro “value”. O valor pré-definido do campo é o texto que fica entre as tags <textarea> e </textarea>. 

Sintaxe:
<textarea cols="" rows="" name="" wrap="">texto</textarea> 

Select
Campo utilizado para que o usuário faça a seleção a partir de uma lista de opções.

Sintaxe:
<select name="" size="" multiple>
	<option value="">texto</optio>
	<option value="">texto</optio>
	<option value="">texto</optio>
	<option value="">texto</optio>
	<option value="">texto</optio>
	<option value="">texto</optio>
	<option value="">texto</optio>
	<option value="">texto</optio>
</select>

Onde:

Size - número de linhas exibidas. Default: 1;
Multiple - parâmetro que, se presente, permite que sejam selecionadas duas ou mais linhas, através das teclas Control ou Shift;
Option - Cada item do tipo “option” acrescenta uma linha ao select;
Value - Valor a ser enviado ao servidor se aquele elemento for selecionado. Default: o texto do item; 
Texto - valor a ser exibido para aquele item. Não é definido por um parâmetro, mas pelo texto que fica entre as tags <option> e </option> 
Se o parâmetro “size” tiver o valor 1 e não houver o parâmetro “multiple”, exibe na tela uma “combo box”. Caso contrário, exibe na tela uma “select list”.

Hidden
Campo oculto que é utilizado para se passar parâmetros para o servidor. Este campo não é visível para o usuário.

Sintaxe:

<input type="hidden" name="" value=""> 
Onde:

Value - o parâmetro que será passado para o servidor.

Submit Button
Utilizado para enviar os dados do formulário para o script descrito na seção “action” da definição do formulário.

Sintaxe:
<input type="submit" name="" value=""> 

Onde:

Value - o texto que aparecerá no corpo do botão.

Reset Button
Utilizado para fazer todos os campos do formulário retornem ao valor original, quando a página foi carregada. Bastante utilizado como botão “limpar”, mas na realidade só limpa os campos se todos eles têm como valor uma string vazia.

Sintaxe:
<input type="reset" name="" value=""> 

Onde:

Value - o texto que aparecerá no corpo do botão.

Button
Utilizado normalmente para ativar funções de scripts client-side (JavaScript, por exemplo). Sem essa utilização, não produz efeito algum.

Sintaxe:
<input type="button" name="" value=""> 

Onde:

Value - o texto que aparecerá no corpo do botão.
No próximo tópico vamos ver como fazer para criar a interação do PHP com os formulários. Vamos ver como manipular dados do formulário com o PHP.

Interagindo O PHP Com Os Formulários HTML
O que você deverá observar quando criar seus formulários para manipular dados no PHP:

Seu formulário deve conter um botão "SUBMIT" para poder enviar as informações;
Todos os campos do formulário que serão tratados no script PHP devem conter o parâmetro "NAME", caso contrário, os dados não serão passados para o script PHP; 
Como as informações do formulário são passadas para esse script PHP e como as informações do formulário enviado são tratadas, dependem de você. Existem 2 métodos como as informações podem ser passadas: GET e POST. O recomendável sempre, para todos os formulários é usar o método POST, onde os dados enviados não são visíveis nas URLs, ocultando possíveis importantes informações e permitindo o envio de longas informações. O GET é totalmente o contrário disso.

Variável $_POST
Esta variável é utilizada para receber as variáveis vindas do formulário pelo método post.

Sintaxe:

$_POST[campo_do_formulário] 

onde:

campo_do_formulário – é o campo que foi criado no formulário que se deseja recuperar.
Exemplo:
<?
$_POST[campo1];
?> 

Vamos ver um outro exemplo utilizando um formulário HTML e um script PHP que recebe os dados do formulário.

<form action="script.php" method="post">
    Campo 1: <input type=text name=campo1><br>
    Campo 2: <input type=text name=campo2><br>
    <input type=submit value="OK">
</form> 

O formulário acima usa o método POST para envio das informações, então em PHP, teremos o seguinte script:

<?
    echo "O valor de CAMPO 1 é: " . $_POST["campo1"];
    echo "<br>O valor de CAMPO 2 é: " . $_POST["campo2"];
?> 

Se o formulário tivesse sido enviado usando o método GET, você simplesmente usaria $_GET no lugar de $_POST.

Se o formulário tivesse sido enviado usando o método GET, você simplesmente usaria $_GET no lugar de $_POST.

Vamos criar um pequeno exemplo de como se trabalhar com formulários no PHP. Nossa página irá enviar os dados de um formulário para o servidor e exibir esses mesmos dados numa página de resposta criada em PHP.

O formulário que iremos montar a seguir (página form1.html) irá solicitar que você preencha alguns dados. Ao clicar num botão submit, o que você digitou e preencheu no formulário, será enviado ao servidor especificado para que possa ser produzida uma resposta, no nosso caso, ao arquivo RespForm1.php . O PHP trata esses valores como variáveis, cujo nome é o nome do campo definido no formulário. O exemplo abaixo, mostra também que o código PHP pode ser inserido em qualquer parte do código HTML.

|==========================================================================|
|Digite o código HTML a seguir (form1.html) >>> https://prnt.sc/tsb1dh <<< |
|--------------------------------------------------------------------------|
|-(VERIFICAR ARQUIVOS form1.html e RespForm1.Php ANTES DE CONTINUAR ! ! !)-|
|--------------------------------------------------------------------------|
|==========================================================================|

Observações:
Em vez de usar $_GET ou $_POST você pode escrever a variável com o mesmo nome do campo do formulário (no exemplo, $campo1 e $campo2). Mas, esse uso não é recomendado, pois se a diretiva "register_globals" na configuração do seu PHP estiver desativada, as variáveis com nome dos campos dos formulários, terão um valor vazio.

Uma solução para isso é usar a função import_request_variables no começo dos seus scripts que interpretam formulários. Essa função aceita 3 letras como argumentos: P, G e C, referentes a $_POST, $_GET e $_COOKIE respectivamente.

Exemplo:
<?
import_request_variables("gP");
?> 

O que acontece?

Exemplo:

Você possui formulário com os campos "nome", "endereço" e "idade". Assuma que a diretiva "register_globals" do seu PHP esteja desligada, mas, você já havia programado o script usando as variáveis no escopo global, no lugar de $_POST.

Adicionando aquela função no começo do script, as variáveis do seu formulário postado:

$_POST["nome"], $_POST["endereco"] e $_POST["idade"] serão extraídas cada para uma variável diferente: $nome, $endereco e $idade.

CONTINUAÇÃO APÓS LEITURA
parte 1 https://paste2.org/YBec1gD7
parte 2 https://paste2.org/DM10EfBG
O comando header permite enviar cabeçalhos html para o cliente. Deve ser utilizado por usuários que conheçam a função de cada header que pode ser enviado.

Sintaxe:

Header (string header);

Exemplo:

<?
    header (“location: login.php”);
?> 

Não pode ser enviado depois de algum texto.
veja o seguinte exemplo:

<html>
	<? header("Location: https://www.php.net"); ?>
	<body>
	
O código acima causará um erro, já que tentou-se enviar um header depois de ter sido enviado um texto(“ ”).
Algumas utilizações do header são:
redirecionar para outra página:
Exemplo:

header("Location: http://www.php.net");
Definir o script como uma mensagem de erro:

Exemplo:
header("http/1.0 404 Not Found");

Definir a expiração da página:
Exemplos:
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0 

Utilizando Cookies
O Que São Cookies
Cookies são variáveis gravadas no cliente(browser) por um determinado site. Somente o site que gravou o cookie pode ler a informação contida nele. Este recurso é muito útil para que determinadas informações sejam fornecidas pelo usuário apenas uma vez. Exemplos de utilização de cookies são sites que informam a quantidade de vezes que você já visitou, ou alguma informação fornecida numa visita anterior.

Existem cookies persistentes e cookies de sessão. Os persistentes são aqueles gravados em arquivo, e que permanecem após o browser ser fechado, e possuem data e hora de expiração. Os cookies de sessão não são armazenados em disco e permanecem ativos apenas enquanto a sessão do browser não for encerrada.

Por definição, existem algumas limitações para o uso de cookies, listadas a seguir:

300 cookies no total
4 kilobytes por cookie.
20 cookies por servidor ou domínio. 
Gravando Cookies
Para gravar cookies no cliente, deve ser utilizada a função setcookie.

Sintaxe:

setcookie(string nome, string valor, int exp, string path,string dominio, int secure);

onde:

nome - nome do cookie;
valor - valor armazenado no cookie;
exp - data de expiração do cookie (opcional), no formato Unix. Se não for definida, o cookie será de sessão;
path - path do script que gravou o cookie;
domínio - domínio responsável pelo cookie;
secure - se tiver valor 1, indica que o cookie só pode ser transmitido por uma conexão segura (https).
Observações:

Um cookie não pode ser recuperado na mesma página que o gravou, a menos que esta seja recarregada pelo browser;
Múltiplas chamadas à função setcookie serão executadas em ordem inversa;
Cookies só podem ser gravados antes do envio de qualquer informação para o cliente. Portanto todas as chamadas à função setcookie devem ser feitas antes do envio de qualquer header ou texto.
Lendo Cookies Gravados
Os cookies lidos por um script PHP ficam armazenados em duas variáveis:

No array $HTTP_COOKIE_VARS[], tendo como índice a string do nome do cookie;
E numa variável cujo nome é o mesmo do cookie, precedido pelo símbolo $. 
Exemplo:

Um cookie que foi gravado numa página anterior pelo seguinte comando:

setcookie(“teste”, “meu cookie”);

Pode ser lida pela variável $HTTP_COOKIE_VARS[“teste”] ou pela variável $teste
O script a seguir é um exemplo do uso de cookies. O script exibe quantas vezes o usuário visitou aquela página.

	Arquivo Cookie.Php
Esse é o código completo do arquivo cookie.php. Agora, digite o arquivo visitas.php que irá informar o número de vezes que o site foi visitado por um mesmo usuário.
***/
include("Cookie.Php");
echo "Você já esteve aqui <b>".$numvisits."</b> vezes.</br>";
/***
Agora, vamos estudar o código do arquivo cookie.php separadamente, para você entendê-lo melhor.
Logo após as informações pessoais e o reporting, podemos ver que temos o código:

if($Test!=''){
	$Test++;
	setcookie("Test",$Test,time()+3600000);
}

Essa parte será a responsável pela criação do cookie no computador cliente (do usuário). O comando else que vem logo após o o código acima, é usado para acionar o outro código caso o cookie já exista no cliente.

Seguindo abaixo temos a fase terminal do script que respondera caso o cookie já exista, retornando o número de vezes que o usuário já esteve no site.
else{
	setcookie("Test",1,time()+3600000;
	$Test=1;
}
$numvisits=$Test;
Esse código após verificar o cookie irá responder quantas vezes o cliente já esteve no site e ambas as partes completarão a função de gravar novamente os novos dados no cookie.

Vá para o seu browser, carregue a página visitas.php e observe que o browser lhe informará o número de visitas que você fez no site.

Outro Exemplo De Uso De Cookies:
setcookie("cookie","teste",time()+3600*24*365);
Esse cookie tem validade de um ano:

3600 segundos = 1 hora
3600 segundos vezes 24 horas
24 horas vezes 365 dias 

Para excluir um cookie basta fazer a mesmo sistema que criar ele, mas usando um prazo de expiração negativa. Veja o exemplo a seguir:
setcookie("cookie","teste",time()-3600*24*365);
Veja acima o cookie que tinha validade de um ano será excluído porque foi passado que o tempo dele agora é de um ano atrás, ou seja, já acabou.

Trabalhando Com Sessões (Sessions)

Uma sessão (session) é um período de tempo durante o qual uma pessoa navega num site. Uma sessão é gravada no servidor, e o tempo de duração de uma sessão pode ser ate o usuário fechar a página. Quando o usuário entra no site criamos uma sessão e ela recebe um número identificador único, chamado de session_id, para uma pagina ter o acesso aos dados da sessão ela tem que ter esse número identificador.
As sessões geralmente são usadas pra criar lojas virtuais e sistemas de login, onde o usuário entrará com usuário e senha em um formulário. Buscará no banco de dados e se achar algum usuário gravará na sessão uma identificação que dirá que ele já foi logado. Isso somente durará até o fechamento do browser.
Session_start() – é o comando para se utilizar uma sessão. Este comando deve ser utilizado no início do código e antes de qualquer saída html.
Sintaxe:

Session_start();

Exemplo:
session_start();
$_SESSION["teste"]=1;

No exemplo acima, foi criado uma sessão com o nome se teste e valor 1.
E nas paginas seguintes você pode restaurar esse valor assim:

session_start();
echo $_SESSION["teste"];
Função Session_register()
Você pode usar session_register() para registrar suas variáveis, no caso, o nome da variável na sessão será a mesma do nome da variável gravado, exemplo:
Nesse caso foi gravada a variável $linguagem na variável de sessão “linguagem”, eis a vantagem de se usar $_SESSION que é recomendado a partir da versão 4.1, já que você poderá definir o nome da variável na sessão.

Obs.: session_register trabalha com register_globals on, e como está em extinção o uso em on, é sempre recomendado então usar $_SESSION, aliás, as facilidades são muito maiores, já que você trabalhará com elas como uma variável normal.

Iremos listar algumas das funções utilizadas pelo PHP. Procuramos citar as funções que verificamos serem comumente usadas por desenvolvedores de PHP. Para maiores informações sobre as funções aqui citadas e sobre as demais funções, consulte o manual do PHP no site: www.php.net.

Funções Diversas
***/



echo "</br></br>";
$texto="Curso de PHP";
$textoascii=65;
$textoord=A;
$ascii=chr($textoascii);
$ord=ord($textoord);
$retorno=strlen($texto);
$unsensitive="CURSO DE PHP";
$retorno1=strtolower($unsensitive);
$sensitive="curso de php";
$retorno2=strtoupper($sensitive);
$maiusculo="cURSO DE PHP";
$retorno3=ucfirst($maiusculo);
$indice="cURSO dE pHP";
$retorno4=ucwords($indice);
$removerespaco=" Curso de php ";
$retorno5=trim($removerespaco);
$strstr="Curso de PHP";
$retorno6=strstr($strstr, "de");
$retorno6_1=strstr($strstr, "JAVA");
$isset=isset($texto);
$empty1="";
$empty=empty($empty1);
$date00=date(d);
$date01=date(D);

$data01=date(d);
$data02=date(D);
$data03=date(m);
$data04=date(M);
$data05=date(y);
$data06=date(Y);
$data07=date(w);
$data08=date(W);
$data09=date('h:m:s');

$data="11/12/2020";
$data_array=explode("/",$data);
$novadata=$data_array[2]." - ".$data_array[1]." - ".$data_array[0];

$substr="abcdef";
$reset1=substr("abcdef",1);
$reset2=substr("abcdef",1,3);
$reset3=substr("abcdef",0,4);
$reset4=substr("abcdef",0,8);
$reset5=substr("abcdef",-4,5);

$arquivo="//DESKTOP-5SL5DFR/Jogos/cs/hl.exe";
$arquivocheck=0;
$file1="O arquivo existe.";
$file2="O arquivo não existe.";

echo "Primeiro Exemplo";
echo "</br></br>";
echo "O Caractere correspondente ao código ".$textoascii." é: <b>".$ascii."</b>.";
echo "</br></br>";
echo "O Caractere ".$textoord." corresponde ao numero <b>".$ord."</b> na tabela ASCII";
echo "</br></br>";
echo "A mensagem <b>".$texto."</b> possui exatamente ".$retorno." Caracteres.";
echo "</br></br>";
echo "A mensagem <b>".$unsensitive."</b> é escrita totalmente em minusculo caso utilize a string <b>strtolower</b>.</br>Veja o exemplo: <b>".$retorno1."</b>.";
echo "</br></br>";
echo "A mensagem <b>".$sensitive."</b> é escrita totalmente em maiusculo caso utilize a string <b>strtoupper</b>.</br>Veja o exemplo: <b>".$retorno2."</b>.";
echo "</br></br>";
echo "A mensagem <b>".$maiusculo."</b> é escrita com a primeira letra em maiusculo caso utilize a string <b>ucfirst</b>.</br>Veja o exemplo: <b>".$retorno3."</b>.";
echo "</br></br>";
echo "A mensagem <b>".$indice."</b> é escrita com a primeira letra de todas as palavras em maiusculo caso utilize a string <b>ucwords</b>.</br>Veja o exemplo: <b>".$retorno4."</b>.";
echo "</br></br>";
echo "A mensagem&nbsp; <b><u>".$removerespaco."</u></b>&nbsp;remove espaços em branco do inicio e do final da variavel caso utilize a string <b>trim</b>.</br>Veja o exemplo: <b><u>".$retorno5."</u></b>.";
echo "</br></br>";
echo "A string <b>strstr</b> procura a primeira ocorrencia do <b>str2</b> no <b>str1</b>,se não encontrar,retorna uma string vazia (exemplo: ".$retorno6_1."),caso encontre,ela retorna todos os caracteres após o <b>str1</b> (exemplo: <b>".$retorno6."</b>).";
echo "</br></br>";
echo "A string <b>isset</b> verifica se existe algum valor definido na variavel,caso sim ela retorna <b>TRUE (1)</b>, caso contrario <b>FALSE (0)</b>. Veja o exemplo: <b>".$isset."</b>.";
echo "</br></br>";
echo "A string <b>empty</b> tem a função de verificar se a variavel está vazia, caso esteja retorna <b>1</b>, caso não esteja retorna <b>0</b>. Veja o exemplo: <b>".$empty."</b>";
echo "</br></br>";
echo "A string <b>date</b> retorna informações referentes a data e hora de acordo com os valores definidos.</br>
Se eu definir a variavel <b>date</b> utilizando <b>d</b> ela me retorna <b>".$date00."</b>,mas se eu definir para <b>D</b> ela me retorna <b>".$date01."</b>.</br>
Veja alguns exemplos:</br>
utlizando <b>d</b> a string date me retorna: ".$data01.", que seria o dia do mes.</br>
utlizando <b>D</b> a string date me retorna: ".$data02.", que seria o dia da semana.</br>
utlizando <b>m</b> a string date me retorna: ".$data03.", que seria o numeral do mes.</br>
utlizando <b>M</b> a string date me retorna: ".$data04.", que seria o mes.</br>
utlizando <b>y</b> a string date me retorna: ".$data05.", que seria a abreviação do ano.</br>
utlizando <b>Y</b> a string date me retorna: ".$data06.", que seria o ano.</br>
utlizando <b>w</b> a string date me retorna: ".$data07.", que seria o numero de semanas no mes.</br>
utlizando <b>W</b> a string date me retorna: ".$data08.", que seria o numero de dias no mes.</br>
utlizando <b>'h:m:s'</b> a string date me retorna: ".$data09.", que seria a hora(AM/PM) minuto e segundo.</br>";
echo "</br></br>";
echo "Utilizando a string <b>explode</b> é possivel definir um divisor de valores dentro de uma variavel,onde por exemplo,se minha variavel for <b>".$data."</b> e eu definir na string explode o caractere <b>slash (/)</b> como divisor,a string me retorna o seguinte resultado: <b>".$novadata."</b>.";
echo "</br></br>";
echo "A string <b>substr</b> remove os caracteres da esquerda para a direita de acordo com as casas definidas,caso o valor seja nulo não retorna nada.</br>
Veja alguns exemplos:</br><b>".$reset1."</b> ou <b>".$reset2."</b> ou <b>".$reset3."</b> ou <b>".$reset4."</b>.</br>
Essa função tambem pode ser feita utilizando chaves,exemplos: <b>".$substr{0}."</b> ou <b>".$substr{3}."</b>.";
echo "</br></br>";
echo "A string <b>substr</b> tambem pode funcionar no sentido oposto,basta utilizar valores negativos.</br>Exemplo:</br>".$reset5;
echo "</br></br>";
echo "<b>Agora iremos começar a manipular arquivos!</b>";
// Print do Arquivo utilizado https://prnt.sc/ts1rc1
echo "</br></br>";
echo "A Função <b>file_exists()</b> verifica se um arquivo existe no servidor e retorna <b>TRUE (1)</b> se o arquivo existir ou <b>FALSE (0)</b> caso o arquivo não exista.</br>Cuidado com o <a href='https://pt.wikipedia.org/wiki/Case-sensitive'>Case Sensitive</a>!</br><b>OBS.</b>: No Windows, para checar arquivos em compartilhamentos de rede, use: <i>//computername/share/filename</i>.</b></br>Exemplo: Status do <b>".$arquivo."</b> no servidor: <b>".file_exists($arquivo)."</b>.";
echo "</br></br>";
echo "A Função <b>filesize()</b> é utilizada para exibir o tamanho do arquivo,caso dê erro ela retorna <b>FALSE (0)</b>.</br>Exemplo: O arquivo <b>".$arquivo."</b> contem <b>".filesize($arquivo)."</b> bytes.";
echo "</br></br>";
echo "A Função <b>filetype()</b> é utilizada para checar o tipo de arquivo,retornando fifo, char, dir, block, link, file e unknown (desconhecido) e retorna <b>FALSE (0)</b> se ocorrer um erro.</br><b>OBS.</b>: essa função tambem retorna um E_NOTICE caso ocorra um erro.</br>Exemplo: </br> O ".$arquivo." é um <b>".filetype($arquivo)."</b>.";
echo "</br></br>";
echo "A Função <b>clearstatcache()</b> é utilziada para limpar o cache gerado por funções como <b>file_exists</b>, <b>filesize</b> ou <b>filetype</b>, segue abaixo a uma lista mais detalhada.</br>";
echo "</br></br>";
echo "As funções afetadas são:</br>
<b> stat(),</br>
 lstat(),</br>
 file_exists()</br>
 is_writable()</br>
 is_readable()</br>
 is_executable()</br>
 is_file()</br>
 is_dir()</br>
 is_link()</br>
 filectime()</br>
 fileatime()</br>
 filemtime()</br>
 fileinode()</br>
 filegroup()</br>
 fileowner()</br>
 filesize()</br>
 filetype()</br>
 fileperms()</b>";
/***
echo "</br></br>";
echo "";
***/

?>