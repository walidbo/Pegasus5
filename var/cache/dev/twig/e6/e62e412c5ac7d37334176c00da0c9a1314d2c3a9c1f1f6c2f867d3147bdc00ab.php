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

/* Admin/profil/show.html.twig */
class __TwigTemplate_7e87600159cf2bcfe6e02d054b5a9b4e86ae040ac154834012a09f7f803dd953 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/show.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/profil/show.html.twig", 1);
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
        echo "
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\" integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\" crossorigin=\"\"></script>
        ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\" ></script>
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"/>

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/chartist-js/dist/chartist.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/chartist-js/dist/chartist-init.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/css-chart/css-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/pages/widget-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--  <script type=\"text/javascript\" src='https://maps.google.com/maps/api/js?sensor=true&libraries=places'></script>
  -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <h1>Profil</h1>


    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-lg-4 col-xlg-3 col-md-5\">
            <div class=\"card\">
                <div class=\"card-body\">

                    <center class=\"m-t-30\"> <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"150\">
                        <h4 class=\"card-title m-t-10\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "name", []), "html", null, true);
        echo "</h4>
                        <h6 class=\"card-subtitle\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "sname", []), "html", null, true);
        echo "</h6>
                        <div class=\"row text-center justify-content-md-center\">
                            <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"icon-people\"></i> <font class=\"font-medium\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", []), "html", null, true);
        echo "</font></a></div>
                            <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"icon-Address-Book\"></i> <font class=\"font-medium\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "idrole", []), "html", null, true);
        echo "</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class=\"card-body\"> <small class=\"text-muted\">CIN</small>
                    <h6>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "cin", []), "html", null, true);
        echo "</h6> <small class=\"text-muted p-t-30 db\">Phone</small>
                    <h6>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "tel", []), "html", null, true);
        echo "</h6>
                    <small class=\"text-muted p-t-30 db\">Other Info</small>
                    <h6>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "other", []), "html", null, true);
        echo "</h6>
                    <small class=\"text-muted p-t-30 db\">Address</small>
                    <h6>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "adress", []), "html", null, true);
        echo "</h6>
                    <div class=\"map-box\">
                        <iframe width=\"100%\" height=\"150px\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "city", []), "html", null, true);
        echo "&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
                    </div> <small clakeyss=\"text-muted p-t-30 db\">Social Profile</small>
                    <br>
                    <button class=\"btn btn-circle btn-secondary\"><i class=\"ti-facebook\"></i></button>
                    <button class=\"btn btn-circle btn-secondary\"><i class=\"ti-email\"></i></button>

                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-lg-8 col-xlg-9 col-md-7\">
            <div class=\"card\">
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                    <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">Timeline (Last Hour) </a> </li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">Maps</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                        <div class=\"card-body\">
                            <div class=\"profiletimeline\">
                                <div class=\"sl-item\">

                                    <div class=\"sl-left\"> <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/users/5.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-circle\"> </div>
                                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ds"]) {
            // line 76
            echo "                                        <div class=\"sl-right\">

                                            <div><a href=\"javascript:void(0)\" class=\"link\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "name", []), "html", null, true);
            echo "</a> <span class=\"sl-date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ds"], "dateadd", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
                                                <p> has visited <a href=\"https://www.google.com/maps/search/?api=1&query=";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "lot", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "len", []), "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "lot", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "len", []), "html", null, true);
            echo ") Show In Map</a></p>

                                                <div class=\"ti-bookmark\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">Read</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"ti-alert\"></i> Alert </a> </div>
                                            </div>
                                            <hr>

                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ds'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                </div>




                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Countiry </strong>
                                    <br>
                                    <p class=\"text-muted\">Tunisia </p>
                                </div>
                                <div class=\"col-md-3 col-xs-6 b-r\"> <strong>State</strong>
                                    <br>
                                    <p class=\"text-muted\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "state", []), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col-md-3 col-xs-6 b-r\"> <strong>City</strong>
                                    <br>
                                    <p class=\"text-muted\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "city", []), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col-md-3 col-xs-6\"> <strong>Location</strong>
                                    <br>
                                    <p class=\"text-muted\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "adressdata", []), "html", null, true);
        echo "</p>
                                </div>
                            </div>


                            <hr>

                        </div>


                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-7\">
                        <div class=\"card-body\">
                            <h3>RealtWael 25 minutes agoime Data </h3>
                            <h6 class=\"card-subtitle\">";
        // line 137
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "</h6>
                            <div class=\"demo-container\" style=\"width:100%; height:400px;\">
                                <div id=\"placeholder\" class=\"flot-chart-content\" style=\"width: 100%; height: 400px; padding: 0px; position: relative;\"><canvas class=\"flot-base\" width=\"1114\" height=\"500\" style=\"direction: ltr; position: absolute; left: 0px; top: 0px; width: 891.9px; height: 400px;\"></canvas><div class=\"flot-text\" style=\"position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);\"><div class=\"flot-y-axis flot-y1-axis yAxis y1Axis\" style=\"position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;\"><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 383px; left: 10px; text-align: right;\">0</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 306px; left: 4px; text-align: right;\">20</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 230px; left: 3px; text-align: right;\">40</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 153px; left: 3px; text-align: right;\">60</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 77px; left: 3px; text-align: right;\">80</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 1px; left: 0px; text-align: right;\">100</div></div></div><canvas class=\"flot-overlay\" width=\"1114\" height=\"500\" style=\"direction: ltr; position: absolute; left: 0px; top: 0px; width: 891.9px; height: 400px;\"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-5 border-left p-l-0\">
                        <center class=\"m-t-30 m-b-40 p-t-20 p-b-20\">
                            <font class=\"display-3\">86</font>
                            <h6 class=\"text-muted\">/ bpm</h6>
                            <button type=\"button\" class=\"btn btn-success\">View Details</button>
                        </center>
                        <hr>
                        <center class=\"m-t-30 m-b-40 p-t-20 p-b-20\">
                            <font class=\"display-3\">37.5</font>
                            <h6 class=\"text-muted\">° C</h6>
                            <button type=\"button\" class=\"btn btn-success\">View Details</button>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-body\">
                            <div id=\"mapid\" style=\"width: 100%; height: 600px;\"></div>
                        </div></div></div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 175
        echo "
    <script>

        var mymap = L.map('mapid').setView([36.894346, 10.1853808], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);
        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ds"]) {
            // line 190
            echo "        L.marker([";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "lot", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "len", []), "html", null, true);
            echo "]).addTo(mymap)
            .bindPopup(\"<b>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "name", []), "html", null, true);
            echo " Position N° ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "id", []), "html", null, true);
            echo "</b><br /> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ds"], "dateadd", []), "Y-m-d H:i:s"), "html", null, true);
            echo " \").openPopup();
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ds'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
        L.polygon([
            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ds"]) {
            // line 196
            echo "            [";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "lot", []), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ds"], "len", []), "html", null, true);
            echo "],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ds'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
        ]).addTo(mymap).bindPopup(\"Tracage.\");



        var circle = L.circle([";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "adressdata", []), "html", null, true);
        echo "], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.3,
            radius: ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "zone", []), "html", null, true);
        echo "
        }).addTo(mymap);

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(\"You clicked the map at \" + e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);

    </script>

    ";
        // line 223
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/chartist-js/dist/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart JS -->
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/echarts/echarts-all.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot Charts JavaScript -->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/flot/excanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/pages/widget-charts.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/profil/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 240,  489 => 239,  485 => 238,  481 => 237,  477 => 236,  472 => 234,  467 => 232,  463 => 231,  459 => 230,  451 => 225,  446 => 223,  427 => 207,  420 => 203,  413 => 198,  402 => 196,  398 => 195,  394 => 193,  382 => 191,  375 => 190,  371 => 189,  355 => 175,  346 => 174,  299 => 137,  272 => 113,  265 => 109,  258 => 105,  238 => 87,  218 => 79,  212 => 78,  208 => 76,  204 => 75,  200 => 74,  172 => 49,  167 => 47,  162 => 45,  157 => 43,  153 => 42,  143 => 35,  139 => 34,  134 => 32,  130 => 31,  126 => 30,  114 => 20,  105 => 19,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  67 => 6,  62 => 3,  53 => 2,  31 => 1,);
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

        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\" integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\" crossorigin=\"\"></script>
        {{ parent() }}
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\" ></script>
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"/>

        <link href=\"{{ asset('back/node_modules/chartist-js/dist/chartist.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/node_modules/chartist-js/dist/chartist-init.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/node_modules/css-chart/css-chart.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('back/dist/css/pages/widget-page.css') }}\" rel=\"stylesheet\">

        <!--  <script type=\"text/javascript\" src='https://maps.google.com/maps/api/js?sensor=true&libraries=places'></script>
  -->
    {% endblock %}
{% block body %}

    <h1>Profil</h1>


    <div class=\"row\">
        <!-- Column -->
        <div class=\"col-lg-4 col-xlg-3 col-md-5\">
            <div class=\"card\">
                <div class=\"card-body\">

                    <center class=\"m-t-30\"> <img src=\"{{ asset('back/images/users/5.jpg') }}\" class=\"img-circle\" width=\"150\">
                        <h4 class=\"card-title m-t-10\">{{ profil.name }}</h4>
                        <h6 class=\"card-subtitle\">{{ profil.sname }}</h6>
                        <div class=\"row text-center justify-content-md-center\">
                            <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"icon-people\"></i> <font class=\"font-medium\">{{ profil.id }}</font></a></div>
                            <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"icon-Address-Book\"></i> <font class=\"font-medium\">{{ profil.idrole }}</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class=\"card-body\"> <small class=\"text-muted\">CIN</small>
                    <h6>{{ profil.cin }}</h6> <small class=\"text-muted p-t-30 db\">Phone</small>
                    <h6>{{ profil.tel }}</h6>
                    <small class=\"text-muted p-t-30 db\">Other Info</small>
                    <h6>{{ profil.other }}</h6>
                    <small class=\"text-muted p-t-30 db\">Address</small>
                    <h6>{{ profil.adress }}</h6>
                    <div class=\"map-box\">
                        <iframe width=\"100%\" height=\"150px\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q={{ profil.city }}&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
                    </div> <small clakeyss=\"text-muted p-t-30 db\">Social Profile</small>
                    <br>
                    <button class=\"btn btn-circle btn-secondary\"><i class=\"ti-facebook\"></i></button>
                    <button class=\"btn btn-circle btn-secondary\"><i class=\"ti-email\"></i></button>

                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class=\"col-lg-8 col-xlg-9 col-md-7\">
            <div class=\"card\">
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                    <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">Timeline (Last Hour) </a> </li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">Maps</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                        <div class=\"card-body\">
                            <div class=\"profiletimeline\">
                                <div class=\"sl-item\">

                                    <div class=\"sl-left\"> <img src=\"{{ asset('back/images/users/5.jpg') }}\" alt=\"user\" class=\"img-circle\"> </div>
                                    {% for ds in data %}
                                        <div class=\"sl-right\">

                                            <div><a href=\"javascript:void(0)\" class=\"link\">{{ profil.name }}</a> <span class=\"sl-date\">{{ ds.dateadd |date('Y-m-d H:i:s') }}</span>
                                                <p> has visited <a href=\"https://www.google.com/maps/search/?api=1&query={{ ds.lot }},{{  ds.len }}\">({{ ds.lot }},{{ ds.len }}) Show In Map</a></p>

                                                <div class=\"ti-bookmark\"> <a href=\"javascript:void(0)\" class=\"link m-r-10\">Read</a> <a href=\"javascript:void(0)\" class=\"link m-r-10\"><i class=\"ti-alert\"></i> Alert </a> </div>
                                            </div>
                                            <hr>

                                        </div>
                                    {% endfor %}
                                </div>




                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-3 col-xs-6 b-r\"> <strong>Countiry </strong>
                                    <br>
                                    <p class=\"text-muted\">Tunisia </p>
                                </div>
                                <div class=\"col-md-3 col-xs-6 b-r\"> <strong>State</strong>
                                    <br>
                                    <p class=\"text-muted\">{{ profil.state }}</p>
                                </div>
                                <div class=\"col-md-3 col-xs-6 b-r\"> <strong>City</strong>
                                    <br>
                                    <p class=\"text-muted\">{{ profil.city }}</p>
                                </div>
                                <div class=\"col-md-3 col-xs-6\"> <strong>Location</strong>
                                    <br>
                                    <p class=\"text-muted\">{{ profil.adressdata }}</p>
                                </div>
                            </div>


                            <hr>

                        </div>


                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-7\">
                        <div class=\"card-body\">
                            <h3>RealtWael 25 minutes agoime Data </h3>
                            <h6 class=\"card-subtitle\">{{ \"now\"|date(\"m/d/Y\") }}</h6>
                            <div class=\"demo-container\" style=\"width:100%; height:400px;\">
                                <div id=\"placeholder\" class=\"flot-chart-content\" style=\"width: 100%; height: 400px; padding: 0px; position: relative;\"><canvas class=\"flot-base\" width=\"1114\" height=\"500\" style=\"direction: ltr; position: absolute; left: 0px; top: 0px; width: 891.9px; height: 400px;\"></canvas><div class=\"flot-text\" style=\"position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);\"><div class=\"flot-y-axis flot-y1-axis yAxis y1Axis\" style=\"position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;\"><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 383px; left: 10px; text-align: right;\">0</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 306px; left: 4px; text-align: right;\">20</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 230px; left: 3px; text-align: right;\">40</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 153px; left: 3px; text-align: right;\">60</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 77px; left: 3px; text-align: right;\">80</div><div class=\"flot-tick-label tickLabel\" style=\"position: absolute; top: 1px; left: 0px; text-align: right;\">100</div></div></div><canvas class=\"flot-overlay\" width=\"1114\" height=\"500\" style=\"direction: ltr; position: absolute; left: 0px; top: 0px; width: 891.9px; height: 400px;\"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-5 border-left p-l-0\">
                        <center class=\"m-t-30 m-b-40 p-t-20 p-b-20\">
                            <font class=\"display-3\">86</font>
                            <h6 class=\"text-muted\">/ bpm</h6>
                            <button type=\"button\" class=\"btn btn-success\">View Details</button>
                        </center>
                        <hr>
                        <center class=\"m-t-30 m-b-40 p-t-20 p-b-20\">
                            <font class=\"display-3\">37.5</font>
                            <h6 class=\"text-muted\">° C</h6>
                            <button type=\"button\" class=\"btn btn-success\">View Details</button>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card-body\">
                            <div id=\"mapid\" style=\"width: 100%; height: 600px;\"></div>
                        </div></div></div>
            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}

    <script>

        var mymap = L.map('mapid').setView([36.894346, 10.1853808], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);
        {% for ds in data %}
        L.marker([{{ ds.lot }},{{ ds.len }}]).addTo(mymap)
            .bindPopup(\"<b>{{ profil.name }} Position N° {{ ds.id }}</b><br /> {{ ds.dateadd |date('Y-m-d H:i:s') }} \").openPopup();
        {% endfor %}

        L.polygon([
            {% for ds in data %}
            [{{ ds.lot }},{{ ds.len }}],
            {% endfor %}

        ]).addTo(mymap).bindPopup(\"Tracage.\");



        var circle = L.circle([{{ profil.adressdata }}], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.3,
            radius: {{ profil.zone }}
        }).addTo(mymap);

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(\"You clicked the map at \" + e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);

    </script>

    {{ parent() }}

    <script src=\"{{ asset('back/dist/js/perfect-scrollbar.jquery.min.js') }}\"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('back/node_modules/chartist-js/dist/chartist.min.js') }}\"></script>
    <script src=\"{{ asset('back/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}\"></script>
    <script src=\"{{ asset('back/node_modules/sparkline/jquery.sparkline.min.js') }}\"></script>
    <!-- Chart JS -->
    <script src=\"{{ asset('back/node_modules/echarts/echarts-all.js') }}\"></script>
    <!-- Flot Charts JavaScript -->
    <script src=\"{{ asset('back/node_modules/flot/excanvas.js') }}\"></script>
    <script src=\"{{ asset('back/node_modules/flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('back/node_modules/flot/jquery.flot.time.js') }}\"></script>
    <script src=\"{{ asset('back/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js') }}\"></script>
    <script src=\"{{  asset('back/dist/js/pages/widget-charts.js') }}\"></script>

{% endblock %}
", "Admin/profil/show.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\profil\\show.html.twig");
    }
}
