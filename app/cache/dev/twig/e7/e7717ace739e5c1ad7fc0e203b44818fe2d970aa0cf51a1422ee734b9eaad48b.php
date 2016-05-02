<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cb1d5eb525ffeccef397fd019606a7fba83094aa10b039fe0ba0b0d771631ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a77a8b9959b564537f030908bd26d71efaade841997e1488a721166e771e94a0 = $this->env->getExtension("native_profiler");
        $__internal_a77a8b9959b564537f030908bd26d71efaade841997e1488a721166e771e94a0->enter($__internal_a77a8b9959b564537f030908bd26d71efaade841997e1488a721166e771e94a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a77a8b9959b564537f030908bd26d71efaade841997e1488a721166e771e94a0->leave($__internal_a77a8b9959b564537f030908bd26d71efaade841997e1488a721166e771e94a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aedd0de121bb3cdbd7936683b253bb747d857f48e6c0d67d092a6205d99b0f0e = $this->env->getExtension("native_profiler");
        $__internal_aedd0de121bb3cdbd7936683b253bb747d857f48e6c0d67d092a6205d99b0f0e->enter($__internal_aedd0de121bb3cdbd7936683b253bb747d857f48e6c0d67d092a6205d99b0f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_aedd0de121bb3cdbd7936683b253bb747d857f48e6c0d67d092a6205d99b0f0e->leave($__internal_aedd0de121bb3cdbd7936683b253bb747d857f48e6c0d67d092a6205d99b0f0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
