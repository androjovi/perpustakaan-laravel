<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    LIBRARY LARAVEL
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ URL::to('/') }}">
                        <i class="pe-7s-graph"></i>
                        <p>DAFTAR BUKU</p>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/tambah_buku') }}">
                        <i class="pe-7s-user"></i>
                        <p>TAMBAH BUKU</p>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/siswa') }}">
                        <i class="pe-7s-note2"></i>
                        <p>LIST SISWA</p>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/daftar') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>PENDAFTARAN ANGGOTA</p>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/peminjam') }}">
                        <i class="pe-7s-science"></i>
                        <p>PEMINJAMAN</p>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('list_peminjam') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>LIST PEMINJAM</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0)" onclick="alert('Kena tipuu.....')">
                                <p>[Log out]</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>