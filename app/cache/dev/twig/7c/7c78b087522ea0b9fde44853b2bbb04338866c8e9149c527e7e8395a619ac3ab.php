<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e02d928c5f11ebfa683508ba653b56aa08bdbe39e1b15531f829476b3b7a7cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40e436d4ddf476ae85627835a76a3667d86bcb5f0a88570b4fa297ac90366fb5 = $this->env->getExtension("native_profiler");
        $__internal_40e436d4ddf476ae85627835a76a3667d86bcb5f0a88570b4fa297ac90366fb5->enter($__internal_40e436d4ddf476ae85627835a76a3667d86bcb5f0a88570b4fa297ac90366fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e436d4ddf476ae85627835a76a3667d86bcb5f0a88570b4fa297ac90366fb5->leave($__internal_40e436d4ddf476ae85627835a76a3667d86bcb5f0a88570b4fa297ac90366fb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_492d8eac8732435cc197fa3fb2e92a8ea0baceb06f0305397767f59a9b386dcf = $this->env->getExtension("native_profiler");
        $__internal_492d8eac8732435cc197fa3fb2e92a8ea0baceb06f0305397767f59a9b386dcf->enter($__internal_492d8eac8732435cc197fa3fb2e92a8ea0baceb06f0305397767f59a9b386dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_492d8eac8732435cc197fa3fb2e92a8ea0baceb06f0305397767f59a9b386dcf->leave($__internal_492d8eac8732435cc197fa3fb2e92a8ea0baceb06f0305397767f59a9b386dcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7b2761ee279620aae199a6f62c8cefe15bc970cdf7f95ade14724d97a11e961 = $this->env->getExtension("native_profiler");
        $__internal_b7b2761ee279620aae199a6f62c8cefe15bc970cdf7f95ade14724d97a11e961->enter($__internal_b7b2761ee279620aae199a6f62c8cefe15bc970cdf7f95ade14724d97a11e961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b7b2761ee279620aae199a6f62c8cefe15bc970cdf7f95ade14724d97a11e961->leave($__internal_b7b2761ee279620aae199a6f62c8cefe15bc970cdf7f95ade14724d97a11e961_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5eb50c1182b2f16a47294f229846f208d70905dced276af00f2cf8971909da = $this->env->getExtension("native_profiler");
        $__internal_ff5eb50c1182b2f16a47294f229846f208d70905dced276af00f2cf8971909da->enter($__internal_ff5eb50c1182b2f16a47294f229846f208d70905dced276af00f2cf8971909da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff5eb50c1182b2f16a47294f229846f208d70905dced276af00f2cf8971909da->leave($__internal_ff5eb50c1182b2f16a47294f229846f208d70905dced276af00f2cf8971909da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
