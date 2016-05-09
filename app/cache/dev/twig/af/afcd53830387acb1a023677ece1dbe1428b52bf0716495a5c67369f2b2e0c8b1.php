<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9c2c094062c20555fa07923c39cde5af3d3457bc77a9449c74817255236fc22f extends Twig_Template
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
        $__internal_4db11c3ca1b4229ec22349941b55b89e78c2a9cd5f532f3848bd7d5a459b55d5 = $this->env->getExtension("native_profiler");
        $__internal_4db11c3ca1b4229ec22349941b55b89e78c2a9cd5f532f3848bd7d5a459b55d5->enter($__internal_4db11c3ca1b4229ec22349941b55b89e78c2a9cd5f532f3848bd7d5a459b55d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4db11c3ca1b4229ec22349941b55b89e78c2a9cd5f532f3848bd7d5a459b55d5->leave($__internal_4db11c3ca1b4229ec22349941b55b89e78c2a9cd5f532f3848bd7d5a459b55d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e48df3d3d6a882cd4fce020323d66246a5c72c73ea187fd8c8ec1b41d87f456b = $this->env->getExtension("native_profiler");
        $__internal_e48df3d3d6a882cd4fce020323d66246a5c72c73ea187fd8c8ec1b41d87f456b->enter($__internal_e48df3d3d6a882cd4fce020323d66246a5c72c73ea187fd8c8ec1b41d87f456b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e48df3d3d6a882cd4fce020323d66246a5c72c73ea187fd8c8ec1b41d87f456b->leave($__internal_e48df3d3d6a882cd4fce020323d66246a5c72c73ea187fd8c8ec1b41d87f456b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d1a103a11dcd314ea7fe8be8fd999a6d7ab1e43fd3a2aed15fd66518b3bef06 = $this->env->getExtension("native_profiler");
        $__internal_5d1a103a11dcd314ea7fe8be8fd999a6d7ab1e43fd3a2aed15fd66518b3bef06->enter($__internal_5d1a103a11dcd314ea7fe8be8fd999a6d7ab1e43fd3a2aed15fd66518b3bef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d1a103a11dcd314ea7fe8be8fd999a6d7ab1e43fd3a2aed15fd66518b3bef06->leave($__internal_5d1a103a11dcd314ea7fe8be8fd999a6d7ab1e43fd3a2aed15fd66518b3bef06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cee8cccc7aa5e37b242fe3305f5b7a031f31f796773f7282777e07eb50c27d6b = $this->env->getExtension("native_profiler");
        $__internal_cee8cccc7aa5e37b242fe3305f5b7a031f31f796773f7282777e07eb50c27d6b->enter($__internal_cee8cccc7aa5e37b242fe3305f5b7a031f31f796773f7282777e07eb50c27d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cee8cccc7aa5e37b242fe3305f5b7a031f31f796773f7282777e07eb50c27d6b->leave($__internal_cee8cccc7aa5e37b242fe3305f5b7a031f31f796773f7282777e07eb50c27d6b_prof);

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
