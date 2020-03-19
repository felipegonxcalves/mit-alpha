@extends('questoes.main_questoes')

@section('content')
    <form id="form1" action="{{ route('questoes.store') }}" method="post">
        {{ csrf_field() }}

        <div class="questao" id="q39" style="width: 85vw; ">
            <div>
                <div class="fundoGradient" style="height: 320px;width: 715px;border-radius: 5px;">
                    <div id="final" class="azul">
                        <span>Seu teste foi enviado com sucesso!</span>
                    </div>
                    <!-- <button id="fechar" onclick="fechar()">FECHAR</button> -->
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js_page')
    <script>
        // limitarCheckboxes(39, 1);
        //
        // document.getElementById('p3').onclick = () => {
        //     if (validateCheckboxs(39, 1)){
        //         document.getElementById('form1').submit();
        //     }
        // }
    </script>
@endsection