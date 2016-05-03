<?php

/* default/register.html.twig */
class __TwigTemplate_87127e3b4e7a0980fb4aa2d408831178079885639e27345e20e2e0fc7253012a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5716a1eb7eff1caac783adb44c3935c55b081af1bbd1190a9a62a9d3c0cfea4e = $this->env->getExtension("native_profiler");
        $__internal_5716a1eb7eff1caac783adb44c3935c55b081af1bbd1190a9a62a9d3c0cfea4e->enter($__internal_5716a1eb7eff1caac783adb44c3935c55b081af1bbd1190a9a62a9d3c0cfea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5716a1eb7eff1caac783adb44c3935c55b081af1bbd1190a9a62a9d3c0cfea4e->leave($__internal_5716a1eb7eff1caac783adb44c3935c55b081af1bbd1190a9a62a9d3c0cfea4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90776fa8a9f682324e121c5228bc92b34762f53e5f169dbcebb293ba54da6027 = $this->env->getExtension("native_profiler");
        $__internal_90776fa8a9f682324e121c5228bc92b34762f53e5f169dbcebb293ba54da6027->enter($__internal_90776fa8a9f682324e121c5228bc92b34762f53e5f169dbcebb293ba54da6027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        echo "
<div class=\"col-md-6 col-md-offset-6 register-div\">
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("user_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

        <div class=\"col-md-12 \">
            <div class=\"col-md-6\">
                Nom d'utilisateur :
            </div>
            <div class=\"col-md-6\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"col-md-12 \">
            <div class=\"col-md-6\">
                Age :
            </div>
            <div class=\"col-md-6\">
                <input type=\"number\" name=\"age\">
            </div>
        </div>

<div class=\"col-md-12 register-form\">
        <div class=\"col-md-6\">
            Adresse E-mail :
        </div>
        <div class=\"col-md-6\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"col-md-12 register-form\">
        <div class=\"col-md-6\">
            Mot de passe :
        </div>
        <div class=\"col-md-6\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"col-md-12 register-form\">
        <div class=\"col-md-6\">
            Confirmation :
        </div>
        <div class=\"col-md-6\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"col-md-12 register-but\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>

";
        
        $__internal_90776fa8a9f682324e121c5228bc92b34762f53e5f169dbcebb293ba54da6027->leave($__internal_90776fa8a9f682324e121c5228bc92b34762f53e5f169dbcebb293ba54da6027_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  126 => 60,  118 => 55,  114 => 54,  102 => 45,  98 => 44,  86 => 35,  82 => 34,  61 => 16,  57 => 15,  47 => 8,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="col-md-6 col-md-offset-6 register-div">*/
/*     {{ form_start(form, {'method': 'post', 'action': path('user_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*         <div class="col-md-12 ">*/
/*             <div class="col-md-6">*/
/*                 Nom d'utilisateur :*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 {{ form_widget(form.username) }}*/
/*                 {{ form_errors(form.username) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-12 ">*/
/*             <div class="col-md-6">*/
/*                 Age :*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <input type="number" name="age">*/
/*             </div>*/
/*         </div>*/
/* */
/* <div class="col-md-12 register-form">*/
/*         <div class="col-md-6">*/
/*             Adresse E-mail :*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ form_widget(form.email) }}*/
/*             {{ form_errors(form.email) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-12 register-form">*/
/*         <div class="col-md-6">*/
/*             Mot de passe :*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ form_widget(form.plainPassword.first) }}*/
/*             {{ form_errors(form.plainPassword.first) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-12 register-form">*/
/*         <div class="col-md-6">*/
/*             Confirmation :*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ form_widget(form.plainPassword.second) }}*/
/*             {{ form_errors(form.plainPassword.second) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-12 register-but">*/
/*         <input class="btn btn-success" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
