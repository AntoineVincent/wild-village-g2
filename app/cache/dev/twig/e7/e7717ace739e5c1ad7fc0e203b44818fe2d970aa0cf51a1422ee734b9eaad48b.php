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
        $__internal_2f5ae6c37a045c99bdf36244c14f76da35e80eb594b0586173471b164218fdeb = $this->env->getExtension("native_profiler");
        $__internal_2f5ae6c37a045c99bdf36244c14f76da35e80eb594b0586173471b164218fdeb->enter($__internal_2f5ae6c37a045c99bdf36244c14f76da35e80eb594b0586173471b164218fdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5ae6c37a045c99bdf36244c14f76da35e80eb594b0586173471b164218fdeb->leave($__internal_2f5ae6c37a045c99bdf36244c14f76da35e80eb594b0586173471b164218fdeb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa58dee1a171bddbc74f56e63735284265df0c65e329a7539477a4638a4d1fe2 = $this->env->getExtension("native_profiler");
        $__internal_fa58dee1a171bddbc74f56e63735284265df0c65e329a7539477a4638a4d1fe2->enter($__internal_fa58dee1a171bddbc74f56e63735284265df0c65e329a7539477a4638a4d1fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fa58dee1a171bddbc74f56e63735284265df0c65e329a7539477a4638a4d1fe2->leave($__internal_fa58dee1a171bddbc74f56e63735284265df0c65e329a7539477a4638a4d1fe2_prof);

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
