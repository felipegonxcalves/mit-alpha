@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="6" name="nro_questao">
        <input type="hidden" value="questao07" name="prox_questao">

        <div class="questao" id="q6" style="width: 80vw;height: 430;">
            <div class="numero">06</div>
            <div class="pergunta"> Quando aprendo, gosto de...(Marque cinco alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 260px;float: left;">
                <label class="linha">
                    <div class="letra"> a </div> Avaliar e testar teorias<input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> b </div> Obter e quantificar fatos<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> c </div> Ouvir e compartilhar ideias<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> d </div> Usar minha imaginação<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> e </div> Aplicar análise e lógica<input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> f </div> Ambiente bem informal<input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> g </div> Verificar meu entendimento<input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> h </div> Fazer experiências práticas<input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> i </div> Pensar sobre as ideias<input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> j </div> Confiar nas instituições<input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 330px;float: right;">
                <label class="linha">
                    <div class="letra"> k </div> Receber informações passo a passo<input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> l </div> Tomar iniciativas<input type="checkbox" name="check_per_1[]" value="l">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> m </div> Elaborar teorias<input type="checkbox" name="check_per_1[]" value="m">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> n </div> Envolvimento emocional<input type="checkbox" name="check_per_1[]" value="n">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> o </div> Trabalhar em grupo <input type="checkbox" name="check_per_1[]" value="o">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> p </div> Orientações claras<input type="checkbox" name="check_per_1[]" value="p">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> q </div> Fazer descobertas<input type="checkbox" name="check_per_1[]" value="q">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> r </div> Criticar<input type="checkbox" name="check_per_1[]" value="r">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> s </div> Perceber logo o quadro geral (objetivo final)<input type="checkbox" name="check_per_1[]" value="s">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> t </div> Adquirir habilidade pela prática<input type="checkbox" name="check_per_1[]" value="t">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p6">
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
        limitarCheckboxes(6, 5);

        document.getElementById('p6').onclick = () => {
            if (validateCheckboxs(6, 5)){
                document.getElementById('form1').submit();
            }
        }
    </script>
@endsection






