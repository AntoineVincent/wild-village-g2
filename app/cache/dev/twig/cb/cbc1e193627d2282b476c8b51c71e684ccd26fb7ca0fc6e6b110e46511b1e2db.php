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
        $__internal_f35b43d69ee9cc6df995779959c1cf2fd1f6aa206f2a5e44aa98a4f0e18e7d54 = $this->env->getExtension("native_profiler");
        $__internal_f35b43d69ee9cc6df995779959c1cf2fd1f6aa206f2a5e44aa98a4f0e18e7d54->enter($__internal_f35b43d69ee9cc6df995779959c1cf2fd1f6aa206f2a5e44aa98a4f0e18e7d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35b43d69ee9cc6df995779959c1cf2fd1f6aa206f2a5e44aa98a4f0e18e7d54->leave($__internal_f35b43d69ee9cc6df995779959c1cf2fd1f6aa206f2a5e44aa98a4f0e18e7d54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e75eb9e390adf7fd99e430085b445d7ee285de262e7a60c876f38231f02b4fce = $this->env->getExtension("native_profiler");
        $__internal_e75eb9e390adf7fd99e430085b445d7ee285de262e7a60c876f38231f02b4fce->enter($__internal_e75eb9e390adf7fd99e430085b445d7ee285de262e7a60c876f38231f02b4fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e75eb9e390adf7fd99e430085b445d7ee285de262e7a60c876f38231f02b4fce->leave($__internal_e75eb9e390adf7fd99e430085b445d7ee285de262e7a60c876f38231f02b4fce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9463835c4b7af80fee23fd743835dc6f9ad4b3a08711835db64a88214ad4ff47 = $this->env->getExtension("native_profiler");
        $__internal_9463835c4b7af80fee23fd743835dc6f9ad4b3a08711835db64a88214ad4ff47->enter($__internal_9463835c4b7af80fee23fd743835dc6f9ad4b3a08711835db64a88214ad4ff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9463835c4b7af80fee23fd743835dc6f9ad4b3a08711835db64a88214ad4ff47->leave($__internal_9463835c4b7af80fee23fd743835dc6f9ad4b3a08711835db64a88214ad4ff47_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a75aad015ad04cff0bb9bb2938b01799b5469538b44776cec66c8043df80f7e = $this->env->getExtension("native_profiler");
        $__internal_0a75aad015ad04cff0bb9bb2938b01799b5469538b44776cec66c8043df80f7e->enter($__internal_0a75aad015ad04cff0bb9bb2938b01799b5469538b44776cec66c8043df80f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a75aad015ad04cff0bb9bb2938b01799b5469538b44776cec66c8043df80f7e->leave($__internal_0a75aad015ad04cff0bb9bb2938b01799b5469538b44776cec66c8043df80f7e_prof);

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
