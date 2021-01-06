@extends('template.master')

@section ('content')


<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Adicionar usuário</h1>
  <p class="mb-4">Nesta sessão você pode adicionar um novo usuário. </p>

  @include('template.fails')
  @include('template.success')

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-7">
          <div class="p-5">
            <form class="user" action="/user/store" method="POST">

              @csrf

              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder=" Nome do usuário">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email do usuário">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                    <select name="section_id" id="section_id" class="form-control form-control-user">
                      @if(isset($sections))
                        @foreach($sections as $section)
                          <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endForeach
                      @endIf
                    </select>
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Senha do usuário">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="submit" class="btn btn-primary" id="password" name="submit" value="Gravar">
                </div>
              </div>
              <hr>
            </form>

            <a href="/user">Ver todos os usuários</a>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endSection