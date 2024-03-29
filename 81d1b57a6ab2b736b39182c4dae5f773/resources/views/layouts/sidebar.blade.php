<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                <li class="active"><a href="{{ url('/admin/dashboard')}}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-refresh"></i><span>Beranda</span></a>
                    <ul class="sub-menu">
                      <li><a href="form-elements.html">Elements</a>
                      </li>
                      <li><a href="form-validation.html">Validation</a>
                      </li>
                      <li><a href="form-multiselect.html">Multiselect</a>
                      </li>
                      <li><a href="form-wizard.html">Wizard</a>
                      </li>
                      <li><a href="form-masks.html">Input Masks</a>
                      </li>
                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                      </li>
                      <li><a href="form-upload.html">Multi Upload</a>
                      </li>
                      <li><a href="form-editable.html">X-editable</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-graduation-cap"></i><span>Profil</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{ url('/admin/sejarah')}}">Sejarah</a>
                      </li>
                      <li><a href="{{ url('/admin/visim')}}">Visi & Misi</a>
                      </li>
                      <li><a href="{{ url('/admin/kepsek')}}">Sambutan Kepsek</a>
                      </li>
                      <li><a href="{{ url('/admin/fasilitas')}}">Fasilitas</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-edit"></i><span>Berita</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{ url('/admin/berita')}}">Artikel</a>
                      </li>
                    </ul>
                  </li>
                 
                  <li ><a href="#"><i class="icon mdi mdi-wallpaper"></i><span>Galeri</span></a></li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Jurusan</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{ url('/admin/rpl')}}">RPL</a>
                      </li>
                      <li><a href="{{ url('/admin/mm')}}">MM</a>
                      </li>
                      <li><a href="{{ url('/admin/tkj')}}">TKJ</a>
                      </li>
                    </ul>
                    <li class="parent"><a href="#"><i class="icon mdi mdi-flag"></i><span>Kesiswaan</span></a>
                      <ul class="sub-menu">
                        <li><a href="{{ url('/admin/osis')}}">Osis</a>
                        </li>
                        <li><a href="email-read.html">Ekstra Kulikuler</a>
                        </li>
                        <li><a href="email-compose.html">Prestasi</a>
                        </li>
                        <li><a href="email-compose.html">Event</a>
                        </li>
                      </ul>
                    </li>
                    <li class="parent"><a href="#"><i class="icon mdi mdi-assignment-account"></i><span>Hubungan</span></a>
                      <ul class="sub-menu">
                        <li><a href="layouts-primary-header.html">Alumni</a>
                        </li>
                        <li><a href="layouts-success-header.html">Unit Produksi</a>
                        </li>
                        <li><a href="layouts-warning-header.html">Kerjasama Industri</a>
                        </li>
                      </ul>
                    </li>
                  </li>
                  <li><a href="{{ url('/admin/kritiksaran')}}"><i class="icon mdi mdi-comment-text"></i><span>Kritik&amp;Saran</span></a>
                  @if (auth::user()->group_id==1)
                  <li class="divider">User</li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-account-o"></i><span>User</span></a>
                    <ul class="sub-menu">
                          <li><a href="{{ url('/admin/user')}}">Data User</a>
                    </li>
                          <li><a href="{{ url('/admin/create')}}">Buat User</a>
                    </li>    
                    </li>
                          <li><a href="charts-flot.html">User aktif</a>
                    </li>
                          <li><a href="charts-sparkline.html">Total pengunjung</a>
                    </li>
                    </ul>
                    </li>
                  @endif
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      