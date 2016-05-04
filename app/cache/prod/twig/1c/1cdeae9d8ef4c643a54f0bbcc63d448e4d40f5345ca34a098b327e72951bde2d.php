<?php

/* base.html.twig */
class __TwigTemplate_caf71e4696b60b099623be87aee7e92048fe258da458bcf45e39dc6885d898d1 extends Twig_Template
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
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Mon espace</a></li>
            <li><a href=\"#\">Messagerie</a></li>
            <li><a href=\"#\">Mes paramètres</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Se déconnecter</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- END NAVBAR -->

        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
 <!-- FOOTER -->
 <footer class=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted\">Site développé par le G2 de la Wild Code School</p>
      </div>
</footer>
 <!-- FOOTER END -->       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  123 => 50,  118 => 49,  112 => 5,  98 => 51,  95 => 50,  93 => 49,  66 => 25,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*             <li><a href="#">Mon espace</a></li>*/
/*             <li><a href="#">Messagerie</a></li>*/
/*             <li><a href="#">Mes paramètres</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#">Se déconnecter</a></li>*/
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
/*       <div class="container">*/
/*         <p class="text-muted">Site développé par le G2 de la Wild Code School</p>*/
/*       </div>*/
/* </footer>*/
/*  <!-- FOOTER END -->       */
/*     </body>*/
/* </html>*/
/* */
