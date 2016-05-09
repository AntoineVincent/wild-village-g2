<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2507011ce2d4950bfcedeea9be019a06af702c56d2f5b709d7f52da7aefbf557 extends Twig_Template
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
        $__internal_afcd2466e465c6d3455b73cf6cf7b3c86376a4e37317c15444385ef2f66d6f2a = $this->env->getExtension("native_profiler");
        $__internal_afcd2466e465c6d3455b73cf6cf7b3c86376a4e37317c15444385ef2f66d6f2a->enter($__internal_afcd2466e465c6d3455b73cf6cf7b3c86376a4e37317c15444385ef2f66d6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afcd2466e465c6d3455b73cf6cf7b3c86376a4e37317c15444385ef2f66d6f2a->leave($__internal_afcd2466e465c6d3455b73cf6cf7b3c86376a4e37317c15444385ef2f66d6f2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b67d3080535c2d735112b0f071615273935ac51861fdd784ff74a8b5da53124 = $this->env->getExtension("native_profiler");
        $__internal_6b67d3080535c2d735112b0f071615273935ac51861fdd784ff74a8b5da53124->enter($__internal_6b67d3080535c2d735112b0f071615273935ac51861fdd784ff74a8b5da53124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b67d3080535c2d735112b0f071615273935ac51861fdd784ff74a8b5da53124->leave($__internal_6b67d3080535c2d735112b0f071615273935ac51861fdd784ff74a8b5da53124_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5745f8389c23775aa7f9c36a1f116046f6f2b941b41fd98c4803cd244886bdeb = $this->env->getExtension("native_profiler");
        $__internal_5745f8389c23775aa7f9c36a1f116046f6f2b941b41fd98c4803cd244886bdeb->enter($__internal_5745f8389c23775aa7f9c36a1f116046f6f2b941b41fd98c4803cd244886bdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5745f8389c23775aa7f9c36a1f116046f6f2b941b41fd98c4803cd244886bdeb->leave($__internal_5745f8389c23775aa7f9c36a1f116046f6f2b941b41fd98c4803cd244886bdeb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fad51bc7472b79b6e7ea72cea528b0ea19b1b465772c3458520a65624654e700 = $this->env->getExtension("native_profiler");
        $__internal_fad51bc7472b79b6e7ea72cea528b0ea19b1b465772c3458520a65624654e700->enter($__internal_fad51bc7472b79b6e7ea72cea528b0ea19b1b465772c3458520a65624654e700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fad51bc7472b79b6e7ea72cea528b0ea19b1b465772c3458520a65624654e700->leave($__internal_fad51bc7472b79b6e7ea72cea528b0ea19b1b465772c3458520a65624654e700_prof);

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
