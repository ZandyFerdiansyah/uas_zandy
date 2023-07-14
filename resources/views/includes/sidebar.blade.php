<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            
                           <h1><b> ADMIN </b></h1>
                            <!-- <span class="caret"></span> -->
                        </span>
                    </a>
                    <!-- <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                    </div> -->
                </div>
            </div>
           
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a  href="{{route('dasboard')}}"  aria-expanded="true">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <!-- <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                            <a href="">
                                    <span class="sub-item">Dashboard </span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <!-- <h4 class="text-section">Components</h4> -->
                </li>
               
                <li class="nav-item">
                    <a href="{{route('barang.index')}}">
                    <i class="fas fa-inbox"></i>
                        <p>Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pengirim.index')}}">
                    <i class="fas fa-align-justify"></i>
                        <p>Pengiriman</p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{route('lokasi.index')}}">
                    <i class="fas fa-align-justify"></i>
                        <p>Lokasi</p>
                    </a>
                </li>
               
                </li>
                
               
                    <!-- <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                             <i class="fa-solid fa-"></i>
                    {{ __('LOGOUT') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li> -->
            </ul> -->
        <ul>
        <li>
            <a href="{{ route('logout') }}"class="text-justify"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg> LOGOUT  </a>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        
        </ul>
        </div>
        
    </div>
</div>
