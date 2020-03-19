@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="36" name="nro_questao">
        <input type="hidden" value="questao37" name="prox_questao">

        <div class="questao" id="q36" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">36</div>
            <div class="pergunta">Eu acredito também que...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Aquele que hesita está perdido <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> De grão em grão a galinha enche o papo <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> O que vai, volta <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark" > </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Um sorriso ou uma careta é o mesmo para quem é cego <input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p36">
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
        limitarCheckboxes(36, 1);

        document.getElementById('p36').onclick = () => {
            if (validateCheckboxs(36, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection