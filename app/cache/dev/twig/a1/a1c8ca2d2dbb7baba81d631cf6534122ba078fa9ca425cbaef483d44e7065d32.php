<?php

/* base.html.twig */
class __TwigTemplate_8a3f00eb4e7c1c354dc7bdd20254c5c5f55c752d6fa19d981a2029b6935c0b7e extends Twig_Template
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
        $__internal_2d18178e0a607675bfe376cc26112b8e61cc085bcc7a157e894eecaa9ec27995 = $this->env->getExtension("native_profiler");
        $__internal_2d18178e0a607675bfe376cc26112b8e61cc085bcc7a157e894eecaa9ec27995->enter($__internal_2d18178e0a607675bfe376cc26112b8e61cc085bcc7a157e894eecaa9ec27995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2d18178e0a607675bfe376cc26112b8e61cc085bcc7a157e894eecaa9ec27995->leave($__internal_2d18178e0a607675bfe376cc26112b8e61cc085bcc7a157e894eecaa9ec27995_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f629606accc5741b0645a75ddccdcd929d3955d94d641bf7a2c053e847b341d = $this->env->getExtension("native_profiler");
        $__internal_5f629606accc5741b0645a75ddccdcd929d3955d94d641bf7a2c053e847b341d->enter($__internal_5f629606accc5741b0645a75ddccdcd929d3955d94d641bf7a2c053e847b341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f629606accc5741b0645a75ddccdcd929d3955d94d641bf7a2c053e847b341d->leave($__internal_5f629606accc5741b0645a75ddccdcd929d3955d94d641bf7a2c053e847b341d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87edfd27d9123937629e6847d33628bbd52e57a6b1ddc15363ad750c58e25956 = $this->env->getExtension("native_profiler");
        $__internal_87edfd27d9123937629e6847d33628bbd52e57a6b1ddc15363ad750c58e25956->enter($__internal_87edfd27d9123937629e6847d33628bbd52e57a6b1ddc15363ad750c58e25956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87edfd27d9123937629e6847d33628bbd52e57a6b1ddc15363ad750c58e25956->leave($__internal_87edfd27d9123937629e6847d33628bbd52e57a6b1ddc15363ad750c58e25956_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53ee266d3d3d4ad12b4c599615b07a6805fa9374ad25649d86ea39a79867bf7b = $this->env->getExtension("native_profiler");
        $__internal_53ee266d3d3d4ad12b4c599615b07a6805fa9374ad25649d86ea39a79867bf7b->enter($__internal_53ee266d3d3d4ad12b4c599615b07a6805fa9374ad25649d86ea39a79867bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_53ee266d3d3d4ad12b4c599615b07a6805fa9374ad25649d86ea39a79867bf7b->leave($__internal_53ee266d3d3d4ad12b4c599615b07a6805fa9374ad25649d86ea39a79867bf7b_prof);

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
