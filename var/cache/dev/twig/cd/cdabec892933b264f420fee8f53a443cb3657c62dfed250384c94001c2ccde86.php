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

/* Admin/profil/new.html.twig */
class __TwigTemplate_baed7f9427b8c21f0b40a8b224ebbb39345e88b33931c19dc2b2c3a7f97b6963 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/profil/new.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/profil/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <script type=\"text/javascript\" src='https://maps.google.com/maps/api/js?sensor=true&libraries=places'></script>
";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h4 class=\"text-themecolor\">Add Profile</h4>
        </div>
        <div class=\"col-md-7 align-self-center text-right\">
            <div class=\"d-flex justify-content-end align-items-center\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                    <li class=\"breadcrumb-item active\">Profile</li>
                    <li class=\"breadcrumb-item active\">Add</li>
                </ol>

                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_index");
        echo "\">  <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i>List Profiles</button></a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"card card-body\">
                <h4 class=\"card-title\">Add Profile</h4>

                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "frm-horizontal mt-4"]]);
        echo "

                <div class=\"form-group\">
                    <label>Name</span></label>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Formule", "type" => "text", "placeholder" => "Foulen"]]);
        echo "
                </div>


                <div class=\"form-group\">
                    <label>Second Name</label>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sname", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Classe", "type" => "text", "placeholder" => "Ben Foulen"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label>Address</label>

                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adress", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Etudent", "type" => "text", "placeholder" => "XXXXXXX , ZIP :XXX"]]);
        echo "

                </div>

                <div class=\"form-group\">
                    <label>CIN</label>

                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", []), 'widget', ["attr" => ["class" => "form-control", "id" => "Prof", "type" => "text", "placeholder" => "XXXXXXXX"]]);
        echo "

                </div>

                <div class=\"form-group\">
                    <label>Tel</label>

                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control", "id" => "note", "type" => "text", "placeholder" => "+216 XX XXX XXX"]]);
        echo "

                </div>

                <div class=\"form-group\">
                    <label>Other</label>

                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "other", []), 'widget', ["attr" => ["class" => "form-control", "id" => "remarque", "type" => "text", "placeholder" => "..."]]);
        echo "

                </div>


                <div class=\"form-group\">
                    <label>Role</label>

                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idrole", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "ChoiceType"]]);
        echo "

                </div>



                <div class=\"form-group\">
                    <label>User</label>

                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iduser", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "ChoiceType"]]);
        echo "

            </div>



                <div class=\"form-group\">
                    <label>Code</label>

                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "ChoiceType"]]);
        echo "

                </div>
                 <div class=\"form-group\">

                     <div id=\"us3\" style=\"width: 550px; height: 400px;\"></div>
                     <div class=\"clearfix\">&nbsp;</div>
                     <div class=\"m-t-small\">


                         <div class=\"col-sm-3\">
                             <input type=\"hidden\" class=\"form-control\" style=\"width: 110px\" id=\"us3-lat\" />
                         </div>

                         <div class=\"col-sm-3\">
                             <input type=\"hidden\" class=\"form-control\" style=\"width: 110px\" id=\"us3-lon\" />
                         </div>
                 </div>



                <div class=\"form-group\">
                    <label>Address Location</label>

                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adressdata", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "ChoiceType"]]);
        echo "

                </div>


                <div class=\"form-group\">
                    <label>Zone</label>

                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "RangeType"]]);
        echo "

                </div>


                <div class=\"form-group\">
                    <label>City</label>

                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "RangeType"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <label>State</label>

                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", []), 'widget', ["attr" => ["class" => "form-control", "id" => "idmatiere", "type" => "RangeType"]]);
        echo "

                </div>


                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input class=\"btn btn-lg btn-success\"  type=\"submit\" value=\"Ajouter\" />

                ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <br>


            </div>
        </div>
    </div>

    </div>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        /*! jquery-locationpicker - v0.1.16 - 2017-10-02 */

        !function(a){function b(a,b){var c=new google.maps.Map(a,b),d=new google.maps.Marker({position:new google.maps.LatLng(54.19335,-3.92695),map:c,title:\"Drag Me\",visible:b.markerVisible,draggable:b.markerDraggable,icon:void 0!==b.markerIcon?b.markerIcon:void 0});return{map:c,marker:d,circle:null,location:d.position,radius:b.radius,locationName:b.locationName,addressComponents:{formatted_address:null,addressLine1:null,addressLine2:null,streetName:null,streetNumber:null,city:null,district:null,state:null,stateOrProvince:null},settings:b.settings,domContainer:a,geodecoder:new google.maps.Geocoder}}function c(a){return void 0!=d(a)}function d(b){return a(b).data(\"locationpicker\")}function e(a,b){if(a){var c=i.locationFromLatLng(b.marker.position);a.latitudeInput&&a.latitudeInput.val(c.latitude).change(),a.longitudeInput&&a.longitudeInput.val(c.longitude).change(),a.radiusInput&&a.radiusInput.val(b.radius).change(),a.locationNameInput&&a.locationNameInput.val(b.locationName).change()}}function f(b,c){if(b){if(b.radiusInput&&b.radiusInput.on(\"change\",function(b){var d=a(this).val();b.originalEvent&&!isNaN(d)&&(c.radius=d,i.setPosition(c,c.location,function(a){a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1])}))}),b.locationNameInput&&c.settings.enableAutocomplete){var d=!1;c.autocomplete=new google.maps.places.Autocomplete(b.locationNameInput.get(0),c.settings.autocompleteOptions),google.maps.event.addListener(c.autocomplete,\"place_changed\",function(){d=!1;var a=c.autocomplete.getPlace();return a.geometry?void i.setPosition(c,a.geometry.location,function(a){e(b,a),a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1])}):void c.settings.onlocationnotfound(a.name)}),c.settings.enableAutocompleteBlur&&(b.locationNameInput.on(\"change\",function(a){a.originalEvent&&(d=!0)}),b.locationNameInput.on(\"blur\",function(f){f.originalEvent&&setTimeout(function(){var f=a(b.locationNameInput).val();f.length>5&&d&&(d=!1,c.geodecoder.geocode({address:f},function(a,d){d==google.maps.GeocoderStatus.OK&&a&&a.length&&i.setPosition(c,a[0].geometry.location,function(a){e(b,a),a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1])})}))},1e3)}))}b.latitudeInput&&b.latitudeInput.on(\"change\",function(b){var d=a(this).val();b.originalEvent&&!isNaN(d)&&i.setPosition(c,new google.maps.LatLng(d,c.location.lng()),function(a){a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1]),e(c.settings.inputBinding,c)})}),b.longitudeInput&&b.longitudeInput.on(\"change\",function(b){var d=a(this).val();b.originalEvent&&!isNaN(d)&&i.setPosition(c,new google.maps.LatLng(c.location.lat(),d),function(a){a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1]),e(c.settings.inputBinding,c)})})}}function g(a){google.maps.event.trigger(a.map,\"resize\"),setTimeout(function(){a.map.setCenter(a.marker.position)},300)}function h(b,c,d){var e=a.extend({},a.fn.locationpicker.defaults,d),g=e.location.latitude,h=e.location.longitude,j=e.radius,k=b.settings.location.latitude,l=b.settings.location.longitude,m=b.settings.radius;(g!=k||h!=l||j!=m)&&(b.settings.location.latitude=g,b.settings.location.longitude=h,b.radius=j,i.setPosition(b,new google.maps.LatLng(b.settings.location.latitude,b.settings.location.longitude),function(a){f(b.settings.inputBinding,b),a.settings.oninitialized(c)}))}var i={drawCircle:function(b,c,d,e){return null!=b.circle&&b.circle.setMap(null),d>0?(d*=1,e=a.extend({strokeColor:\"#0000FF\",strokeOpacity:.35,strokeWeight:2,fillColor:\"#0000FF\",fillOpacity:.2},e),e.map=b.map,e.radius=d,e.center=c,b.circle=new google.maps.Circle(e),b.circle):null},setPosition:function(a,b,c){a.location=b,a.marker.setPosition(b),a.map.panTo(b),this.drawCircle(a,b,a.radius,{}),a.settings.enableReverseGeocode?this.updateLocationName(a,c):c&&c.call(this,a)},locationFromLatLng:function(a){return{latitude:a.lat(),longitude:a.lng()}},addressByFormat:function(a,b){for(var c=null,d=a.length-1;d>=0;d--)a[d].types.indexOf(b)>=0&&(c=a[d]);return c||a[0]},updateLocationName:function(a,b){a.geodecoder.geocode({latLng:a.marker.position},function(c,d){if(d==google.maps.GeocoderStatus.OK&&c.length>0){var e=i.addressByFormat(c,a.settings.addressFormat);a.locationName=e.formatted_address,a.addressComponents=i.address_component_from_google_geocode(e.address_components)}else if(d==google.maps.GeocoderStatus.OVER_QUERY_LIMIT)return setTimeout(function(){i.updateLocationName(a,b)},1e3);b&&b.call(this,a)})},address_component_from_google_geocode:function(a){for(var b={},c=a.length-1;c>=0;c--){var d=a[c];d.types.indexOf(\"postal_code\")>=0?b.postalCode=d.short_name:d.types.indexOf(\"street_number\")>=0?b.streetNumber=d.short_name:d.types.indexOf(\"route\")>=0?b.streetName=d.short_name:d.types.indexOf(\"locality\")>=0?b.city=d.short_name:d.types.indexOf(\"sublocality\")>=0?b.district=d.short_name:d.types.indexOf(\"administrative_area_level_1\")>=0?b.stateOrProvince=d.short_name:d.types.indexOf(\"country\")>=0&&(b.country=d.short_name)}return b.addressLine1=[b.streetNumber,b.streetName].join(\" \").trim(),b.addressLine2=\"\",b}};a.fn.locationpicker=function(j,k){if(\"string\"==typeof j){var l=this.get(0);if(!c(l))return;var m=d(l);switch(j){case\"location\":if(void 0==k){var n=i.locationFromLatLng(m.location);return n.radius=m.radius,n.name=m.locationName,n}k.radius&&(m.radius=k.radius),i.setPosition(m,new google.maps.LatLng(k.latitude,k.longitude),function(a){e(a.settings.inputBinding,a)});break;case\"subscribe\":if(void 0==k)return null;var o=k.event,p=k.callback;if(!o||!p)return console.error('LocationPicker: Invalid arguments for method \"subscribe\"'),null;google.maps.event.addListener(m.map,o,p);break;case\"map\":if(void 0==k){var q=i.locationFromLatLng(m.location);return q.formattedAddress=m.locationName,q.addressComponents=m.addressComponents,{map:m.map,marker:m.marker,location:q}}return null;case\"autosize\":return g(m),this}return null}return this.each(function(){function g(){i.setPosition(m,m.marker.position,function(a){var b=i.locationFromLatLng(m.location);e(m.settings.inputBinding,m),a.settings.onchanged.apply(m.domContainer,[b,a.radius,!0])})}var k=a(this);if(c(this))return void h(d(this),a(this),j);var l=a.extend({},a.fn.locationpicker.defaults,j),m=new b(this,a.extend({},{zoom:l.zoom,center:new google.maps.LatLng(l.location.latitude,l.location.longitude),mapTypeId:l.mapTypeId,mapTypeControl:!1,styles:l.styles,disableDoubleClickZoom:!1,scrollwheel:l.scrollwheel,streetViewControl:!1,radius:l.radius,locationName:l.locationName,settings:l,autocompleteOptions:l.autocompleteOptions,addressFormat:l.addressFormat,draggable:l.draggable,markerIcon:l.markerIcon,markerDraggable:l.markerDraggable,markerVisible:l.markerVisible},l.mapOptions));k.data(\"locationpicker\",m),l.markerInCenter&&(m.map.addListener(\"bounds_changed\",function(){m.marker.dragging||(m.marker.setPosition(m.map.center),e(m.settings.inputBinding,m))}),m.map.addListener(\"idle\",function(){m.marker.dragging||g()})),google.maps.event.addListener(m.marker,\"drag\",function(){e(m.settings.inputBinding,m)}),google.maps.event.addListener(m.marker,\"dragend\",function(){g()}),i.setPosition(m,new google.maps.LatLng(l.location.latitude,l.location.longitude),function(a){e(l.inputBinding,m),f(l.inputBinding,m),a.settings.oninitialized(k)})})},a.fn.locationpicker.defaults={location:{latitude:40.7324319,longitude:-73.82480777777776},locationName:\"\",radius:500,zoom:15,mapTypeId:google.maps.MapTypeId.ROADMAP,styles:[],mapOptions:{},scrollwheel:!0,inputBinding:{latitudeInput:null,longitudeInput:null,radiusInput:null,locationNameInput:null},enableAutocomplete:!1,enableAutocompleteBlur:!1,autocompleteOptions:null,addressFormat:\"postal_code\",enableReverseGeocode:!0,draggable:!0,onchanged:function(){},onlocationnotfound:function(){},oninitialized:function(){},markerIcon:void 0,markerDraggable:!0,markerVisible:!0}}(jQuery);
        //# sourceMappingURL=locationpicker.jquery.min.js.map
    </script>
    <script>
        \$('#us3').locationpicker({
            location: {
                latitude: 36.77426151704759,
                longitude: 10.178935050964348

            },
            radius: 300,
            inputBinding: {
                latitudeInput: \$('#us3-lat'),
                longitudeInput: \$('#us3-lon'),
                radiusInput: \$('#appbundle_profil_zone')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                \$('#appbundle_profil_adressdata').val( \$('#us3-lat').val() + \",\" + \$('#us3-lon').val());
                //=
                // Uncomment line below to show alert on each Location Changed event
                //alert(\"Location changed. New location (\" + currentLocation.latitude + \", \" + currentLocation.longitude + \")\");
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/profil/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 166,  302 => 165,  275 => 147,  269 => 144,  261 => 139,  252 => 133,  241 => 125,  230 => 117,  203 => 93,  191 => 84,  179 => 75,  168 => 67,  158 => 60,  148 => 53,  138 => 46,  130 => 41,  121 => 35,  114 => 31,  102 => 22,  86 => 8,  77 => 7,  65 => 5,  62 => 4,  53 => 3,  31 => 1,);
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
    <script type=\"text/javascript\" src='https://maps.google.com/maps/api/js?sensor=true&libraries=places'></script>
{{ parent() }}
{% endblock %}
{% block body %}


    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h4 class=\"text-themecolor\">Add Profile</h4>
        </div>
        <div class=\"col-md-7 align-self-center text-right\">
            <div class=\"d-flex justify-content-end align-items-center\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Dashboard</a></li>
                    <li class=\"breadcrumb-item active\">Profile</li>
                    <li class=\"breadcrumb-item active\">Add</li>
                </ol>

                <a href=\"{{ path('profil_index') }}\">  <button type=\"button\" class=\"btn btn-info d-none d-lg-block m-l-15\"><i class=\"fa fa-plus-circle\"></i>List Profiles</button></a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"card card-body\">
                <h4 class=\"card-title\">Add Profile</h4>

                {{ form_start(form,{'attr':{'class':'frm-horizontal mt-4'}}) }}

                <div class=\"form-group\">
                    <label>Name</span></label>
                    {{ form_widget(form.name,{'attr':{'class':'form-control','id':'Formule','type':'text','placeholder':'Foulen'}}) }}
                </div>


                <div class=\"form-group\">
                    <label>Second Name</label>
                    {{ form_widget(form.sname,{'attr':{'class':'form-control','id':'Classe','type':'text','placeholder':'Ben Foulen'}}) }}
                </div>
                <div class=\"form-group\">
                    <label>Address</label>

                    {{ form_widget(form.adress,{'attr':{'class':'form-control','id':'Etudent','type':'text','placeholder':'XXXXXXX , ZIP :XXX'}}) }}

                </div>

                <div class=\"form-group\">
                    <label>CIN</label>

                    {{ form_widget(form.cin,{'attr':{'class':'form-control','id':'Prof','type':'text','placeholder':'XXXXXXXX'}}) }}

                </div>

                <div class=\"form-group\">
                    <label>Tel</label>

                    {{ form_widget(form.tel,{'attr':{'class':'form-control','id':'note','type':'text','placeholder':'+216 XX XXX XXX'}}) }}

                </div>

                <div class=\"form-group\">
                    <label>Other</label>

                    {{ form_widget(form.other,{'attr':{'class':'form-control','id':'remarque','type':'text','placeholder':'...'}}) }}

                </div>


                <div class=\"form-group\">
                    <label>Role</label>

                    {{ form_widget(form.idrole,{'attr':{'class':'form-control','id':'idmatiere','type':'ChoiceType'}}) }}

                </div>



                <div class=\"form-group\">
                    <label>User</label>

                    {{ form_widget(form.iduser,{'attr':{'class':'form-control','id':'idmatiere','type':'ChoiceType'}}) }}

            </div>



                <div class=\"form-group\">
                    <label>Code</label>

                    {{ form_widget(form.code,{'attr':{'class':'form-control','id':'idmatiere','type':'ChoiceType'}}) }}

                </div>
                 <div class=\"form-group\">

                     <div id=\"us3\" style=\"width: 550px; height: 400px;\"></div>
                     <div class=\"clearfix\">&nbsp;</div>
                     <div class=\"m-t-small\">


                         <div class=\"col-sm-3\">
                             <input type=\"hidden\" class=\"form-control\" style=\"width: 110px\" id=\"us3-lat\" />
                         </div>

                         <div class=\"col-sm-3\">
                             <input type=\"hidden\" class=\"form-control\" style=\"width: 110px\" id=\"us3-lon\" />
                         </div>
                 </div>



                <div class=\"form-group\">
                    <label>Address Location</label>

                    {{ form_widget(form.adressdata,{'attr':{'class':'form-control','id':'idmatiere','type':'ChoiceType'}}) }}

                </div>


                <div class=\"form-group\">
                    <label>Zone</label>

                    {{ form_widget(form.zone,{'attr':{'class':'form-control','id':'idmatiere','type':'RangeType'}}) }}

                </div>


                <div class=\"form-group\">
                    <label>City</label>

                    {{ form_widget(form.city,{'attr':{'class':'form-control','id':'idmatiere','type':'RangeType'}}) }}

                </div>
                <div class=\"form-group\">
                    <label>State</label>

                    {{ form_widget(form.state,{'attr':{'class':'form-control','id':'idmatiere','type':'RangeType'}}) }}

                </div>


                {{ form_widget(form) }}
                <input class=\"btn btn-lg btn-success\"  type=\"submit\" value=\"Ajouter\" />

                {{ form_end(form) }}
                <br>


            </div>
        </div>
    </div>

    </div>







{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        /*! jquery-locationpicker - v0.1.16 - 2017-10-02 */

        !function(a){function b(a,b){var c=new google.maps.Map(a,b),d=new google.maps.Marker({position:new google.maps.LatLng(54.19335,-3.92695),map:c,title:\"Drag Me\",visible:b.markerVisible,draggable:b.markerDraggable,icon:void 0!==b.markerIcon?b.markerIcon:void 0});return{map:c,marker:d,circle:null,location:d.position,radius:b.radius,locationName:b.locationName,addressComponents:{formatted_address:null,addressLine1:null,addressLine2:null,streetName:null,streetNumber:null,city:null,district:null,state:null,stateOrProvince:null},settings:b.settings,domContainer:a,geodecoder:new google.maps.Geocoder}}function c(a){return void 0!=d(a)}function d(b){return a(b).data(\"locationpicker\")}function e(a,b){if(a){var c=i.locationFromLatLng(b.marker.position);a.latitudeInput&&a.latitudeInput.val(c.latitude).change(),a.longitudeInput&&a.longitudeInput.val(c.longitude).change(),a.radiusInput&&a.radiusInput.val(b.radius).change(),a.locationNameInput&&a.locationNameInput.val(b.locationName).change()}}function f(b,c){if(b){if(b.radiusInput&&b.radiusInput.on(\"change\",function(b){var d=a(this).val();b.originalEvent&&!isNaN(d)&&(c.radius=d,i.setPosition(c,c.location,function(a){a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1])}))}),b.locationNameInput&&c.settings.enableAutocomplete){var d=!1;c.autocomplete=new google.maps.places.Autocomplete(b.locationNameInput.get(0),c.settings.autocompleteOptions),google.maps.event.addListener(c.autocomplete,\"place_changed\",function(){d=!1;var a=c.autocomplete.getPlace();return a.geometry?void i.setPosition(c,a.geometry.location,function(a){e(b,a),a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1])}):void c.settings.onlocationnotfound(a.name)}),c.settings.enableAutocompleteBlur&&(b.locationNameInput.on(\"change\",function(a){a.originalEvent&&(d=!0)}),b.locationNameInput.on(\"blur\",function(f){f.originalEvent&&setTimeout(function(){var f=a(b.locationNameInput).val();f.length>5&&d&&(d=!1,c.geodecoder.geocode({address:f},function(a,d){d==google.maps.GeocoderStatus.OK&&a&&a.length&&i.setPosition(c,a[0].geometry.location,function(a){e(b,a),a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1])})}))},1e3)}))}b.latitudeInput&&b.latitudeInput.on(\"change\",function(b){var d=a(this).val();b.originalEvent&&!isNaN(d)&&i.setPosition(c,new google.maps.LatLng(d,c.location.lng()),function(a){a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1]),e(c.settings.inputBinding,c)})}),b.longitudeInput&&b.longitudeInput.on(\"change\",function(b){var d=a(this).val();b.originalEvent&&!isNaN(d)&&i.setPosition(c,new google.maps.LatLng(c.location.lat(),d),function(a){a.settings.onchanged.apply(c.domContainer,[i.locationFromLatLng(a.location),a.radius,!1]),e(c.settings.inputBinding,c)})})}}function g(a){google.maps.event.trigger(a.map,\"resize\"),setTimeout(function(){a.map.setCenter(a.marker.position)},300)}function h(b,c,d){var e=a.extend({},a.fn.locationpicker.defaults,d),g=e.location.latitude,h=e.location.longitude,j=e.radius,k=b.settings.location.latitude,l=b.settings.location.longitude,m=b.settings.radius;(g!=k||h!=l||j!=m)&&(b.settings.location.latitude=g,b.settings.location.longitude=h,b.radius=j,i.setPosition(b,new google.maps.LatLng(b.settings.location.latitude,b.settings.location.longitude),function(a){f(b.settings.inputBinding,b),a.settings.oninitialized(c)}))}var i={drawCircle:function(b,c,d,e){return null!=b.circle&&b.circle.setMap(null),d>0?(d*=1,e=a.extend({strokeColor:\"#0000FF\",strokeOpacity:.35,strokeWeight:2,fillColor:\"#0000FF\",fillOpacity:.2},e),e.map=b.map,e.radius=d,e.center=c,b.circle=new google.maps.Circle(e),b.circle):null},setPosition:function(a,b,c){a.location=b,a.marker.setPosition(b),a.map.panTo(b),this.drawCircle(a,b,a.radius,{}),a.settings.enableReverseGeocode?this.updateLocationName(a,c):c&&c.call(this,a)},locationFromLatLng:function(a){return{latitude:a.lat(),longitude:a.lng()}},addressByFormat:function(a,b){for(var c=null,d=a.length-1;d>=0;d--)a[d].types.indexOf(b)>=0&&(c=a[d]);return c||a[0]},updateLocationName:function(a,b){a.geodecoder.geocode({latLng:a.marker.position},function(c,d){if(d==google.maps.GeocoderStatus.OK&&c.length>0){var e=i.addressByFormat(c,a.settings.addressFormat);a.locationName=e.formatted_address,a.addressComponents=i.address_component_from_google_geocode(e.address_components)}else if(d==google.maps.GeocoderStatus.OVER_QUERY_LIMIT)return setTimeout(function(){i.updateLocationName(a,b)},1e3);b&&b.call(this,a)})},address_component_from_google_geocode:function(a){for(var b={},c=a.length-1;c>=0;c--){var d=a[c];d.types.indexOf(\"postal_code\")>=0?b.postalCode=d.short_name:d.types.indexOf(\"street_number\")>=0?b.streetNumber=d.short_name:d.types.indexOf(\"route\")>=0?b.streetName=d.short_name:d.types.indexOf(\"locality\")>=0?b.city=d.short_name:d.types.indexOf(\"sublocality\")>=0?b.district=d.short_name:d.types.indexOf(\"administrative_area_level_1\")>=0?b.stateOrProvince=d.short_name:d.types.indexOf(\"country\")>=0&&(b.country=d.short_name)}return b.addressLine1=[b.streetNumber,b.streetName].join(\" \").trim(),b.addressLine2=\"\",b}};a.fn.locationpicker=function(j,k){if(\"string\"==typeof j){var l=this.get(0);if(!c(l))return;var m=d(l);switch(j){case\"location\":if(void 0==k){var n=i.locationFromLatLng(m.location);return n.radius=m.radius,n.name=m.locationName,n}k.radius&&(m.radius=k.radius),i.setPosition(m,new google.maps.LatLng(k.latitude,k.longitude),function(a){e(a.settings.inputBinding,a)});break;case\"subscribe\":if(void 0==k)return null;var o=k.event,p=k.callback;if(!o||!p)return console.error('LocationPicker: Invalid arguments for method \"subscribe\"'),null;google.maps.event.addListener(m.map,o,p);break;case\"map\":if(void 0==k){var q=i.locationFromLatLng(m.location);return q.formattedAddress=m.locationName,q.addressComponents=m.addressComponents,{map:m.map,marker:m.marker,location:q}}return null;case\"autosize\":return g(m),this}return null}return this.each(function(){function g(){i.setPosition(m,m.marker.position,function(a){var b=i.locationFromLatLng(m.location);e(m.settings.inputBinding,m),a.settings.onchanged.apply(m.domContainer,[b,a.radius,!0])})}var k=a(this);if(c(this))return void h(d(this),a(this),j);var l=a.extend({},a.fn.locationpicker.defaults,j),m=new b(this,a.extend({},{zoom:l.zoom,center:new google.maps.LatLng(l.location.latitude,l.location.longitude),mapTypeId:l.mapTypeId,mapTypeControl:!1,styles:l.styles,disableDoubleClickZoom:!1,scrollwheel:l.scrollwheel,streetViewControl:!1,radius:l.radius,locationName:l.locationName,settings:l,autocompleteOptions:l.autocompleteOptions,addressFormat:l.addressFormat,draggable:l.draggable,markerIcon:l.markerIcon,markerDraggable:l.markerDraggable,markerVisible:l.markerVisible},l.mapOptions));k.data(\"locationpicker\",m),l.markerInCenter&&(m.map.addListener(\"bounds_changed\",function(){m.marker.dragging||(m.marker.setPosition(m.map.center),e(m.settings.inputBinding,m))}),m.map.addListener(\"idle\",function(){m.marker.dragging||g()})),google.maps.event.addListener(m.marker,\"drag\",function(){e(m.settings.inputBinding,m)}),google.maps.event.addListener(m.marker,\"dragend\",function(){g()}),i.setPosition(m,new google.maps.LatLng(l.location.latitude,l.location.longitude),function(a){e(l.inputBinding,m),f(l.inputBinding,m),a.settings.oninitialized(k)})})},a.fn.locationpicker.defaults={location:{latitude:40.7324319,longitude:-73.82480777777776},locationName:\"\",radius:500,zoom:15,mapTypeId:google.maps.MapTypeId.ROADMAP,styles:[],mapOptions:{},scrollwheel:!0,inputBinding:{latitudeInput:null,longitudeInput:null,radiusInput:null,locationNameInput:null},enableAutocomplete:!1,enableAutocompleteBlur:!1,autocompleteOptions:null,addressFormat:\"postal_code\",enableReverseGeocode:!0,draggable:!0,onchanged:function(){},onlocationnotfound:function(){},oninitialized:function(){},markerIcon:void 0,markerDraggable:!0,markerVisible:!0}}(jQuery);
        //# sourceMappingURL=locationpicker.jquery.min.js.map
    </script>
    <script>
        \$('#us3').locationpicker({
            location: {
                latitude: 36.77426151704759,
                longitude: 10.178935050964348

            },
            radius: 300,
            inputBinding: {
                latitudeInput: \$('#us3-lat'),
                longitudeInput: \$('#us3-lon'),
                radiusInput: \$('#appbundle_profil_zone')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                \$('#appbundle_profil_adressdata').val( \$('#us3-lat').val() + \",\" + \$('#us3-lon').val());
                //=
                // Uncomment line below to show alert on each Location Changed event
                //alert(\"Location changed. New location (\" + currentLocation.latitude + \", \" + currentLocation.longitude + \")\");
            }
        });
    </script>
{% endblock %}
", "Admin/profil/new.html.twig", "D:\\Software\\wamp64\\www\\Cov19\\app\\Resources\\views\\Admin\\profil\\new.html.twig");
    }
}
