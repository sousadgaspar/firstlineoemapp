@extends('template.master')

@section ('content')


<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Nova solu&ccedil;&atilde;o</h1>
            </div>
            <form class="user" action="/solution/update" method="POST">

              @csrf
              @if(isset($solution))
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" 
                      name="name" 
                      class="form-control form-control-user" 
                      id="exampleFirstName"
                      placeholder=" Nome da solu&ccedil;&atilde;o"
                      value="{{$solution->name}}">
                    <input type="hidden" name="id" value="{{$solution->id}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <textarea 
                      style="width: 100%"
                      name="description" 
                      class="form-control form-control-user" 
                      placeholder="Descri&ccedil;&atilde;o da solu&ccedil;&atilde;o">
                      {{ $solution->description }}
                    </textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="submit" value="Actualizar" class="btn btn-primary btn-user btn-block " id="">
                  </div>
                  <div class="col-md-6">
                    <input type="" value="Cancelar" onclick="goBack()" class="btn btn-secondary btn-user btn-block " id="">  
                  </div>
                </div>
                <hr>
              @else
                <div class="alert alert-danger">
                  <p>Houve um erro com o registo que está a tentar actualiar.</p>
                  <a href="/solution" class="btn btn-primary">Voltar</a>
                </div>
              @endIf
            </form>
            <div class="text-center">
              <p>Dica:</p>
            </div>
            <div class="text-center">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

              <p>
                1. Digite o nome da solu&ccedil;&atilde;o. (Ex.: SMSC) <br>
                2. Digite uma breve descri&ccedil;&atilde;o da solu&ccedil;&atilde;o.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endSection