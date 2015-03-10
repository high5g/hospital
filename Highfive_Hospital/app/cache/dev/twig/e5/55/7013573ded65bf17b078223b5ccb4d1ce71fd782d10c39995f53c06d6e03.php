<?php

/* High5HospitalDoctorBundle:Default:base.html.twig */
class __TwigTemplate_e5557013573ded65bf17b078223b5ccb4d1ce71fd782d10c39995f53c06d6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'top' => array($this, 'block_top'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if IE]>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
      <![endif]-->
        <!-- GLOBAL STYLES -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/MoneAdmin.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/Font-Awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
        <!--END GLOBAL STYLES -->

        <!-- PAGE LEVEL STYLES -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/flot/examples/examples.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/timeline/timeline.css"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/layout2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- END PAGE LEVEL  STYLES -->
        <!-- PAGE LEVEL STYLES -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/layout2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- END PAGE LEVEL  STYLES -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body class=\"padTop53 \" >
    <!-- MAIN WRAPPER -->
    <div id=\"wrap\">

        ";
        // line 37
        $this->displayBlock('top', $context, $blocks);
        // line 291
        echo "
        ";
        // line 292
        $this->displayBlock('left', $context, $blocks);
        // line 539
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 544
        echo "
        ";
        // line 545
        $this->displayBlock('right', $context, $blocks);
        // line 595
        echo "    </div>

    <!--END MAIN WRAPPER -->

    ";
        // line 599
        $this->displayBlock('footer', $context, $blocks);
        // line 607
        echo "
";
        // line 608
        $this->displayBlock('javascripts', $context, $blocks);
        // line 609
        echo "
<!-- GLOBAL SCRIPTS -->
<script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/for_index.js"), "html", null, true);
        echo "\"></script>

