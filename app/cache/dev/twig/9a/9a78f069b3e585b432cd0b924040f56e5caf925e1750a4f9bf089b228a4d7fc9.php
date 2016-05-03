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
        $__internal_04cc1079aa43929b8fb9382a8041b37f062f36d6823f9e4c2de313cf622369a9 = $this->env->getExtension("native_profiler");
        $__internal_04cc1079aa43929b8fb9382a8041b37f062f36d6823f9e4c2de313cf622369a9->enter($__internal_04cc1079aa43929b8fb9382a8041b37f062f36d6823f9e4c2de313cf622369a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04cc1079aa43929b8fb9382a8041b37f062f36d6823f9e4c2de313cf622369a9->leave($__internal_04cc1079aa43929b8fb9382a8041b37f062f36d6823f9e4c2de313cf622369a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22eed5ae1b01b444f39ef5eef93c2380af6d0822b88ba5c917f3810f6eb748c8 = $this->env->getExtension("native_profiler");
        $__internal_22eed5ae1b01b444f39ef5eef93c2380af6d0822b88ba5c917f3810f6eb748c8->enter($__internal_22eed5ae1b01b444f39ef5eef93c2380af6d0822b88ba5c917f3810f6eb748c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22eed5ae1b01b444f39ef5eef93c2380af6d0822b88ba5c917f3810f6eb748c8->leave($__internal_22eed5ae1b01b444f39ef5eef93c2380af6d0822b88ba5c917f3810f6eb748c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cec68c1277d783d7da30bde266fc0ecf169a0917e58d2256274e60d0f0b3bb30 = $this->env->getExtension("native_profiler");
        $__internal_cec68c1277d783d7da30bde266fc0ecf169a0917e58d2256274e60d0f0b3bb30->enter($__internal_cec68c1277d783d7da30bde266fc0ecf169a0917e58d2256274e60d0f0b3bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cec68c1277d783d7da30bde266fc0ecf169a0917e58d2256274e60d0f0b3bb30->leave($__internal_cec68c1277d783d7da30bde266fc0ecf169a0917e58d2256274e60d0f0b3bb30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1551b37ccb785b40e12d03431f5a9b05b87d7772b5df2dcb0b068b1a10c318bd = $this->env->getExtension("native_profiler");
        $__internal_1551b37ccb785b40e12d03431f5a9b05b87d7772b5df2dcb0b068b1a10c318bd->enter($__internal_1551b37ccb785b40e12d03431f5a9b05b87d7772b5df2dcb0b068b1a10c318bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1551b37ccb785b40e12d03431f5a9b05b87d7772b5df2dcb0b068b1a10c318bd->leave($__internal_1551b37ccb785b40e12d03431f5a9b05b87d7772b5df2dcb0b068b1a10c318bd_prof);

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
