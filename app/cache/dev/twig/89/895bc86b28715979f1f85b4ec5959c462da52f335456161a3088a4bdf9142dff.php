<?php

/* wildVillageBundle:Default:index.html.twig */
class __TwigTemplate_60e13681035f006fde22d239221cb4755b8e1f63287c73da8e547732bccdc8a3 extends Twig_Template
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
        $__internal_34e2f469316102053da1e5dcc49a1631b8616ad8a3b2156becdfb58a42728e65 = $this->env->getExtension("native_profiler");
        $__internal_34e2f469316102053da1e5dcc49a1631b8616ad8a3b2156becdfb58a42728e65->enter($__internal_34e2f469316102053da1e5dcc49a1631b8616ad8a3b2156becdfb58a42728e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wildVillageBundle:Default:index.html.twig"));

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
        
        $__internal_34e2f469316102053da1e5dcc49a1631b8616ad8a3b2156becdfb58a42728e65->leave($__internal_34e2f469316102053da1e5dcc49a1631b8616ad8a3b2156becdfb58a42728e65_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c309c2706ce6e6f8f6dc093722ff74a894d574e930c25b5fc9d254f99f883832 = $this->env->getExtension("native_profiler");
        $__internal_c309c2706ce6e6f8f6dc093722ff74a894d574e930c25b5fc9d254f99f883832->enter($__internal_c309c2706ce6e6f8f6dc093722ff74a894d574e930c25b5fc9d254f99f883832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur le Wild-Village";
        
        $__internal_c309c2706ce6e6f8f6dc093722ff74a894d574e930c25b5fc9d254f99f883832->leave($__internal_c309c2706ce6e6f8f6dc093722ff74a894d574e930c25b5fc9d254f99f883832_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ab40b25baf6d31fb1706abd7b9cdee1d82051bc7c865ab7c662f63009c917d = $this->env->getExtension("native_profiler");
        $__internal_99ab40b25baf6d31fb1706abd7b9cdee1d82051bc7c865ab7c662f63009c917d->enter($__internal_99ab40b25baf6d31fb1706abd7b9cdee1d82051bc7c865ab7c662f63009c917d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99ab40b25baf6d31fb1706abd7b9cdee1d82051bc7c865ab7c662f63009c917d->leave($__internal_99ab40b25baf6d31fb1706abd7b9cdee1d82051bc7c865ab7c662f63009c917d_prof);

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
        return array (  104 => 39,  92 => 5,  84 => 40,  82 => 39,  70 => 30,  60 => 23,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
