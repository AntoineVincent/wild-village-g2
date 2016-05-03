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
        $__internal_b8abad5797230080f38450795e141258359295fa3493dc0a7698f3874ef34611 = $this->env->getExtension("native_profiler");
        $__internal_b8abad5797230080f38450795e141258359295fa3493dc0a7698f3874ef34611->enter($__internal_b8abad5797230080f38450795e141258359295fa3493dc0a7698f3874ef34611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b8abad5797230080f38450795e141258359295fa3493dc0a7698f3874ef34611->leave($__internal_b8abad5797230080f38450795e141258359295fa3493dc0a7698f3874ef34611_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6803b61a7e9163026d6adfb9b6674e3557dbf2e6f0612792e24a79c2e1b20b4f = $this->env->getExtension("native_profiler");
        $__internal_6803b61a7e9163026d6adfb9b6674e3557dbf2e6f0612792e24a79c2e1b20b4f->enter($__internal_6803b61a7e9163026d6adfb9b6674e3557dbf2e6f0612792e24a79c2e1b20b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6803b61a7e9163026d6adfb9b6674e3557dbf2e6f0612792e24a79c2e1b20b4f->leave($__internal_6803b61a7e9163026d6adfb9b6674e3557dbf2e6f0612792e24a79c2e1b20b4f_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_d12c5ab1b59308cda5df9c8574163fdeb5d24b633a65aa013a1b16e8c2e49fec = $this->env->getExtension("native_profiler");
        $__internal_d12c5ab1b59308cda5df9c8574163fdeb5d24b633a65aa013a1b16e8c2e49fec->enter($__internal_d12c5ab1b59308cda5df9c8574163fdeb5d24b633a65aa013a1b16e8c2e49fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d12c5ab1b59308cda5df9c8574163fdeb5d24b633a65aa013a1b16e8c2e49fec->leave($__internal_d12c5ab1b59308cda5df9c8574163fdeb5d24b633a65aa013a1b16e8c2e49fec_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86bf4ffc8e687487ce5838c4d8b8a7e5a20748dad2233d7b3258e524082068cc = $this->env->getExtension("native_profiler");
        $__internal_86bf4ffc8e687487ce5838c4d8b8a7e5a20748dad2233d7b3258e524082068cc->enter($__internal_86bf4ffc8e687487ce5838c4d8b8a7e5a20748dad2233d7b3258e524082068cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86bf4ffc8e687487ce5838c4d8b8a7e5a20748dad2233d7b3258e524082068cc->leave($__internal_86bf4ffc8e687487ce5838c4d8b8a7e5a20748dad2233d7b3258e524082068cc_prof);

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
        return array (  141 => 50,  130 => 49,  118 => 5,  101 => 51,  98 => 50,  96 => 49,  69 => 25,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
