@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="21" name="nro_questao">
        <input type="hidden" value="questao22" name="prox_questao">

        <div class="questao" id="q21" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">21</div>
            <div class="pergunta">Eu prefiro...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Perguntas a respostas <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Ter todos os detalhes <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Vantagens a meu favor <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Que todos tenham a chance de serem ouvidos <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p21">
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
        limitarCheckboxes(21, 1);

        document.getElementById('p21').onclick = () => {
            if (validateCheckboxs(21, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection