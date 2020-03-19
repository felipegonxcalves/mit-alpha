@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="23" name="nro_questao">
        <input type="hidden" value="questao24" name="prox_questao">

        <div class="questao" id="q23" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">23</div>
            <div class="pergunta">Eu gosto de chegar...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Na frente <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Junto <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Na hora <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Em outro lugar <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p23">
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
        limitarCheckboxes(23, 1);

        document.getElementById('p23').onclick = () => {
            if (validateCheckboxs(23, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection