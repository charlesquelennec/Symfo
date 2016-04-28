<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26fa3570af870e4601980737631e4c31ef961b102f69f7e7e570b7252de09792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62ec7d6e7204e2a85d6374fade0ef97280e9bceda0bfb0d8d40707665a90fc93 = $this->env->getExtension("native_profiler");
        $__internal_62ec7d6e7204e2a85d6374fade0ef97280e9bceda0bfb0d8d40707665a90fc93->enter($__internal_62ec7d6e7204e2a85d6374fade0ef97280e9bceda0bfb0d8d40707665a90fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62ec7d6e7204e2a85d6374fade0ef97280e9bceda0bfb0d8d40707665a90fc93->leave($__internal_62ec7d6e7204e2a85d6374fade0ef97280e9bceda0bfb0d8d40707665a90fc93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7c2a976883dfa79cc4603b92543cc949ab4340fd0dc1e5ee7921c3f94ca046c = $this->env->getExtension("native_profiler");
        $__internal_b7c2a976883dfa79cc4603b92543cc949ab4340fd0dc1e5ee7921c3f94ca046c->enter($__internal_b7c2a976883dfa79cc4603b92543cc949ab4340fd0dc1e5ee7921c3f94ca046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7c2a976883dfa79cc4603b92543cc949ab4340fd0dc1e5ee7921c3f94ca046c->leave($__internal_b7c2a976883dfa79cc4603b92543cc949ab4340fd0dc1e5ee7921c3f94ca046c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74d85446d869492912c10797cccaf7d633d206a8658d3dfbe4a9b904cd74c149 = $this->env->getExtension("native_profiler");
        $__internal_74d85446d869492912c10797cccaf7d633d206a8658d3dfbe4a9b904cd74c149->enter($__internal_74d85446d869492912c10797cccaf7d633d206a8658d3dfbe4a9b904cd74c149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74d85446d869492912c10797cccaf7d633d206a8658d3dfbe4a9b904cd74c149->leave($__internal_74d85446d869492912c10797cccaf7d633d206a8658d3dfbe4a9b904cd74c149_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_031c761cf4280c34769a356a5b9a692356682a7aa4e1e73dadd70ce1e7a15977 = $this->env->getExtension("native_profiler");
        $__internal_031c761cf4280c34769a356a5b9a692356682a7aa4e1e73dadd70ce1e7a15977->enter($__internal_031c761cf4280c34769a356a5b9a692356682a7aa4e1e73dadd70ce1e7a15977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_031c761cf4280c34769a356a5b9a692356682a7aa4e1e73dadd70ce1e7a15977->leave($__internal_031c761cf4280c34769a356a5b9a692356682a7aa4e1e73dadd70ce1e7a15977_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
