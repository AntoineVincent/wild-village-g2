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
        $__internal_97dc2ad0cfd2aca08e5600a223cc37f8eb043387c64ec79605d17688f66bf6af = $this->env->getExtension("native_profiler");
        $__internal_97dc2ad0cfd2aca08e5600a223cc37f8eb043387c64ec79605d17688f66bf6af->enter($__internal_97dc2ad0cfd2aca08e5600a223cc37f8eb043387c64ec79605d17688f66bf6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_97dc2ad0cfd2aca08e5600a223cc37f8eb043387c64ec79605d17688f66bf6af->leave($__internal_97dc2ad0cfd2aca08e5600a223cc37f8eb043387c64ec79605d17688f66bf6af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a2acbacba7202a80bb39ea7ba2367cc510b0dc9a327af1e457d8ffd6b31feb0 = $this->env->getExtension("native_profiler");
        $__internal_4a2acbacba7202a80bb39ea7ba2367cc510b0dc9a327af1e457d8ffd6b31feb0->enter($__internal_4a2acbacba7202a80bb39ea7ba2367cc510b0dc9a327af1e457d8ffd6b31feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4a2acbacba7202a80bb39ea7ba2367cc510b0dc9a327af1e457d8ffd6b31feb0->leave($__internal_4a2acbacba7202a80bb39ea7ba2367cc510b0dc9a327af1e457d8ffd6b31feb0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f71374afb34a011af866274fb7e537c6eebc7b5b01e024c1c237006854241449 = $this->env->getExtension("native_profiler");
        $__internal_f71374afb34a011af866274fb7e537c6eebc7b5b01e024c1c237006854241449->enter($__internal_f71374afb34a011af866274fb7e537c6eebc7b5b01e024c1c237006854241449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f71374afb34a011af866274fb7e537c6eebc7b5b01e024c1c237006854241449->leave($__internal_f71374afb34a011af866274fb7e537c6eebc7b5b01e024c1c237006854241449_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_056d85d1abf665e101331e7d46bbb27509523c096eb88a1c39de0d9c92974837 = $this->env->getExtension("native_profiler");
        $__internal_056d85d1abf665e101331e7d46bbb27509523c096eb88a1c39de0d9c92974837->enter($__internal_056d85d1abf665e101331e7d46bbb27509523c096eb88a1c39de0d9c92974837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_056d85d1abf665e101331e7d46bbb27509523c096eb88a1c39de0d9c92974837->leave($__internal_056d85d1abf665e101331e7d46bbb27509523c096eb88a1c39de0d9c92974837_prof);

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
