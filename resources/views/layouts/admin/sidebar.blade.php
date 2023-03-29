<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ url('dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-home-2"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('mastersekolah') }}">Master Database Sekolah</a></li>
                    <li><a href="{{ url('masterjurusan') }}">Master Jurusan</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('datacalonsiswa') }}">Calon Siswa</a></li>
                    <li><a href="{{ url('rangkingcalonsiswa') }}">Ranking</a></li>
                </ul>
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./uc-select2.html">Select 2</a></li>
                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                </ul>
            </li> --}}
        </ul>

        {{-- <div class="drum-box">
            <img src="images/card/drump.png" alt="">
            <p class="fs-18 font-w500 mb-4">Start Plan Your Workout</p>
            <a class="" href="javascript:;">Check schedule
                <svg class="ml-3" width="6" height="12" viewBox="0 0 6 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 12L6 6L0 0" fill="#BCD7FF" />
                </svg>
            </a>
        </div> --}}
        <div class="copyright">
            <p><strong>Fito Fitness Admin Dashboard</strong> ©All Rights Reserved</p>
            <p>by DexignZone</p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
