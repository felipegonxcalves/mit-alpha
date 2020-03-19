@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="38" name="nro_questao">
        <input type="hidden" value="questao39" name="prox_questao">

        <div class="questao" id="q38" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">38</div>
            <div class="pergunta">Eu penso que...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Não é fácil ficar encurralado <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> É preferível olhar, antes de pular <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Duas cabeças pensam melhor do que uma <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Se você não tem condições de competir, não ocmpita <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p38">
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
        limitarCheckboxes(38, 1);

        document.getElementById('p38').onclick = () => {
            if (validateCheckboxs(38, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection