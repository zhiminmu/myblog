<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_19ad99f24df008d759964ad65b9223de842b4318686f9ac2b564d6988145c123 extends Twig_Template
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
        $__internal_5492b3d4eec47b7c4e3657e19c3b37e9f1a11e06e0bacb1b800c64c6af00e136 = $this->env->getExtension("native_profiler");
        $__internal_5492b3d4eec47b7c4e3657e19c3b37e9f1a11e06e0bacb1b800c64c6af00e136->enter($__internal_5492b3d4eec47b7c4e3657e19c3b37e9f1a11e06e0bacb1b800c64c6af00e136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5492b3d4eec47b7c4e3657e19c3b37e9f1a11e06e0bacb1b800c64c6af00e136->leave($__internal_5492b3d4eec47b7c4e3657e19c3b37e9f1a11e06e0bacb1b800c64c6af00e136_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c452e025ccad80cf8b23130058ab16f98876fcc9779c6129f42973957e21b4d = $this->env->getExtension("native_profiler");
        $__internal_0c452e025ccad80cf8b23130058ab16f98876fcc9779c6129f42973957e21b4d->enter($__internal_0c452e025ccad80cf8b23130058ab16f98876fcc9779c6129f42973957e21b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c452e025ccad80cf8b23130058ab16f98876fcc9779c6129f42973957e21b4d->leave($__internal_0c452e025ccad80cf8b23130058ab16f98876fcc9779c6129f42973957e21b4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d49f8740ddf93a45c68aa06fc4c96381f23424b8637d5b5716a5d73bff32e20 = $this->env->getExtension("native_profiler");
        $__internal_5d49f8740ddf93a45c68aa06fc4c96381f23424b8637d5b5716a5d73bff32e20->enter($__internal_5d49f8740ddf93a45c68aa06fc4c96381f23424b8637d5b5716a5d73bff32e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d49f8740ddf93a45c68aa06fc4c96381f23424b8637d5b5716a5d73bff32e20->leave($__internal_5d49f8740ddf93a45c68aa06fc4c96381f23424b8637d5b5716a5d73bff32e20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ea0a5aecc76961e9ecb336d9de5174c9544774c7eacbd6ac795e3eab425d591 = $this->env->getExtension("native_profiler");
        $__internal_8ea0a5aecc76961e9ecb336d9de5174c9544774c7eacbd6ac795e3eab425d591->enter($__internal_8ea0a5aecc76961e9ecb336d9de5174c9544774c7eacbd6ac795e3eab425d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8ea0a5aecc76961e9ecb336d9de5174c9544774c7eacbd6ac795e3eab425d591->leave($__internal_8ea0a5aecc76961e9ecb336d9de5174c9544774c7eacbd6ac795e3eab425d591_prof);

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
