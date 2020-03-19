@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="18" name="nro_questao">
        <input type="hidden" value="questao19" name="prox_questao">

        <div class="questao" id="q18" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">18</div>
            <div class="pergunta">Eu me divirto quando...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Estou me exercitando <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Tenho novidades <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Estou com os outros <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Determino as regras <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p18">
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
        limitarCheckboxes(18, 1);

        document.getElementById('p18').onclick = () => {
            if (validateCheckboxs(18, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection