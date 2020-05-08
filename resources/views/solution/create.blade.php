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
            <form class="user" action="/solution/store" method="POST">

              @csrf

              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <label for="name">Nome da solução:</label>
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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endSection