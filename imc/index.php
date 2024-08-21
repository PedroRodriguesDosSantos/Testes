<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    
    <header>

        <section>
            
        <nav>
            <div class="itens_nav">
                <div class="titulo"><a href="">IMC</a></div>
                <div class="links_nav">
                    <a href="">HOME</a>
                    <a href="">CADASTRE-SE</a>
                    <a href="">CALCULADORA</a>
                </div>
            </div>
        </nav>

            <article>

                <div class="bloco1">
                <div class="caixa_texto">
                <div class="titulo_imc">Calcule o IMC</div><br>

                <h4>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.<br><br>

                    O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.<br><br>
                    
                    Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</h4></div>

                    <img src="images/imagem1.jpg" alt="">
            </article></div><br>

            <article><div class="bloco2">
            <div class="calculo">
                <div class="calculos">
                    <h1>Altura</h1>
                    <input type="text" placeholder="METROS"><br><br>
                    <button class="botao1">Calcular</button>
                </div>

                <div class="calculos">
                    <h1>Peso</h1>
                    <input type="text" placeholder="ALTURA"><br><br>
                    <button class="botao2">Limpar</button>
                </div>
            </div><br><br><br>

            <div class="tabela">

                <h2>Interpretação do IMC</h2><br><br>

                <div class="subtitulo_imc">

                    <h3><div class="subtitulo1"> IMC</div></h3>
                    <h3><div class="subtitulo2" id="sub2"> CLASSIFICAÇÃO</div></h3>
                    <h3><div class="subtitulo3" id="sub3"> OBESIDADE (GRAU)</div></h3>

                </div>

                <div class="informacoes_tabela">

                    <div class="informacoes" id="i1">
                        <h3>MENOR QUE 18,5</h3><br>
                        <h3>ENTRE 18,5 % 24,9</h3><br>
                        <h3>ENTRE 25,0 E 24,9</h3><br>
                        <h3>ENTRE 30,0 E 39,9</h3><br>
                        <h3>MAIOR QUE 40,0</h3>
                    </div>

                    <div class="informacoes" id="i2">
                        <h3>MAGREZA</h3><br><br>
                        <h3>NORMAL</h3><br><br>
                        <h3>SOBREPESO</h3><br><br>
                        <h3>OBESIDADE</h3><br><br>
                        <h3>OBESIDADE GRAVE</h3>
                    </div>

                    <div class="informacoes" id="i3">
                        <h3>0</h3><br><br>
                        <h3>0</h3><br><br>
                        <h3>|</h3><br><br>
                        <h3>||</h3><br><br><br>
                        <h3>|||</h3>
                    </div>

                </div><br>

                <div class="calculos">
                    <button class="botao2">SEU IMC:</button>
                </div>

            </div>
            </div></article>


        </section>

        <footer>
            <h1>@Todos os direitos reservados a ETEC</h1>
        </footer>


    </header>


     <?php
         $altura = 2;
         $peso = 100;

         $imc = $peso/($altura*$altura);

         echo "<h1 > O seu IMC é de</h1 >".$imc;

         if($imc<18.5) {
             echo "<p >Classificação MAGREZA</p >";
         }
         else if($imc<24.9) {
             echo "<p >Classificação NORMAL</p >";
         }
         else if($imc<29.9) {
             echo "<p >Classificação SOBREPESO</p >";
         }
         else if($imc<39.9) {
             echo "<p >Classificação OBESIDADE</p >";
        }
         else {
             echo "<p >Classificação OBESIDADE GRAVE</p >";
         }

    ?>

</body>
</html>