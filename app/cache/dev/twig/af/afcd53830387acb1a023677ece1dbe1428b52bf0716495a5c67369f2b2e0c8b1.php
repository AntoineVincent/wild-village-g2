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
        $__internal_4a054574e0ad321f41b624487e2c21a8f8f403368179b95e1297160b8f3cf5ab = $this->env->getExtension("native_profiler");
        $__internal_4a054574e0ad321f41b624487e2c21a8f8f403368179b95e1297160b8f3cf5ab->enter($__internal_4a054574e0ad321f41b624487e2c21a8f8f403368179b95e1297160b8f3cf5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a054574e0ad321f41b624487e2c21a8f8f403368179b95e1297160b8f3cf5ab->leave($__internal_4a054574e0ad321f41b624487e2c21a8f8f403368179b95e1297160b8f3cf5ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1f8f81c4ebb258b321ce343f9ff6f33fa3c013d23805a7fd2d9db0752a13fa5 = $this->env->getExtension("native_profiler");
        $__internal_f1f8f81c4ebb258b321ce343f9ff6f33fa3c013d23805a7fd2d9db0752a13fa5->enter($__internal_f1f8f81c4ebb258b321ce343f9ff6f33fa3c013d23805a7fd2d9db0752a13fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1f8f81c4ebb258b321ce343f9ff6f33fa3c013d23805a7fd2d9db0752a13fa5->leave($__internal_f1f8f81c4ebb258b321ce343f9ff6f33fa3c013d23805a7fd2d9db0752a13fa5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf9a26ea692cc310a06f733e2a54430622041122c7199b1ad4a70110aebed658 = $this->env->getExtension("native_profiler");
        $__internal_cf9a26ea692cc310a06f733e2a54430622041122c7199b1ad4a70110aebed658->enter($__internal_cf9a26ea692cc310a06f733e2a54430622041122c7199b1ad4a70110aebed658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf9a26ea692cc310a06f733e2a54430622041122c7199b1ad4a70110aebed658->leave($__internal_cf9a26ea692cc310a06f733e2a54430622041122c7199b1ad4a70110aebed658_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06143556a3c5a4f25a68a4564befa48cd0e1aa60fb13a4196a42acb91dd9af11 = $this->env->getExtension("native_profiler");
        $__internal_06143556a3c5a4f25a68a4564befa48cd0e1aa60fb13a4196a42acb91dd9af11->enter($__internal_06143556a3c5a4f25a68a4564befa48cd0e1aa60fb13a4196a42acb91dd9af11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06143556a3c5a4f25a68a4564befa48cd0e1aa60fb13a4196a42acb91dd9af11->leave($__internal_06143556a3c5a4f25a68a4564befa48cd0e1aa60fb13a4196a42acb91dd9af11_prof);

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
