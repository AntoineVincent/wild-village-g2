<?php

/* default/espacemodif.html.twig */
class __TwigTemplate_ad13d521c2006022efde685ade3dd4c8eba02162234b6bf8094ba0b4f925c410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/espacemodif.html.twig", 1);
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
        $__internal_72befb38527b6aec6a29dad3fbcd126019e4197b1b9ad79725d39009071e0728 = $this->env->getExtension("native_profiler");
        $__internal_72befb38527b6aec6a29dad3fbcd126019e4197b1b9ad79725d39009071e0728->enter($__internal_72befb38527b6aec6a29dad3fbcd126019e4197b1b9ad79725d39009071e0728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/espacemodif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72befb38527b6aec6a29dad3fbcd126019e4197b1b9ad79725d39009071e0728->leave($__internal_72befb38527b6aec6a29dad3fbcd126019e4197b1b9ad79725d39009071e0728_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a276e5c328940bc51df5e8cccdf5b1bb65e955cf99d373e7c4482eef1c0b584 = $this->env->getExtension("native_profiler");
        $__internal_6a276e5c328940bc51df5e8cccdf5b1bb65e955cf99d373e7c4482eef1c0b584->enter($__internal_6a276e5c328940bc51df5e8cccdf5b1bb65e955cf99d373e7c4482eef1c0b584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"col-md-12\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " vous pouvez modifier vos informations ici.</div>
<div class=\"col-md-12\">
\t<div class=\"col-md-3\"></div>
\t<div class=\"col-md-6\">
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_espacemodif");
        echo "\" method=\"post\" class=\"espace_modif\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"username\">Pseudo :</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"nom\">Nom :</label>
\t\t\t\t<input type=\"string\" id=\"nom\" name=\"nom\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "nom", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"prenom\">Prenom :</label>
\t\t\t\t<input type=\"string\" id=\"prenom\" name=\"_prenom\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "prenom", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"age\">Age :</label>
\t\t\t\t<input type=\"integer\" id=\"age\" name=\"_age\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "age", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"email\">Email :</label>
\t\t\t\t<input type=\"string\" id=\"email\" name=\"_email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"biographie\">Biographie :</label>
\t\t\t\t<input type=\"text\" id=\"biographie\" name=\"_biographie\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "biographie", array()), "html", null, true);
        echo "\"/>
\t\t\t</div><br>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"site\">Site personnel :</label>
\t\t\t\t<input type=\"string\" id=\"site\" name=\"_site\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "site", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"github\">Github :</label>
\t\t\t\t<input type=\"string\" id=\"github\" name=\"_github\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "github", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"linkedin\">Linkedin :</label>
\t\t\t\t<input type=\"string\" id=\"linkedin\" name=\"_linkedin\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "linkedin", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"tweeter\">Tweeter :</label>
\t\t\t\t<input type=\"string\" id=\"tweeter\" name=\"_tweeter\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "tweeter", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<label for=\"doyoubuz\">Doyoubuzz :</label>
\t\t\t\t<input type=\"string\" id=\"doyoubuzz\" name=\"_doyoujbuzz\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_infos"]) ? $context["requete_infos"] : $this->getContext($context, "requete_infos")), "doyoubuzz", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<input type=\"submit\" class=\"btnlogin\" id=\"_submit\" name=\"_submit\" value=\"Envoyer\" />
\t\t\t</div>
\t\t</form>
\t</div>
\t<div class=\"col-md-3\"></div>\t
</div>
";
        
        $__internal_6a276e5c328940bc51df5e8cccdf5b1bb65e955cf99d373e7c4482eef1c0b584->leave($__internal_6a276e5c328940bc51df5e8cccdf5b1bb65e955cf99d373e7c4482eef1c0b584_prof);

    }

    public function getTemplateName()
    {
        return "default/espacemodif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 52,  117 => 48,  110 => 44,  103 => 40,  96 => 36,  89 => 32,  82 => 28,  75 => 24,  68 => 20,  61 => 16,  54 => 12,  48 => 9,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="col-md-12">{{ app.user.username }} vous pouvez modifier vos informations ici.</div>*/
/* <div class="col-md-12">*/
/* 	<div class="col-md-3"></div>*/
/* 	<div class="col-md-6">*/
/* 		<form action="{{ path("user_espacemodif") }}" method="post" class="espace_modif">*/
/* 			<div class="col-md-12">*/
/* 				<label for="username">Pseudo :</label>*/
/* 				<input type="text" id="username" name="_username" value="{{ app.user.username }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="nom">Nom :</label>*/
/* 				<input type="string" id="nom" name="nom" value="{{ requete_infos.nom }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="prenom">Prenom :</label>*/
/* 				<input type="string" id="prenom" name="_prenom" value="{{ requete_infos.prenom }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="age">Age :</label>*/
/* 				<input type="integer" id="age" name="_age" value="{{ requete_infos.age }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="email">Email :</label>*/
/* 				<input type="string" id="email" name="_email" value="{{ app.user.email }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="biographie">Biographie :</label>*/
/* 				<input type="text" id="biographie" name="_biographie" value="{{ requete_infos.biographie }}"/>*/
/* 			</div><br>*/
/* 			<div class="col-md-12">*/
/* 				<label for="site">Site personnel :</label>*/
/* 				<input type="string" id="site" name="_site" value="{{ requete_infos.site }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="github">Github :</label>*/
/* 				<input type="string" id="github" name="_github" value="{{ requete_infos.github }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="linkedin">Linkedin :</label>*/
/* 				<input type="string" id="linkedin" name="_linkedin" value="{{ requete_infos.linkedin }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="tweeter">Tweeter :</label>*/
/* 				<input type="string" id="tweeter" name="_tweeter" value="{{ requete_infos.tweeter }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<label for="doyoubuz">Doyoubuzz :</label>*/
/* 				<input type="string" id="doyoubuzz" name="_doyoujbuzz" value="{{ requete_infos.doyoubuzz }}"/>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<input type="submit" class="btnlogin" id="_submit" name="_submit" value="Envoyer" />*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* 	<div class="col-md-3"></div>	*/
/* </div>*/
/* {% endblock %}*/
