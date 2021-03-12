<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Admin/base.html.twig */
class __TwigTemplate_bba2396cfc93934a8a676a6d9273a6349d21948a7256815b13f96f8869f45f8e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    <![endif]-->
</head>

<body class=\"skin-megna fixed-layout\">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <p class=\"loader__label\">E-Health COVID-19</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/logo-icon.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"dark-logo\" />
                        <!-- Light Logo icon -->
                        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/logo-light-icon.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"light-logo\" />
                    </b>
                    <!--End Logo icon -->
                    <span class=\"hidden-xs\"><span class=\"font-bold\">E-Health</span>COVID-19</span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav mr-auto\">
                    <!-- This is  -->
                    <li class=\"nav-item\"> <a class=\"nav-link nav-toggler d-block d-md-none waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>
                    <li class=\"nav-item\"> <a class=\"nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"icon-menu\"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item\">
                        <form class=\"app-search d-none d-md-block d-lg-block\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search & enter\">
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav my-lg-0\">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"ti-email\"></i>
                            <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">Notifications</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Luanch Admin</h5> <span class=\"mail-desc\">Just see the my new admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Event today</h5> <span class=\"mail-desc\">Just a reminder that you have event</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Settings</h5> <span class=\"mail-desc\">You can customize this template as you want</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center link\" href=\"javascript:void(0);\"> <strong>Check all notifications</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" id=\"2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"icon-note\"></i>
                            <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                        </a>
                        <div class=\"dropdown-menu mailbox dropdown-menu-right animated bounceInDown\" aria-labelledby=\"2\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status online pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/2.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status busy pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Sonu Nigam</h5> <span class=\"mail-desc\">I've sung a song! See you at</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/3.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status away pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Arijit Sinh</h5> <span class=\"mail-desc\">I am a singer!</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/4.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status offline pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center link\" href=\"javascript:void(0);\"> <strong>See all e-Mails</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown mega-dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ti-layout-width-default\"></i></a>
                        <div class=\"dropdown-menu animated bounceInDown\">
                            <ul class=\"mega-dropdown-menu row\">
                                <li class=\"col-lg-3 col-xlg-2 m-b-30\">
                                    <h4 class=\"m-b-20\">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"carousel-item active\">
                                                <div class=\"container\"> <img class=\"d-block img-fluid\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/big/img1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/big/img2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/big/img3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\"></div>
                                            </div>
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class=\"col-lg-3 m-b-30\">
                                    <h4 class=\"m-b-20\">ACCORDION</h4>
                                    <div class=\"accordion\" id=\"accordionExample\">
                                        <div class=\"card m-b-0\">
                                            <div class=\"card-header bg-white p-0\" id=\"headingOne\">
                                                <h5 class=\"mb-0\">
                                                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card m-b-0\">
                                            <div class=\"card-header bg-white p-0\" id=\"headingTwo\">
                                                <h5 class=\"mb-0\">
                                                    <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\"
                                                            aria-controls=\"collapseTwo\">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card m-b-0\">
                                            <div class=\"card-header bg-white p-0\" id=\"headingThree\">
                                                <h5 class=\"mb-0\">
                                                    <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\"
                                                            aria-controls=\"collapseThree\">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-lg-3  m-b-30\">
                                    <h4 class=\"m-b-20\">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputname1\" placeholder=\"Enter Name\"> </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter email\"> </div>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\" placeholder=\"Message\"></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-info\">Submit</button>
                                    </form>
                                </li>
                                <li class=\"col-lg-3 col-xlg-4 m-b-30\">
                                    <h4 class=\"m-b-20\">List style</h4>
                                    <!-- List style -->
                                    <ul class=\"list-style-none\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> You can give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Forth link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown u-pro\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark profile-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"\"> <span class=\"hidden-md-down\">Dr.Zied &nbsp;<i class=\"fa fa-angle-down\"></i></span> </a>
                        <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-user\"></i> My Profile</a>
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-wallet\"></i> My Balance</a>
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-email\"></i> Inbox</a>
                            <!-- text-->
                            <div class=\"dropdown-divider\"></div>
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-settings\"></i> Account Setting</a>
                            <!-- text-->
                            <div class=\"dropdown-divider\"></div>
                            <!-- text-->
                            <a href=\"login.html\" class=\"dropdown-item\"><i class=\"fa fa-power-off\"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item right-side-toggle\"> <a class=\"nav-link  waves-effect waves-light\" href=\"javascript:void(0)\"><i class=\"ti-settings\"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class=\"left-sidebar\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\">
                    <li class=\"user-pro\"> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"><span class=\"hide-menu\">Zied khiari</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-user\"></i> My Profile</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-wallet\"></i> My Balance</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-email\"></i> Inbox</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-settings\"></i> Account Setting</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-small-cap\">--- MENU</li>
                    <li> <a class=\"waves-effect waves-dark\" href=\"";
        // line 354
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"icon-speedometer\"></i><span class=\"hide-menu\">Dashboard</span></a>
                    </li>
                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"ti-location-pin\"></i><span class=\"hide-menu\">Maps</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"map-google.html\">Google Maps</a></li>
                            <li><a href=\"map-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"icon-people\"></i><span class=\"hide-menu\">Users</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"";
        // line 365
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_index");
        echo "\">Users</a></li>
                            <li><a href=\"";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\">Roles</a></li>

                        </ul>
                    </li>

                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"ti-pie-chart\"></i><span class=\"hide-menu\">Statistiques</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"chart-morris.html\">Morris Chart</a></li>

                        </ul>
                    </li>
                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"ti-settings\"></i><span class=\"hide-menu\">Settings</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"widget-data.html\">Settings</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-dark\" href=\"pages-login.html\" aria-expanded=\"false\">
                            <i class=\"ti-close\"></i>
                            <span class=\"hide-menu\">Log Out</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <!-- Row -->



















            <!----------------------------------------- #header ---------------------------------------->
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>

            ";
        // line 443
        $this->displayBlock('body', $context, $blocks);
        // line 446
        echo "
            <!---------------------------------------- #footer ----------------------------------------->
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
































            <!-- /.row -->
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class=\"right-sidebar\">
    <div class=\"slimscrollright\">
        <div class=\"rpanel-title\"> Service Panel <span><i class=\"ti-close right-side-toggle\"></i></span> </div>
        <div class=\"r-panel-body\">
            <ul id=\"themecolors\" class=\"m-t-20\">
                <li><b>With Light sidebar</b></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-default\" class=\"default-theme\">1</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-green\" class=\"green-theme\">2</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-red\" class=\"red-theme\">3</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-blue\" class=\"blue-theme\">4</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-purple\" class=\"purple-theme\">5</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-megna\" class=\"megna-theme working\">6</a></li>
                <li class=\"d-block m-t-30\"><b>With Dark sidebar</b></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-default-dark\" class=\"default-dark-theme \">7</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-green-dark\" class=\"green-dark-theme\">8</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-red-dark\" class=\"red-dark-theme\">9</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-blue-dark\" class=\"blue-dark-theme\">10</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-purple-dark\" class=\"purple-dark-theme\">11</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-megna-dark\" class=\"megna-dark-theme \">12</a></li>
            </ul>
            <ul class=\"m-t-20 chatonline\">
                <li><b>Chat option</b></li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Varun Dhavan <small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/2.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Genelia Deshmukh <small class=\"text-warning\">Away</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/3.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Ritesh Deshmukh <small class=\"text-danger\">Busy</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/4.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Arijit Sinh <small class=\"text-muted\">Offline</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/5.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Govinda Star <small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/6.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>John Abraham<small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/7.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Hritik Roshan<small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/8.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> <span>Pwandeep rajan <small class=\"text-success\">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class=\"footer\">
    © 2020 E-Health COVID-19 Create with Love &hearts;
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
";
        // line 568
        $this->displayBlock('javascripts', $context, $blocks);
        // line 596
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/favicon.png"), "html", null, true);
        echo "\">
    <title>E-Health COVID-19 </title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--Toaster Popup message CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/toast-master/css/jquery.toast.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Dashboard 1 Page CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/pages/dashboard1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/font-awesome/webfonts/fa-solid-900.woff"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/font-awesome/webfonts/fa-brands-400.woff"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 443
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 444
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 568
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 569
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!--Wave Effects -->
<script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/waves.js"), "html", null, true);
        echo "\"></script>
