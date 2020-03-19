@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="17" name="nro_questao">
        <input type="hidden" value="questao18" name="prox_questao">

        <div class="questao" id="q17" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">17</div>
            <div class="pergunta">Para conseguir obter bons resultados é preciso...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Ter incertezas <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Controlar o essencial <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Diversão e celebração <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Planejar e obter recursos <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark">
                </span>
                </label>
            </div>
            <div class="proximo" id="p17">
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
        limitarCheckboxes(17, 1);

        document.getElementById('p17').onclick = () => {
            if (validateCheckboxs(17, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection