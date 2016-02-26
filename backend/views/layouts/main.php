<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;

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
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
<!--top header starts here-->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Admin</a>
        </div>
<!--    top header ends here-->
<!--        top header links starts here-->
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><?= Html::a('<i class="fa fa-sign-out fa-fw"></i> Logout', ['/site/logout'], ['data-method'=>'post']) ?>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
<!--top header links ends here-->
<!--        Side bar starts here-->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php?r"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-cog"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?=Html::a('Add Institution Details',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Add Academic Details',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Student Import',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Employee Import',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Privileges',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Assign Courses',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Users',['/institution'])?>
                            </li>
                            <li>
                                <?=Html::a('Enquiries',['/institution'])?>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-cog"></i> Academic<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"> Courses and batch<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Subjects<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Lession Planning<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Time Table<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Exams<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Assignment And Notes<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Certifications<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Promotion<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Circular<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Course',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Batch',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Class Teacher Allocation',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> HR and Payroll<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"> Employee Management<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Add user type',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('add Employee',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Add department',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Add Designation',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Employee List',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Bank Details',['/course'])?>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"> Payroll<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Pay Head',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Payment Type',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Add department',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Salary Settings',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Generate Salary Slip',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Employee Salary',['/course'])?>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <a href="#"> Leave Management<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Leave Catagory',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Leave Approvals',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Leave Details',['/course'])?>
                                    </li>
                                    <li>
                                        <?=Html::a('Leave Application',['/course'])?>
                                    </li>


                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-wrench fa-fw"></i>Student<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?=Html::a('Student Category',['/course'])?>
                            </li>
                            <li>
                                <?=Html::a('Student Admission',['/course'])?>
                            </li>
                            <li>
                                <?=Html::a('Student List',['/course'])?>
                            </li>
                            <li>
                                <?=Html::a('Attendance',['/course'])?>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Finance<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Fees<span class="fa arrow"></span> </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?=Html::a('Fee Category',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Fee Sub category',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Fee Waiver',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Fee Tempelate',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Fee Allocation',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Quick Payment',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Fee Collection',['#']) ?>
                                    </li>
                                    <li>
                                        <?=Html::a('Fee Due List',['#']) ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="buttons.html">Accounting<span class="fa arrow"></span> </a>
                                <ul class="nav nav-second-level">
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

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Library<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
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
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Transport<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
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
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
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
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
        <!-- /.navbar-static-side -->
    </nav>
<!--        sidebar ends here-->

<!--Navigation ends here-->
    <div id="page-wrapper">
<!--  content starts here  -->

        <?= Alert::widget() ?>
        <?= $content ?>
<!--    content ends here-->

</div>






</div>

<footer class="footer">
    <div class="container-fluid">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
