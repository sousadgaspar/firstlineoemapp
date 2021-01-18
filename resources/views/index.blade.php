
@extends('template.master')

@section('content') 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Histórico</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Opções:</div>
                      <a class="dropdown-item" href="#">...</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="history-area">
                    <!-- <canvas id="myAreaChart"></canvas> -->
                    <div class="table-responsive">
                      <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                            <th>Data</th>
                            <th>Comando executado</th>
                            <th>Output</th>
                            <th>Sevidor</th>
                          </tr>
                        </thead>

                        <tbody>
                        @if(isset($userHistory))
                          @foreach($userHistory as $history)
        
                            <tr>
                              <td> {{ $history->created_at->diffForHumans() }} </td>
                              <td> {{ $history->executed_command }} </td>
                              <td> {{ substr($history->output, 0, 50) }}... </td>
                              <td> Server name </td> <!-- this is some thing to solve after-->
                            </tr>

                          @endForeach
                        @endIf
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </div>
        <!-- /.container-fluid -->
@endSection