<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01ade6f930287543eda9dd6f5767e02b0b49e90c51d5dd6dce1940857524d0ab extends Twig_Template
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
        $__internal_8dd1776f604cf28f3aad829f1f5d8d8d29d31c5311c5d1ffa1aa8304c7ab508d = $this->env->getExtension("native_profiler");
        $__internal_8dd1776f604cf28f3aad829f1f5d8d8d29d31c5311c5d1ffa1aa8304c7ab508d->enter($__internal_8dd1776f604cf28f3aad829f1f5d8d8d29d31c5311c5d1ffa1aa8304c7ab508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd1776f604cf28f3aad829f1f5d8d8d29d31c5311c5d1ffa1aa8304c7ab508d->leave($__internal_8dd1776f604cf28f3aad829f1f5d8d8d29d31c5311c5d1ffa1aa8304c7ab508d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba8f4d4ddde0967e7ee1c3e6b0292196834bf5efb318704ee0b41195c889bc07 = $this->env->getExtension("native_profiler");
        $__internal_ba8f4d4ddde0967e7ee1c3e6b0292196834bf5efb318704ee0b41195c889bc07->enter($__internal_ba8f4d4ddde0967e7ee1c3e6b0292196834bf5efb318704ee0b41195c889bc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba8f4d4ddde0967e7ee1c3e6b0292196834bf5efb318704ee0b41195c889bc07->leave($__internal_ba8f4d4ddde0967e7ee1c3e6b0292196834bf5efb318704ee0b41195c889bc07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aec3bb0992fcbc6f9e9747ed9d750c25784ceecc481fcb5143724a4368b10bab = $this->env->getExtension("native_profiler");
        $__internal_aec3bb0992fcbc6f9e9747ed9d750c25784ceecc481fcb5143724a4368b10bab->enter($__internal_aec3bb0992fcbc6f9e9747ed9d750c25784ceecc481fcb5143724a4368b10bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aec3bb0992fcbc6f9e9747ed9d750c25784ceecc481fcb5143724a4368b10bab->leave($__internal_aec3bb0992fcbc6f9e9747ed9d750c25784ceecc481fcb5143724a4368b10bab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01485d100c53e796939c9503dde3714bffc9b64c6d4e33d3d6435aeb7a8ec3b2 = $this->env->getExtension("native_profiler");
        $__internal_01485d100c53e796939c9503dde3714bffc9b64c6d4e33d3d6435aeb7a8ec3b2->enter($__internal_01485d100c53e796939c9503dde3714bffc9b64c6d4e33d3d6435aeb7a8ec3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01485d100c53e796939c9503dde3714bffc9b64c6d4e33d3d6435aeb7a8ec3b2->leave($__internal_01485d100c53e796939c9503dde3714bffc9b64c6d4e33d3d6435aeb7a8ec3b2_prof);

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
