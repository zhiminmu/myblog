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
        $__internal_4920b831c37751df060463883a91e5df5f8fdaf784bd5194a6dadd47a8de86ca = $this->env->getExtension("native_profiler");
        $__internal_4920b831c37751df060463883a91e5df5f8fdaf784bd5194a6dadd47a8de86ca->enter($__internal_4920b831c37751df060463883a91e5df5f8fdaf784bd5194a6dadd47a8de86ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4920b831c37751df060463883a91e5df5f8fdaf784bd5194a6dadd47a8de86ca->leave($__internal_4920b831c37751df060463883a91e5df5f8fdaf784bd5194a6dadd47a8de86ca_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9023a154f6da34c503a4bd5d69eb5a23a4c71865c3479b36666280b0fdafec8 = $this->env->getExtension("native_profiler");
        $__internal_e9023a154f6da34c503a4bd5d69eb5a23a4c71865c3479b36666280b0fdafec8->enter($__internal_e9023a154f6da34c503a4bd5d69eb5a23a4c71865c3479b36666280b0fdafec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "homepage";
        
        $__internal_e9023a154f6da34c503a4bd5d69eb5a23a4c71865c3479b36666280b0fdafec8->leave($__internal_e9023a154f6da34c503a4bd5d69eb5a23a4c71865c3479b36666280b0fdafec8_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db0bc0096aaf34178e40b17ecc3e281a53d4108ae49ca0ba06d9fb753a00f89f = $this->env->getExtension("native_profiler");
        $__internal_db0bc0096aaf34178e40b17ecc3e281a53d4108ae49ca0ba06d9fb753a00f89f->enter($__internal_db0bc0096aaf34178e40b17ecc3e281a53d4108ae49ca0ba06d9fb753a00f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_db0bc0096aaf34178e40b17ecc3e281a53d4108ae49ca0ba06d9fb753a00f89f->leave($__internal_db0bc0096aaf34178e40b17ecc3e281a53d4108ae49ca0ba06d9fb753a00f89f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_67501bb857e7717916b4fddfbc7e2f75c993d72c8fcd161390ac48d560c7e18c = $this->env->getExtension("native_profiler");
        $__internal_67501bb857e7717916b4fddfbc7e2f75c993d72c8fcd161390ac48d560c7e18c->enter($__internal_67501bb857e7717916b4fddfbc7e2f75c993d72c8fcd161390ac48d560c7e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<!-- ";
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo " -->

\t";
        // line 14
        $this->displayBlock('full_content', $context, $blocks);
        // line 117
        echo "
\t";
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 121
        echo "
\t";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_67501bb857e7717916b4fddfbc7e2f75c993d72c8fcd161390ac48d560c7e18c->leave($__internal_67501bb857e7717916b4fddfbc7e2f75c993d72c8fcd161390ac48d560c7e18c_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_cdf5b9f1cd08a273b969309f5826b473827e47ddd5bcf2f2e1bc954702132b55 = $this->env->getExtension("native_profiler");
        $__internal_cdf5b9f1cd08a273b969309f5826b473827e47ddd5bcf2f2e1bc954702132b55->enter($__internal_cdf5b9f1cd08a273b969309f5826b473827e47ddd5bcf2f2e1bc954702132b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    \t";
        $this->loadTemplate("BlogBundle:Default:header.html.twig", "BlogBundle:Default:index.html.twig", 11)->display($context);
        echo " 
\t";
        
        $__internal_cdf5b9f1cd08a273b969309f5826b473827e47ddd5bcf2f2e1bc954702132b55->leave($__internal_cdf5b9f1cd08a273b969309f5826b473827e47ddd5bcf2f2e1bc954702132b55_prof);

    }

    // line 14
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_fd58e7d3b8e49dc368e66c6031159410427ae5013b4dcb58e751a9f25db64ddf = $this->env->getExtension("native_profiler");
        $__internal_fd58e7d3b8e49dc368e66c6031159410427ae5013b4dcb58e751a9f25db64ddf->enter($__internal_fd58e7d3b8e49dc368e66c6031159410427ae5013b4dcb58e751a9f25db64ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 15
        echo "
\t\t<div class=\"full-content\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<header id=\"masthead\" role=\"banner\" class=\"clearfix\">
\t\t\t\t\t\t<p class=\"logo\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/imgs/logo.img"), "html", null, true);
        echo "\"></a><span>myblog</span></p>
\t\t\t\t\t\t<div class=\"nav\">
\t\t\t\t\t\t\t<nav role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"nav-left\">
\t\t\t\t\t\t\t\t\t<li>首页</li>
\t\t\t\t\t\t\t\t\t<li>博文</li>
\t\t\t\t\t\t\t\t\t<li>评论</li>
\t\t\t\t\t\t\t\t\t<li>话题</li>
\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t<form method=\"get\" role=\"search\">
\t\t\t\t\t\t\t\t<label for=\"search\" style=\"display: none\">search</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"search\"></input>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\">go</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<nav role=\"user-status\">
\t\t\t\t\t\t\t\t<ul class=\"nav-right\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("blog_register");
        echo "\">注册</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("blog_login");
        echo "\">登录</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
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
        
        $__internal_fd58e7d3b8e49dc368e66c6031159410427ae5013b4dcb58e751a9f25db64ddf->leave($__internal_fd58e7d3b8e49dc368e66c6031159410427ae5013b4dcb58e751a9f25db64ddf_prof);

    }

    // line 118
    public function block_footer($context, array $blocks = array())
    {
        $__internal_65a99a550731a1a459902dcf0b95392c6989fb35b5913b6500060269d64e863b = $this->env->getExtension("native_profiler");
        $__internal_65a99a550731a1a459902dcf0b95392c6989fb35b5913b6500060269d64e863b->enter($__internal_65a99a550731a1a459902dcf0b95392c6989fb35b5913b6500060269d64e863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 119
        echo "\t\t";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle:Default:index.html.twig", 119)->display($context);
        // line 120
        echo "\t";
        
        $__internal_65a99a550731a1a459902dcf0b95392c6989fb35b5913b6500060269d64e863b->leave($__internal_65a99a550731a1a459902dcf0b95392c6989fb35b5913b6500060269d64e863b_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_445937fa9e7d7ac80fe85b77a4bbfadd4d615b57381d30e55f5075642edc402b = $this->env->getExtension("native_profiler");
        $__internal_445937fa9e7d7ac80fe85b77a4bbfadd4d615b57381d30e55f5075642edc402b->enter($__internal_445937fa9e7d7ac80fe85b77a4bbfadd4d615b57381d30e55f5075642edc402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/jquery-2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/index.js"), "html", null, true);
        echo "\"></script>
  \t";
        
        $__internal_445937fa9e7d7ac80fe85b77a4bbfadd4d615b57381d30e55f5075642edc402b->leave($__internal_445937fa9e7d7ac80fe85b77a4bbfadd4d615b57381d30e55f5075642edc402b_prof);

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
        return array (  268 => 124,  263 => 123,  257 => 122,  250 => 120,  247 => 119,  241 => 118,  159 => 42,  155 => 41,  130 => 19,  124 => 15,  118 => 14,  108 => 11,  102 => 10,  95 => 122,  92 => 121,  90 => 118,  87 => 117,  85 => 14,  81 => 12,  78 => 10,  72 => 9,  63 => 6,  58 => 5,  52 => 4,  40 => 2,  11 => 1,);
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
/* 	<!-- {% block header %}*/
/*     	{% include 'BlogBundle:Default:header.html.twig' %} */
/* 	{% endblock %} -->*/
/* */
/* 	{% block full_content %}*/
/* */
/* 		<div class="full-content">*/
/* 				<div class="content">*/
/* 					<header id="masthead" role="banner" class="clearfix">*/
/* 						<p class="logo"><a href="{{ asset('bundles/blog/imgs/logo.img') }}"></a><span>myblog</span></p>*/
/* 						<div class="nav">*/
/* 							<nav role="navigation">*/
/* 								<ul class="nav-left">*/
/* 									<li>首页</li>*/
/* 									<li>博文</li>*/
/* 									<li>评论</li>*/
/* 									<li>话题</li>*/
/* 								</ul>	*/
/* 							</nav>*/
/* 							*/
/* 						</div>*/
/* 						<div class="search">*/
/* 							<form method="get" role="search">*/
/* 								<label for="search" style="display: none">search</label>*/
/* 								<input type="text" name="search" placeholder="search"></input>*/
/* 								<span>*/
/* 									<button class="btn" type="button">go</button>*/
/* 								</span>*/
/* 							</form>*/
/* 							<nav role="user-status">*/
/* 								<ul class="nav-right">*/
/* 									<li><a href="{{path('blog_register')}}">注册</a></li>*/
/* 									<li><a href="{{path('blog_login')}}">登录</a></li>*/
/* 								</ul>*/
/* 							</nav>*/
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
