<?php

/* base.html.twig */
class __TwigTemplate_5cf0821b7817a4ef88d0adad86204207223302f0be2447da69bf17e58b9808c9 extends Twig_Template
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
        $__internal_cc3c3cc600d88a610362de3f9405d52950fa315031d3f92905b8c513ddf154f4 = $this->env->getExtension("native_profiler");
        $__internal_cc3c3cc600d88a610362de3f9405d52950fa315031d3f92905b8c513ddf154f4->enter($__internal_cc3c3cc600d88a610362de3f9405d52950fa315031d3f92905b8c513ddf154f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li><a href=\"";
        // line 40
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
        
        $__internal_cc3c3cc600d88a610362de3f9405d52950fa315031d3f92905b8c513ddf154f4->leave($__internal_cc3c3cc600d88a610362de3f9405d52950fa315031d3f92905b8c513ddf154f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_415f3bbe93f20322a0b75bc4e3f65ae822af562158a30e1ae09884813c09ab75 = $this->env->getExtension("native_profiler");
        $__internal_415f3bbe93f20322a0b75bc4e3f65ae822af562158a30e1ae09884813c09ab75->enter($__internal_415f3bbe93f20322a0b75bc4e3f65ae822af562158a30e1ae09884813c09ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_415f3bbe93f20322a0b75bc4e3f65ae822af562158a30e1ae09884813c09ab75->leave($__internal_415f3bbe93f20322a0b75bc4e3f65ae822af562158a30e1ae09884813c09ab75_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd7f166a104fbfb5ca475038aa0b1fdca6bf62641d34c163f7433eb571d95546 = $this->env->getExtension("native_profiler");
        $__internal_dd7f166a104fbfb5ca475038aa0b1fdca6bf62641d34c163f7433eb571d95546->enter($__internal_dd7f166a104fbfb5ca475038aa0b1fdca6bf62641d34c163f7433eb571d95546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd7f166a104fbfb5ca475038aa0b1fdca6bf62641d34c163f7433eb571d95546->leave($__internal_dd7f166a104fbfb5ca475038aa0b1fdca6bf62641d34c163f7433eb571d95546_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdee0b9414e4c814afb2977f6173f848b3957d9a4932402d0515f5225ea1903f = $this->env->getExtension("native_profiler");
        $__internal_cdee0b9414e4c814afb2977f6173f848b3957d9a4932402d0515f5225ea1903f->enter($__internal_cdee0b9414e4c814afb2977f6173f848b3957d9a4932402d0515f5225ea1903f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cdee0b9414e4c814afb2977f6173f848b3957d9a4932402d0515f5225ea1903f->leave($__internal_cdee0b9414e4c814afb2977f6173f848b3957d9a4932402d0515f5225ea1903f_prof);

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
        return array (  144 => 50,  133 => 49,  121 => 5,  104 => 51,  101 => 50,  99 => 49,  87 => 40,  69 => 25,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*       <div class="container">*/
/*         <p class="text-muted">Site développé par le G2 de la Wild Code School</p>*/
/*       </div>*/
/* </footer>*/
/*  <!-- FOOTER END -->       */
/*     </body>*/
/* </html>*/
/* */
