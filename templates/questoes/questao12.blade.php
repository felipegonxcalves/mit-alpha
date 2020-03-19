@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="12" name="nro_questao">
        <input type="hidden" value="questao13" name="prox_questao">

        <div class="questao" id="q12" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">12</div>
            <div class="pergunta"> Quando tenho que resolver um problemas, eu procuro...(Marque apenas uma alternativa)

            </div><br><br>
            <div class="alternativas fundoGradient" style="width: auto;margin-left: 1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> a </div> Uma visão interpessoal, emocional, “humana”

                    <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> b </div> Uma visão organizada, detalhada, “cronológica”<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> c </div> Uma visão analítica, lógica, racional, “de resultados”
                    <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> d </div> Uma visão intuitiva, conceitual, visual, de “contexto geral”<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p12">
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
        limitarCheckboxes(12, 1);

        document.getElementById('p12').onclick = () => {
            if (validateCheckboxs(12, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection