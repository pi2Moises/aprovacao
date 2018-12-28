@extends('layouts.app')

@section('content')

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Cadastrar Disciplina</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationTooltip01">Disciplina</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Nome da disciplina" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Qtde de Aulas</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Ex: 30" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Carga Horária</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Ex: 50" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Professor</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Ex: Fulano da Silva" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltipUsername">Meta de Questões</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Ex: 200" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <br>
                        <label>Nível de Dificuldade</label>                      
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">Baixo</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">Médio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio3">Alto</label>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Cadastrar Disciplinar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
