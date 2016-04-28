<?php

/* OCUserBundle:Security:login.html.twig */
class __TwigTemplate_f0941705a41544fe8797ff505573c03320bce842cefede7c538a85621f31a496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64df70e7d57b026068694e82f9ed863a166097bfc77201ca51460e287c98dfaf = $this->env->getExtension("native_profiler");
        $__internal_64df70e7d57b026068694e82f9ed863a166097bfc77201ca51460e287c98dfaf->enter($__internal_64df70e7d57b026068694e82f9ed863a166097bfc77201ca51460e287c98dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle:Security:login.html.twig"));

        // line 2
        echo "<html>
<body>
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "</body>
</html>";
        
        $__internal_64df70e7d57b026068694e82f9ed863a166097bfc77201ca51460e287c98dfaf->leave($__internal_64df70e7d57b026068694e82f9ed863a166097bfc77201ca51460e287c98dfaf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6285766c74a027d343c2969ab53d933542cf8ed24c55fe2531732d054f26843b = $this->env->getExtension("native_profiler");
        $__internal_6285766c74a027d343c2969ab53d933542cf8ed24c55fe2531732d054f26843b->enter($__internal_6285766c74a027d343c2969ab53d933542cf8ed24c55fe2531732d054f26843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    ";
        // line 12
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </br>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>


";
        
        $__internal_6285766c74a027d343c2969ab53d933542cf8ed24c55fe2531732d054f26843b->leave($__internal_6285766c74a027d343c2969ab53d933542cf8ed24c55fe2531732d054f26843b_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  58 => 12,  55 => 10,  49 => 8,  46 => 7,  43 => 5,  37 => 4,  29 => 24,  27 => 4,  23 => 2,);
    }
}
/* {# src/OC/UserBundle/Resources/views/Security/login.html.twig #}*/
/* <html>*/
/* <body>*/
/* {% block body %}*/
/* */
/*     {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Login :</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*         </br>*/
/*         <label for="password">Mot de passe :</label>*/
/*         <input type="password" id="password" name="_password" />*/
/*         <br />*/
/*         <input type="submit" value="Connexion" />*/
/*     </form>*/
/* */
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
