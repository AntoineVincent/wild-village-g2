<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e20f3a8066f91d81dc04cd7fb8aac34a58a9b17c1007e1c09a29749dc48188a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c6c8ddb87c03b2aa318b864fa11bcce9b820c214852c25d94c3de1e45d8eaa0 = $this->env->getExtension("native_profiler");
        $__internal_2c6c8ddb87c03b2aa318b864fa11bcce9b820c214852c25d94c3de1e45d8eaa0->enter($__internal_2c6c8ddb87c03b2aa318b864fa11bcce9b820c214852c25d94c3de1e45d8eaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6c8ddb87c03b2aa318b864fa11bcce9b820c214852c25d94c3de1e45d8eaa0->leave($__internal_2c6c8ddb87c03b2aa318b864fa11bcce9b820c214852c25d94c3de1e45d8eaa0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_099e99ccb08bdddc6827926eb52a62901057226ffee52cc09137263211479530 = $this->env->getExtension("native_profiler");
        $__internal_099e99ccb08bdddc6827926eb52a62901057226ffee52cc09137263211479530->enter($__internal_099e99ccb08bdddc6827926eb52a62901057226ffee52cc09137263211479530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_099e99ccb08bdddc6827926eb52a62901057226ffee52cc09137263211479530->leave($__internal_099e99ccb08bdddc6827926eb52a62901057226ffee52cc09137263211479530_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b65dba941f9bed6962b34700763d2bf8820d0c19e5b945b3b0a7bda43a7f518 = $this->env->getExtension("native_profiler");
        $__internal_3b65dba941f9bed6962b34700763d2bf8820d0c19e5b945b3b0a7bda43a7f518->enter($__internal_3b65dba941f9bed6962b34700763d2bf8820d0c19e5b945b3b0a7bda43a7f518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b65dba941f9bed6962b34700763d2bf8820d0c19e5b945b3b0a7bda43a7f518->leave($__internal_3b65dba941f9bed6962b34700763d2bf8820d0c19e5b945b3b0a7bda43a7f518_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c4d1d8057d7314d79bf89e1959a69f03c8a14f772fcfc1f38d27c4fc159e23 = $this->env->getExtension("native_profiler");
        $__internal_d9c4d1d8057d7314d79bf89e1959a69f03c8a14f772fcfc1f38d27c4fc159e23->enter($__internal_d9c4d1d8057d7314d79bf89e1959a69f03c8a14f772fcfc1f38d27c4fc159e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d9c4d1d8057d7314d79bf89e1959a69f03c8a14f772fcfc1f38d27c4fc159e23->leave($__internal_d9c4d1d8057d7314d79bf89e1959a69f03c8a14f772fcfc1f38d27c4fc159e23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
