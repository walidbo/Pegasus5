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

/* Admin/Default/login.html.twig */
class __TwigTemplate_7b956a738912fde6f3bc9ec4632550b26c3471b559c4088e0e6aaf8f294c6a74 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Default/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Default/login.html.twig"));

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
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/favicon.png"), "html", null, true);
        echo "\">
    <title>Admin Panel</title>

    <!-- page css -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/pages/login-register-lock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"skin-default card-no-border\">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <p class=\"loader__label\">E-Health Admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id=\"wrapper\">
    <div class=\"login-register\" style=\"background-image:url(";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/background/login-register.jpg"), "html", null, true);
        echo ");\">
        <div class=\"login-box card\">
            <div class=\"card-body\">
                <form class=\"form-horizontal form-material\" id=\"loginform\" action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                    <h3 class=\"text-center m-b-20\">Sign In</h3>
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Username\"> </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"password\" required=\"\" placeholder=\"Password\"> </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <div class=\"d-flex no-block align-items-center\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                    <label class=\"custom-control-label\" for=\"customCheck1\">Remember me</label>
                                </div>
                                <div class=\"ml-auto\">
                                    <a href=\"javascript:void(0)\" id=\"to-recover\" class=\"text-muted\"><i class=\"fas fa-lock m-r-5\"></i> Forgot pwd?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group text-center\">
                        <div class=\"col-xs-12 p-b-20\">
                            <button class=\"btn btn-block btn-lg btn-info btn-rounded\" type=\"submit\">Log In</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 m-t-10 text-center\">
                            <div class=\"social\">
                                <button class=\"btn  btn-facebook\" data-toggle=\"tooltip\" title=\"Login with Facebook\"> <i aria-hidden=\"true\" class=\"fab fa-facebook-f\"></i> </button>
                                <button class=\"btn btn-googleplus\" data-toggle=\"tooltip\" title=\"Login with Google\"> <i aria-hidden=\"true\" class=\"fab fa-google-plus-g\"></i> </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group m-b-0\">
                        <div class=\"col-sm-12 text-center\">
                            Don't have an account? <a href=\"pages-register.html\" class=\"text-info m-l-5\"><b>Sign Up</b></a>
                        </div>
                    </div>
                </form>
                <form class=\"form-horizontal\" id=\"recoverform\" action=\"index.html\">
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <h3>Recover Password</h3>
                            <p class=\"text-muted\">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Email\"> </div>
                    </div>
                    <div class=\"form-group text-center m-t-20\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light\" type=\"submit\">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap tether Core JavaScript -->
 <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--Custom JavaScript -->
<script type=\"text/javascript\">
    \$(function() {
        \$(\".preloader\").fadeOut();
    });
    \$(function() {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    \$('#to-recover').on(\"click\", function() {
        \$(\"#loginform\").slideUp();
        \$(\"#recoverform\").fadeIn();
    });
</script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 119,  173 => 118,  168 => 116,  95 => 46,  89 => 43,  61 => 18,  56 => 16,  49 => 12,  36 => 1,);
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
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('back/images/favicon.png') }}\">
    <title>Admin Panel</title>

    <!-- page css -->
    <link href=\"{{ asset('back/dist/css/pages/login-register-lock.css') }}\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"{{ asset('back/dist/css/style.min.css') }}\" rel=\"stylesheet\">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"skin-default card-no-border\">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <p class=\"loader__label\">E-Health Admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id=\"wrapper\">
    <div class=\"login-register\" style=\"background-image:url({{ asset('back/images/background/login-register.jpg') }});\">
        <div class=\"login-box card\">
            <div class=\"card-body\">
                <form class=\"form-horizontal form-material\" id=\"loginform\" action=\"{{ path('homepage') }}\">
                    <h3 class=\"text-center m-b-20\">Sign In</h3>
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Username\"> </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"password\" required=\"\" placeholder=\"Password\"> </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <div class=\"d-flex no-block align-items-center\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                    <label class=\"custom-control-label\" for=\"customCheck1\">Remember me</label>
                                </div>
                                <div class=\"ml-auto\">
                                    <a href=\"javascript:void(0)\" id=\"to-recover\" class=\"text-muted\"><i class=\"fas fa-lock m-r-5\"></i> Forgot pwd?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group text-center\">
                        <div class=\"col-xs-12 p-b-20\">
                            <button class=\"btn btn-block btn-lg btn-info btn-rounded\" type=\"submit\">Log In</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-12 col-md-12 m-t-10 text-center\">
                            <div class=\"social\">
                                <button class=\"btn  btn-facebook\" data-toggle=\"tooltip\" title=\"Login with Facebook\"> <i aria-hidden=\"true\" class=\"fab fa-facebook-f\"></i> </button>
                                <button class=\"btn btn-googleplus\" data-toggle=\"tooltip\" title=\"Login with Google\"> <i aria-hidden=\"true\" class=\"fab fa-google-plus-g\"></i> </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group m-b-0\">
                        <div class=\"col-sm-12 text-center\">
                            Don't have an account? <a href=\"pages-register.html\" class=\"text-info m-l-5\"><b>Sign Up</b></a>
                        </div>
                    </div>
                </form>
                <form class=\"form-horizontal\" id=\"recoverform\" action=\"index.html\">
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <h3>Recover Password</h3>
                            <p class=\"text-muted\">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Email\"> </div>
                    </div>
                    <div class=\"form-group text-center m-t-20\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light\" type=\"submit\">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"{{ asset('back/node_modules/jquery/jquery-3.2.1.min.js') }}\"></script>
<!-- Bootstrap tether Core JavaScript -->
 <script src=\"{{ asset('back/node_modules/popper/popper.min.js') }}\"></script>
 <script src=\"{{ asset('back/node_modules/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!--Custom JavaScript -->
<script type=\"text/javascript\">
    \$(function() {
        \$(\".preloader\").fadeOut();
    });
    \$(function() {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    \$('#to-recover').on(\"click\", function() {
        \$(\"#loginform\").slideUp();
        \$(\"#recoverform\").fadeIn();
    });
</script>

</body>

</html>", "Admin/Default/login.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\Default\\login.html.twig");
    }
}
