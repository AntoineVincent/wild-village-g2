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
        $__internal_ba7808e4f61f40a8a36ef848fa87c8a466c0747da5670f40c41cac6843cc44b0 = $this->env->getExtension("native_profiler");
        $__internal_ba7808e4f61f40a8a36ef848fa87c8a466c0747da5670f40c41cac6843cc44b0->enter($__internal_ba7808e4f61f40a8a36ef848fa87c8a466c0747da5670f40c41cac6843cc44b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba7808e4f61f40a8a36ef848fa87c8a466c0747da5670f40c41cac6843cc44b0->leave($__internal_ba7808e4f61f40a8a36ef848fa87c8a466c0747da5670f40c41cac6843cc44b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43d04e9a0865dc928143a602a61409f7312ab758ad5ac0989085dd0acf0e3e9f = $this->env->getExtension("native_profiler");
        $__internal_43d04e9a0865dc928143a602a61409f7312ab758ad5ac0989085dd0acf0e3e9f->enter($__internal_43d04e9a0865dc928143a602a61409f7312ab758ad5ac0989085dd0acf0e3e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43d04e9a0865dc928143a602a61409f7312ab758ad5ac0989085dd0acf0e3e9f->leave($__internal_43d04e9a0865dc928143a602a61409f7312ab758ad5ac0989085dd0acf0e3e9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cfb2700b55f5960f6253048c69faf9ee49b13c89b31b102a21cd21030d7fe3b = $this->env->getExtension("native_profiler");
        $__internal_1cfb2700b55f5960f6253048c69faf9ee49b13c89b31b102a21cd21030d7fe3b->enter($__internal_1cfb2700b55f5960f6253048c69faf9ee49b13c89b31b102a21cd21030d7fe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1cfb2700b55f5960f6253048c69faf9ee49b13c89b31b102a21cd21030d7fe3b->leave($__internal_1cfb2700b55f5960f6253048c69faf9ee49b13c89b31b102a21cd21030d7fe3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_556f99332c28a71d4c4ad7e30d69192cf19a857924a7b75d4626a21725494a7b = $this->env->getExtension("native_profiler");
        $__internal_556f99332c28a71d4c4ad7e30d69192cf19a857924a7b75d4626a21725494a7b->enter($__internal_556f99332c28a71d4c4ad7e30d69192cf19a857924a7b75d4626a21725494a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_556f99332c28a71d4c4ad7e30d69192cf19a857924a7b75d4626a21725494a7b->leave($__internal_556f99332c28a71d4c4ad7e30d69192cf19a857924a7b75d4626a21725494a7b_prof);

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
