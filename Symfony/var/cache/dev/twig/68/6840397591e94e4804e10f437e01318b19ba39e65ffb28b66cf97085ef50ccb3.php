<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_a0455aa338571085b45d209efc5e34954ef317fa1f17147fc99a65ac90930759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3f39cdf1c7f2c19b5e0796c11f497acc3dd3d67c4511e0260c4f4e36dfb8836 = $this->env->getExtension("native_profiler");
        $__internal_f3f39cdf1c7f2c19b5e0796c11f497acc3dd3d67c4511e0260c4f4e36dfb8836->enter($__internal_f3f39cdf1c7f2c19b5e0796c11f497acc3dd3d67c4511e0260c4f4e36dfb8836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
</head>

<body>
";
        // line 11
        echo "

";
        // line 13
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 100, 1 => 100)));
        // line 14
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl("pictures/Jellyfish.jpg"), "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

";
        // line 16
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 100, 1 => 100)));
        // line 17
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl("pictures/Jellyfish.jpg"), "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />

";
        // line 19
        $context["runtimeConfig"] = array("thumbnail" => array("size" => array(0 => 50, 1 => 50)));
        // line 20
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl("pictures/Jellyfish_mini.jpg"), "my_thumb", (isset($context["runtimeConfig"]) ? $context["runtimeConfig"] : $this->getContext($context, "runtimeConfig"))), "html", null, true);
        echo "\" />
</br>
";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")), 0, array()), "author", array()), "html", null, true);
        echo "
";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")), 1, array()), "author", array()), "html", null, true);
        echo "
";
        // line 24
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 25
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("oc_platform_add");
            echo "\">Ajouter une annonce</a></li>
    <h3>Formulaire d'annonce</h3>
";
        }
        // line 28
        echo "

<div class=\"well\">
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "


    <div class=\"form-group\">
        ";
        // line 36
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "

        ";
        // line 39
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 43
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

    </div>


    ";
        // line 50
        echo "
    <div class=\"form-group\">

        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "

        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "



        <div class=\"col-sm-4\">

            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>
    <div class=\"form-group\">

        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Image de l'annonce"));
        echo "

        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "



        <div class=\"col-sm-4\">

            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

    </div>
    ";
        // line 82
        echo "
    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "

    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "

    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "

    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "

    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "

    ";
        // line 94
        echo "    ";
        // line 95
        echo "    ";
        // line 96
        echo "    ";
        // line 97
        echo "
    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


    ";
        // line 106
        echo "
    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



    ";
        // line 112
        echo "
    ";
        // line 113
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
</body>
</html>";
        
        $__internal_f3f39cdf1c7f2c19b5e0796c11f497acc3dd3d67c4511e0260c4f4e36dfb8836->leave($__internal_f3f39cdf1c7f2c19b5e0796c11f497acc3dd3d67c4511e0260c4f4e36dfb8836_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 113,  215 => 112,  208 => 107,  205 => 106,  199 => 98,  196 => 97,  194 => 96,  192 => 95,  190 => 94,  185 => 91,  180 => 89,  175 => 87,  170 => 85,  165 => 83,  162 => 82,  154 => 76,  145 => 70,  140 => 68,  130 => 61,  121 => 55,  116 => 53,  111 => 50,  101 => 43,  94 => 39,  88 => 36,  81 => 31,  76 => 28,  69 => 25,  67 => 24,  63 => 23,  59 => 22,  53 => 20,  51 => 19,  45 => 17,  43 => 16,  37 => 14,  35 => 13,  31 => 11,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* </head>*/
/* */
/* <body>*/
/* {# On n'affiche le lien « Ajouter une annonce » qu'aux auteurs*/
/*   (et admins, qui héritent du rôle auteur) #}*/
/* */
/* */
/* {% set runtimeConfig = {"thumbnail": {"size": [100, 100] }} %}*/
/* <img src="{{ asset('pictures/Jellyfish.jpg')| imagine_filter('my_thumb', runtimeConfig)  }}" />*/
/* */
/* {% set runtimeConfig = {"thumbnail": {"size": [100, 100] }} %}*/
/* <img src="{{ asset('pictures/Jellyfish.jpg')| imagine_filter('my_thumb', runtimeConfig)  }}" />*/
/* */
/* {% set runtimeConfig = {"thumbnail": {"size": [50, 50] }} %}*/
/* <img src="{{ asset('pictures/Jellyfish_mini.jpg')| imagine_filter('my_thumb', runtimeConfig)  }}" />*/
/* </br>*/
/* {{ adverts.0.author }}*/
/* {{ adverts.1.author }}*/
/* {% if is_granted('ROLE_AUTEUR') %}*/
/*     <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*     <h3>Formulaire d'annonce</h3>*/
/* {% endif %}*/
/* */
/* */
/* <div class="well">*/
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.title, "Titre de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*         {#&#123;&#35; Affichage des erreurs pour ce champ précis. &#35;&#125;#}*/
/*         {{ form_errors(form.title) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     {# Idem pour un autre champ. #}*/
/* */
/*     <div class="form-group">*/
/* */
/*         {{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*         {{ form_errors(form.content) }}*/
/* */
/* */
/* */
/*         <div class="col-sm-4">*/
/* */
/*             {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="form-group">*/
/* */
/*         {{ form_label(form.image, "Image de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*         {{ form_errors(form.image) }}*/
/* */
/* */
/* */
/*         <div class="col-sm-4">*/
/* */
/*             {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     {# Génération du label + error + widget pour un champ #}*/
/* */
/*     {{form_row (form.date) }}*/
/* */
/*     {{ form_errors(form.date) }}*/
/* */
/*     {{ form_row (form.author)}}*/
/* */
/*     {{ form_errors(form.author) }}*/
/* */
/*     {{ form_row(form.published) }}*/
/* */
/*     {#On peut diviser les différente partie de l'image#}*/
/*     {#{{ form_row(form.image.alt) }}#}*/
/*     {#{{ form_row(form.image.url) }}#}*/
/*     {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/* */
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/* */
/*     {# Génération automatique des champs pas encore écrits.*/
/* */
/*        Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/* */
/*        et tous les champs cachés (type « hidden »). #}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/* */
/* */
/*     {# Fermeture de la balise <form> du formulaire HTML #}*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* </body>*/
/* </html>*/