<!--Menu sidebar -->
<script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
<!--Custom JavaScript -->
<script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<!--
<script src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>-->
<script src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/jquery-sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popup message jquery -->
<script src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/toast-master/js/jquery.toast.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery peity -->
<script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/peity/jquery.peity.init.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  823 => 593,  819 => 592,  814 => 590,  809 => 588,  805 => 587,  801 => 586,  792 => 580,  787 => 578,  782 => 576,  777 => 574,  772 => 572,  768 => 571,  762 => 569,  753 => 568,  742 => 444,  733 => 443,  714 => 25,  710 => 24,  706 => 23,  701 => 21,  696 => 19,  691 => 17,  683 => 13,  674 => 12,  662 => 596,  660 => 568,  624 => 535,  618 => 532,  612 => 529,  606 => 526,  600 => 523,  594 => 520,  588 => 517,  582 => 514,  512 => 446,  510 => 443,  430 => 366,  426 => 365,  412 => 354,  399 => 344,  357 => 305,  261 => 212,  255 => 209,  249 => 206,  219 => 179,  210 => 173,  201 => 167,  192 => 161,  94 => 66,  89 => 64,  82 => 60,  54 => 34,  52 => 12,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    {% block stylesheets %}
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('back/images/favicon.png') }}\">
    <title>E-Health COVID-19 </title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href=\"{{ asset('back/node_modules/morrisjs/morris.css') }}\" rel=\"stylesheet\">
    <!--Toaster Popup message CSS -->
    <link href=\"{{ asset('back/node_modules/toast-master/css/jquery.toast.css') }}\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"{{ asset('back/dist/css/style.min.css') }}\" rel=\"stylesheet\">
    <!-- Dashboard 1 Page CSS -->
    <link href=\"{{ asset('back/dist/css/pages/dashboard1.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('back/font-awesome/webfonts/fa-solid-900.woff') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('back/font-awesome/webfonts/fa-brands-400.woff') }}\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>


    {% endblock %}
    <![endif]-->
