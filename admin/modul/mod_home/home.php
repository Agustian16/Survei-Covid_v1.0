<?php 
error_reporting(0);
session_start();
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];


$sql_nilai_l  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT count(*) as jum FROM tbl_nilai WHERE keterangan='Resiko Rendah'");
$r_nilai_l    = mysqli_fetch_array($sql_nilai_l);
$lulus=$r_nilai_l['jum'];

$sql_nilai_tl  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT count(*) as jum FROM tbl_nilai WHERE keterangan='Resiko Sedang'");
$r_nilai_tl    = mysqli_fetch_array($sql_nilai_tl);
$tidak_lulus=$r_nilai_tl['jum'];

$sql_user  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT count(*) as jum FROM tbl_user WHERE statusaktif='Y'");
$r_user    = mysqli_fetch_array($sql_user);
$total_user=$r_user['jum'];

$sql_soal  = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT count(*) as jum FROM tbl_soal WHERE aktif='Y'");
$r_soal    = mysqli_fetch_array($sql_soal);
$total_soal=$r_soal['jum'];



?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <!--   <h3 class="page-header"> Peraturan </h3> -->

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Dashboard
                        </div>
                        <div class="panel-body">


                          <h3>SELAMAT DATANG ADMIN</h3>

                            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $lulus ?></div>
                                    <div>Resiko Rendah</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $tidak_lulus ?></div>
                                    <div>Resiko Sedang</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_user ?></div>
                                    <div>Total User</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_soal ?></div>
                                    <div>Total Soal</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


                        </div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                    </div>    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->