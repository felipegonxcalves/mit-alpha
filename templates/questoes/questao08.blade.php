@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="8" name="nro_questao">
        <input type="hidden" value="questao09" name="prox_questao">

        <div class="questao" id="q8" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">08</div>
            <div class="pergunta"> Como você define o seu comportamento? (Marque apenas uma alternativa)
            </div><br><br>
            <div class="alternativas fundoGradient" style="width: auto;margin-left: 1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> a </div> Gosto de organizar
                    <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> b </div> Gosto de compartilhar<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> c </div> Gosto de analisar<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> d </div>Gosto de descobrir<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p8">
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
        limitarCheckboxes(8, 1);

        document.getElementById('p8').onclick = () => {
            if (validateCheckboxs(8, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection






