<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb181de39deb7b56a33e7a06c26122413536e17867ae739f00474fa54f1ea3f9 extends Twig_Template
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
        $__internal_8529c34c390650ee6ffbdb9e4a55ae331bd84c5c281f67badf329239795ad82b = $this->env->getExtension("native_profiler");
        $__internal_8529c34c390650ee6ffbdb9e4a55ae331bd84c5c281f67badf329239795ad82b->enter($__internal_8529c34c390650ee6ffbdb9e4a55ae331bd84c5c281f67badf329239795ad82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8529c34c390650ee6ffbdb9e4a55ae331bd84c5c281f67badf329239795ad82b->leave($__internal_8529c34c390650ee6ffbdb9e4a55ae331bd84c5c281f67badf329239795ad82b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_635918236b53c934ad9ca2cf333f0f79da32c3780b568205392df9ab2aeb90eb = $this->env->getExtension("native_profiler");
        $__internal_635918236b53c934ad9ca2cf333f0f79da32c3780b568205392df9ab2aeb90eb->enter($__internal_635918236b53c934ad9ca2cf333f0f79da32c3780b568205392df9ab2aeb90eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_635918236b53c934ad9ca2cf333f0f79da32c3780b568205392df9ab2aeb90eb->leave($__internal_635918236b53c934ad9ca2cf333f0f79da32c3780b568205392df9ab2aeb90eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17502e15271578d279b5e10e5ecbe342b74b31dcea269fa78665eadc5c46f53 = $this->env->getExtension("native_profiler");
        $__internal_b17502e15271578d279b5e10e5ecbe342b74b31dcea269fa78665eadc5c46f53->enter($__internal_b17502e15271578d279b5e10e5ecbe342b74b31dcea269fa78665eadc5c46f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b17502e15271578d279b5e10e5ecbe342b74b31dcea269fa78665eadc5c46f53->leave($__internal_b17502e15271578d279b5e10e5ecbe342b74b31dcea269fa78665eadc5c46f53_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d269fab71404814288bb104d6ef3248bc635d35300dc240ab301e939f2bd0607 = $this->env->getExtension("native_profiler");
        $__internal_d269fab71404814288bb104d6ef3248bc635d35300dc240ab301e939f2bd0607->enter($__internal_d269fab71404814288bb104d6ef3248bc635d35300dc240ab301e939f2bd0607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d269fab71404814288bb104d6ef3248bc635d35300dc240ab301e939f2bd0607->leave($__internal_d269fab71404814288bb104d6ef3248bc635d35300dc240ab301e939f2bd0607_prof);

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
