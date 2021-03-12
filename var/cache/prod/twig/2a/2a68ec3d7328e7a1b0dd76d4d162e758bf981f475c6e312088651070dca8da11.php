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

/* Admin/Default/index.html.twig */
class __TwigTemplate_0886cd867f0d465bc07cd2a73382667a08eb995d7630b695d5b9fb3a24bf9dba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h4 class=\"text-themecolor\">Dashboard</h4>
        </div>
        <div class=\"col-md-7 align-self-center text-right\">
            <div class=\"d-flex justify-content-end align-items-center\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>

                <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i> Just Test <3 </button></a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex no-block\">
                        <div class=\"round align-self-center round-success\"><i class=\"ti-wallet\"></i></div>
                        <div class=\"m-l-10 align-self-center\">
                            <h3 class=\"m-b-0\">370</h3>
                            <h5 class=\"text-muted m-b-0\">New Patient</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex no-block\">
                        <div class=\"round align-self-center round-info\"><i class=\"ti-user\"></i></div>
                        <div class=\"m-l-10 align-self-center\">
                            <h3 class=\"m-b-0\">342</h3>
                            <h5 class=\"text-muted m-b-0\">OPD Patient</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex no-block\">
                        <div class=\"round align-self-center round-danger\"><i class=\"ti-calendar\"></i></div>
                        <div class=\"m-l-10 align-self-center\">
                            <h3 class=\"m-b-0\">13</h3>
                            <h5 class=\"text-muted m-b-0\">Today's Ops.</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex no-block\">
                        <div class=\"round align-self-center round-success\"><i class=\"ti-settings\"></i></div>
                        <div class=\"m-l-10 align-self-center\">
                            <h3 class=\"m-b-0\">\$34650</h3>
                            <h5 class=\"text-muted m-b-0\">Hospital Earning</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- .row -->
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><small class=\"float-right text-success\"><i class=\"fa fa-sort-asc\"></i> 18% High then last month</small> New Patient</h5>
                    <div class=\"stats-row\">
                        <div class=\"stat-item\">
                            <h6>Overall</h6>
                            <b>80.40%</b></div>
                        <div class=\"stat-item\">
                            <h6>Montly</h6>
                            <b>15.40%</b></div>
                        <div class=\"stat-item\">
                            <h6>Day</h6>
                            <b>5.50%</b></div>
                    </div>
                </div>
                <div id=\"sparkline8\" class=\"minus-mar\"></div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><small class=\"float-right text-danger\"><i class=\"fa fa-sort-desc\"></i> 18% less then last month</small>OPD Patients</h5>
                    <div class=\"stats-row\">
                        <div class=\"stat-item\">
                            <h6>Overall</h6>
                            <b>80.40%</b></div>
                        <div class=\"stat-item\">
                            <h6>Montly</h6>
                            <b>15.40%</b></div>
                        <div class=\"stat-item\">
                            <h6>Day</h6>
                            <b>5.50%</b></div>
                    </div>
                </div>
                <div id=\"sparkline9\" class=\"minus-mar\"></div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\"><small class=\"float-right text-success\"><i class=\"fa fa-sort-asc\"></i> 18% High then last month</small>Treatment</h5>
                    <div class=\"stats-row\">
                        <div class=\"stat-item\">
                            <h6>Overall Growth</h6>
                            <b>80.40%</b></div>
                        <div class=\"stat-item\">
                            <h6>Montly</h6>
                            <b>15.40%</b></div>
                        <div class=\"stat-item\">
                            <h6>Day</h6>
                            <b>5.50%</b></div>
                    </div>
                </div>
                <div id=\"sparkline10\" class=\"minus-mar\"></div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!--row -->
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-6 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Patients In</h5>
                    <ul class=\"list-inline text-center\">
                        <li>
                            <h5><i class=\"fa fa-circle m-r-5\" style=\"color: #00bfc7;\"></i>OPD</h5>
                        </li>
                        <li>
                            <h5><i class=\"fa fa-circle m-r-5\" style=\"color: #b4becb;\"></i>ICU</h5>
                        </li>
                    </ul>
                    <div id=\"morris-area-chart1\" style=\"height: 370px;\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-6 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Hospital Earning</h5>
                    <ul class=\"list-inline text-center\">
                        <li>
                            <h5><i class=\"fa fa-circle m-r-5\" style=\"color: #00bfc7;\"></i>OPD</h5>
                        </li>
                        <li>
                            <h5><i class=\"fa fa-circle m-r-5\" style=\"color: #b4becb;\"></i>ICU</h5>
                        </li>
                    </ul>
                    <div id=\"morris-area-chart2\" style=\"height: 370px;\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <!-- /row -->
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title m-b-0\">New Patient List</h5>
                    <p class=\"text-muted\">this is the sample data here for crm</p>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Diseases</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Deshmukh</td>
                                <td>Prohaska</td>
                                <td>@Genelia</td>
                                <td><span class=\"label label-danger\">Fever</span> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Deshmukh</td>
                                <td>Gaylord</td>
                                <td>@Ritesh</td>
                                <td><span class=\"label label-info\">Cancer</span> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sanghani</td>
                                <td>Gusikowski</td>
                                <td>@Govinda</td>
                                <td><span class=\"label label-warning\">Lakva</span> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Roshan</td>
                                <td>Rogahn</td>
                                <td>@Hritik</td>
                                <td><span class=\"label label-success\">Dental</span> </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Joshi</td>
                                <td>Hickle</td>
                                <td>@Maruti</td>
                                <td><span class=\"label label-info\">Cancer</span> </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Nigam</td>
                                <td>Eichmann</td>
                                <td>@Sonu</td>
                                <td><span class=\"label label-success\">Dental</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title m-b-0\">Laboratory Test</h5>
                    <p class=\"text-muted\">this is the sample data here for crm</p>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>ECG</th>
                                <th>Result</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Genelia Deshmukh</td>
                                <td><span class=\"peity-line\" data-width=\"120\" data-peity='{ \"fill\": [\"#01c0c8\"], \"stroke\":[\"#01c0c8\"]}' data-height=\"40\">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                <td><span class=\"text-danger text-semibold\"><i class=\"fa fa-level-down\" aria-hidden=\"true\"></i> 28.76%</span> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ajay Devgan</td>
                                <td><span class=\"peity-line\" data-width=\"120\" data-peity='{ \"fill\": [\"#01c0c8\"], \"stroke\":[\"#01c0c8\"]}' data-height=\"40\">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                <td><span class=\"text-warning text-semibold\"><i class=\"fa fa-level-down\" aria-hidden=\"true\"></i> 8.55%</span> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hrithik Roshan</td>
                                <td><span class=\"peity-line\" data-width=\"120\" data-peity='{ \"fill\": [\"#01c0c8\"], \"stroke\":[\"#01c0c8\"]}' data-height=\"40\">0,3,6,1,2,4,6,3,2,1</span> </td>
                                <td><span class=\"text-success text-semibold\"><i class=\"fa fa-level-up\" aria-hidden=\"true\"></i> 58.56%</span> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Steve Gection</td>
                                <td><span class=\"peity-line\" data-width=\"120\" data-peity='{ \"fill\": [\"#01c0c8\"], \"stroke\":[\"#01c0c8\"]}' data-height=\"40\">0,3,6,4,5,4,7,3,4,2</span> </td>
                                <td><span class=\"text-info text-semibold\"><i class=\"fa fa-level-up\" aria-hidden=\"true\"></i> 35.76%</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 294
    public function block_javascripts($context, array $blocks = [])
    {
        // line 295
        echo "
    ";
        // line 296
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/jquery-sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/dashboard1.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "Admin/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 300,  353 => 299,  349 => 298,  345 => 297,  341 => 296,  338 => 295,  335 => 294,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/Default/index.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\Default\\index.html.twig");
    }
}
