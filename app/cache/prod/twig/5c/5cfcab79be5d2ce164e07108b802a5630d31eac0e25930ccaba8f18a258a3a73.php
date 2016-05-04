<?php

/* default/register.html.twig */
class __TwigTemplate_46b4179222f06d46c12647397c6147e19ec14e98a19f9fbe11b2bd6ef803ae08 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 6
        echo "

    <div class=\"col-md-3\"></div>
    <div class=\"col-md-2 wilders\">
        <img class=\"wilder\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/lastwilder.png"), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-md-3 col-md-offset-1 register-div\">
        <div class=\"formulaire\">
            ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("user_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                <div class=\"col-md-12 ecart pad\">
                    <h3> INSCRIPTION </h3>
                </div>
                <div class=\"col-md-12 ecart \">
                    <div class=\"col-md-6\">
                        <p class=\"appel\">Pseudo :</p>
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"col-md-12 ecart\">
                    <div class=\"col-md-6 a\">
                        <p class=\"appel\">Age :</p>
                    </div>
                    <div class=\"col-md-6\">
                        <input type=\"number\" name=\"age\">
                    </div>
                </div>

        <div class=\"col-md-12 register-form ecart\">
                <div class=\"col-md-6 \">
                    <p class=\"appel\">Adresse E-mail :</p>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"col-md-12 register-form ecart\">
                <div class=\"col-md-6\">
                    <p class=\"appel\">Mot de passe :</p>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget');
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
                </div>
            </div>

            <div class=\"col-md-12 register-form ecart\">
                <div class=\"col-md-6\">
                    <p class=\"appel\">Confirmation :</p>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget');
        echo "
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-12 register-but\">
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4 \">
                    <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"col-md-4\"></div>
            </div>
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </div>


";
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
        return array (  136 => 73,  129 => 69,  120 => 63,  116 => 62,  104 => 53,  100 => 52,  88 => 43,  84 => 42,  63 => 24,  59 => 23,  47 => 14,  40 => 10,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/*     <div class="col-md-3"></div>*/
/*     <div class="col-md-2 wilders">*/
/*         <img class="wilder" src="{{ asset('img/lastwilder.png') }}">*/
/*     </div>*/
/*     <div class="col-md-3 col-md-offset-1 register-div">*/
/*         <div class="formulaire">*/
/*             {{ form_start(form, {'method': 'post', 'action': path('user_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*                 <div class="col-md-12 ecart pad">*/
/*                     <h3> INSCRIPTION </h3>*/
/*                 </div>*/
/*                 <div class="col-md-12 ecart ">*/
/*                     <div class="col-md-6">*/
/*                         <p class="appel">Pseudo :</p>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         {{ form_widget(form.username) }}*/
/*                         {{ form_errors(form.username) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-12 ecart">*/
/*                     <div class="col-md-6 a">*/
/*                         <p class="appel">Age :</p>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <input type="number" name="age">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*         <div class="col-md-12 register-form ecart">*/
/*                 <div class="col-md-6 ">*/
/*                     <p class="appel">Adresse E-mail :</p>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     {{ form_widget(form.email) }}*/
/*                     {{ form_errors(form.email) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-12 register-form ecart">*/
/*                 <div class="col-md-6">*/
/*                     <p class="appel">Mot de passe :</p>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     {{ form_widget(form.plainPassword.first) }}*/
/*                     {{ form_errors(form.plainPassword.first) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-12 register-form ecart">*/
/*                 <div class="col-md-6">*/
/*                     <p class="appel">Confirmation :</p>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     {{ form_widget(form.plainPassword.second) }}*/
/*                     {{ form_errors(form.plainPassword.second) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12 register-but">*/
/*                 <div class="col-md-4"></div>*/
/*                 <div class="col-md-4 ">*/
/*                     <input class="btn btn-success" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                 </div>*/
/*                 <div class="col-md-4"></div>*/
/*             </div>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
