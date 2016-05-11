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
        $__internal_137838668e8c68f22221c231753b9533ab776388df96a8d3c1f3db539fb3dd1b = $this->env->getExtension("native_profiler");
        $__internal_137838668e8c68f22221c231753b9533ab776388df96a8d3c1f3db539fb3dd1b->enter($__internal_137838668e8c68f22221c231753b9533ab776388df96a8d3c1f3db539fb3dd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
        
        $__internal_137838668e8c68f22221c231753b9533ab776388df96a8d3c1f3db539fb3dd1b->leave($__internal_137838668e8c68f22221c231753b9533ab776388df96a8d3c1f3db539fb3dd1b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f6a026ab02da9e172013b3206a038bcda343bdabd1badd1c88f64de841722bd = $this->env->getExtension("native_profiler");
        $__internal_3f6a026ab02da9e172013b3206a038bcda343bdabd1badd1c88f64de841722bd->enter($__internal_3f6a026ab02da9e172013b3206a038bcda343bdabd1badd1c88f64de841722bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "      
    ";
        
        $__internal_3f6a026ab02da9e172013b3206a038bcda343bdabd1badd1c88f64de841722bd->leave($__internal_3f6a026ab02da9e172013b3206a038bcda343bdabd1badd1c88f64de841722bd_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6151648fc82a510dc55f0530da2ada748dd952418c66da94754ea0135d6a4e0 = $this->env->getExtension("native_profiler");
        $__internal_b6151648fc82a510dc55f0530da2ada748dd952418c66da94754ea0135d6a4e0->enter($__internal_b6151648fc82a510dc55f0530da2ada748dd952418c66da94754ea0135d6a4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "   <!--  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/bootstrap.css"), "html", null, true);
        echo "\"> -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/layout.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_b6151648fc82a510dc55f0530da2ada748dd952418c66da94754ea0135d6a4e0->leave($__internal_b6151648fc82a510dc55f0530da2ada748dd952418c66da94754ea0135d6a4e0_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a814dc9e209577cc978ed9907cb56d28573c49c9b23371723e6266fda81aabc = $this->env->getExtension("native_profiler");
        $__internal_9a814dc9e209577cc978ed9907cb56d28573c49c9b23371723e6266fda81aabc->enter($__internal_9a814dc9e209577cc978ed9907cb56d28573c49c9b23371723e6266fda81aabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
  <div class=\"es-wrap\">

    <!-- ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo " -->
    
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
        
        $__internal_9a814dc9e209577cc978ed9907cb56d28573c49c9b23371723e6266fda81aabc->leave($__internal_9a814dc9e209577cc978ed9907cb56d28573c49c9b23371723e6266fda81aabc_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_b2187d3ea56a1382587092ff2c18908bec2b0cae9799e25c598fb8213c11eb44 = $this->env->getExtension("native_profiler");
        $__internal_b2187d3ea56a1382587092ff2c18908bec2b0cae9799e25c598fb8213c11eb44->enter($__internal_b2187d3ea56a1382587092ff2c18908bec2b0cae9799e25c598fb8213c11eb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "    ";
        
        $__internal_b2187d3ea56a1382587092ff2c18908bec2b0cae9799e25c598fb8213c11eb44->leave($__internal_b2187d3ea56a1382587092ff2c18908bec2b0cae9799e25c598fb8213c11eb44_prof);

    }

    // line 30
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_eb07330c47aa5cb70e862be79ec98fb58bb675ce936b4610e46b7ae3e2da00aa = $this->env->getExtension("native_profiler");
        $__internal_eb07330c47aa5cb70e862be79ec98fb58bb675ce936b4610e46b7ae3e2da00aa->enter($__internal_eb07330c47aa5cb70e862be79ec98fb58bb675ce936b4610e46b7ae3e2da00aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 31
        echo "      
    ";
        
        $__internal_eb07330c47aa5cb70e862be79ec98fb58bb675ce936b4610e46b7ae3e2da00aa->leave($__internal_eb07330c47aa5cb70e862be79ec98fb58bb675ce936b4610e46b7ae3e2da00aa_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_327d82fb4eb9a7eb6acb03d90aedfbe0312ecc7a89c5d7cbf2c5829f1bc17ff4 = $this->env->getExtension("native_profiler");
        $__internal_327d82fb4eb9a7eb6acb03d90aedfbe0312ecc7a89c5d7cbf2c5829f1bc17ff4->enter($__internal_327d82fb4eb9a7eb6acb03d90aedfbe0312ecc7a89c5d7cbf2c5829f1bc17ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "      ";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle::layout.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        
        $__internal_327d82fb4eb9a7eb6acb03d90aedfbe0312ecc7a89c5d7cbf2c5829f1bc17ff4->leave($__internal_327d82fb4eb9a7eb6acb03d90aedfbe0312ecc7a89c5d7cbf2c5829f1bc17ff4_prof);

    }

    // line 38
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_e178ac073e5339271b823b5b1aa771f8c1aa1802f2ddd0c585fa9143a450ea8d = $this->env->getExtension("native_profiler");
        $__internal_e178ac073e5339271b823b5b1aa771f8c1aa1802f2ddd0c585fa9143a450ea8d->enter($__internal_e178ac073e5339271b823b5b1aa771f8c1aa1802f2ddd0c585fa9143a450ea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_e178ac073e5339271b823b5b1aa771f8c1aa1802f2ddd0c585fa9143a450ea8d->leave($__internal_e178ac073e5339271b823b5b1aa771f8c1aa1802f2ddd0c585fa9143a450ea8d_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b99a0fd9b84a0b582368c01c233a525a1d2d43dcfac61518901e72f237ceceb1 = $this->env->getExtension("native_profiler");
        $__internal_b99a0fd9b84a0b582368c01c233a525a1d2d43dcfac61518901e72f237ceceb1->enter($__internal_b99a0fd9b84a0b582368c01c233a525a1d2d43dcfac61518901e72f237ceceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/jquery-2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_b99a0fd9b84a0b582368c01c233a525a1d2d43dcfac61518901e72f237ceceb1->leave($__internal_b99a0fd9b84a0b582368c01c233a525a1d2d43dcfac61518901e72f237ceceb1_prof);

    }

    // line 45
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_56ff77ef455f0ecbd999b218f3ee711098737d3864614c56eb3bb9e411154f34 = $this->env->getExtension("native_profiler");
        $__internal_56ff77ef455f0ecbd999b218f3ee711098737d3864614c56eb3bb9e411154f34->enter($__internal_56ff77ef455f0ecbd999b218f3ee711098737d3864614c56eb3bb9e411154f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        // line 46
        echo "    
  ";
        
        $__internal_56ff77ef455f0ecbd999b218f3ee711098737d3864614c56eb3bb9e411154f34->leave($__internal_56ff77ef455f0ecbd999b218f3ee711098737d3864614c56eb3bb9e411154f34_prof);

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
        return array (  237 => 46,  231 => 45,  222 => 42,  217 => 41,  211 => 40,  200 => 38,  193 => 36,  190 => 35,  184 => 34,  176 => 31,  170 => 30,  163 => 28,  157 => 27,  148 => 48,  146 => 45,  143 => 44,  141 => 40,  138 => 39,  136 => 38,  133 => 37,  131 => 34,  128 => 33,  126 => 30,  122 => 28,  120 => 27,  115 => 24,  109 => 23,  100 => 18,  95 => 17,  89 => 16,  76 => 12,  66 => 51,  64 => 23,  55 => 21,  52 => 20,  50 => 16,  46 => 14,  44 => 12,  31 => 1,);
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
/*    <!--  <link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/bootstrap.css') }}"> -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/layout.css') }}">*/
/*   {% endblock %}*/
/* </head>*/
/* <body {% if bodyClass|default('') %}class="{{ bodyClass }}"{% endif %}>*/
/* */
/* {% block body %}*/
/* */
/*   <div class="es-wrap">*/
/* */
/*     <!-- {% block header %}*/
/*     {% endblock %} -->*/
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
