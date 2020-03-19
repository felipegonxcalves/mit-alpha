@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="24" name="nro_questao">
        <input type="hidden" value="questao25" name="prox_questao">

        <div class="questao" id="q24" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">24</div>
            <div class="pergunta">Um ótimo dia para mim é quando...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Consigo fazer muitas coisas <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Me divirto com meus amigos <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Tudo segue conforme planejado <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Desfruto de coisas novas e estimulantes <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p24">
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
        limitarCheckboxes(24, 1);

        document.getElementById('p24').onclick = () => {
            if (validateCheckboxs(24, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection