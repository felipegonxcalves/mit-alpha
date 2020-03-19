@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="19" name="nro_questao">
        <input type="hidden" value="questao20" name="prox_questao">

        <div class="questao" id="q19" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">19</div>
            <div class="pergunta">Eu penso que...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Unidos venceremos, divididos perderemos <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> O ataque é melhor que a defesa <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> É bom ser manso, mas andar com um porrete <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Um homem prevenido vale por dois <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p19">
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
        limitarCheckboxes(19, 1);

        document.getElementById('p19').onclick = () => {
            if (validateCheckboxs(19, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection