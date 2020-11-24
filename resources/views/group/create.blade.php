@extends('template.master')

@section ('content')


<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Adicionar grupo de servidores</h1>
  <p class="mb-4">Nesta sessão você adicionar novos grupos de servidores. Um grupo de servidores pertence a uma solução e pode ter vários servidores associados. </p>
    @include('template.fails')
    @include('template.success')
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-7">
          <div class="p-5">
            <form class="user" action="/group/store" method="POST">

              @csrf

              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for="solution_id">Solução:</label>
                  @if(isset($solutions))
                  <select name=solution_id class="form-control form-control-user" id="exampleFirstName">
                    @foreach($solutions as $solution)
                      <option value="{{$solution->id}}">{{ $solution->name }}</option>
                    @endForeach
                  </select>
                  @endIf
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for="name">Nome nome do grupo:</label>
                  <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <label for="description">Descrição:</label>
                  <textarea 
                    style="width: 100%"
                    name="description" 
                    class="form-control form-control-user" 
                    value=''
                    placeholder="Descri&ccedil;&atilde;o da solu&ccedil;&atilde;o">
                  </textarea>
                </div>
              </div>
              <div class="col-sm-12">
                  <input type="submit" value="Cadastrar" class="btn btn-primary btn-user btn-block " id="">
              </div>
              <hr>
            </form>
            <div class="">
            <br>
            <a href="/group">Ver todos os grupos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endSection