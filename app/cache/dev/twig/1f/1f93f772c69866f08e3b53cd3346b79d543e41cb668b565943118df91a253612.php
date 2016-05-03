<?php

/* base.html.twig */
class __TwigTemplate_5cf0821b7817a4ef88d0adad86204207223302f0be2447da69bf17e58b9808c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_106624377bfed0a5e6afc7119a8f631ff703971f0a039f0b371a7635914a7601 = $this->env->getExtension("native_profiler");
        $__internal_106624377bfed0a5e6afc7119a8f631ff703971f0a039f0b371a7635914a7601->enter($__internal_106624377bfed0a5e6afc7119a8f631ff703971f0a039f0b371a7635914a7601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_106624377bfed0a5e6afc7119a8f631ff703971f0a039f0b371a7635914a7601->leave($__internal_106624377bfed0a5e6afc7119a8f631ff703971f0a039f0b371a7635914a7601_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23c512c522facb214a9cbddd6d85467548b92178b981e99b515e6c55d99ad5d3 = $this->env->getExtension("native_profiler");
        $__internal_23c512c522facb214a9cbddd6d85467548b92178b981e99b515e6c55d99ad5d3->enter($__internal_23c512c522facb214a9cbddd6d85467548b92178b981e99b515e6c55d99ad5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_23c512c522facb214a9cbddd6d85467548b92178b981e99b515e6c55d99ad5d3->leave($__internal_23c512c522facb214a9cbddd6d85467548b92178b981e99b515e6c55d99ad5d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c673f1dfeceb9ee5b1c2d1d1381bb0dd71c604d0a1e92d3103d907f6f7a6585 = $this->env->getExtension("native_profiler");
        $__internal_2c673f1dfeceb9ee5b1c2d1d1381bb0dd71c604d0a1e92d3103d907f6f7a6585->enter($__internal_2c673f1dfeceb9ee5b1c2d1d1381bb0dd71c604d0a1e92d3103d907f6f7a6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c673f1dfeceb9ee5b1c2d1d1381bb0dd71c604d0a1e92d3103d907f6f7a6585->leave($__internal_2c673f1dfeceb9ee5b1c2d1d1381bb0dd71c604d0a1e92d3103d907f6f7a6585_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9e0747232d26f7cb2b35af1044e55504652536d9aff3967dbbb4f6718ecefe9 = $this->env->getExtension("native_profiler");
        $__internal_f9e0747232d26f7cb2b35af1044e55504652536d9aff3967dbbb4f6718ecefe9->enter($__internal_f9e0747232d26f7cb2b35af1044e55504652536d9aff3967dbbb4f6718ecefe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9e0747232d26f7cb2b35af1044e55504652536d9aff3967dbbb4f6718ecefe9->leave($__internal_f9e0747232d26f7cb2b35af1044e55504652536d9aff3967dbbb4f6718ecefe9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  75 => 11,  63 => 5,  54 => 13,  51 => 12,  49 => 11,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
