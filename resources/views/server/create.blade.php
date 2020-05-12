@extends('template.master');

@section ('content')


<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Adicionar Servidor</h1>
  <p class="mb-4">Nesta sessão você pode configurar um novo servidor para posteriormente adicionar comandos de formas a serem executados em interfaces gráficas. </p>

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-7">
          <div class="p-5">
            <form class="user" action="/server/store" method="POST">

              @csrf

              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder=" Nome do servidor">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                    <select name="server" id="" class="form-control form-control-user">
                      <option value="solutionId">SMSC</option>
                      <option value="solutionId">VMS</option>
                      <option value="solutionId">ADC</option>
                      <option value="solutionId">Bubble</option>
                    </select>
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <select name="location" id="" class="form-control form-control-user">
                      <option value="solutionLocation1">Luanda Sul</option>
                      <option value="solutionLocation2">Filda</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" 
                        class="form-control form-control-user" 
                        id="serverIP" 
                        placeholder="IP: exemplo: 192.168.0.0">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="submit" value="Cadastrar" class="btn btn-primary btn-user btn-block " id="">
                </div>
              </div>
              <hr>
            </form>

            <a href="/solution">Ver todos os servidores</a>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endSection