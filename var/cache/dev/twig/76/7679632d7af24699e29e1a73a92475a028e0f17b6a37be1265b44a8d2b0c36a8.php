<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_9f355f08f6e7eb0f27a568d34e90b7a831b44bf6c483d435a807fc9296fa2fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
            'esBar' => array($this, 'block_esBar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d62d407bb2914500707cd3492d5b205fbd77b1a545f9477fc24069dd1476d6e = $this->env->getExtension("native_profiler");
        $__internal_8d62d407bb2914500707cd3492d5b205fbd77b1a545f9477fc24069dd1476d6e->enter($__internal_8d62d407bb2914500707cd3492d5b205fbd77b1a545f9477fc24069dd1476d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "  </title>

  ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body ";
        // line 21
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "

</body>
</html>";
        
        $__internal_8d62d407bb2914500707cd3492d5b205fbd77b1a545f9477fc24069dd1476d6e->leave($__internal_8d62d407bb2914500707cd3492d5b205fbd77b1a545f9477fc24069dd1476d6e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f27ca26e37a54dbae4090fe42751cf133d480747da6fab4c77d6395df91cf25 = $this->env->getExtension("native_profiler");
        $__internal_5f27ca26e37a54dbae4090fe42751cf133d480747da6fab4c77d6395df91cf25->enter($__internal_5f27ca26e37a54dbae4090fe42751cf133d480747da6fab4c77d6395df91cf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "      
    ";
        
        $__internal_5f27ca26e37a54dbae4090fe42751cf133d480747da6fab4c77d6395df91cf25->leave($__internal_5f27ca26e37a54dbae4090fe42751cf133d480747da6fab4c77d6395df91cf25_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb86e2794ba5f3a315148b059463fae619e0ba502953838832ff9dcad30f4fbd = $this->env->getExtension("native_profiler");
        $__internal_eb86e2794ba5f3a315148b059463fae619e0ba502953838832ff9dcad30f4fbd->enter($__internal_eb86e2794ba5f3a315148b059463fae619e0ba502953838832ff9dcad30f4fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/layout.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_eb86e2794ba5f3a315148b059463fae619e0ba502953838832ff9dcad30f4fbd->leave($__internal_eb86e2794ba5f3a315148b059463fae619e0ba502953838832ff9dcad30f4fbd_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_013313b8a47c48100aad0aa10861416472be630fab7bd2a4e7103013161b04f9 = $this->env->getExtension("native_profiler");
        $__internal_013313b8a47c48100aad0aa10861416472be630fab7bd2a4e7103013161b04f9->enter($__internal_013313b8a47c48100aad0aa10861416472be630fab7bd2a4e7103013161b04f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
  <div class=\"es-wrap\">

    ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "    
    ";
        // line 30
        $this->displayBlock('full_content', $context, $blocks);
        // line 33
        echo "    
    ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('bottom', $context, $blocks);
        // line 39
        echo "    </div>
  ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('esBar', $context, $blocks);
        // line 48
        echo "  <div id=\"login-modal\" class=\"modal\" data-url=\"/login/ajax\"></div>
  <div id=\"modal\" class=\"modal\"></div>
";
        
        $__internal_013313b8a47c48100aad0aa10861416472be630fab7bd2a4e7103013161b04f9->leave($__internal_013313b8a47c48100aad0aa10861416472be630fab7bd2a4e7103013161b04f9_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_7a295c8fec1c7517fcd12dda68fc3ed439da0216b7c4104dd9fd9ec3a77091e0 = $this->env->getExtension("native_profiler");
        $__internal_7a295c8fec1c7517fcd12dda68fc3ed439da0216b7c4104dd9fd9ec3a77091e0->enter($__internal_7a295c8fec1c7517fcd12dda68fc3ed439da0216b7c4104dd9fd9ec3a77091e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "    ";
        
        $__internal_7a295c8fec1c7517fcd12dda68fc3ed439da0216b7c4104dd9fd9ec3a77091e0->leave($__internal_7a295c8fec1c7517fcd12dda68fc3ed439da0216b7c4104dd9fd9ec3a77091e0_prof);

    }

    // line 30
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_c78ede3ede8cf96ec175f12889c03fc86b01d2458da6ae65c0f16231aae3f9bb = $this->env->getExtension("native_profiler");
        $__internal_c78ede3ede8cf96ec175f12889c03fc86b01d2458da6ae65c0f16231aae3f9bb->enter($__internal_c78ede3ede8cf96ec175f12889c03fc86b01d2458da6ae65c0f16231aae3f9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 31
        echo "      
    ";
        
        $__internal_c78ede3ede8cf96ec175f12889c03fc86b01d2458da6ae65c0f16231aae3f9bb->leave($__internal_c78ede3ede8cf96ec175f12889c03fc86b01d2458da6ae65c0f16231aae3f9bb_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e9585aafe5f4078b32147fcdfbcda97e0137d1915ca1c0ef3d7e1a43aa0decc1 = $this->env->getExtension("native_profiler");
        $__internal_e9585aafe5f4078b32147fcdfbcda97e0137d1915ca1c0ef3d7e1a43aa0decc1->enter($__internal_e9585aafe5f4078b32147fcdfbcda97e0137d1915ca1c0ef3d7e1a43aa0decc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "      ";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle::layout.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        
        $__internal_e9585aafe5f4078b32147fcdfbcda97e0137d1915ca1c0ef3d7e1a43aa0decc1->leave($__internal_e9585aafe5f4078b32147fcdfbcda97e0137d1915ca1c0ef3d7e1a43aa0decc1_prof);

    }

    // line 38
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_f6e2832a2d88132f776c780de796838d1d1fb47e043f69610747960799c8b548 = $this->env->getExtension("native_profiler");
        $__internal_f6e2832a2d88132f776c780de796838d1d1fb47e043f69610747960799c8b548->enter($__internal_f6e2832a2d88132f776c780de796838d1d1fb47e043f69610747960799c8b548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_f6e2832a2d88132f776c780de796838d1d1fb47e043f69610747960799c8b548->leave($__internal_f6e2832a2d88132f776c780de796838d1d1fb47e043f69610747960799c8b548_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a10a4a218bab225e1ffbc96d1e8e885e2dbe4d2bf911d2ddfc3d4ee0d2461f1 = $this->env->getExtension("native_profiler");
        $__internal_7a10a4a218bab225e1ffbc96d1e8e885e2dbe4d2bf911d2ddfc3d4ee0d2461f1->enter($__internal_7a10a4a218bab225e1ffbc96d1e8e885e2dbe4d2bf911d2ddfc3d4ee0d2461f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/jquery-2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_7a10a4a218bab225e1ffbc96d1e8e885e2dbe4d2bf911d2ddfc3d4ee0d2461f1->leave($__internal_7a10a4a218bab225e1ffbc96d1e8e885e2dbe4d2bf911d2ddfc3d4ee0d2461f1_prof);

    }

    // line 45
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_d14bc655c2d7f0a42121bc068fbc8eb540d9059f94a9aa3a95cf25c16440aba6 = $this->env->getExtension("native_profiler");
        $__internal_d14bc655c2d7f0a42121bc068fbc8eb540d9059f94a9aa3a95cf25c16440aba6->enter($__internal_d14bc655c2d7f0a42121bc068fbc8eb540d9059f94a9aa3a95cf25c16440aba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        // line 46
        echo "    
  ";
        
        $__internal_d14bc655c2d7f0a42121bc068fbc8eb540d9059f94a9aa3a95cf25c16440aba6->leave($__internal_d14bc655c2d7f0a42121bc068fbc8eb540d9059f94a9aa3a95cf25c16440aba6_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 46,  230 => 45,  221 => 42,  216 => 41,  210 => 40,  199 => 38,  192 => 36,  189 => 35,  183 => 34,  175 => 31,  169 => 30,  162 => 28,  156 => 27,  147 => 48,  145 => 45,  142 => 44,  140 => 40,  137 => 39,  135 => 38,  132 => 37,  130 => 34,  127 => 33,  125 => 30,  122 => 29,  120 => 27,  115 => 24,  109 => 23,  100 => 18,  95 => 17,  89 => 16,  76 => 12,  66 => 51,  64 => 23,  55 => 21,  52 => 20,  50 => 16,  46 => 14,  44 => 12,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html> <!--<![endif]-->*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">*/
/*   <meta name="renderer" content="webkit">*/
/*   <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/*   <title>*/
/*     {% block title %}      */
/*     {% endblock %}*/
/*   </title>*/
/* */
/*   {% block stylesheets %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/bootstrap.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/layout.css') }}">*/
/*   {% endblock %}*/
/* </head>*/
/* <body {% if bodyClass|default('') %}class="{{ bodyClass }}"{% endif %}>*/
/* */
/* {% block body %}*/
/* */
/*   <div class="es-wrap">*/
/* */
/*     {% block header %}*/
/*     {% endblock %}*/
/*     */
/*     {% block full_content %}*/
/*       */
/*     {% endblock %}*/
/*     */
/*     {% block footer %}*/
/*       {% include 'BlogBundle:Default:footer.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block bottom %}{% endblock %}*/
/*     </div>*/
/*   {% block javascripts %}*/
/*     <script src="{{ asset('bundles/blog/js/jquery-2.1.4.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/blog/js/bootstrap.js') }}"></script>*/
/*   {% endblock %}*/
/* */
/*   {% block esBar %}*/
/*     */
/*   {% endblock %}*/
/*   <div id="login-modal" class="modal" data-url="/login/ajax"></div>*/
/*   <div id="modal" class="modal"></div>*/
/* {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
