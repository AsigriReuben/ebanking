<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= isset($title)? $title: 'untitled'?></title>
<link rel="shortcut icon" type="image/icon" href="<?= base_url('assets/images/logo6.jpg')?>"/>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/cpanel/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/cpanel/css/sb-admin.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/customized.css')?>" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?= base_url('assets/cpanel/css/plugins/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/cpanel/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>

            <div id="wrapper">
                  <?php

if ($this->session->flashdata('error')!= '') {?>
<div class="container">
    <?php
    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') .'</div>';?> 
</div>
 <?php } if ($this->session->flashdata('success') != '') { ?>
        <div class="container">
            <?php 
            echo '
            <div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';?>
        </div>
            <?php 
    
}

?>
            <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url('cpanel/index/'.$this->uri->segment(3))?>">Admin</a><img src="<?= base_url('uploads/'.$staff_info[0]['passport_name'])?>" class="img-thumbnail img-responsive img-circle" alt="avatar" style="height: 50px; width: 50px; float: right;">
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            
          
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $staff_info[0]['staff_firstname'].' '.$staff_info[0]['staff_surname']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= base_url('admin/profile/'. $this->uri->segment(3))?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li>
                            <a href="<?= base_url('logout/'.$this->uri->segment(3))?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?= base_url('cpanel/index/'.$this->uri->segment(3))?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="<?= base_url('cpanel/forms/'.$this->uri->segment(3))?>"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="<?= base_url('cpanel/transaction/'.$this->uri->segment(3))?>"><i class="fa fa-fw fa-calculator"></i> transaction</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url('cpanel/clockcard/'.$this->uri->segment(3))?>"><i class="fa fa-fw fa-clock-o"></i> clock card</a>
                    </li>
                     <li>
                        <a href="<?= base_url('cpanel/history/'.$this->uri->segment(3))?>"><i class="fa fa-fw fa-history"></i> history</a>
                    </li>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            clocking card
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-clock-o"></i> sign staff in or out
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

               <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $staff_online?></div>
                                        <div>staff online status</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('cpanel/staffonline/'.$this->uri->segment(3))?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $customer_no?></div>
                                        <div>customers</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('cpanel/customers/'.$this->uri->segment(3))?>">
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
                                        <i class="fa fa-history fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $history_no?></div>
                                        <div>transaction history</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('cpanel/allhistory/'.$this->uri->segment(3))?>">
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
                                        <i class="fa fa-eye fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $staff_atwork?></div>
                                        <div>staff at work</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('cpanel/staffatwork/'.$this->uri->segment(3))?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                                    <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"STAFF REGISTRATION>STAFF SIGN IN</h3>
                            </div>
                              <div class="panel-body">
                                  <form role="form" method="POST" action="<?= base_url('staff/signin/'.$this->uri->segment(3))?>">
                                       <div class="form-group has-warning">
                                           <label class="control-label" for="inputSuccess">Staff ID</label>
                                           <input type="text" class="form-control" id="inputSuccess" name="in_id" required="">
                            </div>
                                      <button type="submit" class="btn-warning btn  btn-block" >sign in</button>
                                  </form> 
                              </div>
                          </div>
                        
                    </div>
                    <div class="col-lg-6">
                                    <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title"STAFF REGISTRATION>STAFF SIGN OUT</h3>
                            </div>
                              <div class="panel-body">
                                  <form role="form" method="POST" action="<?= base_url('staff/signout/'.$this->uri->segment(3))?>">
                                       <div class="form-group has-success">
                                           <label class="control-label" for="inputSuccess">Staff ID</label>
                                           <input type="text" class="form-control" id="inputSuccess" name="out_id" required="">
                            </div>
                                      <button type="submit" class="btn-success btn  btn-block" >sign out</button>
                                  </form> 
                              </div>
                          </div>
                        
                    </div>
                </div>

                <div class="row">
                    

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-sign-in"></i> clock card panel</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Time</th>
                                                <th>Timing</th>
                                                <th>Staff ID</th>
                                                <th>Staff name</th>
                                                <th>Phone number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($info as $key => $value) {
?>
                                            <tr>
                                        <td></td>
                                        <td><?= $value['clocked_in_time']?></td>
                                        <td><?php
                                         
                                        if ($value['clocked_in_time'] > date("Y-m-d 7:i:s") && $value['clocked_in_time'] < date("Y-m-d 8:i:s")) {
                                           echo 'early'; 
                                        }else{
                                            echo 'late';
                                        }
                                                
                                        ?></td>
                                        <td><?= $value['staff_id']?></td>
                                        <td><?= $value['staff_firstname'].' '.$value['staff_surname']?></td>
                                        <td><?= $value['staff_phone_number']?></td>
                                            </tr>
                                            <?php

                                            }
                                           ?>
                               
                                        </tbody>
                                    </table>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
        
    <!-- jQuery -->
    <script src="<?= base_url('assets/cpanel/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/cpanel/js/bootstrap.min.js')?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?= base_url('assets/cpanel/js/plugins/morris/raphael.min.js')?>"></script>
    <script src="<?= base_url('assets/cpanel/js/plugins/morris/morris.min.js')?>"></script>
    <script src="<?= base_url('assets/cpanel/js/plugins/morris/morris-data.js')?>"></script>
    </body>
</html>
