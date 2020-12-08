
@extends('template.master')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="">
            <h1 class="">{{ $server->name }}</h1>
            <div class="card mb-4 py-3 border-left-primary">
              <div class="row">
                <div class="col-md-3">
                  <div class="card-body">
                    <div class='.bg-gray-100 p3'> {{ $server->solution->name }}: {{ $server->group->name }}</div>
                    {{ $server->solution->description }}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class='.bg-gray-100 p3'> {{ $server->ip }}</div>
                  {{ $server->location }}
                </div>
              </div>
            </div>
          </div>
          <h2 class="h6 mb-0 text-gray-800">{{ $server->description }}</h2>
          <!-- Content Row -->

          <div class="row">

            <!-- Resultado do comando -->
            @if(isset($result))
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold">Terminal de output @if(isset($command)) '{{ $command->name }}' @endIf</h6>
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
                    <h6 class="m-0 font-weight-bold">Terminal de output @if(isset($command)) '{{ $command->name }}' @endIf</h6>
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
                  <h6 class="m-0 font-weight-bold text-primary">Comados e tarefas</h6>
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
                  <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 command-area">
                      <div class="row">
                        <div class="col-sm-12">
                        @if(isset($server->commands))
                          @foreach($server->commands as $savedCommand)
                            <a href="/server/{{$server->id}}/execute/command/{{$savedCommand->id}}" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-terminal"></i>
                                </span>
                                <span class="text">{{$savedCommand->name}}</span>
                            </a>
                            <p>
                              {{ $savedCommand->description }}
                            </p>
                            <hr>
                          @endforeach
                        @endIf
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">
            @if(isset($command))
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informações '{{ $command->name }}'</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <div class="text-left">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 8rem;" src="/img/undraw_server_cluster_jwwq.svg" alt="">
                      </div>
                    </div>
                    <div class="col-md-11">
                      <label> <strong>Comando executado:</strong> '{{ $command->command_sequence }}'</label>
                      <br />
                      <label> <strong>Descrição:</strong> '{{ $command->description }}'</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endIf

            @if(isset($command->expectedResult))
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Resultado esperado '{{ $command->name }}'</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 expectedResultCard">
                      <label>@if(isset($command))<pre>{{ $command->expectedResult }}</pre> @endIf</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endIf
          </div>

          @if(isset($command->explanation))
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Detalhes adicionais '{{ $command->name }}'</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <div class="text-left">
                        <img class="img-fluid px-3 px-sm-3 mt-3 mb-4" style="width: 8rem;" src="/img/undraw_Search_re_x5gq.svg" alt="">
                      </div>
                    </div>
                    <div class="col-md-11">
                      <p>{{ $command->explanation }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endIf
          </div>
        </div>
        <!-- /.container-fluid -->
@endSection