<?php

/* default/login.html.twig */
class __TwigTemplate_3022fd33196b2950b2ab0510fdf2a008d14b66a6a2796b2b6474ca02a1e3d55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_d7fdcdc7aa7f2c980acd88e2dfaa6d17d3f2e0497f5120b0faa6acd100f56621 = $this->env->getExtension("native_profiler");
        $__internal_d7fdcdc7aa7f2c980acd88e2dfaa6d17d3f2e0497f5120b0faa6acd100f56621->enter($__internal_d7fdcdc7aa7f2c980acd88e2dfaa6d17d3f2e0497f5120b0faa6acd100f56621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7fdcdc7aa7f2c980acd88e2dfaa6d17d3f2e0497f5120b0faa6acd100f56621->leave($__internal_d7fdcdc7aa7f2c980acd88e2dfaa6d17d3f2e0497f5120b0faa6acd100f56621_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac170a7f8944d23f0fdeb41a2ad85c9c27f60601aa86bdabec84f2b5053b9f8 = $this->env->getExtension("native_profiler");
        $__internal_fac170a7f8944d23f0fdeb41a2ad85c9c27f60601aa86bdabec84f2b5053b9f8->enter($__internal_fac170a7f8944d23f0fdeb41a2ad85c9c27f60601aa86bdabec84f2b5053b9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-md-1\"></div>
<div class=\"col-md-4\">
    <img class=\"wilderr\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/wilderlog.png"), "html", null, true);
        echo "\">
</div>
<div class=\"col-md-3 col-md-offset-2 logform\">
\t<div class=\"col-md-12 loglog padd ecartt\">
\t\t<h3>CONNECTION</h3>
\t</div>
\t<div class=\"col-md-12 loglog\">
\t\t";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 17
        echo "\t</div>
\t\t<form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t<div class=\"col-md-12 loglog ecartt\">
\t\t<div class=\"col-md-5 tilti\">
\t\t    <label for=\"username\"><span>Pseudo :</span></label>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t</div>
\t</div>
\t<div class\"col-md-12 loglog ecartt\">
\t\t<div class=\"col-md-5 tilti\">
\t\t    <label for=\"password\"><span>Mot de Passe :</span></label>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t</div>
\t</div>
\t<div class=\"col-md-12 loglog ecartt\">
\t\t<div class=\"col-md-2\"></div>
\t\t<div class=\"col-md-6\">
\t\t    <label for=\"remember_me\"><span>Se souvenir de moi :</span></label>
\t\t</div>
\t\t<div class=\"col-md-1\">
\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t</div>
\t</div>
\t<div class=\"col-md-12 loglog\">
\t\t<div class=\"col-md-4\"></div>
\t\t<div class=\"col-md-4\">
\t\t    <input type=\"submit\" class=\"btnlogin\" id=\"_submit\" name=\"_submit\" value=\"Envoyer\" />
\t\t</div>
\t</div>
\t\t</form>
</div>
<div class=\"col-md-4\"></div>
";
        
        $__internal_fac170a7f8944d23f0fdeb41a2ad85c9c27f60601aa86bdabec84f2b5053b9f8->leave($__internal_fac170a7f8944d23f0fdeb41a2ad85c9c27f60601aa86bdabec84f2b5053b9f8_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  70 => 19,  66 => 18,  63 => 17,  57 => 15,  55 => 14,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-md-1"></div>*/
/* <div class="col-md-4">*/
/*     <img class="wilderr" src="{{ asset('img/wilderlog.png') }}">*/
/* </div>*/
/* <div class="col-md-3 col-md-offset-2 logform">*/
/* 	<div class="col-md-12 loglog padd ecartt">*/
/* 		<h3>CONNECTION</h3>*/
/* 	</div>*/
/* 	<div class="col-md-12 loglog">*/
/* 		{% if error %}*/
/* 		    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 		<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 	<div class="col-md-12 loglog ecartt">*/
/* 		<div class="col-md-5 tilti">*/
/* 		    <label for="username"><span>Pseudo :</span></label>*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/* 		    <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class"col-md-12 loglog ecartt">*/
/* 		<div class="col-md-5 tilti">*/
/* 		    <label for="password"><span>Mot de Passe :</span></label>*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/* 		    <input type="password" id="password" name="_password" required="required" />*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-12 loglog ecartt">*/
/* 		<div class="col-md-2"></div>*/
/* 		<div class="col-md-6">*/
/* 		    <label for="remember_me"><span>Se souvenir de moi :</span></label>*/
/* 		</div>*/
/* 		<div class="col-md-1">*/
/* 		    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-12 loglog">*/
/* 		<div class="col-md-4"></div>*/
/* 		<div class="col-md-4">*/
/* 		    <input type="submit" class="btnlogin" id="_submit" name="_submit" value="Envoyer" />*/
/* 		</div>*/
/* 	</div>*/
/* 		</form>*/
/* </div>*/
/* <div class="col-md-4"></div>*/
/* {% endblock %}*/
