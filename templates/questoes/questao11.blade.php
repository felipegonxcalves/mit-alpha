@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="11" name="nro_questao">
        <input type="hidden" value="questao12" name="prox_questao">

        <div class="questao" id="q11" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">11</div>
            <div class="pergunta"> Quando tenho que resolver um problema, eu geralmente...(Marque apenas uma alternativa)

            </div><br><br>
            <div class="alternativas fundoGradient" style="width: auto;margin-left: 1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> a </div> Visualizo os “fatos”, tratando-os de forma intuitiva e holística
                    <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> b </div> Organizo os “fatos”, tratando os detalhes de forma realista e
                    cronológica<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> c </div> Sinto os “fatos”, tratando-os de forma expressiva e interpessoal
                    <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> d </div> Analiso os “fatos”, tratando-os de forma lógica e racional<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p11">
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
        limitarCheckboxes(11, 1);

        document.getElementById('p11').onclick = () => {
            if (validateCheckboxs(11, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection






