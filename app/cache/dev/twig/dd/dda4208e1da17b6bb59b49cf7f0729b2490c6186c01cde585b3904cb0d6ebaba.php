<?php

/* base.html.twig */
class __TwigTemplate_0655314c223c7b6803f002526a7f3bb8d85a0628921d0c36050ecad11353a331 extends Twig_Template
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
        $__internal_a370815c3874f5ba41ee0a553c98504547989b2aa833906d890d8ead4b2069ed = $this->env->getExtension("native_profiler");
        $__internal_a370815c3874f5ba41ee0a553c98504547989b2aa833906d890d8ead4b2069ed->enter($__internal_a370815c3874f5ba41ee0a553c98504547989b2aa833906d890d8ead4b2069ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a370815c3874f5ba41ee0a553c98504547989b2aa833906d890d8ead4b2069ed->leave($__internal_a370815c3874f5ba41ee0a553c98504547989b2aa833906d890d8ead4b2069ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_31787feb8bde93736ed44b24d0295f736ad7eb47dd7bd5420f0143fae3898681 = $this->env->getExtension("native_profiler");
        $__internal_31787feb8bde93736ed44b24d0295f736ad7eb47dd7bd5420f0143fae3898681->enter($__internal_31787feb8bde93736ed44b24d0295f736ad7eb47dd7bd5420f0143fae3898681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31787feb8bde93736ed44b24d0295f736ad7eb47dd7bd5420f0143fae3898681->leave($__internal_31787feb8bde93736ed44b24d0295f736ad7eb47dd7bd5420f0143fae3898681_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_71eefb923a30a90fe0fae34d2781181c46215013b981d2c1929019f4c23a661f = $this->env->getExtension("native_profiler");
        $__internal_71eefb923a30a90fe0fae34d2781181c46215013b981d2c1929019f4c23a661f->enter($__internal_71eefb923a30a90fe0fae34d2781181c46215013b981d2c1929019f4c23a661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71eefb923a30a90fe0fae34d2781181c46215013b981d2c1929019f4c23a661f->leave($__internal_71eefb923a30a90fe0fae34d2781181c46215013b981d2c1929019f4c23a661f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72a26c42cd9569eb39b2a616566dd5b0ceb395204607efcc9e3c12074792944e = $this->env->getExtension("native_profiler");
        $__internal_72a26c42cd9569eb39b2a616566dd5b0ceb395204607efcc9e3c12074792944e->enter($__internal_72a26c42cd9569eb39b2a616566dd5b0ceb395204607efcc9e3c12074792944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72a26c42cd9569eb39b2a616566dd5b0ceb395204607efcc9e3c12074792944e->leave($__internal_72a26c42cd9569eb39b2a616566dd5b0ceb395204607efcc9e3c12074792944e_prof);

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
