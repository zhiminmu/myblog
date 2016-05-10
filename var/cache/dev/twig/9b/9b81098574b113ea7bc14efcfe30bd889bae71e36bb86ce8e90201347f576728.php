<?php

/* BlogBundle:Register:register.html.twig */
class __TwigTemplate_6dfccb624d020edba7149554c1cd74e44915538b9032b0a9d8ec172dec9dd988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Register:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_272abc35f7210f52df0919e77ee478fd6d3e5e7062eab0f7f1f9e9ccf574de32 = $this->env->getExtension("native_profiler");
        $__internal_272abc35f7210f52df0919e77ee478fd6d3e5e7062eab0f7f1f9e9ccf574de32->enter($__internal_272abc35f7210f52df0919e77ee478fd6d3e5e7062eab0f7f1f9e9ccf574de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_272abc35f7210f52df0919e77ee478fd6d3e5e7062eab0f7f1f9e9ccf574de32->leave($__internal_272abc35f7210f52df0919e77ee478fd6d3e5e7062eab0f7f1f9e9ccf574de32_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c3153837a8e5d2ce544ec0454cfe412e69342578db503206c7bd8e2fbfbd2a3 = $this->env->getExtension("native_profiler");
        $__internal_8c3153837a8e5d2ce544ec0454cfe412e69342578db503206c7bd8e2fbfbd2a3->enter($__internal_8c3153837a8e5d2ce544ec0454cfe412e69342578db503206c7bd8e2fbfbd2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "register";
        
        $__internal_8c3153837a8e5d2ce544ec0454cfe412e69342578db503206c7bd8e2fbfbd2a3->leave($__internal_8c3153837a8e5d2ce544ec0454cfe412e69342578db503206c7bd8e2fbfbd2a3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a987d96a299fceeba883bdc36b870df7f91c2533346b54aae18dfcaaac179f8 = $this->env->getExtension("native_profiler");
        $__internal_5a987d96a299fceeba883bdc36b870df7f91c2533346b54aae18dfcaaac179f8->enter($__internal_5a987d96a299fceeba883bdc36b870df7f91c2533346b54aae18dfcaaac179f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/register.css"), "html", null, true);
        echo "\">
";
        
        $__internal_5a987d96a299fceeba883bdc36b870df7f91c2533346b54aae18dfcaaac179f8->leave($__internal_5a987d96a299fceeba883bdc36b870df7f91c2533346b54aae18dfcaaac179f8_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_b73697fe567600f9e25dc80254bc0056a985a229bfa246454cbe900dad6bd162 = $this->env->getExtension("native_profiler");
        $__internal_b73697fe567600f9e25dc80254bc0056a985a229bfa246454cbe900dad6bd162->enter($__internal_b73697fe567600f9e25dc80254bc0056a985a229bfa246454cbe900dad6bd162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "\t<center><h1>";
        echo "用户注册";
        echo "</h1></center>
";
        
        $__internal_b73697fe567600f9e25dc80254bc0056a985a229bfa246454cbe900dad6bd162->leave($__internal_b73697fe567600f9e25dc80254bc0056a985a229bfa246454cbe900dad6bd162_prof);

    }

    // line 12
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_770df485100320ab1a98f3f64acabeba0eacb878d565e5c9b8096eb914739cf8 = $this->env->getExtension("native_profiler");
        $__internal_770df485100320ab1a98f3f64acabeba0eacb878d565e5c9b8096eb914739cf8->enter($__internal_770df485100320ab1a98f3f64acabeba0eacb878d565e5c9b8096eb914739cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 13
        echo "\t<div class=\"container\">
\t\t<form class=\"register\" method=\"post\" >
\t\t\t<div class=\"form-group row\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input class=\"col-md-4 col-md-offset-4\" name=\"username\" type=\"text\" placeholder=\"username/email/cellphone\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input class=\"col-md-4 col-md-offset-4\" name=\"password\" type=\"password\" placeholder=\"password\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input class=\"col-md-4 col-md-offset-4\" name=\"cfmpsw\" type=\"password\" placeholder=\"repeat password\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input class=\"col-md-4 col-md-offset-4\" name=\"cfmpsw\" type=\"email\" placeholder=\"email address\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<div class=\"form-control col-md-offset-4 col-md-4\">
\t\t\t\t\t<input class=\"agreement\"  type=\"checkbox\" />我已经阅读并同意<a target=\"_black\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("blog_register_agreement");
        echo "\">《用户注册协议》</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form_group row\">
\t\t\t\t<div class=\"form-control col-md-offset-5\">
\t\t\t\t\t<button class=\"col-md-2 btn-md btn-default\" type=\"submit\">立即注册</button>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</form>
\t</div>
";
        
        $__internal_770df485100320ab1a98f3f64acabeba0eacb878d565e5c9b8096eb914739cf8->leave($__internal_770df485100320ab1a98f3f64acabeba0eacb878d565e5c9b8096eb914739cf8_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d2c22592727304559a8a79079d3c941fb98d1d783723368eb205fc73b88e1728 = $this->env->getExtension("native_profiler");
        $__internal_d2c22592727304559a8a79079d3c941fb98d1d783723368eb205fc73b88e1728->enter($__internal_d2c22592727304559a8a79079d3c941fb98d1d783723368eb205fc73b88e1728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "\t";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle:Register:register.html.twig", 55)->display($context);
        
        $__internal_d2c22592727304559a8a79079d3c941fb98d1d783723368eb205fc73b88e1728->leave($__internal_d2c22592727304559a8a79079d3c941fb98d1d783723368eb205fc73b88e1728_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b2ccb395631a1912bb2136b9f4f744bc63f48a8bad1d2bfb331ffacee4654e5 = $this->env->getExtension("native_profiler");
        $__internal_9b2ccb395631a1912bb2136b9f4f744bc63f48a8bad1d2bfb331ffacee4654e5->enter($__internal_9b2ccb395631a1912bb2136b9f4f744bc63f48a8bad1d2bfb331ffacee4654e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/register.js"), "html", null, true);
        echo "\"></script>
\t}
";
        
        $__internal_9b2ccb395631a1912bb2136b9f4f744bc63f48a8bad1d2bfb331ffacee4654e5->leave($__internal_9b2ccb395631a1912bb2136b9f4f744bc63f48a8bad1d2bfb331ffacee4654e5_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  163 => 58,  157 => 57,  149 => 55,  143 => 54,  123 => 41,  93 => 13,  87 => 12,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* {% block title %}register{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/register.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/* 	<center><h1>{{ "用户注册" }}</h1></center>*/
/* {% endblock %}*/
/* */
/* {% block full_content %}*/
/* 	<div class="container">*/
/* 		<form class="register" method="post" >*/
/* 			<div class="form-group row">*/
/* 				<div class="form-control">*/
/* 					<input class="col-md-4 col-md-offset-4" name="username" type="text" placeholder="username/email/cellphone" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group row">*/
/* 				<div class="form-control">*/
/* 					<input class="col-md-4 col-md-offset-4" name="password" type="password" placeholder="password" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group row">*/
/* 				<div class="form-control">*/
/* 					<input class="col-md-4 col-md-offset-4" name="cfmpsw" type="password" placeholder="repeat password" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group row">*/
/* 				<div class="form-control">*/
/* 					<input class="col-md-4 col-md-offset-4" name="cfmpsw" type="email" placeholder="email address" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group row">*/
/* 				<div class="form-control col-md-offset-4 col-md-4">*/
/* 					<input class="agreement"  type="checkbox" />我已经阅读并同意<a target="_black" href="{{ path('blog_register_agreement') }}">《用户注册协议》</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form_group row">*/
/* 				<div class="form-control col-md-offset-5">*/
/* 					<button class="col-md-2 btn-md btn-default" type="submit">立即注册</button>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/* 	{% include 'BlogBundle:Default:footer.html.twig' %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script type="text/javascript" src="{{ asset('bundles/blog/js/register.js') }}"></script>*/
/* 	}*/
/* {% endblock %}*/
/* */
/* */
