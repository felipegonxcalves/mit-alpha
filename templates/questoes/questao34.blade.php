@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="34" name="nro_questao">
        <input type="hidden" value="questao35" name="prox_questao">

        <div class="questao" id="q34" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">34</div>
            <div class="pergunta">Se eu fosse bilionário...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Faria doações para muitas entidades <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Criaria uma poupança avantajada <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Faria o que desse na cabeça <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark">
                </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Me exibiria bastante para algumas pessoas <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p34">
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
        limitarCheckboxes(34, 1);

        document.getElementById('p34').onclick = () => {
            if (validateCheckboxs(34, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection