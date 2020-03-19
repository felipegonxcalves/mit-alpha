@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="22" name="nro_questao">
        <input type="hidden" value="questao23" name="prox_questao">

        <div class="questao" id="q22" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">22</div>
            <div class="pergunta">Eu gosto de...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Fazer progresso <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Construir memórias <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div>azer sentido <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Tornar as pessoas confortáveis <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p22">
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
        limitarCheckboxes(22, 1);

        document.getElementById('p22').onclick = () => {
            if (validateCheckboxs(22, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection