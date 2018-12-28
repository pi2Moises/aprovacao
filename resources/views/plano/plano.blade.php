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
                <div class="card-header"><strong>Novo Cronograma - Detalhes do Concurso</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="needs-validation" novalidate method="post" action="{{ url('/cad_disciplina') }}">
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationTooltip01">Orgão</label>
                                <input type="text" class="form-control" id="validationTooltip01" name="orgao" placeholder="First name" value=" {{old('orgao')}} " required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Data de Publicação Edital</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Data da Prova</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Banca Organizadora</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltipUsername">Qtde de Vagas</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Salário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">R$</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                       Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Taxa de Inscrição</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">R$</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Prazo para Inscrição</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                       Preencimento obrigatório
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip03">Local da Prova</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                <div class="invalid-tooltip">
                                   Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip04">Cargo</label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                <div class="invalid-tooltip">
                                   Preencimento obrigatório
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1">
                          <label class="custom-control-label" for="customSwitch1">Pré-Edital</label>
                        </div>
                        <br>                      
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="customSwitch2">
                          <label class="custom-control-label" for="customSwitch2">Inscrição Paga?</label>
                        </div>
                        <br>
                        <div class="custom-file col-md-12 mb-3">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Motivacional - Anexar Imagem de Onde Deseja Trabalhar</label>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Anotações</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">Coloque suas anotações aqui</textarea>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Gerar Cronograma de Estudos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
