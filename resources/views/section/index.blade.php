@extends('template.master')

@section ('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Secções</h1>
          <p class="mb-4">Nesta sessão você encontra todas as soluções e os seus respectivos nós disponíveis no sistema. </p>

          @if(isset($section))
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nova secção adicionada com sucesso no sistema.</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $section->name }} </div>
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> {{ $section->description }} </div>
                    </div>
                  </div>
                </div>
              </div>
          @endIf

          @if(isset($status))
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> {{ $status }}</div>
                    </div>
                  </div>
                </div>
              </div>
          @endIf

          <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="/section/create" class="btn btn-success">Adicionar nova secção</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Descrição</th>
                      <th>Acções</th>
                    </tr>
                  </thead>

                  <tbody>
                  @if(isset($sections))
                    @foreach($sections as $section)
  
                      <tr>
                        <td> {{ $section->name }} </td>
                        <td> {{ $section->description }} </td>
                        <td>
                          <a href="/section/delete/{{$section->id}}" 
                              id="deletesectionButton" 
                              onclick="preventLivePage()" 
                              class="btn btn-danger btn-sm">
                          Apagar</a>

                          <a href="/section/show/{{$section->id}}" class="btn btn-secondary btn-sm">Modificar</a>
                        </td>
                      </tr>

                    @endForeach
                  @endIf
                  </tbody>

                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endSection