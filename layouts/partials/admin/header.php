<div class="col-md-10 col-sm-11 display-table-cell v-align">
    <div class="row">
        <header>
            <div class="col-md-7">

                <!-- toggle -->
                <nav class="navbar-default pull-left">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </nav>

                <!-- cari -->
                <div class="search hidden-xs hidden-sm">
                    <input type="text" placeholder="Cari" id="search">
                </div>
            </div>

            <!-- header -->
            <div class="col-md-5">
                <div class="header-rightside">
                    <ul class="list-inline header-top pull-right">
                        <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Tambah Paket</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="#" class="icon-info">
                                <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                <span class="label label-primary">3</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <b class="caret"></b>
                            </a>

                                <!-- dropdown -->
                                <ul class="dropdown-menu">
                                    <li>
                                         <div class="navbar-content">
                                            <span>Admin</span>
                                                <p class="text-muted small">
                                                    
                                                </p>
                                                <div class="divider">
                                                    
                                                </div>
                                                    <a href="#" class="view btn-sm active">
                                                        Keluar
                                                    </a>
                                        </div>
                                    </li>
                                 </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
    <!-- user-dashboard -->
    <div class="user-dashboard">
        <h1>Hello</h1>
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                <!-- sales -->
                <div class="sales">
                    <h2>Pembelian</h2>

                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Periode:</span> Tahun
                        </button>
                        <div class="dropdown-menu" name="pembelian">
                            <!-- select menggunakan ajax -->
                            <a href="#">2012</a>
                            <a href="#">2014</a>
                            <a href="#">2015</a>
                            <a href="#">2016</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                <div class="sales report">
                    <h2>Laporan</h2>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Periode:</span> Tahun
                        </button>
                        <div class="dropdown-menu">
                            <a href="#">2012</a>
                            <a href="#">2014</a>
                            <a href="#">2015</a>
                            <a href="#">2016</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>