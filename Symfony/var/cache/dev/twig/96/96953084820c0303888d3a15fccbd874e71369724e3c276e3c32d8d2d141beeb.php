<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14c308149291d220613406baf38fdc5ca85abbdabc9f0d7f41ed53e5c6415fd3 extends Twig_Template
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
        $__internal_bee50244eed7e94bce81e3aad009f0a93c154aedcba21efabdba663f5f983bba = $this->env->getExtension("native_profiler");
        $__internal_bee50244eed7e94bce81e3aad009f0a93c154aedcba21efabdba663f5f983bba->enter($__internal_bee50244eed7e94bce81e3aad009f0a93c154aedcba21efabdba663f5f983bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee50244eed7e94bce81e3aad009f0a93c154aedcba21efabdba663f5f983bba->leave($__internal_bee50244eed7e94bce81e3aad009f0a93c154aedcba21efabdba663f5f983bba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ee23b1f5aeeaaecd9fc6abeb54fcef0e46b7306d37cbac3510e7db190624cb0 = $this->env->getExtension("native_profiler");
        $__internal_5ee23b1f5aeeaaecd9fc6abeb54fcef0e46b7306d37cbac3510e7db190624cb0->enter($__internal_5ee23b1f5aeeaaecd9fc6abeb54fcef0e46b7306d37cbac3510e7db190624cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ee23b1f5aeeaaecd9fc6abeb54fcef0e46b7306d37cbac3510e7db190624cb0->leave($__internal_5ee23b1f5aeeaaecd9fc6abeb54fcef0e46b7306d37cbac3510e7db190624cb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31bfbd805b1e9bf1c37a105d007ff561ed776422b193c0b001bf53be7d860596 = $this->env->getExtension("native_profiler");
        $__internal_31bfbd805b1e9bf1c37a105d007ff561ed776422b193c0b001bf53be7d860596->enter($__internal_31bfbd805b1e9bf1c37a105d007ff561ed776422b193c0b001bf53be7d860596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31bfbd805b1e9bf1c37a105d007ff561ed776422b193c0b001bf53be7d860596->leave($__internal_31bfbd805b1e9bf1c37a105d007ff561ed776422b193c0b001bf53be7d860596_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_377e5b77aed05918af4a395569718e996023636f0b878804e5aa154c1ad67791 = $this->env->getExtension("native_profiler");
        $__internal_377e5b77aed05918af4a395569718e996023636f0b878804e5aa154c1ad67791->enter($__internal_377e5b77aed05918af4a395569718e996023636f0b878804e5aa154c1ad67791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_377e5b77aed05918af4a395569718e996023636f0b878804e5aa154c1ad67791->leave($__internal_377e5b77aed05918af4a395569718e996023636f0b878804e5aa154c1ad67791_prof);

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
