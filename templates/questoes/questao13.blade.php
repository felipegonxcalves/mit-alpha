@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="13" name="nro_questao">
        <input type="hidden" value="questao14" name="prox_questao">

        <div class="questao" id="q13" style="width: 80vw;height: 430;">
            <div class="numero">13</div>
            <div class="pergunta"> Palavras que definem seu estilo. (Marque quatro alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 300px;float: left;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> a </div> Sempre fazemos desta forma
                    <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> b </div> Vamos ao ponto-chave do problema
                    <input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> c </div> Vejamos os valores humanos
                    <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> d </div> Vamos analisar
                    <input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> e </div> Vamos ver o quadro geral
                    <input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> f </div>Vamos ver o desenvolvimento da equipe
                    <input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> g </div> Vamos conhecer o resultado
                    <input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> h </div> Este é o grande sucesso conceitual
                    <input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 290px;float: right;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> i </div> Vamos manter a lei e a ordem
                    <input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> j </div> Vamos inovar e criar sinergia
                    <input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> k </div> Vamos participar e envolver
                    <input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> l </div> É mais seguro desta forma<input type="checkbox" name="check_per_1[]" value="l">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> m </div> Sentimental<input type="checkbox" name="check_per_1[]" value="m">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> n </div> Preparado<input type="checkbox" name="check_per_1[]" value="n">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> o </div>Quantitativo <input type="checkbox" name="check_per_1[]" value="o">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> p </div> Sintético<input type="checkbox" name="check_per_1[]" value="p">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p13">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="{{ asset("images/righta2.svg") }}">
                    <img class="arrow" src="{{ asset("images/righta2.svg") }}">
                </a>
            </div>
        </div>

    </form>
@endsection

@section('js_page')
    <script>
        limitarCheckboxes(13, 4);

        document.getElementById('p13').onclick = () => {
            if (validateCheckboxs(13, 4)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection