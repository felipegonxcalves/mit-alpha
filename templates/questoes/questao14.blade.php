@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="14" name="nro_questao">
        <input type="hidden" value="questao15" name="prox_questao">

        <div class="questao" id="q14" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">14</div>
            <div class="pergunta">Eu sou...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Idealista, criativo e visionário <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Divertido, espiritual e benéfico <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Confiável, meticuloso e previsível <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Focado, determinado e persistente <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p14">
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
        limitarCheckboxes(14, 1);

        document.getElementById('p14').onclick = () => {
            if (validateCheckboxs(14, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection