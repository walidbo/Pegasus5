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

/* Admin/profil/index.html.twig */
class __TwigTemplate_eb05d044fcb4d0a8e3f0466110eaa1b8bb411f04e14a565afcdb458cd98b13d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css"), "html", null, true);
        echo "\">

        ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

    <div class=\"row\">
        <div class=\"col-12\">


            <div class=\"row page-titles\">
                <div class=\"col-md-5 align-self-center\">
                    <h4 class=\"text-themecolor\">Dashboard</h4>
                </div>
                <div class=\"col-md-7 align-self-center text-right\">
                    <div class=\"d-flex justify-content-end align-items-center\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                            <li class=\"breadcrumb-item active\">Profiles</li>
                        </ol>

                        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_new");
        echo "\">  <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i> Add New Profile</button></a>


                    </div>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Profiles</h4>
                    <h6 class=\"card-subtitle\">List Profiles</h6>
                    <div class=\"table-responsive m-t-40\">
                        <table id=\"example23\"
                               class=\"display nowrap table table-hover table-striped table-bordered\"
                               cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>


                                <th>Id</th>
                                <th>Name</th>
                                <th>Second Name</th>
                                <th>Address</th>
                                <th>Cin</th>
                                <th>Tel</th>
                                <th>Other</th>
                                <th>Details</th>
                                <th>Edit</th>


                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Second Name</th>
                                <th>Address</th>
                                <th>Cin</th>
                                <th>Tel</th>
                                <th>Other</th>
                                <th>Details</th>
                                <th>Edit</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
        foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
            // line 76
            echo "                                <tr>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "id", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "name", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "sname", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "adress", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "cin", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "tel", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "other", []), "html", null, true);
            echo "</td>
                                    <td>  <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_show", ["id" => $this->getAttribute($context["profil"], "id", [])]), "html", null, true);
            echo "\">Details</a></td>
                                    <td> <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_edit", ["id" => $this->getAttribute($context["profil"], "id", [])]), "html", null, true);
            echo "\">Edit</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!--Wave Effects -->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/waves.js"), "html", null, true);
        echo "\"></script>
<!--Menu sidebar -->
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
<!--stickey kit -->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!--Custom JavaScript -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<!-- This is data table -->
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<!-- start - This is for export functionality only -->

<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<!-- end - This is for export functionality only -->
<script>
    \$(function () {
        \$('#myTable').DataTable();


        \$('#example23').DataTable({
            paging: true,
            searching: true,
            destroy: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        \$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });

</script>
















";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 122,  289 => 121,  284 => 119,  279 => 117,  275 => 116,  270 => 114,  265 => 112,  260 => 110,  255 => 108,  251 => 107,  245 => 105,  236 => 104,  212 => 88,  203 => 85,  199 => 84,  195 => 83,  191 => 82,  187 => 81,  183 => 80,  179 => 79,  175 => 78,  171 => 77,  168 => 76,  164 => 75,  113 => 27,  94 => 10,  85 => 9,  72 => 6,  67 => 4,  62 => 3,  53 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admin/base.html.twig' %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}\">

        {{ parent() }}

    {% endblock %}
{% block body %}


    <div class=\"row\">
        <div class=\"col-12\">


            <div class=\"row page-titles\">
                <div class=\"col-md-5 align-self-center\">
                    <h4 class=\"text-themecolor\">Dashboard</h4>
                </div>
                <div class=\"col-md-7 align-self-center text-right\">
                    <div class=\"d-flex justify-content-end align-items-center\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                            <li class=\"breadcrumb-item active\">Profiles</li>
                        </ol>

                        <a href=\"{{ path('profil_new') }}\">  <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i> Add New Profile</button></a>


                    </div>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Profiles</h4>
                    <h6 class=\"card-subtitle\">List Profiles</h6>
                    <div class=\"table-responsive m-t-40\">
                        <table id=\"example23\"
                               class=\"display nowrap table table-hover table-striped table-bordered\"
                               cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>


                                <th>Id</th>
                                <th>Name</th>
                                <th>Second Name</th>
                                <th>Address</th>
                                <th>Cin</th>
                                <th>Tel</th>
                                <th>Other</th>
                                <th>Details</th>
                                <th>Edit</th>


                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Second Name</th>
                                <th>Address</th>
                                <th>Cin</th>
                                <th>Tel</th>
                                <th>Other</th>
                                <th>Details</th>
                                <th>Edit</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            {% for profil in profils %}
                                <tr>
                                    <td>{{ profil.id }}</td>
                                    <td>{{ profil.name }}</td>
                                    <td>{{ profil.sname }}</td>
                                    <td>{{ profil.adress }}</td>
                                    <td>{{ profil.cin }}</td>
                                    <td>{{ profil.tel }}</td>
                                    <td>{{ profil.other }}</td>
                                    <td>  <a href=\"{{ path('profil_show', { 'id': profil.id }) }}\">Details</a></td>
                                    <td> <a href=\"{{ path('profil_edit', { 'id': profil.id }) }}\">Edit</a></td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>



{% endblock %}

    {% block javascripts %}
<script src=\"{{ asset('back/node_modules/jquery/jquery-3.2.1.min.js') }}\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"{{ asset('back/node_modules/popper/popper.min.js') }}\"></script>
<script src=\"{{ asset('back/assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src=\"{{ asset('back/dist/js/perfect-scrollbar.jquery.min.js') }}\"></script>
<!--Wave Effects -->
<script src=\"{{ asset('back/dist/js/waves.js') }}\"></script>
<!--Menu sidebar -->
<script src=\"{{ asset('back/dist/js/sidebarmenu.js') }}\"></script>
<!--stickey kit -->
<script src=\"{{ asset('back/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}\"></script>
<script src=\"{{ asset('back/node_modules/sparkline/jquery.sparkline.min.js') }}\"></script>
<!--Custom JavaScript -->
<script src=\"{{ asset('back/dist/js/custom.min.js') }}\"></script>
<!-- This is data table -->
<script src=\"{{ asset('back/node_modules/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('back/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}\"></script>
<!-- start - This is for export functionality only -->

<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<!-- end - This is for export functionality only -->
<script>
    \$(function () {
        \$('#myTable').DataTable();


        \$('#example23').DataTable({
            paging: true,
            searching: true,
            destroy: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        \$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });

</script>
















{% endblock %}
", "Admin/profil/index.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\profil\\index.html.twig");
    }
}
