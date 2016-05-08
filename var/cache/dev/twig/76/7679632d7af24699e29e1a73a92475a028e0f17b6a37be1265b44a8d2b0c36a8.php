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
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
            'esBar' => array($this, 'block_esBar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_993cb33f482319d15e193ccd25c95c00488bee8cd139948192380a067877bda0 = $this->env->getExtension("native_profiler");
        $__internal_993cb33f482319d15e193ccd25c95c00488bee8cd139948192380a067877bda0->enter($__internal_993cb33f482319d15e193ccd25c95c00488bee8cd139948192380a067877bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
        // line 55
        echo "

</body>
</html>";
        
        $__internal_993cb33f482319d15e193ccd25c95c00488bee8cd139948192380a067877bda0->leave($__internal_993cb33f482319d15e193ccd25c95c00488bee8cd139948192380a067877bda0_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_2af0ed46c7fdbcaf6bd02d381b47a574f27ba578a307ce2909d4a1f63c52ae22 = $this->env->getExtension("native_profiler");
        $__internal_2af0ed46c7fdbcaf6bd02d381b47a574f27ba578a307ce2909d4a1f63c52ae22->enter($__internal_2af0ed46c7fdbcaf6bd02d381b47a574f27ba578a307ce2909d4a1f63c52ae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "      
    ";
        
        $__internal_2af0ed46c7fdbcaf6bd02d381b47a574f27ba578a307ce2909d4a1f63c52ae22->leave($__internal_2af0ed46c7fdbcaf6bd02d381b47a574f27ba578a307ce2909d4a1f63c52ae22_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef8f6f5b3702d5fb692396ba6121bc2020e6b0c3ec42fea9e0e7514b3b15a0e6 = $this->env->getExtension("native_profiler");
        $__internal_ef8f6f5b3702d5fb692396ba6121bc2020e6b0c3ec42fea9e0e7514b3b15a0e6->enter($__internal_ef8f6f5b3702d5fb692396ba6121bc2020e6b0c3ec42fea9e0e7514b3b15a0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/theme.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_ef8f6f5b3702d5fb692396ba6121bc2020e6b0c3ec42fea9e0e7514b3b15a0e6->leave($__internal_ef8f6f5b3702d5fb692396ba6121bc2020e6b0c3ec42fea9e0e7514b3b15a0e6_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_474931f76bcfb4ac6221bc4fbb5c20fa33e288840ffdfea320e31020d9050685 = $this->env->getExtension("native_profiler");
        $__internal_474931f76bcfb4ac6221bc4fbb5c20fa33e288840ffdfea320e31020d9050685->enter($__internal_474931f76bcfb4ac6221bc4fbb5c20fa33e288840ffdfea320e31020d9050685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 37
        echo "    
    ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('bottom', $context, $blocks);
        // line 43
        echo "    </div>
  ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "
  ";
        // line 49
        $this->displayBlock('esBar', $context, $blocks);
        // line 52
        echo "  <div id=\"login-modal\" class=\"modal\" data-url=\"/login/ajax\"></div>
  <div id=\"modal\" class=\"modal\"></div>
";
        
        $__internal_474931f76bcfb4ac6221bc4fbb5c20fa33e288840ffdfea320e31020d9050685->leave($__internal_474931f76bcfb4ac6221bc4fbb5c20fa33e288840ffdfea320e31020d9050685_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_48db09543b4ed3ea88c58cf384d95c1bd9427b89c266e76a12992b75e12b2a2e = $this->env->getExtension("native_profiler");
        $__internal_48db09543b4ed3ea88c58cf384d95c1bd9427b89c266e76a12992b75e12b2a2e->enter($__internal_48db09543b4ed3ea88c58cf384d95c1bd9427b89c266e76a12992b75e12b2a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "    ";
        
        $__internal_48db09543b4ed3ea88c58cf384d95c1bd9427b89c266e76a12992b75e12b2a2e->leave($__internal_48db09543b4ed3ea88c58cf384d95c1bd9427b89c266e76a12992b75e12b2a2e_prof);

    }

    // line 30
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_19fa9a9e8d3d254d05f67e2b238ebe77afd8344018e3e736a7aeea7b75adda8e = $this->env->getExtension("native_profiler");
        $__internal_19fa9a9e8d3d254d05f67e2b238ebe77afd8344018e3e736a7aeea7b75adda8e->enter($__internal_19fa9a9e8d3d254d05f67e2b238ebe77afd8344018e3e736a7aeea7b75adda8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 31
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 32
        echo "      
      <div id=\"content-container\" class=\"container\">
        ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "      </div>
    ";
        
        $__internal_19fa9a9e8d3d254d05f67e2b238ebe77afd8344018e3e736a7aeea7b75adda8e->leave($__internal_19fa9a9e8d3d254d05f67e2b238ebe77afd8344018e3e736a7aeea7b75adda8e_prof);

    }

    // line 31
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_0499600f8e09b0ae70d365d098b65a21979aa1ff35a2865a01efcd43dafef509 = $this->env->getExtension("native_profiler");
        $__internal_0499600f8e09b0ae70d365d098b65a21979aa1ff35a2865a01efcd43dafef509->enter($__internal_0499600f8e09b0ae70d365d098b65a21979aa1ff35a2865a01efcd43dafef509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_0499600f8e09b0ae70d365d098b65a21979aa1ff35a2865a01efcd43dafef509->leave($__internal_0499600f8e09b0ae70d365d098b65a21979aa1ff35a2865a01efcd43dafef509_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_b736bc7150d556529e92d6f7f9b7e73d2cf648e81b29e9559e3adda07a8758fd = $this->env->getExtension("native_profiler");
        $__internal_b736bc7150d556529e92d6f7f9b7e73d2cf648e81b29e9559e3adda07a8758fd->enter($__internal_b736bc7150d556529e92d6f7f9b7e73d2cf648e81b29e9559e3adda07a8758fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b736bc7150d556529e92d6f7f9b7e73d2cf648e81b29e9559e3adda07a8758fd->leave($__internal_b736bc7150d556529e92d6f7f9b7e73d2cf648e81b29e9559e3adda07a8758fd_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_598f3829286f3fafc76179dcc5c94dd16d935076ed6e6bc53e86f6109907b263 = $this->env->getExtension("native_profiler");
        $__internal_598f3829286f3fafc76179dcc5c94dd16d935076ed6e6bc53e86f6109907b263->enter($__internal_598f3829286f3fafc76179dcc5c94dd16d935076ed6e6bc53e86f6109907b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "      ";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle::layout.html.twig", 39)->display($context);
        // line 40
        echo "    ";
        
        $__internal_598f3829286f3fafc76179dcc5c94dd16d935076ed6e6bc53e86f6109907b263->leave($__internal_598f3829286f3fafc76179dcc5c94dd16d935076ed6e6bc53e86f6109907b263_prof);

    }

    // line 42
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_f3149aeb085ce980e2eb59c54b1093df4b5dd5c6458de39bb04bcfb276a483bc = $this->env->getExtension("native_profiler");
        $__internal_f3149aeb085ce980e2eb59c54b1093df4b5dd5c6458de39bb04bcfb276a483bc->enter($__internal_f3149aeb085ce980e2eb59c54b1093df4b5dd5c6458de39bb04bcfb276a483bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_f3149aeb085ce980e2eb59c54b1093df4b5dd5c6458de39bb04bcfb276a483bc->leave($__internal_f3149aeb085ce980e2eb59c54b1093df4b5dd5c6458de39bb04bcfb276a483bc_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_171a19ec54c642aeed8ca1bfdc439416454d7b6ee1dae5a5b368c8d0a32d5323 = $this->env->getExtension("native_profiler");
        $__internal_171a19ec54c642aeed8ca1bfdc439416454d7b6ee1dae5a5b368c8d0a32d5323->enter($__internal_171a19ec54c642aeed8ca1bfdc439416454d7b6ee1dae5a5b368c8d0a32d5323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/jquery-2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_171a19ec54c642aeed8ca1bfdc439416454d7b6ee1dae5a5b368c8d0a32d5323->leave($__internal_171a19ec54c642aeed8ca1bfdc439416454d7b6ee1dae5a5b368c8d0a32d5323_prof);

    }

    // line 49
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_dd891e461c296db3f126097432b7551bf2c7028e2ffcc53363d533fa940955f9 = $this->env->getExtension("native_profiler");
        $__internal_dd891e461c296db3f126097432b7551bf2c7028e2ffcc53363d533fa940955f9->enter($__internal_dd891e461c296db3f126097432b7551bf2c7028e2ffcc53363d533fa940955f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        // line 50
        echo "    
  ";
        
        $__internal_dd891e461c296db3f126097432b7551bf2c7028e2ffcc53363d533fa940955f9->leave($__internal_dd891e461c296db3f126097432b7551bf2c7028e2ffcc53363d533fa940955f9_prof);

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
        return array (  269 => 50,  263 => 49,  254 => 46,  249 => 45,  243 => 44,  232 => 42,  225 => 40,  222 => 39,  216 => 38,  205 => 34,  194 => 31,  186 => 35,  184 => 34,  180 => 32,  177 => 31,  171 => 30,  164 => 28,  158 => 27,  149 => 52,  147 => 49,  144 => 48,  142 => 44,  139 => 43,  137 => 42,  134 => 41,  132 => 38,  129 => 37,  127 => 30,  124 => 29,  122 => 27,  117 => 24,  111 => 23,  102 => 18,  97 => 17,  91 => 16,  78 => 12,  68 => 55,  66 => 23,  57 => 21,  54 => 20,  52 => 16,  48 => 14,  46 => 12,  33 => 1,);
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
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/theme.css') }}">*/
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
/*       {% block top_content %}{% endblock %}*/
/*       */
/*       <div id="content-container" class="container">*/
/*         {% block content %}{% endblock %}*/
/*       </div>*/
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
