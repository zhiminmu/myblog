<?php

/* base.html.twig */
class __TwigTemplate_5ed9429f86e34b0e0ca85b150cd264ae94484bd9ddcaa8cc7ca93514f62f6ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c87f442413a0dda511c6928ce2fb1f55f5680781a1ae61c6ab527ddb2f7c7475 = $this->env->getExtension("native_profiler");
        $__internal_c87f442413a0dda511c6928ce2fb1f55f5680781a1ae61c6ab527ddb2f7c7475->enter($__internal_c87f442413a0dda511c6928ce2fb1f55f5680781a1ae61c6ab527ddb2f7c7475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c87f442413a0dda511c6928ce2fb1f55f5680781a1ae61c6ab527ddb2f7c7475->leave($__internal_c87f442413a0dda511c6928ce2fb1f55f5680781a1ae61c6ab527ddb2f7c7475_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e9395b36f3a36f7141a944433e7983bb81943b658bd9b02062a46e803634567 = $this->env->getExtension("native_profiler");
        $__internal_7e9395b36f3a36f7141a944433e7983bb81943b658bd9b02062a46e803634567->enter($__internal_7e9395b36f3a36f7141a944433e7983bb81943b658bd9b02062a46e803634567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e9395b36f3a36f7141a944433e7983bb81943b658bd9b02062a46e803634567->leave($__internal_7e9395b36f3a36f7141a944433e7983bb81943b658bd9b02062a46e803634567_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef6f7fe0c4d8f0febcbcb6dcacbbb26a622d759be152bdfd6c19f396a193324b = $this->env->getExtension("native_profiler");
        $__internal_ef6f7fe0c4d8f0febcbcb6dcacbbb26a622d759be152bdfd6c19f396a193324b->enter($__internal_ef6f7fe0c4d8f0febcbcb6dcacbbb26a622d759be152bdfd6c19f396a193324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ef6f7fe0c4d8f0febcbcb6dcacbbb26a622d759be152bdfd6c19f396a193324b->leave($__internal_ef6f7fe0c4d8f0febcbcb6dcacbbb26a622d759be152bdfd6c19f396a193324b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5d0d3dbf87ac8233b4580b8f8bd3a9c62fbc92eed462347d31064274c64fd5 = $this->env->getExtension("native_profiler");
        $__internal_7c5d0d3dbf87ac8233b4580b8f8bd3a9c62fbc92eed462347d31064274c64fd5->enter($__internal_7c5d0d3dbf87ac8233b4580b8f8bd3a9c62fbc92eed462347d31064274c64fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c5d0d3dbf87ac8233b4580b8f8bd3a9c62fbc92eed462347d31064274c64fd5->leave($__internal_7c5d0d3dbf87ac8233b4580b8f8bd3a9c62fbc92eed462347d31064274c64fd5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74faebb0aca064f518b17a986d94a3fd20de31d584a80dc6692f3ee9ec1d6e67 = $this->env->getExtension("native_profiler");
        $__internal_74faebb0aca064f518b17a986d94a3fd20de31d584a80dc6692f3ee9ec1d6e67->enter($__internal_74faebb0aca064f518b17a986d94a3fd20de31d584a80dc6692f3ee9ec1d6e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_74faebb0aca064f518b17a986d94a3fd20de31d584a80dc6692f3ee9ec1d6e67->leave($__internal_74faebb0aca064f518b17a986d94a3fd20de31d584a80dc6692f3ee9ec1d6e67_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
