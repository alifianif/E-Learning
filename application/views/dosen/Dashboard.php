<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-learning</title>
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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/search.css">
</head>
<body>
    <div>

        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">E-Learning</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <!--
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Welcome to E-learning </li>
                        <li></li>
                    </ul>
                </div>-->
                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url();?>assets/images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url().'Dashboard/logout' ?>"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </nav>
          
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
                   
                    <li><a href="<?php echo base_url().'Tugas'?>"><i class="fa fa-file-o fa-fw">
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
                            Materi</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Materi</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Materi</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div style ="background-color: white">
                  <h1><p>Tambah Materi </p></h1>

                <form action="<?php echo base_url().'Dashboard/insertMateri'?>" method="post">
                <table style="width: 500px">
                    <tr>
                        <td> <label class="col-sm-3 control-label">Judul</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> <input type="text" name="judul" class="form-control" placeholder="judul materi"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Matakuliah</label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> 
                            <select class='form-control' name="nama_matkul">
                            <option value='0'>--pilih--</option>
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
                        <td> <input type="text" name="kelas" class="form-control" placeholder="kelas"></td>

                    </tr>
                    <tr><td><br/></td></tr>
                    <tr>
                        <td> <label class="col-sm-3 control-label">Upload File </label></td>
                        <td>&nbsp;&nbsp;</td>
                        <td> 

<input id="input-ficons-1" name="inputficons1" multiple type="file" class="file-loading">
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

                &nbsp;&nbsp;&nbsp;&nbsp;<div class="box-body">
                <h1 class="box-title">Daftar Materi</h1 >
                 
                                <h5>Keterangan :</h5><p>
                                <span class="label label-danger"><span class="fa fa-trash"></span></span> untuk "Hapus". &nbsp;&nbsp;
                                <span class="label label-warning"><span class="fa fa-edit"></span></span> untuk "Edit". &nbsp;&nbsp;
                                </p>
                            </div>
                            <!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">-->
               &nbsp;&nbsp;&nbsp;&nbsp; <table class="table table-bordered table-striped" id="KepalaArea">
               <thead>
            <tr>
                <td>Kode Materi</td> 
                <td>Nama Matakuliah</td>
                <td>Judul</td>
                <td>Kelas</td>
                <td>File</td>
                <td>Action</td>
                
            </tr> </thead><tbody>
            <?php foreach($tabelMateri as $baris){ ?>
            <tr>
        <td><?php echo $baris->kd_materi; ?></td>
        <td><?php echo $baris->nama_matkul; ?></td>
        <td><?php echo $baris->nama_materi; ?></td>
        <td><?php echo $baris->kelas; ?></td>
        <td><?php echo $baris->isi_materi; ?></td>
        
        
        <td> 
               <a href="<?php echo base_url('/Dashboard/delMateri/'.$baris->kd_materi);?>"><button type="button" class="btn btn-xs btn-danger" data-toggle="modal"><span class="fa fa-trash"></span></button> </a>
                
            <a href="<?php echo base_url('/Dashboard/formeditDosen/'.$baris->kd_materi);?>"><button type="button" class="btn btn-xs btn-warning"><span class="fa fa-edit"></span></button></a> 
        
            </td>
            <?php } ?>
            
            </tr>
            </tbody>
        </table>
              
</form>

                <div class="page-content" >
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                             <div class="page-content">
                               
                            
                           

                        
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="#">Kelompok 5 IMPAL Copyright © 2016</a></div>
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
     <script src="<?php echo base_url();?>assets/js/search.js"></script>
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
   <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("Id_Tab");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
  <script>
        $(document).ready(function() {
            $('#KepalaArea').DataTable( {
              "autoWidth": true,
              //"bFilter": false,
              "responsive": true
            } );
        } );
    </script>

    <script src="<?php echo base_url();?>assets/script/main.js"></script>
    <!--<script>        (function (i, s, o, g, r, a, m) {
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
    -->
</body>
</html>
