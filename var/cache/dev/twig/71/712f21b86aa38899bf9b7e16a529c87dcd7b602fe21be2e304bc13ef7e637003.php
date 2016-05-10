<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_4b9fb615342239a544ad71878a5e530aef000fdb2deeb02c28a7c9c07b2bcbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        $__internal_35d1fb38889ed43b55546f64bd5fb3416a65e721e081be1667324d8f7b9dbe12 = $this->env->getExtension("native_profiler");
        $__internal_35d1fb38889ed43b55546f64bd5fb3416a65e721e081be1667324d8f7b9dbe12->enter($__internal_35d1fb38889ed43b55546f64bd5fb3416a65e721e081be1667324d8f7b9dbe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d1fb38889ed43b55546f64bd5fb3416a65e721e081be1667324d8f7b9dbe12->leave($__internal_35d1fb38889ed43b55546f64bd5fb3416a65e721e081be1667324d8f7b9dbe12_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b81a31cdac7779c21b652028bcd8de87cd26847e18e076c2097c54601f25b9cf = $this->env->getExtension("native_profiler");
        $__internal_b81a31cdac7779c21b652028bcd8de87cd26847e18e076c2097c54601f25b9cf->enter($__internal_b81a31cdac7779c21b652028bcd8de87cd26847e18e076c2097c54601f25b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "homepage";
        
        $__internal_b81a31cdac7779c21b652028bcd8de87cd26847e18e076c2097c54601f25b9cf->leave($__internal_b81a31cdac7779c21b652028bcd8de87cd26847e18e076c2097c54601f25b9cf_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a7ddae40beea311a9347746b07a5788749540ba4c26935007321e344bc94f2f = $this->env->getExtension("native_profiler");
        $__internal_2a7ddae40beea311a9347746b07a5788749540ba4c26935007321e344bc94f2f->enter($__internal_2a7ddae40beea311a9347746b07a5788749540ba4c26935007321e344bc94f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_2a7ddae40beea311a9347746b07a5788749540ba4c26935007321e344bc94f2f->leave($__internal_2a7ddae40beea311a9347746b07a5788749540ba4c26935007321e344bc94f2f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d0127a773f36b5078cb3a80ffdc7340903651733cf7858b8c9fe3fd105d7719 = $this->env->getExtension("native_profiler");
        $__internal_9d0127a773f36b5078cb3a80ffdc7340903651733cf7858b8c9fe3fd105d7719->enter($__internal_9d0127a773f36b5078cb3a80ffdc7340903651733cf7858b8c9fe3fd105d7719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "
\t";
        // line 14
        $this->displayBlock('full_content', $context, $blocks);
        // line 106
        echo "
\t";
        // line 107
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "
\t";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_9d0127a773f36b5078cb3a80ffdc7340903651733cf7858b8c9fe3fd105d7719->leave($__internal_9d0127a773f36b5078cb3a80ffdc7340903651733cf7858b8c9fe3fd105d7719_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_e8c1f5fe34aa6742ec47ef66fdc7c16ae013fcc9f6d6c339ece7a2fa2bf106a4 = $this->env->getExtension("native_profiler");
        $__internal_e8c1f5fe34aa6742ec47ef66fdc7c16ae013fcc9f6d6c339ece7a2fa2bf106a4->enter($__internal_e8c1f5fe34aa6742ec47ef66fdc7c16ae013fcc9f6d6c339ece7a2fa2bf106a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    \t<!-- ";
        $this->loadTemplate("BlogBundle:Default:header.html.twig", "BlogBundle:Default:index.html.twig", 11)->display($context);
        echo " -->
\t";
        
        $__internal_e8c1f5fe34aa6742ec47ef66fdc7c16ae013fcc9f6d6c339ece7a2fa2bf106a4->leave($__internal_e8c1f5fe34aa6742ec47ef66fdc7c16ae013fcc9f6d6c339ece7a2fa2bf106a4_prof);

    }

    // line 14
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_cbe20feb2d006083a21fb04be35dda769ebd657f61b273bb6f819d03aba4afd1 = $this->env->getExtension("native_profiler");
        $__internal_cbe20feb2d006083a21fb04be35dda769ebd657f61b273bb6f819d03aba4afd1->enter($__internal_cbe20feb2d006083a21fb04be35dda769ebd657f61b273bb6f819d03aba4afd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 15
        echo "
\t\t<div class=\"full-content\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<header id=\"masthead\" role=\"banner\" class=\"clearfix\">
\t\t\t\t\t\t<p class=\"logo\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/imgs/logo.img"), "html", null, true);
        echo "\"></a><span>myblog</span></p>
\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t<nav role=\"navigation\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>001</li>
\t\t\t\t\t\t\t\t\t<li>001</li>
\t\t\t\t\t\t\t\t\t<li>001</li>
\t\t\t\t\t\t\t\t\t<li>001</li>
\t\t\t\t\t\t\t\t\t<li>001</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<form method=\"get\" role=\"search\">
\t\t\t\t\t\t\t\t<label for=\"search\" style=\"display: none\"></label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"search\"></input>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t\t\t<!-- 主页面 -->
\t\t\t\t\t<div id=\"main\" role=\"main\">
\t\t\t\t\t\t<h1>recent entries</h1>
\t\t\t\t\t\t<section class=\"entry\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2 lang=\"es\">The first article index</h2>
\t\t\t\t\t\t\t\t<p class=\"date\">
\t\t\t\t\t\t\t\t\t<time datetime=\"2016-5-09\" pubdate=\"pubdate\">2016-5-09</time>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"intro\">
\t\t\t\t\t\t\t\t<p>Tody is a funny day ...</p>
\t\t\t\t\t\t\t\t<p class=\"continued\"><a href=\"#\">continue</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"entry\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2 lang=\"es\">The second article index</h2>
\t\t\t\t\t\t\t\t<p class=\"date\">
\t\t\t\t\t\t\t\t\t<time datetime=\"2016-5-09\" pubdate=\"pubdate\">2016-5-09</time>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"intro\">
\t\t\t\t\t\t\t\t<p>Tody is a funny day ...</p>
\t\t\t\t\t\t\t\t<p class=\"continued\"><a href=\"#\">continue</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"entry\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2 lang=\"es\">The third article index</h2>
\t\t\t\t\t\t\t\t<p class=\"date\">
\t\t\t\t\t\t\t\t\t<time datetime=\"2016-5-09\" pubdate=\"pubdate\">2016-5-09</time>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<div class=\"intro\">
\t\t\t\t\t\t\t\t<p>Tody is a funny day ...</p>
\t\t\t\t\t\t\t\t<p class=\"continued\"><a href=\"#\">continue</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- 侧边栏 -->
\t\t\t\t\t<div id=\"related\" class=\"sidebar\" role=\"complementary\">
\t\t\t\t\t\t<aside class=\"excerpt\">
\t\t\t\t\t\t\t<h2>From my window</h2>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">文章</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">评论</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">设置</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">新闻</a></li>
\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t
\t\t\t\t\t\t</aside>
\t\t\t\t\t\t<aside class=\"archive\">
\t\t\t\t\t\t\t<nav role=\"navigation\">
\t\t\t\t\t\t\t\t<h2>Archive</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">dskjvd</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">dskjvd</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">dskjvd</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">dskjvd</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">dskjvd</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</aside>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t</div>

\t\t
\t";
        
        $__internal_cbe20feb2d006083a21fb04be35dda769ebd657f61b273bb6f819d03aba4afd1->leave($__internal_cbe20feb2d006083a21fb04be35dda769ebd657f61b273bb6f819d03aba4afd1_prof);

    }

    // line 107
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0c140e189472e311298d1de0cbf07da214bf9f05a0337f36e6996a6dda99d246 = $this->env->getExtension("native_profiler");
        $__internal_0c140e189472e311298d1de0cbf07da214bf9f05a0337f36e6996a6dda99d246->enter($__internal_0c140e189472e311298d1de0cbf07da214bf9f05a0337f36e6996a6dda99d246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 108
        echo "\t\t";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle:Default:index.html.twig", 108)->display($context);
        // line 109
        echo "\t";
        
        $__internal_0c140e189472e311298d1de0cbf07da214bf9f05a0337f36e6996a6dda99d246->leave($__internal_0c140e189472e311298d1de0cbf07da214bf9f05a0337f36e6996a6dda99d246_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d69a9579138c246bece4df619f51c2acb04908d1d449ecde93a182bf5f3945ff = $this->env->getExtension("native_profiler");
        $__internal_d69a9579138c246bece4df619f51c2acb04908d1d449ecde93a182bf5f3945ff->enter($__internal_d69a9579138c246bece4df619f51c2acb04908d1d449ecde93a182bf5f3945ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/jquery-2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/index.js"), "html", null, true);
        echo "\"></script>
  \t";
        
        $__internal_d69a9579138c246bece4df619f51c2acb04908d1d449ecde93a182bf5f3945ff->leave($__internal_d69a9579138c246bece4df619f51c2acb04908d1d449ecde93a182bf5f3945ff_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 113,  245 => 112,  239 => 111,  232 => 109,  229 => 108,  223 => 107,  129 => 19,  123 => 15,  117 => 14,  107 => 11,  101 => 10,  94 => 111,  91 => 110,  89 => 107,  86 => 106,  84 => 14,  81 => 13,  78 => 10,  72 => 9,  63 => 6,  58 => 5,  52 => 4,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* {% block title %}homepage{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/index.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{% block header %}*/
/*     	<!-- {% include 'BlogBundle:Default:header.html.twig' %} -->*/
/* 	{% endblock %}*/
/* */
/* 	{% block full_content %}*/
/* */
/* 		<div class="full-content">*/
/* 				<div class="content">*/
/* 					<header id="masthead" role="banner" class="clearfix">*/
/* 						<p class="logo"><a href="{{ asset('bundles/blog/imgs/logo.img') }}"></a><span>myblog</span></p>*/
/* 						<div >*/
/* 							<nav role="navigation">*/
/* 								<ul>*/
/* 									<li>001</li>*/
/* 									<li>001</li>*/
/* 									<li>001</li>*/
/* 									<li>001</li>*/
/* 									<li>001</li>*/
/* 								</ul>*/
/* 							</nav>*/
/* 							<form method="get" role="search">*/
/* 								<label for="search" style="display: none"></label>*/
/* 								<input type="text" name="search" placeholder="search"></input>*/
/* 							</form>*/
/* 						</div>*/
/* 					</header>*/
/* 					<!-- 主页面 -->*/
/* 					<div id="main" role="main">*/
/* 						<h1>recent entries</h1>*/
/* 						<section class="entry">*/
/* 							<header>*/
/* 								<h2 lang="es">The first article index</h2>*/
/* 								<p class="date">*/
/* 									<time datetime="2016-5-09" pubdate="pubdate">2016-5-09</time>*/
/* 								</p>*/
/* 							</header>*/
/* 							<div class="intro">*/
/* 								<p>Tody is a funny day ...</p>*/
/* 								<p class="continued"><a href="#">continue</a></p>*/
/* 							</div>*/
/* 						</section>*/
/* 						<section class="entry">*/
/* 							<header>*/
/* 								<h2 lang="es">The second article index</h2>*/
/* 								<p class="date">*/
/* 									<time datetime="2016-5-09" pubdate="pubdate">2016-5-09</time>*/
/* 								</p>*/
/* 							</header>*/
/* 							<div class="intro">*/
/* 								<p>Tody is a funny day ...</p>*/
/* 								<p class="continued"><a href="#">continue</a></p>*/
/* 							</div>*/
/* 						</section>*/
/* 						<section class="entry">*/
/* 							<header>*/
/* 								<h2 lang="es">The third article index</h2>*/
/* 								<p class="date">*/
/* 									<time datetime="2016-5-09" pubdate="pubdate">2016-5-09</time>*/
/* 								</p>*/
/* 							</header>*/
/* 							<div class="intro">*/
/* 								<p>Tody is a funny day ...</p>*/
/* 								<p class="continued"><a href="#">continue</a></p>*/
/* 							</div>*/
/* 						</section>*/
/* 					</div>*/
/* 					<!-- 侧边栏 -->*/
/* 					<div id="related" class="sidebar" role="complementary">*/
/* 						<aside class="excerpt">*/
/* 							<h2>From my window</h2>*/
/* 							<ul>*/
/* 								<li><a href="#">文章</a></li>*/
/* 								<li><a href="#">评论</a></li>*/
/* 								<li><a href="#">设置</a></li>*/
/* 								<li><a href="#">新闻</a></li>*/
/* 							</ul>						*/
/* 						</aside>*/
/* 						<aside class="archive">*/
/* 							<nav role="navigation">*/
/* 								<h2>Archive</h2>*/
/* 								<ul>*/
/* 									<li><a href="#">dskjvd</a></li>*/
/* 									<li><a href="#">dskjvd</a></li>*/
/* 									<li><a href="#">dskjvd</a></li>*/
/* 									<li><a href="#">dskjvd</a></li>*/
/* 									<li><a href="#">dskjvd</a></li>*/
/* 								</ul>*/
/* 							</nav>*/
/* 						</aside>*/
/* 					</div>*/
/* 				</div>	*/
/* 						*/
/* 		</div>*/
/* */
/* 		*/
/* 	{% endblock %}*/
/* */
/* 	{% block footer %}*/
/* 		{% include 'BlogBundle:Default:footer.html.twig' %}*/
/* 	{% endblock %}*/
/* */
/* 	{% block javascripts %}*/
/*     <script src="{{ asset('bundles/blog/js/jquery-2.1.4.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/blog/js/index.js') }}"></script>*/
/*   	{% endblock %}*/
/* {% endblock %}*/
