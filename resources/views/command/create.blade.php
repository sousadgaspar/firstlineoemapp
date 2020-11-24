@extends('template.master')

@section ('content')


<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Adicionar comando ou tarefas</h1>
  <p class="mb-4">Nesta sessão você pode configurar um novo comando ou uma sequência de comandos para executar tarefas de forma simplificada. </p>

  @include('template.fails')
  @include('template.success')

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-7">
          <div class="p-5">
            <form class="user" action="/command/store" method="POST">

              @csrf

              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input 
                  type="text" 
                  class="form-control form-control-user" 
                  id="name" 
                  name="name" 
                  placeholder=" Nome da tarefa">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input 
                    type="text" 
                    class="form-control form-control-user" 
                    id="command_sequence" 
                    name="command_sequence" 
                    placeholder="Comandos separados por ; ex.: ls -l; df -h">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for="server_id">Servidor</label>
                  <select name="server_id" id="" class="form-control form-control-user">
                    @if(isset($servers))
                      @foreach($servers as $server)
                        <option value="{{$server->id}}">{{ $server->name }} - {{ $server->group->name }} - {{ $server->solution->name}}</option>
                      @endForeach
                    @endIf
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for='description'> Descrição</label>
                  <textarea 
                    id="description"
                    name="description"
                    class="form-control form-control-user"
                    placeholder="Descrição do comando" >
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <select name="isReadOnly" id="" class="form-control form-control-user">
                      <option value="0">R--</option>
                      <option value="1">RW-</option>
                      <option value="1">RWX</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="isSuccessResultEmpty">A execução bem sucedida desta tarefa retorna algum texto?</label>
                  <select name="isSuccessResultEmpty" id="isSuccessResultEmpty" class="form-control form-control-user">
                      <option value="true">Sim</option>
                      <option value="false">Não</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for='explanation'>Modo de Funcionamento (opcional)</label>
                  <textarea 
                    id="explanation"
                    name="explanation"
                    class="form-control form-control-user"
                    placeholder="Modo de funcionamento" >
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for='expectedResult'>Resultado esperado (opcional)</label>
                  <textarea 
                    id="expectedResult"
                    name="expectedResult"
                    class="form-control form-control-user"
                    placeholder="Resultado esperado" >
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for='wrongResults'>Resultados errados (opcional)</label>
                  <textarea 
                    id="wrongResults"
                    name="wrongResults"
                    class="form-control form-control-user"
                    placeholder="Possíveis resultados errados" >
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="submit" value="Gravar" class="btn btn-primary btn-user btn-block " id="">
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