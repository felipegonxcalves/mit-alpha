@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="9" name="nro_questao">
        <input type="hidden" value="questao10" name="prox_questao">

        <div class="questao" id="q9" style="width: 80vw;height: 430;">
            <div class="numero">09</div>
            <div class="pergunta"> Palavras que definem seu estilo. (Marque quatro alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 260px;float: left;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> a </div>Organizado<input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> b </div> Analítico<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> c </div> Emocional<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> d </div> Experimental<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> e </div> Lógico<input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> f </div> Conceitual<input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> g </div> Perceptivo<input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> h </div> Sequencial<input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 300px;float: right;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> i </div> Cinestésico<input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> j </div> Teórico<input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> k </div> Explorador<input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> l </div> Avaliador<input type="checkbox" name="check_per_1[]" value="l">
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
            <div class="proximo" id="p9">
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
        limitarCheckboxes(9, 4);

        document.getElementById('p9').onclick = () => {
            if (validateCheckboxs(9, 4)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection






