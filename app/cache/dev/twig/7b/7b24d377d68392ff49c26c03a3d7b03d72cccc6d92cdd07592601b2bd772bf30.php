<?php

/* default/espace.html.twig */
class __TwigTemplate_6f3de03c0cc0df5bf25c1eb002d5942208bc8696dd18c04530ea3a4682e4b85f extends Twig_Template
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
        $__internal_4c224af8f72ba5ad422dfc4f8d58a9fd4bd139a475fa80725c7ee8084202ca23 = $this->env->getExtension("native_profiler");
        $__internal_4c224af8f72ba5ad422dfc4f8d58a9fd4bd139a475fa80725c7ee8084202ca23->enter($__internal_4c224af8f72ba5ad422dfc4f8d58a9fd4bd139a475fa80725c7ee8084202ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/espace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c224af8f72ba5ad422dfc4f8d58a9fd4bd139a475fa80725c7ee8084202ca23->leave($__internal_4c224af8f72ba5ad422dfc4f8d58a9fd4bd139a475fa80725c7ee8084202ca23_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_58c32311119252d995485f1f01534a306dc888a3fa1a17dd5f56e1d938c93b89 = $this->env->getExtension("native_profiler");
        $__internal_58c32311119252d995485f1f01534a306dc888a3fa1a17dd5f56e1d938c93b89->enter($__internal_58c32311119252d995485f1f01534a306dc888a3fa1a17dd5f56e1d938c93b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"col-md-12\">Bienvenue sur votre espace personnel ";
        echo "";
        echo "</div>
<div class=\"col-md-12\">
\t<div class=\"col-md-3 profil\">
\t\t<h3>MON PROFIL</h3>
\t\t\t<h4>Ma biographie</h4><br>
\t\t\t<h4>Nom</h4>
\t\t\t<h4>Prénom</h4>
\t\t\t<h4>Age</h4>
\t\t\t<h4>Adresse email</h4><br>
\t\t<h3>LIENS PRO</h3>
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
\t\t<a class=\"btn btn-primary btn-espace\" href=\"#\" role=\"button\">Modifier votre profil</a>
\t</div>
</div>
<div class=\"col-md-5\"></div>
<div class=\"col-md-2 center-block\"><h3>MES AMIS</h3></div>
<div class=\"col-md-5\"></div>
";
        
        $__internal_58c32311119252d995485f1f01534a306dc888a3fa1a17dd5f56e1d938c93b89->leave($__internal_58c32311119252d995485f1f01534a306dc888a3fa1a17dd5f56e1d938c93b89_prof);

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
        return array (  84 => 36,  77 => 32,  71 => 29,  64 => 25,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="col-md-12">Bienvenue sur votre espace personnel {{ '' }}</div>*/
/* <div class="col-md-12">*/
/* 	<div class="col-md-3 profil">*/
/* 		<h3>MON PROFIL</h3>*/
/* 			<h4>Ma biographie</h4><br>*/
/* 			<h4>Nom</h4>*/
/* 			<h4>Prénom</h4>*/
/* 			<h4>Age</h4>*/
/* 			<h4>Adresse email</h4><br>*/
/* 		<h3>LIENS PRO</h3>*/
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
/* 		<a class="btn btn-primary btn-espace" href="#" role="button">Modifier votre profil</a>*/
/* 	</div>*/
/* </div>*/
/* <div class="col-md-5"></div>*/
/* <div class="col-md-2 center-block"><h3>MES AMIS</h3></div>*/
/* <div class="col-md-5"></div>*/
/* {% endblock %}*/
