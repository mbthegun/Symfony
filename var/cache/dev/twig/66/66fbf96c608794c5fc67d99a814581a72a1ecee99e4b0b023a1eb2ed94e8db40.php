<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_743c897e6d52530ac27ea37dcf34600727bbc290d312ac05d13225f8d4601518 extends Twig_Template
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
        $__internal_f96b4aa5eae5bec404d1f13768ed72f08bc3ddcaacb7673ea715b5d94f606a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96b4aa5eae5bec404d1f13768ed72f08bc3ddcaacb7673ea715b5d94f606a31->enter($__internal_f96b4aa5eae5bec404d1f13768ed72f08bc3ddcaacb7673ea715b5d94f606a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_ebf01cc623e4eadb99d278816eedeee35955ed6243650d24c99943efbc7419c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf01cc623e4eadb99d278816eedeee35955ed6243650d24c99943efbc7419c9->enter($__internal_ebf01cc623e4eadb99d278816eedeee35955ed6243650d24c99943efbc7419c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_f96b4aa5eae5bec404d1f13768ed72f08bc3ddcaacb7673ea715b5d94f606a31->leave($__internal_f96b4aa5eae5bec404d1f13768ed72f08bc3ddcaacb7673ea715b5d94f606a31_prof);

        
        $__internal_ebf01cc623e4eadb99d278816eedeee35955ed6243650d24c99943efbc7419c9->leave($__internal_ebf01cc623e4eadb99d278816eedeee35955ed6243650d24c99943efbc7419c9_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello {{ nom }} !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
