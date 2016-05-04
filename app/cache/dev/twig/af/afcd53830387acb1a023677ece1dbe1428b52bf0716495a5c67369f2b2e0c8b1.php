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
        $__internal_d32a2386a3ad3ce9c8e941689bf68447bd3bfab752418281d896c6434b5c431b = $this->env->getExtension("native_profiler");
        $__internal_d32a2386a3ad3ce9c8e941689bf68447bd3bfab752418281d896c6434b5c431b->enter($__internal_d32a2386a3ad3ce9c8e941689bf68447bd3bfab752418281d896c6434b5c431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32a2386a3ad3ce9c8e941689bf68447bd3bfab752418281d896c6434b5c431b->leave($__internal_d32a2386a3ad3ce9c8e941689bf68447bd3bfab752418281d896c6434b5c431b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d197fbd81e150a54a4049d645691f5f51fec5f30f992879afdf9f8db05dd73f = $this->env->getExtension("native_profiler");
        $__internal_7d197fbd81e150a54a4049d645691f5f51fec5f30f992879afdf9f8db05dd73f->enter($__internal_7d197fbd81e150a54a4049d645691f5f51fec5f30f992879afdf9f8db05dd73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d197fbd81e150a54a4049d645691f5f51fec5f30f992879afdf9f8db05dd73f->leave($__internal_7d197fbd81e150a54a4049d645691f5f51fec5f30f992879afdf9f8db05dd73f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d40a2df9997a95d53789c5517adabd309a3ae96d675141523d6c0e5ea85b63a5 = $this->env->getExtension("native_profiler");
        $__internal_d40a2df9997a95d53789c5517adabd309a3ae96d675141523d6c0e5ea85b63a5->enter($__internal_d40a2df9997a95d53789c5517adabd309a3ae96d675141523d6c0e5ea85b63a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d40a2df9997a95d53789c5517adabd309a3ae96d675141523d6c0e5ea85b63a5->leave($__internal_d40a2df9997a95d53789c5517adabd309a3ae96d675141523d6c0e5ea85b63a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_832bc5f36ce331fc92cf80672d6641ecbae0ce6b9125563ec2dc3ec8f64dc3ad = $this->env->getExtension("native_profiler");
        $__internal_832bc5f36ce331fc92cf80672d6641ecbae0ce6b9125563ec2dc3ec8f64dc3ad->enter($__internal_832bc5f36ce331fc92cf80672d6641ecbae0ce6b9125563ec2dc3ec8f64dc3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_832bc5f36ce331fc92cf80672d6641ecbae0ce6b9125563ec2dc3ec8f64dc3ad->leave($__internal_832bc5f36ce331fc92cf80672d6641ecbae0ce6b9125563ec2dc3ec8f64dc3ad_prof);

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
