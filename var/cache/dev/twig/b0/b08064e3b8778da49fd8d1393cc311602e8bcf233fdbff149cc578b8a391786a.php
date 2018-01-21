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
        $__internal_e169810b61dfc6d83fbd8ca7aaec7618ea9aff73d2dbaa491adfc7d0b5f10920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e169810b61dfc6d83fbd8ca7aaec7618ea9aff73d2dbaa491adfc7d0b5f10920->enter($__internal_e169810b61dfc6d83fbd8ca7aaec7618ea9aff73d2dbaa491adfc7d0b5f10920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e6d6331b70dfa1604a114d7ad8a0247cdf6eb95d6b013350ae0551791b1a4d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d6331b70dfa1604a114d7ad8a0247cdf6eb95d6b013350ae0551791b1a4d3e->enter($__internal_e6d6331b70dfa1604a114d7ad8a0247cdf6eb95d6b013350ae0551791b1a4d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e169810b61dfc6d83fbd8ca7aaec7618ea9aff73d2dbaa491adfc7d0b5f10920->leave($__internal_e169810b61dfc6d83fbd8ca7aaec7618ea9aff73d2dbaa491adfc7d0b5f10920_prof);

        
        $__internal_e6d6331b70dfa1604a114d7ad8a0247cdf6eb95d6b013350ae0551791b1a4d3e->leave($__internal_e6d6331b70dfa1604a114d7ad8a0247cdf6eb95d6b013350ae0551791b1a4d3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f4cd5334c9e2156ba4af3d634c326c40c59c61db09f55d830d617a0f2012330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4cd5334c9e2156ba4af3d634c326c40c59c61db09f55d830d617a0f2012330->enter($__internal_8f4cd5334c9e2156ba4af3d634c326c40c59c61db09f55d830d617a0f2012330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89213c06b07a9e12b1a822e3bb4ae4539622c9f15da93df6243ca59aa2d445da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89213c06b07a9e12b1a822e3bb4ae4539622c9f15da93df6243ca59aa2d445da->enter($__internal_89213c06b07a9e12b1a822e3bb4ae4539622c9f15da93df6243ca59aa2d445da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_89213c06b07a9e12b1a822e3bb4ae4539622c9f15da93df6243ca59aa2d445da->leave($__internal_89213c06b07a9e12b1a822e3bb4ae4539622c9f15da93df6243ca59aa2d445da_prof);

        
        $__internal_8f4cd5334c9e2156ba4af3d634c326c40c59c61db09f55d830d617a0f2012330->leave($__internal_8f4cd5334c9e2156ba4af3d634c326c40c59c61db09f55d830d617a0f2012330_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9d3e37f0deaa522dd345669d33bef2926e28ce6092794f5c9e7141bba42b6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d3e37f0deaa522dd345669d33bef2926e28ce6092794f5c9e7141bba42b6cb->enter($__internal_b9d3e37f0deaa522dd345669d33bef2926e28ce6092794f5c9e7141bba42b6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1cefb5a70527293bb3c75789d5c7d4b2310f9b7f4fdb236063cfbc18e3fa3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cefb5a70527293bb3c75789d5c7d4b2310f9b7f4fdb236063cfbc18e3fa3f0->enter($__internal_f1cefb5a70527293bb3c75789d5c7d4b2310f9b7f4fdb236063cfbc18e3fa3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1cefb5a70527293bb3c75789d5c7d4b2310f9b7f4fdb236063cfbc18e3fa3f0->leave($__internal_f1cefb5a70527293bb3c75789d5c7d4b2310f9b7f4fdb236063cfbc18e3fa3f0_prof);

        
        $__internal_b9d3e37f0deaa522dd345669d33bef2926e28ce6092794f5c9e7141bba42b6cb->leave($__internal_b9d3e37f0deaa522dd345669d33bef2926e28ce6092794f5c9e7141bba42b6cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50fcffd58e39c8c541040ee152c8082e37f8efaf3f79379cc812276f423f54eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fcffd58e39c8c541040ee152c8082e37f8efaf3f79379cc812276f423f54eb->enter($__internal_50fcffd58e39c8c541040ee152c8082e37f8efaf3f79379cc812276f423f54eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_716b81cda2cc158a85416a7333c1c9bcb132617329c52a65055b8acc1b05f686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716b81cda2cc158a85416a7333c1c9bcb132617329c52a65055b8acc1b05f686->enter($__internal_716b81cda2cc158a85416a7333c1c9bcb132617329c52a65055b8acc1b05f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_716b81cda2cc158a85416a7333c1c9bcb132617329c52a65055b8acc1b05f686->leave($__internal_716b81cda2cc158a85416a7333c1c9bcb132617329c52a65055b8acc1b05f686_prof);

        
        $__internal_50fcffd58e39c8c541040ee152c8082e37f8efaf3f79379cc812276f423f54eb->leave($__internal_50fcffd58e39c8c541040ee152c8082e37f8efaf3f79379cc812276f423f54eb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
