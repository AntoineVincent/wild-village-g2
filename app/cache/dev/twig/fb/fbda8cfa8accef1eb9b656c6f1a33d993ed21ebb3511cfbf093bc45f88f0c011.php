<?php

/* default/register.html.twig */
class __TwigTemplate_c7934d6dec9c95cbe4463425bc0c6b9adcefa04941e775b0736682c09f375d67 extends Twig_Template
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
        $__internal_f398e47980f298ef38dc9d74e6858529ad650211a55f30a3c5d1dbe3a356d22e = $this->env->getExtension("native_profiler");
        $__internal_f398e47980f298ef38dc9d74e6858529ad650211a55f30a3c5d1dbe3a356d22e->enter($__internal_f398e47980f298ef38dc9d74e6858529ad650211a55f30a3c5d1dbe3a356d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f398e47980f298ef38dc9d74e6858529ad650211a55f30a3c5d1dbe3a356d22e->leave($__internal_f398e47980f298ef38dc9d74e6858529ad650211a55f30a3c5d1dbe3a356d22e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc210a93281f1fa078b79ecb0d2bf3413d7690875d79733d533e02ea159d5f40 = $this->env->getExtension("native_profiler");
        $__internal_fc210a93281f1fa078b79ecb0d2bf3413d7690875d79733d533e02ea159d5f40->enter($__internal_fc210a93281f1fa078b79ecb0d2bf3413d7690875d79733d533e02ea159d5f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

<div class=\"col-md-12 register-form\">
        <div class=\"col-md-6\">
            Adresse E-mail :
        </div>
        <div class=\"col-md-6\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            ";
        // line 26
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
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
            ";
        // line 36
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
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"col-md-12 register-but\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>

";
        
        $__internal_fc210a93281f1fa078b79ecb0d2bf3413d7690875d79733d533e02ea159d5f40->leave($__internal_fc210a93281f1fa078b79ecb0d2bf3413d7690875d79733d533e02ea159d5f40_prof);

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
        return array (  122 => 53,  117 => 51,  109 => 46,  105 => 45,  93 => 36,  89 => 35,  77 => 26,  73 => 25,  61 => 16,  57 => 15,  47 => 8,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
