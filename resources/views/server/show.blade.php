
@extends('template.master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $server->name }}</h1>
            <small>{{ $server->server_group }}</small>
          </div>

          <h2 class="h6 mb-0 text-gray-800">TAREFAS</h2>
          <hr>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            @if(isset($server->commands))
              @foreach($server->commands as $command)
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ substr($command->description, 0, 55) }}</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <a href="/server/execute/command/{{$command->id}}" class="btn btn-primary btn-icon-split">{{ $command->name }}</a>
                            </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-command fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endForeach
            @endIf

            <hr>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Resultado do comando -->
            @if(isset($result))
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold">Output do comando</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Opções:</div>
                        <!-- <a class="dropdown-item" href="#">x</a> -->
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      <pre class="chart-area-text"> {{ $result }} </pre>
                    </div>
                  </div>
                </div>
              </div>
            @else
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold">Output do comando</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Opções:</div>
                        <!-- <a class="dropdown-item" href="#">x</a> -->
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      <pre class="chart-area-text">... </pre>
                    </div>
                  </div>
                </div>
              </div>
            
            @endIf

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Informações do servidor</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Opções:</div>
                      <!-- <a class="dropdown-item" href="#">x</a> -->
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <ul>
                      <li>Servidor: {{$server->name}}</li>
                      <li>Descrição: {{$server->description}}</li>
                      <li>Pertence a Solução: {{$server->solution->name}}</li>
                      <li>Pertence ao grupo: {{$server->group->name}}</li>
                      <li>IP: {{$server->ip}}</li>
                      
                      <li>Site: {{$server->location}}</li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-6 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Mais informações do servidor</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="text-left">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 8rem;" src="/img/undraw_server_cluster_jwwq.svg" alt="">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <p><strong>Descrição da solução: </strong>{{ $server->solution->description }}</p>
                      <p><strong>Descrição do grupo: </strong>{{ $server->group->description }}</p>
                      <p>{{ $server->description }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Modo de funcionamento</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="text-left">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 8rem;" src="/img/undraw_book_reading_kx9s.svg" alt="">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <p><strong>Descrição da solução: </strong>{{ $server->solution->description }}</p>
                      <p><strong>Descrição do grupo: </strong>{{ $server->group->description }}</p>
                      <p>{{ $server->description }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="row">

            @if(isset($command->expected_result))
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Formato do resultado esperado</h6>
                </div>
                <div class="card-body">
                  <div class="col-md-3">
                    <div class="text-left">
                      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 16rem;" src="/img/undraw_Search_re_x5gq.svg" alt="">
                    </div>
                  </div>
                  <div class="col-md-9">
                    <p>{{ $command->expected_result }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endIf

        </div>
        <!-- /.container-fluid -->
@endSection