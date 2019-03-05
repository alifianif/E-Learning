<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Grid | Data Grid</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/icons/favicon-114x114.png">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/jquery.news-ticker.css">
     <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/jplist-custom.css">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
   
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
                  <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">KAdmin</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                   
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url();?>assets/images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url().'Dashboard/logout'?>"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                </ul>
            </div>
        </nav>
           
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                    <div class="clearfix"></div>
                    <li class="active"><a href="<?php echo base_url().'Dashboard'?>"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Materi</span></a>
                      
                    </li>                  
                    <li><a href="Kuis_Mhs.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Kuis</span></a>
                      
                    </li>
                   
                    <li><a href="<?php echo base_url().'Dashboard/tugas'?>"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Tugas</span></a>
                       
                    </li>
                    
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tugas</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Tugas</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tugas</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class="col-lg-12">

   <?php 
            $kode_tugas="";
            $judul="";
            $desk="";
            $nama_matkul="";
            $kelas=""; 
            $tgl_mulai="";
            $tgl_akhir="";
            $jam="";
            $file=""; 
            foreach($tugas as $baris){
            $kode_tugas=$baris->kd_tugas;
            $judul=$baris->judul_tugas;
            $desk=$baris->desk_tugas;
            $nama_matkul=$baris->nama_matkul;
            $kelas=$baris->kelas; 
            $tgl_mulai=$baris->tgl_mulai;
            $tgl_akhir=$baris->tgl_akhir;
            $jam=$baris->jam;
            $file=$baris->tugas;            
            }
            ?>
                                
  <div style ="background-color: white">
  <h1><p>Tambah Tugas </p></h1>
                <form action="<?php echo base_url().'Tugas/simpaneditMateriDosen'?>" method="post">
                <table style="width: 500px">
                      <tr>
                        <td> <label class="col-sm-3 control-label">Kode Tugas</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="text" name="kd_tugas" class="form-control" disabled value="<?php echo $kode_tugas;?>"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Judul</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="text" name="judul" class="form-control" placeholder="judul tugas" value="<?php echo $judul;?>"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                     <tr>
                        <td> <label class="col-sm-3 control-label">Deskripsi Tugas</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td><textarea name="desk" class="form-control" placeholder="deskripsi tugas" value="<?php echo $desk;?>"></textarea> </td>
                        
                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Matakuliah</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> 
                            <select class='form-control' name="nama_matkul">
                            <option value='<?php echo $nama_matkul;?>'><?php echo $desk;?></option>
                            <?php 
                            foreach ($list_matkul as $matkuls) {
                            echo "<option value='$matkuls[nama_matkul]'>$matkuls[nama_matkul]</option>";
                            }
                            ?>
                            </select>
                        </td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Kelas</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="text" name="kelas" class="form-control" placeholder="kelas" value="<?php echo $kelas;?>"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Tanggal Mulai</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="text" name="tgl_mulai" class="form-control" placeholder="Tanggal mulai tugas"  value="<?php echo $tgl_mulai;?>" disabled></td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Tanggal Akhir pengumpulan</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="date" name="tgl_akhir" class="form-control" placeholder="durasi tanggal pengerjaan" value="<?php echo $tgl_akhir;?>"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                     <tr>
                        <td> <label class="col-sm-3 control-label">Durasi Jam</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="time" name="jam" class="form-control" placeholder="durasi tanggal pengerjaan" value="<?php echo $jam;?>"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Upload File </label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> 

<input id="input-ficons-1" name="inputficons1" multiple type="file" class="file-loading" value="<?php echo $file;?>">
<script>
$("#input-ficons-1").fileinput({
    uploadUrl: "/file-upload-batch/2",
    uploadAsync: true,
    previewFileIcon: '<i class="fa fa-file"></i>',
    allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
    previewFileIconSettings: {
        'docx': '<i class="fa fa-file-word-o text-primary"></i>',
        'xlsx': '<i class="fa fa-file-excel-o text-success"></i>',
        'pptx': '<i class="fa fa-file-powerpoint-o text-danger"></i>',
        'jpg': '<i class="fa fa-file-photo-o text-warning"></i>',
        'pdf': '<i class="fa fa-file-pdf-o text-danger"></i>',
        'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
    }
});
</script>
                        </td>

                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <td></td>
                        <td colspan="2"> 

                        <button type="submit" class="btn btn-green" align="center" >SAVE</button></td>
                       
                    </tr>
                </table>
              
                </div>
            </div>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                </form>
            </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/script/html5shiv.js"></script>
    <script src="<?php echo base_url();?>assets/script/respond.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/script/icheck.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.news-ticker.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.menu.js"></script>
    <script src="<?php echo base_url();?>assets/script/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/holder.js"></script>
    <script src="<?php echo base_url();?>assets/script/responsive-tabs.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/script/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url();?>assets/script/zabuto_calendar.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/index.js"></script>
    <script src="<?php echo base_url();?>assets/script/highcharts.js"></script>
    <script src="<?php echo base_url();?>assets/script/data.js"></script>
    <script src="<?php echo base_url();?>assets/script/drilldown.js"></script>
    <script src="<?php echo base_url();?>assets/script/exporting.js"></script>
    <script src="<?php echo base_url();?>assets/script/highcharts-more.js"></script>
    <script src="<?php echo base_url();?>assets/script/charts-highchart-pie.js"></script>
    <script src="<?php echo base_url();?>assets/script/charts-highchart-more.js"></script>
    <script src="<?php echo base_url();?>assets/script/modernizr.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jplist.min.js"></script>
    <script src="<?php echo base_url();?>assets/script/jplist.js"></script>

    <!--CORE JAVASCRIPT-->
    <script src="<?php echo base_url();?>assets/script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
