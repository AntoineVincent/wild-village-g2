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
        $__internal_9973a6d60c9ae947a552e1ee7a22d3b85a8961b3f69fdd2e5bee8d7b699709c6 = $this->env->getExtension("native_profiler");
        $__internal_9973a6d60c9ae947a552e1ee7a22d3b85a8961b3f69fdd2e5bee8d7b699709c6->enter($__internal_9973a6d60c9ae947a552e1ee7a22d3b85a8961b3f69fdd2e5bee8d7b699709c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9973a6d60c9ae947a552e1ee7a22d3b85a8961b3f69fdd2e5bee8d7b699709c6->leave($__internal_9973a6d60c9ae947a552e1ee7a22d3b85a8961b3f69fdd2e5bee8d7b699709c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f58edf0e28dc0f4d3096b1f3655c3d27b2b9067ed8dbe2f9106fd885be40b29 = $this->env->getExtension("native_profiler");
        $__internal_2f58edf0e28dc0f4d3096b1f3655c3d27b2b9067ed8dbe2f9106fd885be40b29->enter($__internal_2f58edf0e28dc0f4d3096b1f3655c3d27b2b9067ed8dbe2f9106fd885be40b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f58edf0e28dc0f4d3096b1f3655c3d27b2b9067ed8dbe2f9106fd885be40b29->leave($__internal_2f58edf0e28dc0f4d3096b1f3655c3d27b2b9067ed8dbe2f9106fd885be40b29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87d9b5b02e0d9647d2567e5bc0586cedbdd5727ef88d2b06fe1dc5f950fbfb51 = $this->env->getExtension("native_profiler");
        $__internal_87d9b5b02e0d9647d2567e5bc0586cedbdd5727ef88d2b06fe1dc5f950fbfb51->enter($__internal_87d9b5b02e0d9647d2567e5bc0586cedbdd5727ef88d2b06fe1dc5f950fbfb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87d9b5b02e0d9647d2567e5bc0586cedbdd5727ef88d2b06fe1dc5f950fbfb51->leave($__internal_87d9b5b02e0d9647d2567e5bc0586cedbdd5727ef88d2b06fe1dc5f950fbfb51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbc4aa369dbe7b0ff2d7cf0d821db3091c191b394a3f2542915e483be28c9c09 = $this->env->getExtension("native_profiler");
        $__internal_bbc4aa369dbe7b0ff2d7cf0d821db3091c191b394a3f2542915e483be28c9c09->enter($__internal_bbc4aa369dbe7b0ff2d7cf0d821db3091c191b394a3f2542915e483be28c9c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bbc4aa369dbe7b0ff2d7cf0d821db3091c191b394a3f2542915e483be28c9c09->leave($__internal_bbc4aa369dbe7b0ff2d7cf0d821db3091c191b394a3f2542915e483be28c9c09_prof);

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
