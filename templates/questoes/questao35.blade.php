@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="35" name="nro_questao">
        <input type="hidden" value="questao36" name="prox_questao">

        <div class="questao" id="q35" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">35</div>
            <div class="pergunta">Eu acredito que...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> O destino é mais importante que a jornada <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> A jornada é mais importante que o destino <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Um centavo economizado é um centavo ganho <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Bastam um navio e uma estrela para navegar <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p35">
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
        limitarCheckboxes(35, 1);

        document.getElementById('p35').onclick = () => {
            if (validateCheckboxs(35, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection