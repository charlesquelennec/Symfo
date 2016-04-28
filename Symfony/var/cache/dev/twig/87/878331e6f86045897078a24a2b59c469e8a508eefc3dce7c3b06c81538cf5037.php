<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_377cb11ef5e95f13637ca7a1c42e45bfbab29494a139ae682d956f73150f8d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ec318b8a3e088e9e5ad5bb258caf1832e25ca93a5bbd11d078ee94aca40f0f8 = $this->env->getExtension("native_profiler");
        $__internal_6ec318b8a3e088e9e5ad5bb258caf1832e25ca93a5bbd11d078ee94aca40f0f8->enter($__internal_6ec318b8a3e088e9e5ad5bb258caf1832e25ca93a5bbd11d078ee94aca40f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec318b8a3e088e9e5ad5bb258caf1832e25ca93a5bbd11d078ee94aca40f0f8->leave($__internal_6ec318b8a3e088e9e5ad5bb258caf1832e25ca93a5bbd11d078ee94aca40f0f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8126d64bcc8bb1bc0968478ffa808e91a7ebfbe657df324a6a72d2be6f456ae7 = $this->env->getExtension("native_profiler");
        $__internal_8126d64bcc8bb1bc0968478ffa808e91a7ebfbe657df324a6a72d2be6f456ae7->enter($__internal_8126d64bcc8bb1bc0968478ffa808e91a7ebfbe657df324a6a72d2be6f456ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8126d64bcc8bb1bc0968478ffa808e91a7ebfbe657df324a6a72d2be6f456ae7->leave($__internal_8126d64bcc8bb1bc0968478ffa808e91a7ebfbe657df324a6a72d2be6f456ae7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a3177882263369c340de2c7a7c9d0e0a3b03f2c6499df9c8da4cd2c9a7b83d = $this->env->getExtension("native_profiler");
        $__internal_14a3177882263369c340de2c7a7c9d0e0a3b03f2c6499df9c8da4cd2c9a7b83d->enter($__internal_14a3177882263369c340de2c7a7c9d0e0a3b03f2c6499df9c8da4cd2c9a7b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14a3177882263369c340de2c7a7c9d0e0a3b03f2c6499df9c8da4cd2c9a7b83d->leave($__internal_14a3177882263369c340de2c7a7c9d0e0a3b03f2c6499df9c8da4cd2c9a7b83d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */