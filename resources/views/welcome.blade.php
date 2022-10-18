@extends('layouts.template')

    @section('scripts')
    <script src="https://kit.fontawesome.com/0ddd7f20dc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    @endsection

    @section('title') Home @endsection

    @section('estilo')
    <!-- Estilo de datalist - sem uso - --> 
    datalist {
            width: 94%;
            margin-top: 45px;
            position: absolute;
            background-color: white;
            max-height: 20rem;
            overflow-y: auto
        }

        option {
            padding: 9px;
            cursor: pointer;
            font-weight: 600;
        }

        option:hover, .active{
            background-color: #616161;
        }
        <!-- Fim estilo de datalist - sem uso - --> 
    @endsection


    @section('nav&footer')

    <!-- Início mensagem -->
	@if(session('Mensagem'))
		<div class="row">
			<div class="alert alert-success text-center py-3">
				{{ session('Mensagem') }}
			</div>
		</div>
	@endif

	@if(session('Retorno'))
		<div class="row">
			<div class="alert alert-danger text-center py-3">
				{{ session('Retorno') }}
			</div>
		</div>
	@endif
	<!-- Fim mensagem -->

    <!-- Pesquisa principal -->
    <div class="row align-items-center justify-content-center" style="height: 500px;">
        <div class="col-lg-4 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5">

            <div class="container text-center mb-2">
                <span class="text-white" style="font-size: 52pt;">dio</span>
                <span style="color: #039be5; font-size: 52pt;">docs</span><br>
            </div>

            <form id="form" action="{{ route('listapopscidade') }}" method="POST">
            @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquise por uma cidade" id="procuraCidade" list="somethingelse" name="search" autocomplete="off">
                    <datalist id="somethingelse"></datalist>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary" style="background-color: #039be5;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Fim pesquisa principal -->

    <!-- Scripts -->
    <script type="text/javascript">
        $('#procuraCidade').on('keyup',function(){
            $value = $(this).val();

            $.ajax({
                type : 'get',
                url : '{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                    $('datalist').html(data);
                }
            });
        });
        
        /* Script para adaptar datalist - sem uso no momento - 
        procuraCidade.onfocus = function () {
            somethingelse.style.display = 'block';
            procuraCidade.style.borderRadius = "5px 5px 0 0";  
        };

        for (let option of somethingelse.options) {
            option.onclick = function () {
                procuraCidade.value = option.value;
                somethingelse.style.display = 'none';
                procuraCidade.style.borderRadius = "5px";
            }
        };

        procuraCidade.oninput = function() {
        currentFocus = -1;
        var text =  procuraCidade.value.toUpperCase();

            for (let option of somethingelse.options) {
                if(option.value.toUpperCase().indexOf(text) > -1){
                    option.style.display = "block";
                 } else {
                    option.style.display = "none";
                 }
            };
        }

        var currentFocus = -1;
        procuraCidade.onkeydown = function(e) {
            if(e.keyCode == 40){
                currentFocus++
                addActive(somethingelse.options);
            }
             else if(e.keyCode == 38){
                currentFocus--
                addActive(somethingelse.options);
             }
              else if(e.keyCode == 13){
                e.preventDefault();
                    if (currentFocus > -1) {
                    //and simulate a click on the "active" item:
                    if (somethingelse.options) somethingelse.options[currentFocus].click();
                    }
            }
        }

        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("active");
        }
        function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("active");
            }
        } 
        Fim script para adaptar datalist - sem uso no momento - */
	</script>
	<!-- Fim Scripts -->

    @endsection