<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html> 
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 37
    public function block_top($context, array $blocks = array())
    {
        // line 38
        echo "
            <!-- HEADER SECTION -->
            <div id=\"top\">

                <nav class=\"navbar navbar-inverse navbar-fixed-top \" style=\"padding-top: 10px;\">
                    <a data-original-title=\"Show/Hide Menu\" data-placement=\"bottom\" data-tooltip=\"tooltip\" class=\"accordion-toggle btn btn-primary btn-sm visible-xs\" data-toggle=\"collapse\" href=\"#menu\" id=\"menu-toggle\">
                        <i class=\"icon-align-justify\"></i>
                    </a>
                    <!-- LOGO SECTION -->
                    <header class=\"navbar-header\">

                        <a href=\"index.html\" class=\"navbar-brand\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    </header>
                    <!-- END LOGO SECTION -->
                    <ul class=\"nav navbar-top-links navbar-right\">

                        <!-- MESSAGES SECTION -->
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"label label-success\">2</span>    <i class=\"icon-envelope-alt\"></i>&nbsp; <i class=\"icon-chevron-down\"></i>
                            </a>

                            <ul class=\"dropdown-menu dropdown-messages\">
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <strong>John Smith</strong>
                                            <span class=\"pull-right text-muted\">
                                                <em>Today</em>
                                            </span>
                                        </div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                            <br />
                                            <span class=\"label label-primary\">Important</span> 

                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <strong>Raphel Jonson</strong>
                                            <span class=\"pull-right text-muted\">
                                                <em>Yesterday</em>
                                            </span>
                                        </div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                            <br />
                                            <span class=\"label label-success\"> Moderate </span> 
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <strong>Chi Ley Suk</strong>
                                            <span class=\"pull-right text-muted\">
                                                <em>26 Jan 2014</em>
                                            </span>
                                        </div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing.
                                            <br />
                                            <span class=\"label label-danger\"> Low </span> 
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"text-center\" href=\"#\">
                                        <strong>Read All Messages</strong>
                                        <i class=\"icon-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <!--END MESSAGES SECTION -->

                        <!--TASK SECTION -->
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"label label-danger\">5</span>   <i class=\"icon-tasks\"></i>&nbsp; <i class=\"icon-chevron-down\"></i>
                            </a>

                            <ul class=\"dropdown-menu dropdown-tasks\">
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <p>
                                                <strong> Profile </strong>
                                                <span class=\"pull-right text-muted\">40% Complete</span>
                                            </p>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                                    <span class=\"sr-only\">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <p>
                                                <strong> Pending Tasks </strong>
                                                <span class=\"pull-right text-muted\">20% Complete</span>
                                            </p>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <p>
                                                <strong> Work Completed </strong>
                                                <span class=\"pull-right text-muted\">60% Complete</span>
                                            </p>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                    <span class=\"sr-only\">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <p>
                                                <strong> Summary </strong>
                                                <span class=\"pull-right text-muted\">80% Complete</span>
                                            </p>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                    <span class=\"sr-only\">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"text-center\" href=\"#\">
                                        <strong>See All Tasks</strong>
                                        <i class=\"icon-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <!--END TASK SECTION -->

                        <!--ALERTS SECTION -->
                        <li class=\"chat-panel dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"label label-info\">8</span>   <i class=\"icon-comments\"></i>&nbsp; <i class=\"icon-chevron-down\"></i>
                            </a>

                            <ul class=\"dropdown-menu dropdown-alerts\">

                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <i class=\"icon-comment\" ></i> New Comment
                                            <span class=\"pull-right text-muted small\"> 4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <i class=\"icon-twitter info\"></i> 3 New Follower
                                            <span class=\"pull-right text-muted small\"> 9 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <i class=\"icon-envelope\"></i> Message Sent
                                            <span class=\"pull-right text-muted small\" > 20 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <i class=\"icon-tasks\"></i> New Task
                                            <span class=\"pull-right text-muted small\"> 1 Hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <div>
                                            <i class=\"icon-upload\"></i> Server Rebooted
                                            <span class=\"pull-right text-muted small\"> 2 Hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"text-center\" href=\"#\">
                                        <strong>See All Alerts</strong>
                                        <i class=\"icon-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <!-- END ALERTS SECTION -->

                        <!--ADMIN SETTINGS SECTIONS -->

                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"icon-user \"></i>&nbsp; <i class=\"icon-chevron-down \"></i>
                            </a>

                            <ul class=\"dropdown-menu dropdown-user\">
                                <li><a href=\"#\"><i class=\"icon-user\"></i> User Profile </a>
                                </li>
                                <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"login.html\"><i class=\"icon-signout\"></i> Logout </a>
                                </li>
                            </ul>

                        </li>
                        <!--END ADMIN SETTINGS -->
                    </ul>

                </nav>

            </div>
            <!-- END HEADER SECTION -->
        ";
    }

    // line 292
    public function block_left($context, array $blocks = array())
    {
        // line 293
        echo "            <!-- MENU SECTION -->
            <div id=\"left\">
                <div class=\"media user-media well-small\">
                    <a class=\"user-link\" href=\"#\">
                        <img class=\"media-object img-thumbnail user-img\" alt=\"User Picture\" src=\"assets/img/user.gif\" />
                    </a>
                    <br />
                    <div class=\"media-body\">
                        <h5 class=\"media-heading\"> Joe Romlin</h5>
                        <ul class=\"list-unstyled user-info\">

                            <li>
                                <a class=\"btn btn-success btn-xs btn-circle\" style=\"width: 10px;height: 12px;\"></a> Online

                            </li>

                        </ul>
                    </div>
                    <br />
                </div>

                <ul id=\"menu\" class=\"collapse\">


                    <li class=\"panel\">
                        <a href=\"index.html\" >
                            <i class=\"icon-table\"></i> Dashboard


                        </a>                   
                    </li>



                    <li class=\"panel \">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#component-nav\">
                            <i class=\"icon-tasks\"> </i> UI Elements     

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                            &nbsp; <span class=\"label label-default\">10</span>&nbsp;
                        </a>
                        <ul class=\"collapse\" id=\"component-nav\">

                            <li class=\"\"><a href=\"button.html\"><i class=\"icon-angle-right\"></i> Buttons </a></li>
                            <li class=\"\"><a href=\"icon.html\"><i class=\"icon-angle-right\"></i> Icons </a></li>
                            <li class=\"\"><a href=\"progress.html\"><i class=\"icon-angle-right\"></i> Progress </a></li>
                            <li class=\"\"><a href=\"tabs_panels.html\"><i class=\"icon-angle-right\"></i> Tabs & Panels </a></li>
                            <li class=\"\"><a href=\"notifications.html\"><i class=\"icon-angle-right\"></i> Notification </a></li>
                            <li class=\"\"><a href=\"more_notifications.html\"><i class=\"icon-angle-right\"></i> More Notification </a></li>
                            <li class=\"\"><a href=\"modals.html\"><i class=\"icon-angle-right\"></i> Modals </a></li>
                            <li class=\"\"><a href=\"wizard.html\"><i class=\"icon-angle-right\"></i> Wizard </a></li>
                            <li class=\"\"><a href=\"sliders.html\"><i class=\"icon-angle-right\"></i> Sliders </a></li>
                            <li class=\"\"><a href=\"typography.html\"><i class=\"icon-angle-right\"></i> Typography </a></li>
                        </ul>
                    </li>
                    <li class=\"panel \">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\" data-target=\"#form-nav\">
                            <i class=\"icon-pencil\"></i> Forms

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                            &nbsp; <span class=\"label label-success\">5</span>&nbsp;
                        </a>
                        <ul class=\"collapse\" id=\"form-nav\">
                            <li class=\"\"><a href=\"forms_general.html\"><i class=\"icon-angle-right\"></i> General </a></li>
                            <li class=\"\"><a href=\"forms_advance.html\"><i class=\"icon-angle-right\"></i> Advance </a></li>
                            <li class=\"\"><a href=\"forms_validation.html\"><i class=\"icon-angle-right\"></i> Validation </a></li>
                            <li class=\"\"><a href=\"forms_fileupload.html\"><i class=\"icon-angle-right\"></i> FileUpload </a></li>
                            <li class=\"\"><a href=\"forms_editors.html\"><i class=\"icon-angle-right\"></i> WYSIWYG / Editor </a></li>
                        </ul>
                    </li>

                    <li class=\"panel\">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#pagesr-nav\">
                            <i class=\"icon-table\"></i> Pages

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                            &nbsp; <span class=\"label label-info\">6</span>&nbsp;
                        </a>
                        <ul class=\"collapse\" id=\"pagesr-nav\">
                            <li><a href=\"pages_calendar.html\"><i class=\"icon-angle-right\"></i> Calendar </a></li>
                            <li><a href=\"pages_timeline.html\"><i class=\"icon-angle-right\"></i> Timeline </a></li>
                            <li><a href=\"pages_social.html\"><i class=\"icon-angle-right\"></i> Social </a></li>
                            <li><a href=\"pages_pricing.html\"><i class=\"icon-angle-right\"></i> Pricing </a></li>
                            <li><a href=\"pages_offline.html\"><i class=\"icon-angle-right\"></i> Offline </a></li>
                            <li><a href=\"pages_uc.html\"><i class=\"icon-angle-right\"></i> Under Construction </a></li>
                        </ul>
                    </li>
                    <li class=\"panel\">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#chart-nav\">
                            <i class=\"icon-bar-chart\"></i> Charts

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                            &nbsp; <span class=\"label label-danger\">4</span>&nbsp;
                        </a>
                        <ul class=\"collapse\" id=\"chart-nav\">



                            <li><a href=\"charts_line.html\"><i class=\"icon-angle-right\"></i> Line Charts </a></li>
                            <li><a href=\"charts_bar.html\"><i class=\"icon-angle-right\"></i> Bar Charts</a></li>
                            <li><a href=\"charts_pie.html\"><i class=\"icon-angle-right\"></i> Pie Charts </a></li>
                            <li><a href=\"charts_other.html\"><i class=\"icon-angle-right\"></i> other Charts </a></li>
                        </ul>
                    </li>

                    <li class=\"panel\">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL-nav\">
                            <i class=\" icon-sitemap\"></i> 3 Level Menu

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                        </a>
                        <ul class=\"collapse\" id=\"DDL-nav\">
                            <li>
                                <a href=\"#\" data-parent=\"#DDL-nav\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL1-nav\">
                                    <i class=\"icon-sitemap\"></i>&nbsp; Demo Link 1

                                    <span class=\"pull-right\" style=\"margin-right: 20px;\">
                                        <i class=\"icon-angle-left\"></i>
                                    </span>


                                </a>
                                <ul class=\"collapse\" id=\"DDL1-nav\">
                                    <li>
                                        <a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 1 </a>

                                    </li>
                                    <li>
                                        <a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                                    <li>
                                        <a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>

                                </ul>

                            </li>
                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>
                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 4 </a></li>
                        </ul>
                    </li>
                    <li class=\"panel\">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL4-nav\">
                            <i class=\" icon-folder-open-alt\"></i> 4 Level Menu

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                        </a>
                        <ul class=\"collapse\" id=\"DDL4-nav\">
                            <li>
                                <a href=\"#\" data-parent=\"DDL4-nav\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL4_1-nav\">
                                    <i class=\"icon-sitemap\"></i>&nbsp; Demo Link 1

                                    <span class=\"pull-right\" style=\"margin-right: 20px;\">
                                        <i class=\"icon-angle-left\"></i>
                                    </span>


                                </a>
                                <ul class=\"collapse\" id=\"DDL4_1-nav\">
                                    <li>

                                        <a href=\"#\" data-parent=\"#DDL4_1-nav\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#DDL4_2-nav\">
                                            <i class=\"icon-sitemap\"></i>&nbsp; Demo Link 1

                                            <span class=\"pull-right\" style=\"margin-right: 20px;\">
                                                <i class=\"icon-angle-left\"></i>
                                            </span>
                                        </a>
                                        <ul class=\"collapse\" id=\"DDL4_2-nav\">



                                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 1 </a></li>
                                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                                        </ul>



                                    </li>
                                    <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                                    <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>
                                </ul>

                            </li>
                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 2 </a></li>
                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 3 </a></li>
                            <li><a href=\"#\"><i class=\"icon-angle-right\"></i> Demo Link 4 </a></li>
                        </ul>
                    </li>
                    <li class=\"panel\">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#error-nav\">
                            <i class=\"icon-warning-sign\"></i> Error Pages

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                            &nbsp; <span class=\"label label-warning\">5</span>&nbsp;
                        </a>
                        <ul class=\"collapse\" id=\"error-nav\">
                            <li><a href=\"errors_403.html\"><i class=\"icon-angle-right\"></i> Error 403  </a></li>
                            <li><a href=\"errors_404.html\"><i class=\"icon-angle-right\"></i> Error 404  </a></li>
                            <li><a href=\"errors_405.html\"><i class=\"icon-angle-right\"></i> Error 405  </a></li>
                            <li><a href=\"errors_500.html\"><i class=\"icon-angle-right\"></i> Error 500  </a></li>
                            <li><a href=\"errors_503.html\"><i class=\"icon-angle-right\"></i> Error 503  </a></li>
                        </ul>
                    </li>


                    <li><a href=\"gallery.html\"><i class=\"icon-film\"></i> Image Gallery </a></li>
                    <li><a href=\"tables.html\"><i class=\"icon-table\"></i> Data Tables </a></li>
                    <li><a href=\"maps.html\"><i class=\"icon-map-marker\"></i> Maps </a></li>

                    <li><a href=\"grid.html\"><i class=\"icon-columns\"></i> Grid </a></li>
                    <li class=\"panel active\">
                        <a href=\"#\" data-parent=\"#menu\" data-toggle=\"collapse\" class=\"accordion-toggle\" data-target=\"#blank-nav\">
                            <i class=\"icon-check-empty\"></i> Blank Pages

                            <span class=\"pull-right\">
                                <i class=\"icon-angle-left\"></i>
                            </span>
                            &nbsp; <span class=\"label label-success\">2</span>&nbsp;
                        </a>
                        <ul class=\"in\" id=\"blank-nav\">

                            <li><a href=\"blank.html\"><i class=\"icon-angle-right\"></i> Blank Page One  </a></li>
                            <li><a href=\"blank2.html\"><i class=\"icon-angle-right\"></i> Blank Page Two  </a></li>
                        </ul>
                    </li>
                    <li><a href=\"login.html\"><i class=\"icon-signin\"></i> Login Page </a></li>

                </ul>

            </div>
            <!--END MENU SECTION -->
        ";
    }

    // line 539
    public function block_body($context, array $blocks = array())
    {
        // line 540
        echo "            <!--PAGE CONTENT -->
 
            <!--END PAGE CONTENT -->
        ";
    }

    // line 545
    public function block_right($context, array $blocks = array())
    {
        echo "     
            <!-- RIGHT STRIP  SECTION -->
            <div id=\"right\">


                <div class=\"well well-small\">
                    <ul class=\"list-unstyled\">
                        <li>Visitor &nbsp; : <span>23,000</span></li>
                        <li>Users &nbsp; : <span>53,000</span></li>
                        <li>Registrations &nbsp; : <span>3,000</span></li>
                    </ul>
                </div>
                <div class=\"well well-small\">
                    <button class=\"btn btn-block\"> Help </button>
                    <button class=\"btn btn-primary btn-block\"> Tickets</button>
                    <button class=\"btn btn-info btn-block\"> New </button>
                    <button class=\"btn btn-success btn-block\"> Users </button>
                    <button class=\"btn btn-danger btn-block\"> Profit </button>
                    <button class=\"btn btn-warning btn-block\"> Sales </button>
                    <button class=\"btn btn-inverse btn-block\"> Stock </button>
                </div>
                <div class=\"well well-small\">
                    <span>Profit</span><span class=\"pull-right\"><small>20%</small></span>

                    <div class=\"progress mini\">
                        <div class=\"progress-bar progress-bar-info\" style=\"width: 20%\"></div>
                    </div>
                    <span>Sales</span><span class=\"pull-right\"><small>40%</small></span>

                    <div class=\"progress mini\">
                        <div class=\"progress-bar progress-bar-success\" style=\"width: 40%\"></div>
                    </div>
                    <span>Pending</span><span class=\"pull-right\"><small>60%</small></span>

                    <div class=\"progress mini\">
                        <div class=\"progress-bar progress-bar-warning\" style=\"width: 60%\"></div>
                    </div>
                    <span>Summary</span><span class=\"pull-right\"><small>80%</small></span>

                    <div class=\"progress mini\">
                        <div class=\"progress-bar progress-bar-danger\" style=\"width: 80%\"></div>
                    </div>
                </div>




            </div>
            <!-- END RIGHT STRIP  SECTION -->
        ";
    }

    // line 599
    public function block_footer($context, array $blocks = array())
    {
        // line 600
        echo "        <!-- FOOTER -->
         <div id=\"footer\">
            <p>&copy;  binaryWertani &nbsp;2014 &nbsp;</p>
        </div>
           
        <!--END FOOTER -->
    ";
    }

    // line 608
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 608,  766 => 600,  763 => 599,  708 => 545,  701 => 540,  698 => 539,  449 => 293,  446 => 292,  201 => 50,  187 => 38,  184 => 37,  179 => 30,  173 => 5,  163 => 621,  159 => 620,  155 => 619,  151 => 618,  147 => 617,  140 => 613,  136 => 612,  132 => 611,  128 => 609,  126 => 608,  123 => 607,  121 => 599,  115 => 595,  113 => 545,  110 => 544,  107 => 539,  105 => 292,  102 => 291,  100 => 37,  90 => 31,  88 => 30,  78 => 23,  72 => 20,  68 => 19,  64 => 18,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  33 => 5,  27 => 1,);
    }
}
