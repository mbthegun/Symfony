<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39ea22995ab4d57cbdf0b06a068fbd24aede392c89d98315d208f4805df0f4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ea22995ab4d57cbdf0b06a068fbd24aede392c89d98315d208f4805df0f4e3->enter($__internal_39ea22995ab4d57cbdf0b06a068fbd24aede392c89d98315d208f4805df0f4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7ade870d182818d4ca6359236e3f17810d95dd0db219ced096b76403db3d674b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ade870d182818d4ca6359236e3f17810d95dd0db219ced096b76403db3d674b->enter($__internal_7ade870d182818d4ca6359236e3f17810d95dd0db219ced096b76403db3d674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_39ea22995ab4d57cbdf0b06a068fbd24aede392c89d98315d208f4805df0f4e3->leave($__internal_39ea22995ab4d57cbdf0b06a068fbd24aede392c89d98315d208f4805df0f4e3_prof);

        
        $__internal_7ade870d182818d4ca6359236e3f17810d95dd0db219ced096b76403db3d674b->leave($__internal_7ade870d182818d4ca6359236e3f17810d95dd0db219ced096b76403db3d674b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e977a293a09c39c2f901e5a5e0301e90c937a93b82aca31fa14b70e22c4c5b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e977a293a09c39c2f901e5a5e0301e90c937a93b82aca31fa14b70e22c4c5b53->enter($__internal_e977a293a09c39c2f901e5a5e0301e90c937a93b82aca31fa14b70e22c4c5b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_057dc41027d4765878f82dd4639e2ab695c88de460f48c985c0230510b801e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057dc41027d4765878f82dd4639e2ab695c88de460f48c985c0230510b801e02->enter($__internal_057dc41027d4765878f82dd4639e2ab695c88de460f48c985c0230510b801e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_057dc41027d4765878f82dd4639e2ab695c88de460f48c985c0230510b801e02->leave($__internal_057dc41027d4765878f82dd4639e2ab695c88de460f48c985c0230510b801e02_prof);

        
        $__internal_e977a293a09c39c2f901e5a5e0301e90c937a93b82aca31fa14b70e22c4c5b53->leave($__internal_e977a293a09c39c2f901e5a5e0301e90c937a93b82aca31fa14b70e22c4c5b53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d50e91f6e3f63416598ba57fdd998047977af7806f8cc18a11434a9e338ab94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50e91f6e3f63416598ba57fdd998047977af7806f8cc18a11434a9e338ab94e->enter($__internal_d50e91f6e3f63416598ba57fdd998047977af7806f8cc18a11434a9e338ab94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96c3195e9cbfc6547431cda978b642000b72c986869fb64630ae965d86410d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c3195e9cbfc6547431cda978b642000b72c986869fb64630ae965d86410d1c->enter($__internal_96c3195e9cbfc6547431cda978b642000b72c986869fb64630ae965d86410d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_96c3195e9cbfc6547431cda978b642000b72c986869fb64630ae965d86410d1c->leave($__internal_96c3195e9cbfc6547431cda978b642000b72c986869fb64630ae965d86410d1c_prof);

        
        $__internal_d50e91f6e3f63416598ba57fdd998047977af7806f8cc18a11434a9e338ab94e->leave($__internal_d50e91f6e3f63416598ba57fdd998047977af7806f8cc18a11434a9e338ab94e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5468a7e97e9fbb9d5aa39aa0f3f1b7e9a4c61e6da3cb97884e32c75a86884eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5468a7e97e9fbb9d5aa39aa0f3f1b7e9a4c61e6da3cb97884e32c75a86884eb->enter($__internal_c5468a7e97e9fbb9d5aa39aa0f3f1b7e9a4c61e6da3cb97884e32c75a86884eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf13da5569d4402ccc0a3f8bd8c2d69ec8832a517cc6289ccebf395ec04c50f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf13da5569d4402ccc0a3f8bd8c2d69ec8832a517cc6289ccebf395ec04c50f7->enter($__internal_cf13da5569d4402ccc0a3f8bd8c2d69ec8832a517cc6289ccebf395ec04c50f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf13da5569d4402ccc0a3f8bd8c2d69ec8832a517cc6289ccebf395ec04c50f7->leave($__internal_cf13da5569d4402ccc0a3f8bd8c2d69ec8832a517cc6289ccebf395ec04c50f7_prof);

        
        $__internal_c5468a7e97e9fbb9d5aa39aa0f3f1b7e9a4c61e6da3cb97884e32c75a86884eb->leave($__internal_c5468a7e97e9fbb9d5aa39aa0f3f1b7e9a4c61e6da3cb97884e32c75a86884eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11dba356adb53d524c8e258d4ebde4e0690e73bc6831b3791adac20b5c30c281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dba356adb53d524c8e258d4ebde4e0690e73bc6831b3791adac20b5c30c281->enter($__internal_11dba356adb53d524c8e258d4ebde4e0690e73bc6831b3791adac20b5c30c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e64b50e68c38d79d1d2a1feb1dc6e3397c05c30adc1eead4d0783454e7558d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e64b50e68c38d79d1d2a1feb1dc6e3397c05c30adc1eead4d0783454e7558d6->enter($__internal_2e64b50e68c38d79d1d2a1feb1dc6e3397c05c30adc1eead4d0783454e7558d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e64b50e68c38d79d1d2a1feb1dc6e3397c05c30adc1eead4d0783454e7558d6->leave($__internal_2e64b50e68c38d79d1d2a1feb1dc6e3397c05c30adc1eead4d0783454e7558d6_prof);

        
        $__internal_11dba356adb53d524c8e258d4ebde4e0690e73bc6831b3791adac20b5c30c281->leave($__internal_11dba356adb53d524c8e258d4ebde4e0690e73bc6831b3791adac20b5c30c281_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
