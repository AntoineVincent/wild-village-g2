<?php

/* base.html.twig */
class __TwigTemplate_8a3f00eb4e7c1c354dc7bdd20254c5c5f55c752d6fa19d981a2029b6935c0b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee4b18a2976834b5076208c6f3d59c1febdf1bccf1ea7b1aba00d16ed0a61565 = $this->env->getExtension("native_profiler");
        $__internal_ee4b18a2976834b5076208c6f3d59c1febdf1bccf1ea7b1aba00d16ed0a61565->enter($__internal_ee4b18a2976834b5076208c6f3d59c1febdf1bccf1ea7b1aba00d16ed0a61565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>      
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

 <!-- NAVBAR -->   
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"\"><img class=\"logotage\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logonavbar_small.png"), "html", null, true);
        echo "\"><b>WILD VILLAGE</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      
      
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("user_flux");
        echo "\">Flux</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("user_espace");
        echo "\">Mon espace</a></li>
            <li><a href=\"#\">Messagerie</a></li>
            <li><a href=\"#\">Mes paramètres</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" >Se déconnecter</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- END NAVBAR -->

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "
 <!-- FOOTER -->
 <footer class=\"footer\">
      <div class=\"col-md-4\">
        <p class=\"text-muted\">Site développé par les élèves de la Wild Code School</p>
      </div>
      <div class=\"col-md-8 social\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6 a\">
                <a href=\"https://www.facebook.com/wildcodeschool\" target=\"_blank\">
                  <img class=\"typemarge\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social/facebook.svg"), "html", null, true);
        echo "
                    \" alt=\"Facebook - Wild Code School\">
                </a>
                <a href=\"https://twitter.com/wildcodeschool\" target=\"_blank\">
                  <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social/twitter.svg"), "html", null, true);
        echo "\" alt=\"Twitter - Wild Code School\">
                </a>
                <a href=\"https://www.instagram.com/wildcodeschool/\" target=\"_blank\">
                  <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social/instagram.svg"), "html", null, true);
        echo "\" alt=\"Instagram - Wild Code School\">
                </a>
                <a href=\"https://fr.linkedin.com/edu/wild-code-school-192048\" target=\"_blank\">
                  <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social/linkedin.svg"), "html", null, true);
        echo "\" alt=\"Linkedin - Wild Code School\">
                </a>
                <a href=\"https://github.com/WildCodeSchool\" target=\"_blank\">
                  <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social/github.svg"), "html", null, true);
        echo "\" alt=\"Github - Wild Code School\">
                </a>
                <a href=\"https://www.youtube.com/channel/UCi99G_0QPx5sYsK8zdvQzfw\" target=\"_blank\">
                  <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/social/youtube.svg"), "html", null, true);
        echo "\" alt=\"Youtube - Wild Code School\">
                </a>
        </div>
        
      </div>
</footer>
 <!-- FOOTER END -->       
    </body>
