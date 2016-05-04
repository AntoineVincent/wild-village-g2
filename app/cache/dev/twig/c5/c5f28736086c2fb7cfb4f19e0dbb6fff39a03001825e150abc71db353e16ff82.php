<?php

/* default/register.html.twig */
class __TwigTemplate_b46a3ec7241518b616c2aa4c3eacd0baf7fdc117a8bba7a1040cb96ada554435 extends Twig_Template
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
        $__internal_9a44b239e0330d6f90203023281f149dffa4b1731d91506797587849d75ebd79 = $this->env->getExtension("native_profiler");
        $__internal_9a44b239e0330d6f90203023281f149dffa4b1731d91506797587849d75ebd79->enter($__internal_9a44b239e0330d6f90203023281f149dffa4b1731d91506797587849d75ebd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a44b239e0330d6f90203023281f149dffa4b1731d91506797587849d75ebd79->leave($__internal_9a44b239e0330d6f90203023281f149dffa4b1731d91506797587849d75ebd79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81c488ac675fc4b9b17dd31d6e0149b13856de9c89807cfb8181c03e261d21b2 = $this->env->getExtension("native_profiler");
        $__internal_81c488ac675fc4b9b17dd31d6e0149b13856de9c89807cfb8181c03e261d21b2->enter($__internal_81c488ac675fc4b9b17dd31d6e0149b13856de9c89807cfb8181c03e261d21b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("user_register"), "attr" => array("class" => "fos_user_registration_register")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>


";
        
        $__internal_81c488ac675fc4b9b17dd31d6e0149b13856de9c89807cfb8181c03e261d21b2->leave($__internal_81c488ac675fc4b9b17dd31d6e0149b13856de9c89807cfb8181c03e261d21b2_prof);

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
        return array (  145 => 73,  138 => 69,  129 => 63,  125 => 62,  113 => 53,  109 => 52,  97 => 43,  93 => 42,  72 => 24,  68 => 23,  56 => 14,  49 => 10,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
