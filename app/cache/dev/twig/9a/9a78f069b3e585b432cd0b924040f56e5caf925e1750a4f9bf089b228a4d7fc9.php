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
        $__internal_53e9ad4fcf815251f3f6de6ea78890356ca8a0bff338759ec4029fa045313523 = $this->env->getExtension("native_profiler");
        $__internal_53e9ad4fcf815251f3f6de6ea78890356ca8a0bff338759ec4029fa045313523->enter($__internal_53e9ad4fcf815251f3f6de6ea78890356ca8a0bff338759ec4029fa045313523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e9ad4fcf815251f3f6de6ea78890356ca8a0bff338759ec4029fa045313523->leave($__internal_53e9ad4fcf815251f3f6de6ea78890356ca8a0bff338759ec4029fa045313523_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55c43883a26d954b623203181b498676154abc93ffae0a6ed12a3706c4f660a4 = $this->env->getExtension("native_profiler");
        $__internal_55c43883a26d954b623203181b498676154abc93ffae0a6ed12a3706c4f660a4->enter($__internal_55c43883a26d954b623203181b498676154abc93ffae0a6ed12a3706c4f660a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55c43883a26d954b623203181b498676154abc93ffae0a6ed12a3706c4f660a4->leave($__internal_55c43883a26d954b623203181b498676154abc93ffae0a6ed12a3706c4f660a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1eb4a1eab28c947c23a45700bc390e3ebfab2e3718fceaf2d5a068a5d20cc273 = $this->env->getExtension("native_profiler");
        $__internal_1eb4a1eab28c947c23a45700bc390e3ebfab2e3718fceaf2d5a068a5d20cc273->enter($__internal_1eb4a1eab28c947c23a45700bc390e3ebfab2e3718fceaf2d5a068a5d20cc273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1eb4a1eab28c947c23a45700bc390e3ebfab2e3718fceaf2d5a068a5d20cc273->leave($__internal_1eb4a1eab28c947c23a45700bc390e3ebfab2e3718fceaf2d5a068a5d20cc273_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69f4ec874af165dd2200814fa62b91e3e3ca32844c9d93deb7a7764fa4598ce3 = $this->env->getExtension("native_profiler");
        $__internal_69f4ec874af165dd2200814fa62b91e3e3ca32844c9d93deb7a7764fa4598ce3->enter($__internal_69f4ec874af165dd2200814fa62b91e3e3ca32844c9d93deb7a7764fa4598ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69f4ec874af165dd2200814fa62b91e3e3ca32844c9d93deb7a7764fa4598ce3->leave($__internal_69f4ec874af165dd2200814fa62b91e3e3ca32844c9d93deb7a7764fa4598ce3_prof);

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
