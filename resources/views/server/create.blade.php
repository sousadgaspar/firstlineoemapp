@extends('template.master');

@section ('content')


<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Adicionar novo servidor</h1>
            </div>
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
                      <option value="solutionId">Luanda Sul</option>
                      <option value="solutionId">Filda</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="text" 
                        class="form-control form-control-user" 
                        id="serverIP" 
                        placeholder="IP: exemplo: 192.168.0.0">
              </div>

              <div class="col-sm-6">
                  <input type="submit" value="Cadastrar" class="btn btn-primary btn-user btn-block " id="">
                </div>
              <hr>
            </form>
            <div class="text-center">
              <p>Dica:</p>
            </div>
            <div class="text-center">
              <p>
                1. Digite o nome t&eacute;cnico do servidor. (Ex.: TCRLS01) <br>
                2. Digite o IP de Opera&ccedil;&atilde;o e Manuten&ccedil;&atilde;o
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endSection