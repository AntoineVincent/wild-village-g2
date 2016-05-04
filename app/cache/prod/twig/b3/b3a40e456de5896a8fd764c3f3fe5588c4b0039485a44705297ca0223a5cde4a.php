<?php

/* default/login.html.twig */
class __TwigTemplate_bfa0ce534026f5cf9abcfd385b9e88c43288b57e956e2c565691676fc756ee9b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 15
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t<div class=\"col-md-12 loglog ecartt\">
\t\t<div class=\"col-md-5 tilti\">
\t\t    <label for=\"username\"><span>Pseudo :</span></label>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  70 => 25,  61 => 19,  57 => 18,  54 => 17,  48 => 15,  46 => 14,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
