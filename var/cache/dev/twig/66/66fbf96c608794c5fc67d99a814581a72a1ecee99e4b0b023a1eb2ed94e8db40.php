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
        $__internal_3bc70cf8454580145cccf268090c361f5912e1d9b202fbfdbc35814bc75744c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc70cf8454580145cccf268090c361f5912e1d9b202fbfdbc35814bc75744c4->enter($__internal_3bc70cf8454580145cccf268090c361f5912e1d9b202fbfdbc35814bc75744c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_2742d4f69c52592094b4c749ce6c01e5ea1dca80c21ae1172cecbd475e5779fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2742d4f69c52592094b4c749ce6c01e5ea1dca80c21ae1172cecbd475e5779fb->enter($__internal_2742d4f69c52592094b4c749ce6c01e5ea1dca80c21ae1172cecbd475e5779fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_3bc70cf8454580145cccf268090c361f5912e1d9b202fbfdbc35814bc75744c4->leave($__internal_3bc70cf8454580145cccf268090c361f5912e1d9b202fbfdbc35814bc75744c4_prof);

        
        $__internal_2742d4f69c52592094b4c749ce6c01e5ea1dca80c21ae1172cecbd475e5779fb->leave($__internal_2742d4f69c52592094b4c749ce6c01e5ea1dca80c21ae1172cecbd475e5779fb_prof);

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
", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
