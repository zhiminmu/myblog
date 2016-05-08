<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_542dfc6faea8ca5dd24b4bea55930ba5f9ba1ac2344ca53427223e53ecc8571d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1018169c8e877330ac2b845087c7dfd180c3fa7912dea4a859490ffc738b533 = $this->env->getExtension("native_profiler");
        $__internal_b1018169c8e877330ac2b845087c7dfd180c3fa7912dea4a859490ffc738b533->enter($__internal_b1018169c8e877330ac2b845087c7dfd180c3fa7912dea4a859490ffc738b533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1018169c8e877330ac2b845087c7dfd180c3fa7912dea4a859490ffc738b533->leave($__internal_b1018169c8e877330ac2b845087c7dfd180c3fa7912dea4a859490ffc738b533_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caacb1b35fefc7e9c739b711b55e48a97710f96c0eb7b8f9d75d45d9fdf921e7 = $this->env->getExtension("native_profiler");
        $__internal_caacb1b35fefc7e9c739b711b55e48a97710f96c0eb7b8f9d75d45d9fdf921e7->enter($__internal_caacb1b35fefc7e9c739b711b55e48a97710f96c0eb7b8f9d75d45d9fdf921e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_caacb1b35fefc7e9c739b711b55e48a97710f96c0eb7b8f9d75d45d9fdf921e7->leave($__internal_caacb1b35fefc7e9c739b711b55e48a97710f96c0eb7b8f9d75d45d9fdf921e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ea18d6df386b3be94ed4cdb3dd38f820b9209a68cc3a788e0fe4c6957f1d7d9 = $this->env->getExtension("native_profiler");
        $__internal_2ea18d6df386b3be94ed4cdb3dd38f820b9209a68cc3a788e0fe4c6957f1d7d9->enter($__internal_2ea18d6df386b3be94ed4cdb3dd38f820b9209a68cc3a788e0fe4c6957f1d7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ea18d6df386b3be94ed4cdb3dd38f820b9209a68cc3a788e0fe4c6957f1d7d9->leave($__internal_2ea18d6df386b3be94ed4cdb3dd38f820b9209a68cc3a788e0fe4c6957f1d7d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cba86073a291bcfbe9886ff5a50b41a1d74e5409103dd81d62dcd752593d2256 = $this->env->getExtension("native_profiler");
        $__internal_cba86073a291bcfbe9886ff5a50b41a1d74e5409103dd81d62dcd752593d2256->enter($__internal_cba86073a291bcfbe9886ff5a50b41a1d74e5409103dd81d62dcd752593d2256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cba86073a291bcfbe9886ff5a50b41a1d74e5409103dd81d62dcd752593d2256->leave($__internal_cba86073a291bcfbe9886ff5a50b41a1d74e5409103dd81d62dcd752593d2256_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
