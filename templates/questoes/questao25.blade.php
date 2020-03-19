@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="25" name="nro_questao">
        <input type="hidden" value="questao26" name="prox_questao">

        <div class="questao" id="q25" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">25</div>
            <div class="pergunta">Eu vejo a morte como...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Uma grande aventura misteriosa <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Oportunidade para rever os falecidos <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Um modo de receber recompensas <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Algo que sempre chega muito cedo <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p25">
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
        limitarCheckboxes(25, 1);

        document.getElementById('p25').onclick = () => {
            if (validateCheckboxs(25, 1)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection