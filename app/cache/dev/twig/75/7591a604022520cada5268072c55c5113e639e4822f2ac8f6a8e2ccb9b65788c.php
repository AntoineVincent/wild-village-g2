<?php

/* default/espace.html.twig */
class __TwigTemplate_f4ef0489e9ffc9052dc8f631de8de3368dec5d2714771a96fd1fa6e4e7f2484d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/espace.html.twig", 1);
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
        $__internal_0c5a57c6dda6df7d9ee081d208e945bc87f16e068277fa83b6fad11f3e4fb085 = $this->env->getExtension("native_profiler");
        $__internal_0c5a57c6dda6df7d9ee081d208e945bc87f16e068277fa83b6fad11f3e4fb085->enter($__internal_0c5a57c6dda6df7d9ee081d208e945bc87f16e068277fa83b6fad11f3e4fb085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/espace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5a57c6dda6df7d9ee081d208e945bc87f16e068277fa83b6fad11f3e4fb085->leave($__internal_0c5a57c6dda6df7d9ee081d208e945bc87f16e068277fa83b6fad11f3e4fb085_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e664a64d817fce7191354ff7ce09ef6b89edaba1bd10596ee25c2abc27229bf = $this->env->getExtension("native_profiler");
        $__internal_6e664a64d817fce7191354ff7ce09ef6b89edaba1bd10596ee25c2abc27229bf->enter($__internal_6e664a64d817fce7191354ff7ce09ef6b89edaba1bd10596ee25c2abc27229bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"col-md-12\">Bienvenue sur votre espace personnel ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</div>
<div class=\"col-md-12\">
\t<div class=\"col-md-3 profil\">
\t\t<h3>MON PROFIL</h3>
\t\t\t<h4>Ma biographie</h4><br>
\t\t\t<h4>Nom</h4>
\t\t\t<h4>Prénom</h4>
\t\t\t<h4> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo " </h4>
\t\t\t<h4> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requete_age"]) ? $context["requete_age"] : $this->getContext($context, "requete_age")), "age", array()), "html", null, true);
        echo " ans</h4><br>
\t\t<div class=\"titre-pro\"><h3>LIENS PRO</h3></div>
\t\t\t<h4>Site personnel</h4>
\t\t\t<h4>Github</h4>
\t\t\t<h4>Linkedin</h4>
\t\t\t<h4>Tweeter</h4>
\t\t\t<h4>Doyoubuzz</h4>
\t</div>
\t\t
\t\t<div class=\"col-md-7 flux-perso\">
\t\t<h3>MON FLUX PERSONEL</h3>
\t\t\t<div class=\"col-md-12 post_perso\">
\t\t\t\t<h4><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/jumelles.png"), "html", null, true);
        echo "\"><b>Je vais à la plage</b> - le 29/04/2016</h4>
\t\t\t\t<p>Aujourd'hui petit tour à la plage en famille</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 post_perso\">
\t\t\t\t<h4><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/humeur.png"), "html", null, true);
        echo "\"><b>En pleine forme</b> - le 28/04/2016</h4>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 post_perso\">
\t\t\t\t<h4><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/megaphone.png"), "html", null, true);
        echo "\"><b>Concours de Brame</b> - le 27/04/2016</h4>
\t\t\t\t<p>La Loupe le 12/05/2016</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 post_perso\">
\t\t\t\t<h4><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/jumelles.png"), "html", null, true);
        echo "\"><b>Je vais à la piscine</b> - le 27/04/2016</h4>
\t\t\t\t<p>Le maillot de bain est prêt. Plus que la serviette à trouver</p>
\t\t\t</div>
\t\t</div>
\t<div class=\"col-md-2\">
\t\t<div class=\"img_profil\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/deer_small.png"), "html", null, true);
        echo "\"></div>
\t\t<a class=\"btn btn-primary btn-espace\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user_espacemodif");
        echo "\" role=\"button\">Modifier votre profil</a>