</head>

<body class=\"skin-megna fixed-layout\">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <p class=\"loader__label\">E-Health COVID-19</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"{{ asset('back/images/logo-icon.png') }}\" alt=\"homepage\" class=\"dark-logo\" />
                        <!-- Light Logo icon -->
                        <img src=\"{{ asset('back/images/logo-light-icon.png') }}\" alt=\"homepage\" class=\"light-logo\" />
                    </b>
                    <!--End Logo icon -->
                    <span class=\"hidden-xs\"><span class=\"font-bold\">E-Health</span>COVID-19</span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav mr-auto\">
                    <!-- This is  -->
                    <li class=\"nav-item\"> <a class=\"nav-link nav-toggler d-block d-md-none waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>
                    <li class=\"nav-item\"> <a class=\"nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"icon-menu\"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item\">
                        <form class=\"app-search d-none d-md-block d-lg-block\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search & enter\">
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav my-lg-0\">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"ti-email\"></i>
                            <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">Notifications</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Luanch Admin</h5> <span class=\"mail-desc\">Just see the my new admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Event today</h5> <span class=\"mail-desc\">Just a reminder that you have event</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Settings</h5> <span class=\"mail-desc\">You can customize this template as you want</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center link\" href=\"javascript:void(0);\"> <strong>Check all notifications</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" id=\"2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"icon-note\"></i>
                            <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                        </a>
                        <div class=\"dropdown-menu mailbox dropdown-menu-right animated bounceInDown\" aria-labelledby=\"2\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('back/images/users/1.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status online pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('back/images/users/2.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status busy pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Sonu Nigam</h5> <span class=\"mail-desc\">I've sung a song! See you at</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('back/images/users/3.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status away pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Arijit Sinh</h5> <span class=\"mail-desc\">I am a singer!</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"javascript:void(0)\">
                                            <div class=\"user-img\"> <img src=\"{{ asset('back/images/users/4.jpg') }}\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status offline pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center link\" href=\"javascript:void(0);\"> <strong>See all e-Mails</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown mega-dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ti-layout-width-default\"></i></a>
                        <div class=\"dropdown-menu animated bounceInDown\">
                            <ul class=\"mega-dropdown-menu row\">
                                <li class=\"col-lg-3 col-xlg-2 m-b-30\">
                                    <h4 class=\"m-b-20\">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"carousel-item active\">
                                                <div class=\"container\"> <img class=\"d-block img-fluid\" src=\"{{ asset('back/images/big/img1.jpg') }}\" alt=\"First slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"{{ asset('back/images/big/img2.jpg') }}\" alt=\"Second slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"{{ asset('back/images/big/img3.jpg') }}\" alt=\"Third slide\"></div>
                                            </div>
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class=\"col-lg-3 m-b-30\">
                                    <h4 class=\"m-b-20\">ACCORDION</h4>
                                    <div class=\"accordion\" id=\"accordionExample\">
                                        <div class=\"card m-b-0\">
                                            <div class=\"card-header bg-white p-0\" id=\"headingOne\">
                                                <h5 class=\"mb-0\">
                                                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card m-b-0\">
                                            <div class=\"card-header bg-white p-0\" id=\"headingTwo\">
                                                <h5 class=\"mb-0\">
                                                    <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\"
                                                            aria-controls=\"collapseTwo\">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card m-b-0\">
                                            <div class=\"card-header bg-white p-0\" id=\"headingThree\">
                                                <h5 class=\"mb-0\">
                                                    <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\"
                                                            aria-controls=\"collapseThree\">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionExample\">
                                                <div class=\"card-body\">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"col-lg-3  m-b-30\">
                                    <h4 class=\"m-b-20\">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputname1\" placeholder=\"Enter Name\"> </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter email\"> </div>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\" placeholder=\"Message\"></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-info\">Submit</button>
                                    </form>
                                </li>
                                <li class=\"col-lg-3 col-xlg-4 m-b-30\">
                                    <h4 class=\"m-b-20\">List style</h4>
                                    <!-- List style -->
                                    <ul class=\"list-style-none\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> You can give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Forth link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown u-pro\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark profile-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"{{ asset('back/images/users/1.jpg') }}\" alt=\"user\" class=\"\"> <span class=\"hidden-md-down\">Dr.Zied &nbsp;<i class=\"fa fa-angle-down\"></i></span> </a>
                        <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-user\"></i> My Profile</a>
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-wallet\"></i> My Balance</a>
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-email\"></i> Inbox</a>
                            <!-- text-->
                            <div class=\"dropdown-divider\"></div>
                            <!-- text-->
                            <a href=\"javascript:void(0)\" class=\"dropdown-item\"><i class=\"ti-settings\"></i> Account Setting</a>
                            <!-- text-->
                            <div class=\"dropdown-divider\"></div>
                            <!-- text-->
                            <a href=\"login.html\" class=\"dropdown-item\"><i class=\"fa fa-power-off\"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item right-side-toggle\"> <a class=\"nav-link  waves-effect waves-light\" href=\"javascript:void(0)\"><i class=\"ti-settings\"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class=\"left-sidebar\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\">
                    <li class=\"user-pro\"> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><img src=\"{{ asset('back/images/users/1.jpg') }}\" alt=\"user-img\" class=\"img-circle\"><span class=\"hide-menu\">Zied khiari</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-user\"></i> My Profile</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-wallet\"></i> My Balance</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-email\"></i> Inbox</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"ti-settings\"></i> Account Setting</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-small-cap\">--- MENU</li>
                    <li> <a class=\"waves-effect waves-dark\" href=\"{{ path('homepage') }}\"><i class=\"icon-speedometer\"></i><span class=\"hide-menu\">Dashboard</span></a>
                    </li>
                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"ti-location-pin\"></i><span class=\"hide-menu\">Maps</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"map-google.html\">Google Maps</a></li>
                            <li><a href=\"map-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"icon-people\"></i><span class=\"hide-menu\">Users</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"{{ path('profil_index') }}\">Users</a></li>
                            <li><a href=\"{{ path('role_index') }}\">Roles</a></li>

                        </ul>
                    </li>

                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"ti-pie-chart\"></i><span class=\"hide-menu\">Statistiques</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"chart-morris.html\">Morris Chart</a></li>

                        </ul>
                    </li>
                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"ti-settings\"></i><span class=\"hide-menu\">Settings</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"widget-data.html\">Settings</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-dark\" href=\"pages-login.html\" aria-expanded=\"false\">
                            <i class=\"ti-close\"></i>
                            <span class=\"hide-menu\">Log Out</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <!-- Row -->



















            <!----------------------------------------- #header ---------------------------------------->
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>

            {% block body %}

            {% endblock %}

            <!---------------------------------------- #footer ----------------------------------------->
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------>
































            <!-- /.row -->
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class=\"right-sidebar\">
    <div class=\"slimscrollright\">
        <div class=\"rpanel-title\"> Service Panel <span><i class=\"ti-close right-side-toggle\"></i></span> </div>
        <div class=\"r-panel-body\">
            <ul id=\"themecolors\" class=\"m-t-20\">
                <li><b>With Light sidebar</b></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-default\" class=\"default-theme\">1</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-green\" class=\"green-theme\">2</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-red\" class=\"red-theme\">3</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-blue\" class=\"blue-theme\">4</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-purple\" class=\"purple-theme\">5</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-megna\" class=\"megna-theme working\">6</a></li>
                <li class=\"d-block m-t-30\"><b>With Dark sidebar</b></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-default-dark\" class=\"default-dark-theme \">7</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-green-dark\" class=\"green-dark-theme\">8</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-red-dark\" class=\"red-dark-theme\">9</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-blue-dark\" class=\"blue-dark-theme\">10</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-purple-dark\" class=\"purple-dark-theme\">11</a></li>
                <li><a href=\"javascript:void(0)\" data-skin=\"skin-megna-dark\" class=\"megna-dark-theme \">12</a></li>
            </ul>
            <ul class=\"m-t-20 chatonline\">
                <li><b>Chat option</b></li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/1.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Varun Dhavan <small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/2.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Genelia Deshmukh <small class=\"text-warning\">Away</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/3.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Ritesh Deshmukh <small class=\"text-danger\">Busy</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/4.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Arijit Sinh <small class=\"text-muted\">Offline</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/5.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Govinda Star <small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/6.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>John Abraham<small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/7.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Hritik Roshan<small class=\"text-success\">online</small></span></a>
                </li>
                <li>
                    <a href=\"javascript:void(0)\"><img src=\"{{ asset('back/images/users/8.jpg') }}\" alt=\"user-img\" class=\"img-circle\"> <span>Pwandeep rajan <small class=\"text-success\">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class=\"footer\">
    © 2020 E-Health COVID-19 Create with Love &hearts;
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
{% block javascripts %}
<script src=\"{{ asset('back/node_modules/jquery/jquery-3.2.1.min.js') }}\"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src=\"{{ asset('back/node_modules/popper/popper.min.js') }}\"></script>
<script src=\"{{ asset('back/node_modules/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src=\"{{ asset('back/dist/js/perfect-scrollbar.jquery.min.js') }}\"></script>
<!--Wave Effects -->
<script src=\"{{ asset('back/dist/js/waves.js') }}\"></script>
<!--Menu sidebar -->
<script src=\"{{ asset('back/dist/js/sidebarmenu.js') }}\"></script>
<!--Custom JavaScript -->
<script src=\"{{ asset('back/dist/js/custom.min.js') }}\"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<!--
<script src=\"{{ asset('back/node_modules/raphael/raphael-min.js') }}\"></script>
<script src=\"{{ asset('back/node_modules/morrisjs/morris.min.js') }}\"></script>-->
<script src=\"{{ asset('back/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}\"></script>
<!-- Popup message jquery -->
<script src=\"{{ asset('back/node_modules/toast-master/js/jquery.toast.js') }}\"></script>
<!-- jQuery peity -->
<script src=\"{{ asset('back/node_modules/peity/jquery.peity.min.js') }}\"></script>
<script src=\"{{ asset('back/node_modules/peity/jquery.peity.init.js') }}\"></script>

{% endblock %}
</body>

</html>", "Admin/base.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\base.html.twig");
    }
}
