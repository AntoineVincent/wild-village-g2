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
        $__internal_90ac50d8574e7d2645f6ae54797f9a04ab3ae3493ac918f32ef03052f5f5a643 = $this->env->getExtension("native_profiler");
        $__internal_90ac50d8574e7d2645f6ae54797f9a04ab3ae3493ac918f32ef03052f5f5a643->enter($__internal_90ac50d8574e7d2645f6ae54797f9a04ab3ae3493ac918f32ef03052f5f5a643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ac50d8574e7d2645f6ae54797f9a04ab3ae3493ac918f32ef03052f5f5a643->leave($__internal_90ac50d8574e7d2645f6ae54797f9a04ab3ae3493ac918f32ef03052f5f5a643_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d686d4d8e075940fd37683a120ea8d33972da631953f62d2e4e2e3856f806bf9 = $this->env->getExtension("native_profiler");
        $__internal_d686d4d8e075940fd37683a120ea8d33972da631953f62d2e4e2e3856f806bf9->enter($__internal_d686d4d8e075940fd37683a120ea8d33972da631953f62d2e4e2e3856f806bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d686d4d8e075940fd37683a120ea8d33972da631953f62d2e4e2e3856f806bf9->leave($__internal_d686d4d8e075940fd37683a120ea8d33972da631953f62d2e4e2e3856f806bf9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_620c62de7aead19a2006c5a3affe08541b8760a81cd4818ed091a911da05cd2b = $this->env->getExtension("native_profiler");
        $__internal_620c62de7aead19a2006c5a3affe08541b8760a81cd4818ed091a911da05cd2b->enter($__internal_620c62de7aead19a2006c5a3affe08541b8760a81cd4818ed091a911da05cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_620c62de7aead19a2006c5a3affe08541b8760a81cd4818ed091a911da05cd2b->leave($__internal_620c62de7aead19a2006c5a3affe08541b8760a81cd4818ed091a911da05cd2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_643f9026eefa6f5053fb07901ece73b5a843ed3a22d14749beb7494f6bbd08bd = $this->env->getExtension("native_profiler");
        $__internal_643f9026eefa6f5053fb07901ece73b5a843ed3a22d14749beb7494f6bbd08bd->enter($__internal_643f9026eefa6f5053fb07901ece73b5a843ed3a22d14749beb7494f6bbd08bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_643f9026eefa6f5053fb07901ece73b5a843ed3a22d14749beb7494f6bbd08bd->leave($__internal_643f9026eefa6f5053fb07901ece73b5a843ed3a22d14749beb7494f6bbd08bd_prof);

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
