<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f4c118fa2fb2ce145a42fd2a05abea7f11262f5920f74e3be5e60ca22e70d20d extends Twig_Template
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
        $__internal_235ad6d4f1e572439a5015a1c2755712fbf99110a7c492298755420d93292c79 = $this->env->getExtension("native_profiler");
        $__internal_235ad6d4f1e572439a5015a1c2755712fbf99110a7c492298755420d93292c79->enter($__internal_235ad6d4f1e572439a5015a1c2755712fbf99110a7c492298755420d93292c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235ad6d4f1e572439a5015a1c2755712fbf99110a7c492298755420d93292c79->leave($__internal_235ad6d4f1e572439a5015a1c2755712fbf99110a7c492298755420d93292c79_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0878bdf29ce52f9227fd8bd1b74fa2f2c173e292fd94a0aa8115544ea3a699d0 = $this->env->getExtension("native_profiler");
        $__internal_0878bdf29ce52f9227fd8bd1b74fa2f2c173e292fd94a0aa8115544ea3a699d0->enter($__internal_0878bdf29ce52f9227fd8bd1b74fa2f2c173e292fd94a0aa8115544ea3a699d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0878bdf29ce52f9227fd8bd1b74fa2f2c173e292fd94a0aa8115544ea3a699d0->leave($__internal_0878bdf29ce52f9227fd8bd1b74fa2f2c173e292fd94a0aa8115544ea3a699d0_prof);

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
