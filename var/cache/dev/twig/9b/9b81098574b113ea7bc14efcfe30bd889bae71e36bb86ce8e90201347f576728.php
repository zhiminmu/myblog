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
        $__internal_5c5d72023e50101913ccd4771ee827598a0fcf5fcd1c641e75b3d50075bc916a = $this->env->getExtension("native_profiler");
        $__internal_5c5d72023e50101913ccd4771ee827598a0fcf5fcd1c641e75b3d50075bc916a->enter($__internal_5c5d72023e50101913ccd4771ee827598a0fcf5fcd1c641e75b3d50075bc916a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5d72023e50101913ccd4771ee827598a0fcf5fcd1c641e75b3d50075bc916a->leave($__internal_5c5d72023e50101913ccd4771ee827598a0fcf5fcd1c641e75b3d50075bc916a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b46f833a3d06951e7ec67c5b92335fcf31181d65209a9413e438a816484f5f5 = $this->env->getExtension("native_profiler");
        $__internal_4b46f833a3d06951e7ec67c5b92335fcf31181d65209a9413e438a816484f5f5->enter($__internal_4b46f833a3d06951e7ec67c5b92335fcf31181d65209a9413e438a816484f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "register";
        
        $__internal_4b46f833a3d06951e7ec67c5b92335fcf31181d65209a9413e438a816484f5f5->leave($__internal_4b46f833a3d06951e7ec67c5b92335fcf31181d65209a9413e438a816484f5f5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b6dbce8554356f4618f46b95993534d382418c932d3986bc9cdb9569eb8b4db = $this->env->getExtension("native_profiler");
        $__internal_8b6dbce8554356f4618f46b95993534d382418c932d3986bc9cdb9569eb8b4db->enter($__internal_8b6dbce8554356f4618f46b95993534d382418c932d3986bc9cdb9569eb8b4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/register.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8b6dbce8554356f4618f46b95993534d382418c932d3986bc9cdb9569eb8b4db->leave($__internal_8b6dbce8554356f4618f46b95993534d382418c932d3986bc9cdb9569eb8b4db_prof);

    }

    // line 8
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_ea99db414c93a30fcdd0739c68a834927d4e28535963c7b702774943ae16d69e = $this->env->getExtension("native_profiler");
        $__internal_ea99db414c93a30fcdd0739c68a834927d4e28535963c7b702774943ae16d69e->enter($__internal_ea99db414c93a30fcdd0739c68a834927d4e28535963c7b702774943ae16d69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 9
        echo "\t<center><h1>";
        echo "用户注册";
        echo "</h1></center>
\t<div class=\"container\">
\t\t<form class=\"register\" method=\"post\" >
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input name=\"username\" type=\"text\" placeholder=\"username/email/cellphone\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input name=\"password\" type=\"password\" placeholder=\"password\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input name=\"cfmpsw\" type=\"password\" placeholder=\"repeat password\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input name=\"cfmpsw\" type=\"email\" placeholder=\"email address\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div>
\t\t\t\t\t<input class=\"agreement\"  type=\"checkbox\" />我已经阅读并同意<a target=\"_black\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("blog_register_agreement");
        echo "\">《用户注册协议》</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form_group\">
\t\t\t\t<div>
\t\t\t\t\t<button class=\"btn-register\" type=\"submit\">立即注册</button>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</form>
\t</div>
";
        
        $__internal_ea99db414c93a30fcdd0739c68a834927d4e28535963c7b702774943ae16d69e->leave($__internal_ea99db414c93a30fcdd0739c68a834927d4e28535963c7b702774943ae16d69e_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b5d991ca6955b15716e56f46e802912b7bc15c7b18d83df16ff65a4dc415fa87 = $this->env->getExtension("native_profiler");
        $__internal_b5d991ca6955b15716e56f46e802912b7bc15c7b18d83df16ff65a4dc415fa87->enter($__internal_b5d991ca6955b15716e56f46e802912b7bc15c7b18d83df16ff65a4dc415fa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "\t";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle:Register:register.html.twig", 52)->display($context);
        
        $__internal_b5d991ca6955b15716e56f46e802912b7bc15c7b18d83df16ff65a4dc415fa87->leave($__internal_b5d991ca6955b15716e56f46e802912b7bc15c7b18d83df16ff65a4dc415fa87_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efa56e60330bce630edea18c7eee7995b2e376cae0e7bfb5e727a1cc92dac520 = $this->env->getExtension("native_profiler");
        $__internal_efa56e60330bce630edea18c7eee7995b2e376cae0e7bfb5e727a1cc92dac520->enter($__internal_efa56e60330bce630edea18c7eee7995b2e376cae0e7bfb5e727a1cc92dac520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/register.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_efa56e60330bce630edea18c7eee7995b2e376cae0e7bfb5e727a1cc92dac520->leave($__internal_efa56e60330bce630edea18c7eee7995b2e376cae0e7bfb5e727a1cc92dac520_prof);

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
        return array (  154 => 56,  149 => 55,  143 => 54,  135 => 52,  129 => 51,  109 => 38,  76 => 9,  70 => 8,  61 => 5,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* {% block title %}register{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/register.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block full_content %}*/
/* 	<center><h1>{{ "用户注册" }}</h1></center>*/
/* 	<div class="container">*/
/* 		<form class="register" method="post" >*/
/* 			<div class="form-group">*/
/* 				<div class="form-control">*/
/* 					<input name="username" type="text" placeholder="username/email/cellphone" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 				<div class="form-control">*/
/* 					<input name="password" type="password" placeholder="password" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 				<div class="form-control">*/
/* 					<input name="cfmpsw" type="password" placeholder="repeat password" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 				<div class="form-control">*/
/* 					<input name="cfmpsw" type="email" placeholder="email address" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 				<div>*/
/* 					<input class="agreement"  type="checkbox" />我已经阅读并同意<a target="_black" href="{{ path('blog_register_agreement') }}">《用户注册协议》</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="form_group">*/
/* 				<div>*/
/* 					<button class="btn-register" type="submit">立即注册</button>*/
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
/* {% endblock %}*/
/* */
/* */
