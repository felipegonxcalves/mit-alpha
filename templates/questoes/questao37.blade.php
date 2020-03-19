@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="37" name="nro_questao">
        <input type="hidden" value="questao38" name="prox_questao">

        <div class="questao" id="q37" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">37</div>
            <div class="pergunta">Eu acredito ainda que...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> É melhor prudência do que arrependimento <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> A autoridade deve ser desafiada <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Ganhar é fundamental <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> O coletivo é mais importante do que o individual <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p37">
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
        limitarCheckboxes(37, 1);

        document.getElementById('p37').onclick = () => {
            if (validateCheckboxs(37, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection