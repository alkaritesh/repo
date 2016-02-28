<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="sidebar-mini layout-boxed skin-yellow-light">
<?php $this->beginBody() ?>

<div class="wrapper">
<!--    header class-->
    <header class="main-header">

        <!-- Logo -->
        <a href="index.php?r" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>ERP</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>School</b>ERP</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Administrator</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    Administrator-Software Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">

                                    <?= Html::a('Logout', ['/site/logout'], ['data-method'=>'post','class'=>'btn btn-default btn-flat']) ?>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

<!--  /header class  -->
<!--    Side bar Starts here-->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administrator</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="index.php?r">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cog"></i>
                        <span>Settings</span>
                        <span class="label label-primary pull-right">6</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Add Institution Details',['/instution-details'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Add Session Details',['/session'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Student Import',['/student/upload'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Employee Import',['employee/upload'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Privileges',['/institution'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Enquiries',['/institution'])?>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-university"></i>
                        <span>Academic</span>
                        <span class="label label-primary pull-right">9</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"> Class And Section<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class',['/class-master'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Section',['/section'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Subjects<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Subject',['/subject'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Subject Type',['/subject-type'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Subject Allocation',['/class-subject'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Lession Planning<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Lesson Planning',['/course'])?>
                                </li>


                            </ul>
                        </li>
                        <li>
                            <a href="#"> Time Table<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Course',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Batch',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/course'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Exams<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Course',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Batch',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/course'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Assignment And Notes<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Course',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Batch',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/course'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Certifications<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Course',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Batch',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/course'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Promotion<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Course',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Batch',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/course'])?>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> Circular<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Course',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Batch',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Class Teacher Allocation',['/course'])?>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-eye-slash"></i>
                        <span>HR and Payroll</span>
                        <span class="label pull-right bg-red">2</span>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                          <a href="#"> Employee Management<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Add user type',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>add Employee',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Add department',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Add Designation',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Employee List',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Bank Details',['/course'])?>
                        </li>
                        </ul>
                      </li>
                        <li>
                            <a href="#"> Payroll<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Pay Head',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Payment Type',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Add department',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Salary Settings',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Generate Salary Slip',['/course'])?>
                                </li>
                                <li>
                                    <?=Html::a('<i class="fa fa-circle-o"></i>Employee Salary',['/course'])?>
                                </li>

                            </ul>

                        </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-flag"></i>
                        <span>Leave Management</span>
                        <span class="label label-primary pull-right">4</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Leave Catagory',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Leave Approvals',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Leave Details',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Leave Application',['/course'])?>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Student</span>
                        <span class="label label-primary pull-right">4</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Student Category',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Student Admission',['/student'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Student List',['/course'])?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Attendance',['/course'])?>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-inr"></i>
                        <span>Finance</span>
                        <span class="label label-primary pull-right">8</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Category',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Sub category',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Waiver',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Tempelate',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Allocation',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Quick Payment',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Collection',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('<i class="fa fa-circle-o"></i>Fee Due List',['#']) ?>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-credit-card-alt"></i>
                        <span>Accounting</span>
                        <span class="label label-primary pull-right">8</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('Account Group',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Voucher master',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Voucher Head',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Create Voucher',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Day Book',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Cashbook',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Bank Book',['#']) ?>
                        </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Library</span>
                        <span class="label label-primary pull-right">8</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('Add Catagory',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Add Book',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Issue Book',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Request Book',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Book Return',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Reports',['#']) ?>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bus"></i>
                        <span>Transport</span>
                        <span class="label label-primary pull-right">8</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('Add vehicle',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Add Driver',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Add Route',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Add Driver-vehicle',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Fee Report',['#'])?>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o fa-fw"></i>
                        <span>Reports</span>
                        <span class="label label-primary pull-right">5</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <?=Html::a('Fee Due Report',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Fee Paid Report',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Expense Report',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Expense vs Income',['#']) ?>
                        </li>
                        <li>
                            <?=Html::a('Salary Report',['#'])?>
                        </li>

                    </ul>
                </li>
                <li class="header"><i class="fa fa-long-arrow-righ fa-lg"></i></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!--    Sidebar ends here-->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?=$this->title;?>

            </h1>
            <ol class="breadcrumb">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </ol>
        </section>
        <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
        </section>
  </div>
<!--    content ends here-->

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