</html>
";
        
        $__internal_ee4b18a2976834b5076208c6f3d59c1febdf1bccf1ea7b1aba00d16ed0a61565->leave($__internal_ee4b18a2976834b5076208c6f3d59c1febdf1bccf1ea7b1aba00d16ed0a61565_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab32edec3c3b020da3026bc6f871055e2a923c6e2def4b123911f9232f189e17 = $this->env->getExtension("native_profiler");
        $__internal_ab32edec3c3b020da3026bc6f871055e2a923c6e2def4b123911f9232f189e17->enter($__internal_ab32edec3c3b020da3026bc6f871055e2a923c6e2def4b123911f9232f189e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab32edec3c3b020da3026bc6f871055e2a923c6e2def4b123911f9232f189e17->leave($__internal_ab32edec3c3b020da3026bc6f871055e2a923c6e2def4b123911f9232f189e17_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_14707c00d7c050abd8a69cbcfa1380b7f589ca263d501dc4bee17b139679e6e8 = $this->env->getExtension("native_profiler");
        $__internal_14707c00d7c050abd8a69cbcfa1380b7f589ca263d501dc4bee17b139679e6e8->enter($__internal_14707c00d7c050abd8a69cbcfa1380b7f589ca263d501dc4bee17b139679e6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14707c00d7c050abd8a69cbcfa1380b7f589ca263d501dc4bee17b139679e6e8->leave($__internal_14707c00d7c050abd8a69cbcfa1380b7f589ca263d501dc4bee17b139679e6e8_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd472e745ac0011e77130069657b5aee3e80a78f55027c91b5d81f814d5c82b0 = $this->env->getExtension("native_profiler");
        $__internal_fd472e745ac0011e77130069657b5aee3e80a78f55027c91b5d81f814d5c82b0->enter($__internal_fd472e745ac0011e77130069657b5aee3e80a78f55027c91b5d81f814d5c82b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd472e745ac0011e77130069657b5aee3e80a78f55027c91b5d81f814d5c82b0->leave($__internal_fd472e745ac0011e77130069657b5aee3e80a78f55027c91b5d81f814d5c82b0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 51,  183 => 50,  171 => 5,  154 => 78,  148 => 75,  142 => 72,  136 => 69,  130 => 66,  123 => 62,  111 => 52,  108 => 51,  106 => 50,  94 => 41,  87 => 37,  80 => 33,  69 => 25,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>      */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*  <!-- NAVBAR -->   */
/* <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href=""><img class="logotage" src="{{ asset('img/logonavbar_small.png') }}"><b>WILD VILLAGE</b></a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       */
/*       */
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="{{ path('user_flux') }}">Flux</a></li>*/
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*             <li><a href="{{ path('user_espace') }}">Mon espace</a></li>*/
/*             <li><a href="#">Messagerie</a></li>*/
/*             <li><a href="#">Mes paramètres</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}" >Se déconnecter</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* <!-- END NAVBAR -->*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*  <!-- FOOTER -->*/
/*  <footer class="footer">*/
/*       <div class="col-md-4">*/
/*         <p class="text-muted">Site développé par les élèves de la Wild Code School</p>*/
/*       </div>*/
/*       <div class="col-md-8 social">*/
/*         <div class="col-md-3"></div>*/
/*         <div class="col-md-6 a">*/
/*                 <a href="https://www.facebook.com/wildcodeschool" target="_blank">*/
/*                   <img class="typemarge" src="{{ asset('img/social/facebook.svg') }}*/
/*                     " alt="Facebook - Wild Code School">*/
/*                 </a>*/
/*                 <a href="https://twitter.com/wildcodeschool" target="_blank">*/
/*                   <img src="{{ asset('img/social/twitter.svg') }}" alt="Twitter - Wild Code School">*/
/*                 </a>*/
/*                 <a href="https://www.instagram.com/wildcodeschool/" target="_blank">*/
/*                   <img src="{{ asset('img/social/instagram.svg') }}" alt="Instagram - Wild Code School">*/
/*                 </a>*/
/*                 <a href="https://fr.linkedin.com/edu/wild-code-school-192048" target="_blank">*/
/*                   <img src="{{ asset('img/social/linkedin.svg') }}" alt="Linkedin - Wild Code School">*/
/*                 </a>*/
/*                 <a href="https://github.com/WildCodeSchool" target="_blank">*/
/*                   <img src="{{ asset('img/social/github.svg') }}" alt="Github - Wild Code School">*/
/*                 </a>*/
/*                 <a href="https://www.youtube.com/channel/UCi99G_0QPx5sYsK8zdvQzfw" target="_blank">*/
/*                   <img src="{{ asset('img/social/youtube.svg') }}" alt="Youtube - Wild Code School">*/
/*                 </a>*/
/*         </div>*/
/*         */
/*       </div>*/
/* </footer>*/
/*  <!-- FOOTER END -->       */
/*     </body>*/
/* </html>*/
/* */
