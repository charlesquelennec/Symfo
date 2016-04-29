<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a343806621ccbb72c4a633ec0a2372e9f4a33e6c11b70efd2f019133d3fbf10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_107881f8b39a90a4680f4efd412bd948426b033e549cedbddda422770b726746 = $this->env->getExtension("native_profiler");
        $__internal_107881f8b39a90a4680f4efd412bd948426b033e549cedbddda422770b726746->enter($__internal_107881f8b39a90a4680f4efd412bd948426b033e549cedbddda422770b726746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107881f8b39a90a4680f4efd412bd948426b033e549cedbddda422770b726746->leave($__internal_107881f8b39a90a4680f4efd412bd948426b033e549cedbddda422770b726746_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_200da45c94b07a2d2e5db0c155bb14efaa290f413e47cff291a90553fda3e2d1 = $this->env->getExtension("native_profiler");
        $__internal_200da45c94b07a2d2e5db0c155bb14efaa290f413e47cff291a90553fda3e2d1->enter($__internal_200da45c94b07a2d2e5db0c155bb14efaa290f413e47cff291a90553fda3e2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_200da45c94b07a2d2e5db0c155bb14efaa290f413e47cff291a90553fda3e2d1->leave($__internal_200da45c94b07a2d2e5db0c155bb14efaa290f413e47cff291a90553fda3e2d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e577312f6a7cf8579b392e97d086884f71f48401aef9301efd6b34f00c0283 = $this->env->getExtension("native_profiler");
        $__internal_95e577312f6a7cf8579b392e97d086884f71f48401aef9301efd6b34f00c0283->enter($__internal_95e577312f6a7cf8579b392e97d086884f71f48401aef9301efd6b34f00c0283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95e577312f6a7cf8579b392e97d086884f71f48401aef9301efd6b34f00c0283->leave($__internal_95e577312f6a7cf8579b392e97d086884f71f48401aef9301efd6b34f00c0283_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa2be4305986d56e7fab320d7e3ad3487c76f589babf20de9f9a0c191a7c251 = $this->env->getExtension("native_profiler");
        $__internal_baa2be4305986d56e7fab320d7e3ad3487c76f589babf20de9f9a0c191a7c251->enter($__internal_baa2be4305986d56e7fab320d7e3ad3487c76f589babf20de9f9a0c191a7c251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_baa2be4305986d56e7fab320d7e3ad3487c76f589babf20de9f9a0c191a7c251->leave($__internal_baa2be4305986d56e7fab320d7e3ad3487c76f589babf20de9f9a0c191a7c251_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
