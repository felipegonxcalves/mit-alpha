@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="28" name="nro_questao">
        <input type="hidden" value="questao29" name="prox_questao">

        <div class="questao" id="q28" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">28</div>
            <div class="pergunta">Eu gosto de mudanças se...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Me der uma vantagem competitiva <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> For divertido e puder ser compartilhado <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Me der mais liberdade e variedade <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Melhorar ou me der mais controle <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p28">
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
        limitarCheckboxes(28, 1);

        document.getElementById('p28').onclick = () => {
            if (validateCheckboxs(28, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection