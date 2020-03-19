@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="4" name="nro_questao">
        <input type="hidden" value="questao05" name="prox_questao">

        <div class="questao" id="q4" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">04</div>
            <div class="pergunta"> Qual o tipo de pergunta que você mais gosta de fazer? (Marque somente uma alternativa)
            </div><br><br>
            <div class="alternativas fundoGradient" style="width: auto;margin-left: 1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">
                        a </div> O que?<input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> b </div> Como?<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> c </div> Por que?<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> d </div> Quem?<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="proximo " style="float: bottom;margin:20px 5px; " id="p4">
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
        limitarCheckboxes(4, 1);

        document.getElementById('p4').onclick = () => {
            if (validateCheckboxs(4, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection






