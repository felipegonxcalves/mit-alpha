@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="7" name="nro_questao">
        <input type="hidden" value="questao08" name="prox_questao">

        <div class="questao" id="q7" style="width: 92vw;height: 430;padding-left: 25px;">
            <div class="numero">07</div>
            <div class="pergunta"> Marque as cinco frases, que melhor definem seu comportamento ou atitude. Ao comprar um
                carro você:

            </div><br>
            <div class="alternativas fundoGradient" style="width: 340px;float: left;">
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> a</div> Compra com base na recomendação de amigos<input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> b</div> Preocupa-se com o consumo de combustível<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> c</div> Preocupa-se com as formas a cor e a tecnologia<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> d</div> Verifica o equipamento de segurança e a durabilidade<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> e</div> Dá importância à “sensação” de conforto do veículo<input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> f</div> Faz comparações com outros veículos<input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> g</div> Verifica o tamanho do porta-malas<input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> h</div> Verifica se o carro se encaixa no seu sonho de vida<input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> i</div> Pesquisa e planeja antecipadamente como vai utilizá-lo<input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> j</div> Preocupa-se com o custo e o valor de troca<input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 370px;float: right;">
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> k</div> Quer “amar” o carro<input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> l</div> Prefere caros lançados recentemente, novidades<input type="checkbox" name="check_per_1[]" value="l">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> m</div> Preocupa-se com os requisitos técnicos<input type="checkbox" name="check_per_1[]" value="m">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> n</div> Verifica a facilidade de manutenção<input type="checkbox" name="check_per_1[]" value="n">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> o</div> Gosta de experimentar um novo modelo ou fabricante<input type="checkbox" name="check_per_1[]" value="o">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> p</div> Preocupa-se com o nome do fabricante<input type="checkbox" name="check_per_1[]" value="p">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> q</div> Dá importância à opinião das pessoas <input type="checkbox" name="check_per_1[]" value="q">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> r</div> Quer ver dados e estatísticas sobre o desempenho<input type="checkbox" name="check_per_1[]" value="r">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> s</div> Preocupa-se com a qualidade do atendimento do revendedor<input type="checkbox" name="check_per_1[]" value="s">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:8pt">
                    <div class="letra"> t</div> Analisa como o carro vai ser útil no seu dia a dia<input type="checkbox" name="check_per_1[]" value="t">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p7">
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
        limitarCheckboxes(7, 5);

        document.getElementById('p7').onclick = () => {
            if (validateCheckboxs(7, 5)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection






