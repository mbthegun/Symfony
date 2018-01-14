<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
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
        $__internal_f03788630dfeb5aa5b41ffeeb0fbe50585c3176f933b347abd781e8d79f80759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03788630dfeb5aa5b41ffeeb0fbe50585c3176f933b347abd781e8d79f80759->enter($__internal_f03788630dfeb5aa5b41ffeeb0fbe50585c3176f933b347abd781e8d79f80759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_40326d8a7a30dd43b23be4fec57cea07588ff7da1504387acabb72aea4f3d986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40326d8a7a30dd43b23be4fec57cea07588ff7da1504387acabb72aea4f3d986->enter($__internal_40326d8a7a30dd43b23be4fec57cea07588ff7da1504387acabb72aea4f3d986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03788630dfeb5aa5b41ffeeb0fbe50585c3176f933b347abd781e8d79f80759->leave($__internal_f03788630dfeb5aa5b41ffeeb0fbe50585c3176f933b347abd781e8d79f80759_prof);

        
        $__internal_40326d8a7a30dd43b23be4fec57cea07588ff7da1504387acabb72aea4f3d986->leave($__internal_40326d8a7a30dd43b23be4fec57cea07588ff7da1504387acabb72aea4f3d986_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf6aba4d4c6970469eda8a7ebd922d174847e4f3f60b51309f3bf3ec18c5d657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6aba4d4c6970469eda8a7ebd922d174847e4f3f60b51309f3bf3ec18c5d657->enter($__internal_cf6aba4d4c6970469eda8a7ebd922d174847e4f3f60b51309f3bf3ec18c5d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70fa3a78ed0a5e4193562cd6e6794f26376e6c9e823f7509f84c21195d2674a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fa3a78ed0a5e4193562cd6e6794f26376e6c9e823f7509f84c21195d2674a7->enter($__internal_70fa3a78ed0a5e4193562cd6e6794f26376e6c9e823f7509f84c21195d2674a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70fa3a78ed0a5e4193562cd6e6794f26376e6c9e823f7509f84c21195d2674a7->leave($__internal_70fa3a78ed0a5e4193562cd6e6794f26376e6c9e823f7509f84c21195d2674a7_prof);

        
        $__internal_cf6aba4d4c6970469eda8a7ebd922d174847e4f3f60b51309f3bf3ec18c5d657->leave($__internal_cf6aba4d4c6970469eda8a7ebd922d174847e4f3f60b51309f3bf3ec18c5d657_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9daf7d6694ad21ace82c84ea3b813446379a4221a24e7594d0155c9e7a8226e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9daf7d6694ad21ace82c84ea3b813446379a4221a24e7594d0155c9e7a8226e6->enter($__internal_9daf7d6694ad21ace82c84ea3b813446379a4221a24e7594d0155c9e7a8226e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dba029c743549e198f7fdc4579c8708b42c090200d739fef46e7e7a283271129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba029c743549e198f7fdc4579c8708b42c090200d739fef46e7e7a283271129->enter($__internal_dba029c743549e198f7fdc4579c8708b42c090200d739fef46e7e7a283271129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dba029c743549e198f7fdc4579c8708b42c090200d739fef46e7e7a283271129->leave($__internal_dba029c743549e198f7fdc4579c8708b42c090200d739fef46e7e7a283271129_prof);

        
        $__internal_9daf7d6694ad21ace82c84ea3b813446379a4221a24e7594d0155c9e7a8226e6->leave($__internal_9daf7d6694ad21ace82c84ea3b813446379a4221a24e7594d0155c9e7a8226e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4f911b3c40368b089ccde0802731f7509941dc43050faac4503935660611ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f911b3c40368b089ccde0802731f7509941dc43050faac4503935660611ea3->enter($__internal_f4f911b3c40368b089ccde0802731f7509941dc43050faac4503935660611ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ffed87f270ae97b38b3a37c8d6b694ee53a300c6d09837400ef5c244e83eff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffed87f270ae97b38b3a37c8d6b694ee53a300c6d09837400ef5c244e83eff4->enter($__internal_3ffed87f270ae97b38b3a37c8d6b694ee53a300c6d09837400ef5c244e83eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ffed87f270ae97b38b3a37c8d6b694ee53a300c6d09837400ef5c244e83eff4->leave($__internal_3ffed87f270ae97b38b3a37c8d6b694ee53a300c6d09837400ef5c244e83eff4_prof);

        
        $__internal_f4f911b3c40368b089ccde0802731f7509941dc43050faac4503935660611ea3->leave($__internal_f4f911b3c40368b089ccde0802731f7509941dc43050faac4503935660611ea3_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
