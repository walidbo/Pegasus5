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

/* Admin/profil/edit.html.twig */
class __TwigTemplate_4f9871923ba6075f94fd519515a806c62ab2f52577ae2d1b4483b3ba2f6b1e73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/edit.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/profil/edit.html.twig", 1);
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
        echo "<div class=\"row page-titles\">
    <div class=\"col-md-5 align-self-center\">
        <h4 class=\"text-themecolor\">Profiles Edit</h4>
    </div>
    <div class=\"col-md-7 align-self-center text-right\">
        <div class=\"d-flex justify-content-end align-items-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                <li class=\"breadcrumb-item active\">Profile</li>
                <li class=\"breadcrumb-item active\">Edit</li>
            </ol>

            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_index");
        echo "\">  <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i>List</button></a>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"card card-body\">
            <h4 class=\"card-title\">Edit Profile</h4>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card card-body\">
                        <h4 class=\"card-title\">Profile</h4>

                        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', ["attr" => ["class" => "frm-horizontal mt-4"]]);
        echo "

                        <div class=\"form-group\">
                            <label>Name</span></label>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Formule", "type" => "text", "placeholder" => "Foulen"]]);
        echo "
                        </div>


                        <div class=\"form-group\">
                            <label>Second Name</label>
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sname", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Classe", "type" => "text", "placeholder" => "Ben Foulen"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label>Address</label>

                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adress", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Etudent", "type" => "text", "placeholder" => "XXXXXXX , ZIP :XXX"]]);
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label>CIN</label>

                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Prof", "type" => "text", "placeholder" => "XXXXXXXX"]]);
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label>Tel</label>

                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel", []), 'widget', ["attr" => ["class" => "form-control", "id" => "note", "type" => "text", "placeholder" => "+216 XX XXX XXX"]]);
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label>Other</label>

                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "other", []), 'widget', ["attr" => ["class" => "form-control", "id" => "remarque", "type" => "text", "placeholder" => "..."]]);
        echo "

                        </div>


                        <div class=\"form-group\">
                            <label>Role</label>

                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idrole", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "ChoiceType"]]);
        echo "

                        </div>



                        <div class=\"form-group\">
                            <label>User</label>

                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "iduser", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "ChoiceType"]]);
        echo "

                        </div>
















            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            <input class=\"btn btn-rounded btn-block btn-success\"  type=\"submit\" value=\"Update\" />
            ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <br>
            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input class=\"btn btn-rounded btn-block btn-dark\" type=\"submit\" value=\"Delete\">
            ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/profil/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 107,  199 => 105,  194 => 103,  189 => 101,  167 => 82,  155 => 73,  144 => 65,  134 => 58,  124 => 51,  114 => 44,  106 => 39,  97 => 33,  90 => 29,  74 => 16,  60 => 4,  51 => 3,  29 => 1,);
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
        <h4 class=\"text-themecolor\">Profiles Edit</h4>
    </div>
    <div class=\"col-md-7 align-self-center text-right\">
        <div class=\"d-flex justify-content-end align-items-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                <li class=\"breadcrumb-item active\">Profile</li>
                <li class=\"breadcrumb-item active\">Edit</li>
            </ol>

            <a href=\"{{ path('profil_index') }}\">  <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i>List</button></a>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"card card-body\">
            <h4 class=\"card-title\">Edit Profile</h4>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card card-body\">
                        <h4 class=\"card-title\">Profile</h4>

                        {{ form_start(edit_form,{'attr':{'class':'frm-horizontal mt-4'}}) }}

                        <div class=\"form-group\">
                            <label>Name</span></label>
                            {{ form_widget(edit_form.name,{'attr':{'class':'form-control','id':'Formule','type':'text','placeholder':'Foulen'}}) }}
                        </div>


                        <div class=\"form-group\">
                            <label>Second Name</label>
                            {{ form_widget(edit_form.sname,{'attr':{'class':'form-control','id':'Classe','type':'text','placeholder':'Ben Foulen'}}) }}
                        </div>
                        <div class=\"form-group\">
                            <label>Address</label>

                            {{ form_widget(edit_form.adress,{'attr':{'class':'form-control','id':'Etudent','type':'text','placeholder':'XXXXXXX , ZIP :XXX'}}) }}

                        </div>

                        <div class=\"form-group\">
                            <label>CIN</label>

                            {{ form_widget(edit_form.cin,{'attr':{'class':'form-control','id':'Prof','type':'text','placeholder':'XXXXXXXX'}}) }}

                        </div>

                        <div class=\"form-group\">
                            <label>Tel</label>

                            {{ form_widget(edit_form.tel,{'attr':{'class':'form-control','id':'note','type':'text','placeholder':'+216 XX XXX XXX'}}) }}

                        </div>

                        <div class=\"form-group\">
                            <label>Other</label>

                            {{ form_widget(edit_form.other,{'attr':{'class':'form-control','id':'remarque','type':'text','placeholder':'...'}}) }}

                        </div>


                        <div class=\"form-group\">
                            <label>Role</label>

                            {{ form_widget(edit_form.idrole,{'attr':{'class':'form-control','id':'idmatiere','type':'ChoiceType'}}) }}

                        </div>



                        <div class=\"form-group\">
                            <label>User</label>

                            {{ form_widget(edit_form.iduser,{'attr':{'class':'form-control','id':'idmatiere','type':'ChoiceType'}}) }}

                        </div>
















            {{ form_widget(edit_form) }}
            <input class=\"btn btn-rounded btn-block btn-success\"  type=\"submit\" value=\"Update\" />
            {{ form_end(edit_form) }}
            <br>
            {{ form_start(delete_form) }}
            <input class=\"btn btn-rounded btn-block btn-dark\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
{% endblock %}
", "Admin/profil/edit.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\profil\\edit.html.twig");
    }
}