\t</div>
</div>
<div class=\"col-md-12\">
\t<div class=\"col-md-5\"></div>
\t<div class=\"col-md-2 center-block titre_ami\"><h3>MES AMIS</h3></div>
\t<div class=\"col-md-5\"></div>
</div>
<div class=\"col-md-12\">
\t<div class=\"bulle_ami\"><a href=\"#\" alt=\"L Dupont\">L.D</a></div>\t
</div>
";
        
        $__internal_6e664a64d817fce7191354ff7ce09ef6b89edaba1bd10596ee25c2abc27229bf->leave($__internal_6e664a64d817fce7191354ff7ce09ef6b89edaba1bd10596ee25c2abc27229bf_prof);

    }

    public function getTemplateName()
    {
        return "default/espace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  98 => 41,  90 => 36,  83 => 32,  77 => 29,  70 => 25,  55 => 13,  51 => 12,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="col-md-12">Bienvenue sur votre espace personnel {{ app.user.username }}</div>*/
/* <div class="col-md-12">*/
/* 	<div class="col-md-3 profil">*/
/* 		<h3>MON PROFIL</h3>*/
/* 			<h4>Ma biographie</h4><br>*/
/* 			<h4>Nom</h4>*/
/* 			<h4>Prénom</h4>*/
/* 			<h4> {{ app.user.email }} </h4>*/
/* 			<h4> {{ requete_age.age }} ans</h4><br>*/
/* 		<div class="titre-pro"><h3>LIENS PRO</h3></div>*/
/* 			<h4>Site personnel</h4>*/
/* 			<h4>Github</h4>*/
/* 			<h4>Linkedin</h4>*/
/* 			<h4>Tweeter</h4>*/
/* 			<h4>Doyoubuzz</h4>*/
/* 	</div>*/
/* 		*/
/* 		<div class="col-md-7 flux-perso">*/
/* 		<h3>MON FLUX PERSONEL</h3>*/
/* 			<div class="col-md-12 post_perso">*/
/* 				<h4><img src="{{ asset('img/jumelles.png') }}"><b>Je vais à la plage</b> - le 29/04/2016</h4>*/
/* 				<p>Aujourd'hui petit tour à la plage en famille</p>*/
/* 			</div>*/
/* 			<div class="col-md-12 post_perso">*/
/* 				<h4><img src="{{ asset('img/humeur.png') }}"><b>En pleine forme</b> - le 28/04/2016</h4>*/
/* 			</div>*/
/* 			<div class="col-md-12 post_perso">*/
/* 				<h4><img src="{{ asset('img/megaphone.png') }}"><b>Concours de Brame</b> - le 27/04/2016</h4>*/
/* 				<p>La Loupe le 12/05/2016</p>*/
/* 			</div>*/
/* 			<div class="col-md-12 post_perso">*/
/* 				<h4><img src="{{ asset('img/jumelles.png') }}"><b>Je vais à la piscine</b> - le 27/04/2016</h4>*/
/* 				<p>Le maillot de bain est prêt. Plus que la serviette à trouver</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	<div class="col-md-2">*/
/* 		<div class="img_profil"><img src="{{ asset('img/deer_small.png') }}"></div>*/
/* 		<a class="btn btn-primary btn-espace" href="{{ path ("user_espacemodif") }}" role="button">Modifier votre profil</a>*/
/* 	</div>*/
/* </div>*/
/* <div class="col-md-12">*/
/* 	<div class="col-md-5"></div>*/
/* 	<div class="col-md-2 center-block titre_ami"><h3>MES AMIS</h3></div>*/
/* 	<div class="col-md-5"></div>*/
/* </div>*/
/* <div class="col-md-12">*/
/* 	<div class="bulle_ami"><a href="#" alt="L Dupont">L.D</a></div>	*/
/* </div>*/
/* {% endblock %}*/
