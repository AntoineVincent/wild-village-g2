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
        $__internal_5ebfcb4e77850d8de6fbeae453a454da0ff71a5cc9b15e8a32ba05522756ca84 = $this->env->getExtension("native_profiler");
        $__internal_5ebfcb4e77850d8de6fbeae453a454da0ff71a5cc9b15e8a32ba05522756ca84->enter($__internal_5ebfcb4e77850d8de6fbeae453a454da0ff71a5cc9b15e8a32ba05522756ca84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/espace.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ebfcb4e77850d8de6fbeae453a454da0ff71a5cc9b15e8a32ba05522756ca84->leave($__internal_5ebfcb4e77850d8de6fbeae453a454da0ff71a5cc9b15e8a32ba05522756ca84_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0312fd0000429cc17b3691b15f22d67690e239038126b3167839e07821d5143c = $this->env->getExtension("native_profiler");
        $__internal_0312fd0000429cc17b3691b15f22d67690e239038126b3167839e07821d5143c->enter($__internal_0312fd0000429cc17b3691b15f22d67690e239038126b3167839e07821d5143c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div class=\"img_profil\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/deer_small.png"), "html", null, true);
        echo "\"></div>
\t\t<a class=\"btn btn-primary btn-espace\" href=\"#\" role=\"button\">Modifier votre profil</a>
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
        
        $__internal_0312fd0000429cc17b3691b15f22d67690e239038126b3167839e07821d5143c->leave($__internal_0312fd0000429cc17b3691b15f22d67690e239038126b3167839e07821d5143c_prof);

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
        return array (  92 => 41,  84 => 36,  77 => 32,  71 => 29,  64 => 25,  40 => 5,  34 => 4,  11 => 1,);
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
/* 		<div class="img_profil"><img src="{{ asset('img/deer_small.png') }}"></div>*/
/* 		<a class="btn btn-primary btn-espace" href="#" role="button">Modifier votre profil</a>*/
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
