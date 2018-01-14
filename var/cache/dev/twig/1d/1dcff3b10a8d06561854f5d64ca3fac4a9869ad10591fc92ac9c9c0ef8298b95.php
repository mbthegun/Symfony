<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_6ffafccb5db0ee1beb031a0d0bff508688477f4ef2490e9b2fd4efd5b9372b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc1a106f13ec4222e29f6418c55d916f8622a7b0d886eca579120b13b65071d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1a106f13ec4222e29f6418c55d916f8622a7b0d886eca579120b13b65071d6->enter($__internal_bc1a106f13ec4222e29f6418c55d916f8622a7b0d886eca579120b13b65071d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_4d502b120cc552889276d51884db47b65ec91e94e177aceebbe561a265fb296b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d502b120cc552889276d51884db47b65ec91e94e177aceebbe561a265fb296b->enter($__internal_4d502b120cc552889276d51884db47b65ec91e94e177aceebbe561a265fb296b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
  <body>
    Hello World!
  </body>
</html>";
        
        $__internal_bc1a106f13ec4222e29f6418c55d916f8622a7b0d886eca579120b13b65071d6->leave($__internal_bc1a106f13ec4222e29f6418c55d916f8622a7b0d886eca579120b13b65071d6_prof);

        
        $__internal_4d502b120cc552889276d51884db47b65ec91e94e177aceebbe561a265fb296b->leave($__internal_4d502b120cc552889276d51884db47b65ec91e94e177aceebbe561a265fb296b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Default/index.html.twig #}

<html>
  <body>
    Hello World!
  </body>
</html>", "OCPlatformBundle:Default:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
