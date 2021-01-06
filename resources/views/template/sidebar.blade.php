    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-server"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> O&M Toolkit </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Acesso rapido
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      @if(isset($solutions))
        @foreach($solutions as $solution)
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{$solution->id}}" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-server"></i>
              <span>{{ $solution->name }}</span>
            </a>
            <div id="collapse{{$solution->id}}" class="collapse" aria-labelledby="heading{{$solution->id}}" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                @foreach($solution->groups as $group)

                  <h6 class="collapse-header">{{ $group->name }}</h6>
                  @foreach($group->servers as $server)
                    <a class="collapse-item" href="/server/{{$server->id}}">{{ $server->name }}</a>
                  @endForeach

                @endForeach
              </div>
            </div>
          </li>
        @endForeach
      @endIf

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Administra&ccedil;&atilde;o</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Soluções:</h6>
            <a class="collapse-item" href="/solution/create">Adicionar solu&ccedil;&atilde;o</a>
            <a class="collapse-item" href="/solution">Ver todas as soluções</a>
            <hr>
            <h6 class="collapse-header">Grupos:</h6>
            <a class="collapse-item" href="/group/create">Adicionar novo grupo</a>
            <a class="collapse-item" href="/group">Ver Grupos</a>
            <hr>
            <h6 class="collapse-header">Servidores:</h6>
            <a class="collapse-item" href="/server/create">Adicionar servirdor</a>
            <a class="collapse-item" href="/server">Ver servidores</a>
            <hr>
            <h6 class="collapse-header">Comandos:</h6>
            <a class="collapse-item" href="/command/create">Configurar tarefa</a>
            <a class="collapse-item" href="/commands">Ver tarefas</a>
            <hr>
            <h6 class="collapse-header"><strong>Secções:</strong></h6>
            <a class="collapse-item" href="/section/create">Adicionar secção</a>
            <a class="collapse-item" href="/section">Ver todas as secções</a>
            <hr>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->