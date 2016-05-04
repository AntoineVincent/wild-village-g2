<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_379e97c9d55d8bc3baef2cd2ef833b7fc50a482c347f220b594bec4c83c72ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aec366753aabf6f1d9affbbf2d2b8d34f5b80fe7bd2baad14c69e26e45977aaf = $this->env->getExtension("native_profiler");
        $__internal_aec366753aabf6f1d9affbbf2d2b8d34f5b80fe7bd2baad14c69e26e45977aaf->enter($__internal_aec366753aabf6f1d9affbbf2d2b8d34f5b80fe7bd2baad14c69e26e45977aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec366753aabf6f1d9affbbf2d2b8d34f5b80fe7bd2baad14c69e26e45977aaf->leave($__internal_aec366753aabf6f1d9affbbf2d2b8d34f5b80fe7bd2baad14c69e26e45977aaf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8f5e7fff71697d015acee651b3400d96b1e3d40c6c5562acc2e578ae48b952d = $this->env->getExtension("native_profiler");
        $__internal_a8f5e7fff71697d015acee651b3400d96b1e3d40c6c5562acc2e578ae48b952d->enter($__internal_a8f5e7fff71697d015acee651b3400d96b1e3d40c6c5562acc2e578ae48b952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a8f5e7fff71697d015acee651b3400d96b1e3d40c6c5562acc2e578ae48b952d->leave($__internal_a8f5e7fff71697d015acee651b3400d96b1e3d40c6c5562acc2e578ae48b952d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
