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
        $__internal_f06b92109b9438d4447a52f4b25f2d254639b2354dc4f6695e73a2d370f0199d = $this->env->getExtension("native_profiler");
        $__internal_f06b92109b9438d4447a52f4b25f2d254639b2354dc4f6695e73a2d370f0199d->enter($__internal_f06b92109b9438d4447a52f4b25f2d254639b2354dc4f6695e73a2d370f0199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06b92109b9438d4447a52f4b25f2d254639b2354dc4f6695e73a2d370f0199d->leave($__internal_f06b92109b9438d4447a52f4b25f2d254639b2354dc4f6695e73a2d370f0199d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_273325cdd40eea816f9c5010ac5f32d222b03b96969df87c699429fccea47c8e = $this->env->getExtension("native_profiler");
        $__internal_273325cdd40eea816f9c5010ac5f32d222b03b96969df87c699429fccea47c8e->enter($__internal_273325cdd40eea816f9c5010ac5f32d222b03b96969df87c699429fccea47c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "register";
        
        $__internal_273325cdd40eea816f9c5010ac5f32d222b03b96969df87c699429fccea47c8e->leave($__internal_273325cdd40eea816f9c5010ac5f32d222b03b96969df87c699429fccea47c8e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f49c58dd5e785ee3f277c1a64e3235d8f431dddd926eba1839e023e917cece2f = $this->env->getExtension("native_profiler");
        $__internal_f49c58dd5e785ee3f277c1a64e3235d8f431dddd926eba1839e023e917cece2f->enter($__internal_f49c58dd5e785ee3f277c1a64e3235d8f431dddd926eba1839e023e917cece2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/register.css"), "html", null, true);
        echo "\">
\t}
";
        
        $__internal_f49c58dd5e785ee3f277c1a64e3235d8f431dddd926eba1839e023e917cece2f->leave($__internal_f49c58dd5e785ee3f277c1a64e3235d8f431dddd926eba1839e023e917cece2f_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_74cf5698314ccebda1fb2fc4cee1b27a0f7cdcfda9c8022f0644357234df08a4 = $this->env->getExtension("native_profiler");
        $__internal_74cf5698314ccebda1fb2fc4cee1b27a0f7cdcfda9c8022f0644357234df08a4->enter($__internal_74cf5698314ccebda1fb2fc4cee1b27a0f7cdcfda9c8022f0644357234df08a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "\t<center><h1>";
        echo "用户注册";
        echo "</h1></center>
";
        
        $__internal_74cf5698314ccebda1fb2fc4cee1b27a0f7cdcfda9c8022f0644357234df08a4->leave($__internal_74cf5698314ccebda1fb2fc4cee1b27a0f7cdcfda9c8022f0644357234df08a4_prof);

    }

    // line 13
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_1a28cf907523526d9e6469e2ce561462b23f19774337a6d9c3a3d44353d7031e = $this->env->getExtension("native_profiler");
        $__internal_1a28cf907523526d9e6469e2ce561462b23f19774337a6d9c3a3d44353d7031e->enter($__internal_1a28cf907523526d9e6469e2ce561462b23f19774337a6d9c3a3d44353d7031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 14
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
        // line 42
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
        
        $__internal_1a28cf907523526d9e6469e2ce561462b23f19774337a6d9c3a3d44353d7031e->leave($__internal_1a28cf907523526d9e6469e2ce561462b23f19774337a6d9c3a3d44353d7031e_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_713478c1f9078c47c133bebff447efe79100386b7e6cd741692309799fc9634b = $this->env->getExtension("native_profiler");
        $__internal_713478c1f9078c47c133bebff447efe79100386b7e6cd741692309799fc9634b->enter($__internal_713478c1f9078c47c133bebff447efe79100386b7e6cd741692309799fc9634b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "\t<div class=\"panel-footer\">
\t\t<center>Copyright &copy;2016-05-06 muzhimin,All rights reserved</center>
\t\t<center>author muzhimin</center>
\t\t<center>Email:1075241191@qq.com</center>
\t</div>
";
        
        $__internal_713478c1f9078c47c133bebff447efe79100386b7e6cd741692309799fc9634b->leave($__internal_713478c1f9078c47c133bebff447efe79100386b7e6cd741692309799fc9634b_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4baa9712fddb6af293bb14d5c0f42403d3698c7e3514fa761d80c2d6f772026 = $this->env->getExtension("native_profiler");
        $__internal_a4baa9712fddb6af293bb14d5c0f42403d3698c7e3514fa761d80c2d6f772026->enter($__internal_a4baa9712fddb6af293bb14d5c0f42403d3698c7e3514fa761d80c2d6f772026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/register.js"), "html", null, true);
        echo "\"></script>
\t}
";
        
        $__internal_a4baa9712fddb6af293bb14d5c0f42403d3698c7e3514fa761d80c2d6f772026->leave($__internal_a4baa9712fddb6af293bb14d5c0f42403d3698c7e3514fa761d80c2d6f772026_prof);

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
        return array (  173 => 64,  168 => 63,  162 => 62,  150 => 56,  144 => 55,  124 => 42,  94 => 14,  88 => 13,  78 => 10,  72 => 9,  62 => 5,  57 => 4,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* {% block title %}register{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/register.css') }}">*/
/* 	}*/
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
/* 	<div class="panel-footer">*/
/* 		<center>Copyright &copy;2016-05-06 muzhimin,All rights reserved</center>*/
/* 		<center>author muzhimin</center>*/
/* 		<center>Email:1075241191@qq.com</center>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script type="text/javascript" src="{{ asset('bundles/blog/js/register.js') }}"></script>*/
/* 	}*/
/* {% endblock %}*/
/* */
/* */
