<?php

/* BlogBundle:Login:login.html.twig */
class __TwigTemplate_9de28761df6c399c5e7897b91cdb0e86ade77b1880359afea1f5c116d9717403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Login:login.html.twig", 1);
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
        $__internal_bd6ae8850aab3d254abac3e4fb394da284331195460734481edd8af82f1d7c25 = $this->env->getExtension("native_profiler");
        $__internal_bd6ae8850aab3d254abac3e4fb394da284331195460734481edd8af82f1d7c25->enter($__internal_bd6ae8850aab3d254abac3e4fb394da284331195460734481edd8af82f1d7c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6ae8850aab3d254abac3e4fb394da284331195460734481edd8af82f1d7c25->leave($__internal_bd6ae8850aab3d254abac3e4fb394da284331195460734481edd8af82f1d7c25_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8afdd7c5b15363b1242aefd2a0cd48ca92acc4ff88a7128e90967a18169b6e42 = $this->env->getExtension("native_profiler");
        $__internal_8afdd7c5b15363b1242aefd2a0cd48ca92acc4ff88a7128e90967a18169b6e42->enter($__internal_8afdd7c5b15363b1242aefd2a0cd48ca92acc4ff88a7128e90967a18169b6e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "login";
        
        $__internal_8afdd7c5b15363b1242aefd2a0cd48ca92acc4ff88a7128e90967a18169b6e42->leave($__internal_8afdd7c5b15363b1242aefd2a0cd48ca92acc4ff88a7128e90967a18169b6e42_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d6760a948c554dc8bea671e9e2b5c32e6dc26c5269c33113b3d12d5ebfd9564 = $this->env->getExtension("native_profiler");
        $__internal_2d6760a948c554dc8bea671e9e2b5c32e6dc26c5269c33113b3d12d5ebfd9564->enter($__internal_2d6760a948c554dc8bea671e9e2b5c32e6dc26c5269c33113b3d12d5ebfd9564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/register.css"), "html", null, true);
        echo "\">
";
        
        $__internal_2d6760a948c554dc8bea671e9e2b5c32e6dc26c5269c33113b3d12d5ebfd9564->leave($__internal_2d6760a948c554dc8bea671e9e2b5c32e6dc26c5269c33113b3d12d5ebfd9564_prof);

    }

    // line 8
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_0075063c443c7a06c3a978871c8809a51bacd07cdd1a56ce473acd0f40ec83b2 = $this->env->getExtension("native_profiler");
        $__internal_0075063c443c7a06c3a978871c8809a51bacd07cdd1a56ce473acd0f40ec83b2->enter($__internal_0075063c443c7a06c3a978871c8809a51bacd07cdd1a56ce473acd0f40ec83b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 9
        echo "   <center><h1>";
        echo "用户登录";
        echo "</h1></center>
   <div class=\"container\">
      <form class=\"login\" method=\"post\" >
         <div class=\"form-group\">
            <div class=\"form-control\">
               <input name=\"username\" type=\"text\" placeholder=\"username/email/cellphone\" />
            </div>
         </div>

         <div class=\"form-group\">
            <div class=\"form-control\">
               <input name=\"password\" type=\"password\" placeholder=\"password\" />
            </div>
         </div>

         <div class=\"form_group\">
            <div class=\"submit\">
               <button class=\"btn-login\" type=\"submit\">登录</button>
               <!-- <input class=\"tip\" type=\"checkbox\">下次自动登录</input> -->
            </div>
            <ul>
               <li><a href=\"\">忘记密码</a></li>
               <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("blog_register");
        echo "\">立即注册</a></li>
            </ul>
         </div>
      </form>
   </div>
";
        
        $__internal_0075063c443c7a06c3a978871c8809a51bacd07cdd1a56ce473acd0f40ec83b2->leave($__internal_0075063c443c7a06c3a978871c8809a51bacd07cdd1a56ce473acd0f40ec83b2_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ec3f92c15bed8b39ef97cef649049d1f785fe1c79692c6136127e9afc81a3d1f = $this->env->getExtension("native_profiler");
        $__internal_ec3f92c15bed8b39ef97cef649049d1f785fe1c79692c6136127e9afc81a3d1f->enter($__internal_ec3f92c15bed8b39ef97cef649049d1f785fe1c79692c6136127e9afc81a3d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "   ";
        $this->loadTemplate("BlogBundle:Default:footer.html.twig", "BlogBundle:Login:login.html.twig", 38)->display($context);
        
        $__internal_ec3f92c15bed8b39ef97cef649049d1f785fe1c79692c6136127e9afc81a3d1f->leave($__internal_ec3f92c15bed8b39ef97cef649049d1f785fe1c79692c6136127e9afc81a3d1f_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3dee42f7c1115332a2354cd19cae18b7c81b1bedf52d664beb2a754d59b4228b = $this->env->getExtension("native_profiler");
        $__internal_3dee42f7c1115332a2354cd19cae18b7c81b1bedf52d664beb2a754d59b4228b->enter($__internal_3dee42f7c1115332a2354cd19cae18b7c81b1bedf52d664beb2a754d59b4228b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/js/register.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3dee42f7c1115332a2354cd19cae18b7c81b1bedf52d664beb2a754d59b4228b->leave($__internal_3dee42f7c1115332a2354cd19cae18b7c81b1bedf52d664beb2a754d59b4228b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  135 => 41,  129 => 40,  121 => 38,  115 => 37,  102 => 31,  76 => 9,  70 => 8,  61 => 5,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* {% block title %}login{% endblock %}*/
/* {% block stylesheets %}*/
/*    {{ parent() }}*/
/*    <link rel="stylesheet" type="text/css" href="{{ asset('bundles/blog/css/register.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block full_content %}*/
/*    <center><h1>{{ "用户登录" }}</h1></center>*/
/*    <div class="container">*/
/*       <form class="login" method="post" >*/
/*          <div class="form-group">*/
/*             <div class="form-control">*/
/*                <input name="username" type="text" placeholder="username/email/cellphone" />*/
/*             </div>*/
/*          </div>*/
/* */
/*          <div class="form-group">*/
/*             <div class="form-control">*/
/*                <input name="password" type="password" placeholder="password" />*/
/*             </div>*/
/*          </div>*/
/* */
/*          <div class="form_group">*/
/*             <div class="submit">*/
/*                <button class="btn-login" type="submit">登录</button>*/
/*                <!-- <input class="tip" type="checkbox">下次自动登录</input> -->*/
/*             </div>*/
/*             <ul>*/
/*                <li><a href="">忘记密码</a></li>*/
/*                <li><a href="{{path('blog_register')}}">立即注册</a></li>*/
/*             </ul>*/
/*          </div>*/
/*       </form>*/
/*    </div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*    {% include 'BlogBundle:Default:footer.html.twig' %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*    {{ parent() }}*/
/*    <script type="text/javascript" src="{{ asset('bundles/blog/js/register.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
