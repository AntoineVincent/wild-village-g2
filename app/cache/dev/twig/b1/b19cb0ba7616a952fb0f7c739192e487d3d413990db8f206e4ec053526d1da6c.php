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
        $__internal_19523e42a599724848226bd64acf3bef3566deb52f5d417c0e13c254ec759731 = $this->env->getExtension("native_profiler");
        $__internal_19523e42a599724848226bd64acf3bef3566deb52f5d417c0e13c254ec759731->enter($__internal_19523e42a599724848226bd64acf3bef3566deb52f5d417c0e13c254ec759731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19523e42a599724848226bd64acf3bef3566deb52f5d417c0e13c254ec759731->leave($__internal_19523e42a599724848226bd64acf3bef3566deb52f5d417c0e13c254ec759731_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01deabdbc638b67a74d6b96dabeab78b06698326a73595e040b3e685ab18e2f0 = $this->env->getExtension("native_profiler");
        $__internal_01deabdbc638b67a74d6b96dabeab78b06698326a73595e040b3e685ab18e2f0->enter($__internal_01deabdbc638b67a74d6b96dabeab78b06698326a73595e040b3e685ab18e2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_01deabdbc638b67a74d6b96dabeab78b06698326a73595e040b3e685ab18e2f0->leave($__internal_01deabdbc638b67a74d6b96dabeab78b06698326a73595e040b3e685ab18e2f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1cabd6e0a8891e2382e9e1806e373adc405517a5c1bdca4ddabcadb367e0f76 = $this->env->getExtension("native_profiler");
        $__internal_b1cabd6e0a8891e2382e9e1806e373adc405517a5c1bdca4ddabcadb367e0f76->enter($__internal_b1cabd6e0a8891e2382e9e1806e373adc405517a5c1bdca4ddabcadb367e0f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1cabd6e0a8891e2382e9e1806e373adc405517a5c1bdca4ddabcadb367e0f76->leave($__internal_b1cabd6e0a8891e2382e9e1806e373adc405517a5c1bdca4ddabcadb367e0f76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8152085789081cb04b487d08fe0e6a5b7f1b1a3df1b77874e7f7de2d72024d5 = $this->env->getExtension("native_profiler");
        $__internal_a8152085789081cb04b487d08fe0e6a5b7f1b1a3df1b77874e7f7de2d72024d5->enter($__internal_a8152085789081cb04b487d08fe0e6a5b7f1b1a3df1b77874e7f7de2d72024d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a8152085789081cb04b487d08fe0e6a5b7f1b1a3df1b77874e7f7de2d72024d5->leave($__internal_a8152085789081cb04b487d08fe0e6a5b7f1b1a3df1b77874e7f7de2d72024d5_prof);

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
