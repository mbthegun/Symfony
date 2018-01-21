<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_afc3b8e12602690aa3020fbadbd64e1f54cf985fc498a29f24f21c9819ce21c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc3b8e12602690aa3020fbadbd64e1f54cf985fc498a29f24f21c9819ce21c2->enter($__internal_afc3b8e12602690aa3020fbadbd64e1f54cf985fc498a29f24f21c9819ce21c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ccf356f0b1d2e42a83b4f6873ca2110bc5cd3e4683ddaf0a4eec5ee20c8f4302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf356f0b1d2e42a83b4f6873ca2110bc5cd3e4683ddaf0a4eec5ee20c8f4302->enter($__internal_ccf356f0b1d2e42a83b4f6873ca2110bc5cd3e4683ddaf0a4eec5ee20c8f4302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc3b8e12602690aa3020fbadbd64e1f54cf985fc498a29f24f21c9819ce21c2->leave($__internal_afc3b8e12602690aa3020fbadbd64e1f54cf985fc498a29f24f21c9819ce21c2_prof);

        
        $__internal_ccf356f0b1d2e42a83b4f6873ca2110bc5cd3e4683ddaf0a4eec5ee20c8f4302->leave($__internal_ccf356f0b1d2e42a83b4f6873ca2110bc5cd3e4683ddaf0a4eec5ee20c8f4302_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68187df6f5f60ecc8f7490aba0548f6344764b0e0f8b32dedac6f6e48459a631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68187df6f5f60ecc8f7490aba0548f6344764b0e0f8b32dedac6f6e48459a631->enter($__internal_68187df6f5f60ecc8f7490aba0548f6344764b0e0f8b32dedac6f6e48459a631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe115bb49863e21f6baf8d902bb0df9df541fceb18b26cd6cba4215ff77966ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe115bb49863e21f6baf8d902bb0df9df541fceb18b26cd6cba4215ff77966ec->enter($__internal_fe115bb49863e21f6baf8d902bb0df9df541fceb18b26cd6cba4215ff77966ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fe115bb49863e21f6baf8d902bb0df9df541fceb18b26cd6cba4215ff77966ec->leave($__internal_fe115bb49863e21f6baf8d902bb0df9df541fceb18b26cd6cba4215ff77966ec_prof);

        
        $__internal_68187df6f5f60ecc8f7490aba0548f6344764b0e0f8b32dedac6f6e48459a631->leave($__internal_68187df6f5f60ecc8f7490aba0548f6344764b0e0f8b32dedac6f6e48459a631_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82303deaf29aab4d7b284b09ba52da888e0b38e94e0a966fa9342aca60a69c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82303deaf29aab4d7b284b09ba52da888e0b38e94e0a966fa9342aca60a69c12->enter($__internal_82303deaf29aab4d7b284b09ba52da888e0b38e94e0a966fa9342aca60a69c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8444ad47e84fcd9a2bced7becbc1fe2e0728d4d92cda25139ea158e327656c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8444ad47e84fcd9a2bced7becbc1fe2e0728d4d92cda25139ea158e327656c75->enter($__internal_8444ad47e84fcd9a2bced7becbc1fe2e0728d4d92cda25139ea158e327656c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8444ad47e84fcd9a2bced7becbc1fe2e0728d4d92cda25139ea158e327656c75->leave($__internal_8444ad47e84fcd9a2bced7becbc1fe2e0728d4d92cda25139ea158e327656c75_prof);

        
        $__internal_82303deaf29aab4d7b284b09ba52da888e0b38e94e0a966fa9342aca60a69c12->leave($__internal_82303deaf29aab4d7b284b09ba52da888e0b38e94e0a966fa9342aca60a69c12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c150406a0e061e73c2e997c4e062de941d2204add7649f0dffce8685656a134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c150406a0e061e73c2e997c4e062de941d2204add7649f0dffce8685656a134->enter($__internal_6c150406a0e061e73c2e997c4e062de941d2204add7649f0dffce8685656a134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_300825e19a175d6d3183fe9bb968fcc95918f175a4dc6390c1c61e95a6c2f5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300825e19a175d6d3183fe9bb968fcc95918f175a4dc6390c1c61e95a6c2f5ee->enter($__internal_300825e19a175d6d3183fe9bb968fcc95918f175a4dc6390c1c61e95a6c2f5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_300825e19a175d6d3183fe9bb968fcc95918f175a4dc6390c1c61e95a6c2f5ee->leave($__internal_300825e19a175d6d3183fe9bb968fcc95918f175a4dc6390c1c61e95a6c2f5ee_prof);

        
        $__internal_6c150406a0e061e73c2e997c4e062de941d2204add7649f0dffce8685656a134->leave($__internal_6c150406a0e061e73c2e997c4e062de941d2204add7649f0dffce8685656a134_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
