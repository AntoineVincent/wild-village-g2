<?php

/* wildVillageBundle:Default:index.html.twig */
class __TwigTemplate_07e47de25f178123c3770d3ab44639f28f7e79a69213e453d2557b3970a3fe45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 logoo\">
                <p class=\"alpha\"> <strong>Le réseau des codeurs sans chaussures</strong></p>
                <p><strong></strong></p>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6 backico\">
                <div class=\"col-md-6 lineright\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\" >
                        <div class=\"buttonr\">
                            <p class=\"buttonp\">Inscrivez-vous</p>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-6 lineleft\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\" >
                        <div class=\"buttonr\">
                            <p class=\"buttonp\">Connectez-vous</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-md-3\"></div>
        </div>
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue sur le Wild-Village";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "wildVillageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  86 => 5,  81 => 40,  79 => 39,  67 => 30,  57 => 23,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenue sur le Wild-Village{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="row">*/
/*             <div class="col-md-4"></div>*/
/*             <div class="col-md-4 logoo">*/
/*                 <p class="alpha"> <strong>Le réseau des codeurs sans chaussures</strong></p>*/
/*                 <p><strong></strong></p>*/
/*             </div>*/
/*             <div class="col-md-4"></div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3"></div>*/
/*             <div class="col-md-6 backico">*/
/*                 <div class="col-md-6 lineright">*/
/*                     <a href="{{ path('user_register') }}" >*/
/*                         <div class="buttonr">*/
/*                             <p class="buttonp">Inscrivez-vous</p>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-md-6 lineleft">*/
/*                     <a href="{{ path('user_login') }}" >*/
/*                         <div class="buttonr">*/
/*                             <p class="buttonp">Connectez-vous</p>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-3"></div>*/
/*         </div>*/
/*         {% block body %}{% endblock %}*/
/*     </body>*/
/* </html>*/
