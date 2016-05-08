<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3d92dad7331636af93f7834a0d113e11b9c021124aa230ed1aed56ba37875f74 extends Twig_Template
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
        $__internal_a2a021fd294869f35189f6de22279653f3de5b5d398e3747e6020df3f46ae5e9 = $this->env->getExtension("native_profiler");
        $__internal_a2a021fd294869f35189f6de22279653f3de5b5d398e3747e6020df3f46ae5e9->enter($__internal_a2a021fd294869f35189f6de22279653f3de5b5d398e3747e6020df3f46ae5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a021fd294869f35189f6de22279653f3de5b5d398e3747e6020df3f46ae5e9->leave($__internal_a2a021fd294869f35189f6de22279653f3de5b5d398e3747e6020df3f46ae5e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b643b3be433100ecd7e1c2e5d5cab73a52d48fba4c2f219ae542bf96ea918d7b = $this->env->getExtension("native_profiler");
        $__internal_b643b3be433100ecd7e1c2e5d5cab73a52d48fba4c2f219ae542bf96ea918d7b->enter($__internal_b643b3be433100ecd7e1c2e5d5cab73a52d48fba4c2f219ae542bf96ea918d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b643b3be433100ecd7e1c2e5d5cab73a52d48fba4c2f219ae542bf96ea918d7b->leave($__internal_b643b3be433100ecd7e1c2e5d5cab73a52d48fba4c2f219ae542bf96ea918d7b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25614581d127537d84ba10ee57897c6abd40ac60618c7c3206dbe85945a0d363 = $this->env->getExtension("native_profiler");
        $__internal_25614581d127537d84ba10ee57897c6abd40ac60618c7c3206dbe85945a0d363->enter($__internal_25614581d127537d84ba10ee57897c6abd40ac60618c7c3206dbe85945a0d363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25614581d127537d84ba10ee57897c6abd40ac60618c7c3206dbe85945a0d363->leave($__internal_25614581d127537d84ba10ee57897c6abd40ac60618c7c3206dbe85945a0d363_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02724c91508b2191f0df58c5ad650623d41d35c64bca29126dffd9bd5fd17d3c = $this->env->getExtension("native_profiler");
        $__internal_02724c91508b2191f0df58c5ad650623d41d35c64bca29126dffd9bd5fd17d3c->enter($__internal_02724c91508b2191f0df58c5ad650623d41d35c64bca29126dffd9bd5fd17d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02724c91508b2191f0df58c5ad650623d41d35c64bca29126dffd9bd5fd17d3c->leave($__internal_02724c91508b2191f0df58c5ad650623d41d35c64bca29126dffd9bd5fd17d3c_prof);

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
