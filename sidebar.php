<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Cegah Covid-19</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $_SESSION["username"];
                         ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                                <!-- INI BAGIAN SIDEBAR KANAN ATAS -->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php" onclick="return confirm('Apakah anda yakin ?');"><img src="https://img.icons8.com/ios/25/000000/logout-rounded.png"/> Keluar</a>
                                            

<!-- Agussstian -->
                            <li><a href="profileuser.php"><img src="https://img.icons8.com/ios/25/000000/admin-settings-male.png"/></i>Profilku</a>


                        </li>
                    </ul>

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                              
                           
                            <!-- /input-group -->
                        </li>
                        <li >
                            <a href="?hal=home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       

                         <li>
                            <a href="?hal=donasi"><i class="fa fa-user fa-fw"></i>Donasi</a>
                        </li>

                        <li>
                            <a href="?hal=soal"><i class="fa fa-folder fa-fw"></i> Pertanyaan ?</a>
                        </li>

                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>