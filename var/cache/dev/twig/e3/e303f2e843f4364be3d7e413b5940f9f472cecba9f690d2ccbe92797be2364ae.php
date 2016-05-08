<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d46d4251e23b0f156fab73c38c7ab8e52fb4a20dbef961d83fb81d0e0e61b7b3 extends Twig_Template
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
        $__internal_ca331e43c6387a443aa2cc4d9f5b67c5c96b92f44b123ac0acce96f3db389ca5 = $this->env->getExtension("native_profiler");
        $__internal_ca331e43c6387a443aa2cc4d9f5b67c5c96b92f44b123ac0acce96f3db389ca5->enter($__internal_ca331e43c6387a443aa2cc4d9f5b67c5c96b92f44b123ac0acce96f3db389ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca331e43c6387a443aa2cc4d9f5b67c5c96b92f44b123ac0acce96f3db389ca5->leave($__internal_ca331e43c6387a443aa2cc4d9f5b67c5c96b92f44b123ac0acce96f3db389ca5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_367e14067cac85106849c2dccda555db1a7e5812af85826a2df5774b55b21115 = $this->env->getExtension("native_profiler");
        $__internal_367e14067cac85106849c2dccda555db1a7e5812af85826a2df5774b55b21115->enter($__internal_367e14067cac85106849c2dccda555db1a7e5812af85826a2df5774b55b21115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_367e14067cac85106849c2dccda555db1a7e5812af85826a2df5774b55b21115->leave($__internal_367e14067cac85106849c2dccda555db1a7e5812af85826a2df5774b55b21115_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a0a66137d906ab69ca7569660ef70689b9128fa8a8d3280a840f80798a60fdb = $this->env->getExtension("native_profiler");
        $__internal_1a0a66137d906ab69ca7569660ef70689b9128fa8a8d3280a840f80798a60fdb->enter($__internal_1a0a66137d906ab69ca7569660ef70689b9128fa8a8d3280a840f80798a60fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a0a66137d906ab69ca7569660ef70689b9128fa8a8d3280a840f80798a60fdb->leave($__internal_1a0a66137d906ab69ca7569660ef70689b9128fa8a8d3280a840f80798a60fdb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c93299440b82f56d3670a577a2e3e2342860acf2b464ace88e3e522d06e9cff = $this->env->getExtension("native_profiler");
        $__internal_0c93299440b82f56d3670a577a2e3e2342860acf2b464ace88e3e522d06e9cff->enter($__internal_0c93299440b82f56d3670a577a2e3e2342860acf2b464ace88e3e522d06e9cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c93299440b82f56d3670a577a2e3e2342860acf2b464ace88e3e522d06e9cff->leave($__internal_0c93299440b82f56d3670a577a2e3e2342860acf2b464ace88e3e522d06e9cff_prof);

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
