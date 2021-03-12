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

/* Admin/role/index.html.twig */
class __TwigTemplate_df6c2d4624c25c466bd083c54e181f2832234188106b6845bef259e6ffbc8e34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/role/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/role/index.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/role/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h4 class=\"text-themecolor\">Roles list</h4>
        </div>
        <div class=\"col-md-7 align-self-center text-right\">
            <div class=\"d-flex justify-content-end align-items-center\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Roles</li>
                </ol>

            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-12 m-t-30\">
            <h4 class=\"m-b-0\">  <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\" ><button type=\"button\" class=\"btn waves-effect waves-light btn-rounded btn-success\">Create New Role</button></a>
            </h4>
            <br>
            <div class=\"card-columns\">

                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 29
            echo "                <div class=\"card text-center\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", []), "html", null, true);
            echo "</h4>
                        <p class=\"card-text\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "nom", []), "html", null, true);
            echo "</p>

                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_show", ["id" => $this->getAttribute($context["role"], "id", [])]), "html", null, true);
            echo "\" ><button type=\"button\" class=\"btn waves-effect waves-light btn-rounded btn-danger\">Show</button></a>

                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_edit", ["id" => $this->getAttribute($context["role"], "id", [])]), "html", null, true);
            echo "\" ><button type=\"button\" class=\"btn waves-effect waves-light btn-rounded btn-warning\">Edit</button></a>

                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            </div>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  111 => 36,  106 => 34,  101 => 32,  97 => 31,  93 => 29,  89 => 28,  81 => 23,  60 => 4,  51 => 3,  29 => 1,);
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

{% block body %}

    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h4 class=\"text-themecolor\">Roles list</h4>
        </div>
        <div class=\"col-md-7 align-self-center text-right\">
            <div class=\"d-flex justify-content-end align-items-center\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Roles</li>
                </ol>

            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-12 m-t-30\">
            <h4 class=\"m-b-0\">  <a href=\"{{ path('role_new') }}\" ><button type=\"button\" class=\"btn waves-effect waves-light btn-rounded btn-success\">Create New Role</button></a>
            </h4>
            <br>
            <div class=\"card-columns\">

                {% for role in roles %}
                <div class=\"card text-center\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{ role.id }}</h4>
                        <p class=\"card-text\">{{ role.nom  }}</p>

                        <a href=\"{{ path('role_show', { 'id': role.id }) }}\" ><button type=\"button\" class=\"btn waves-effect waves-light btn-rounded btn-danger\">Show</button></a>

                        <a href=\"{{ path('role_edit', { 'id': role.id }) }}\" ><button type=\"button\" class=\"btn waves-effect waves-light btn-rounded btn-warning\">Edit</button></a>

                    </div>
                </div>
                {% endfor %}

            </div>
        </div>
    </div>




{% endblock %}
", "Admin/role/index.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\role\\index.html.twig");
    }
}
