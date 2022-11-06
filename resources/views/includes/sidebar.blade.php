<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('back/assets/img/profile.jpg') }}"
                         alt="..."
                         class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse"
                       href="#collapseExample"
                       aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in"
                         id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="
                        fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}">
                        <i class="
                        far fa-list-alt"></i>
                        <p>Kategori</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Artikel</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('playlist.index') }}">
                        <i class="far fa-folder-open"></i>
                        <p>Playlist</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('materi.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Materi</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">

                    <a class="dropdown-item"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="fas fa-undo"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->