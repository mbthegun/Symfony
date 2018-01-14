<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98cb1827b63b6cc1f05aa3ebb130df63f45ae3dd5437027770e8f51c0b8dfdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cb1827b63b6cc1f05aa3ebb130df63f45ae3dd5437027770e8f51c0b8dfdb6->enter($__internal_98cb1827b63b6cc1f05aa3ebb130df63f45ae3dd5437027770e8f51c0b8dfdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_55295195d2a7d0a70e945fc49b259962e2b12e861bdb6ca8aba5c98b9951d664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55295195d2a7d0a70e945fc49b259962e2b12e861bdb6ca8aba5c98b9951d664->enter($__internal_55295195d2a7d0a70e945fc49b259962e2b12e861bdb6ca8aba5c98b9951d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_98cb1827b63b6cc1f05aa3ebb130df63f45ae3dd5437027770e8f51c0b8dfdb6->leave($__internal_98cb1827b63b6cc1f05aa3ebb130df63f45ae3dd5437027770e8f51c0b8dfdb6_prof);

        
        $__internal_55295195d2a7d0a70e945fc49b259962e2b12e861bdb6ca8aba5c98b9951d664->leave($__internal_55295195d2a7d0a70e945fc49b259962e2b12e861bdb6ca8aba5c98b9951d664_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f8f40ab7160f9ff0e3857f04aeadf3862a068b7b6079ba81e653a93707c969b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8f40ab7160f9ff0e3857f04aeadf3862a068b7b6079ba81e653a93707c969b->enter($__internal_5f8f40ab7160f9ff0e3857f04aeadf3862a068b7b6079ba81e653a93707c969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd231345a60d980e7124f833b00506a006a7fde9f3f2dd9a679453e11ce173a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd231345a60d980e7124f833b00506a006a7fde9f3f2dd9a679453e11ce173a9->enter($__internal_cd231345a60d980e7124f833b00506a006a7fde9f3f2dd9a679453e11ce173a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cd231345a60d980e7124f833b00506a006a7fde9f3f2dd9a679453e11ce173a9->leave($__internal_cd231345a60d980e7124f833b00506a006a7fde9f3f2dd9a679453e11ce173a9_prof);

        
        $__internal_5f8f40ab7160f9ff0e3857f04aeadf3862a068b7b6079ba81e653a93707c969b->leave($__internal_5f8f40ab7160f9ff0e3857f04aeadf3862a068b7b6079ba81e653a93707c969b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_08f95234b64ff465bd5fd479ffc173011ae8fb7475591bccff3ea85cc5de8dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f95234b64ff465bd5fd479ffc173011ae8fb7475591bccff3ea85cc5de8dd1->enter($__internal_08f95234b64ff465bd5fd479ffc173011ae8fb7475591bccff3ea85cc5de8dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_700c337713536f5e4c346f3ebcd98bea2d820db9aeda3aed4474652c9bda2657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700c337713536f5e4c346f3ebcd98bea2d820db9aeda3aed4474652c9bda2657->enter($__internal_700c337713536f5e4c346f3ebcd98bea2d820db9aeda3aed4474652c9bda2657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_700c337713536f5e4c346f3ebcd98bea2d820db9aeda3aed4474652c9bda2657->leave($__internal_700c337713536f5e4c346f3ebcd98bea2d820db9aeda3aed4474652c9bda2657_prof);

        
        $__internal_08f95234b64ff465bd5fd479ffc173011ae8fb7475591bccff3ea85cc5de8dd1->leave($__internal_08f95234b64ff465bd5fd479ffc173011ae8fb7475591bccff3ea85cc5de8dd1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_04d37e6e800ad0d6e144dc1641b1b96e78b656692c0ca724d7d1550a1d42262a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d37e6e800ad0d6e144dc1641b1b96e78b656692c0ca724d7d1550a1d42262a->enter($__internal_04d37e6e800ad0d6e144dc1641b1b96e78b656692c0ca724d7d1550a1d42262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3311f585b57d721b1898034e0572cfbf58cfd0bef60e3dbba659a6bd0afe62fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3311f585b57d721b1898034e0572cfbf58cfd0bef60e3dbba659a6bd0afe62fa->enter($__internal_3311f585b57d721b1898034e0572cfbf58cfd0bef60e3dbba659a6bd0afe62fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3311f585b57d721b1898034e0572cfbf58cfd0bef60e3dbba659a6bd0afe62fa->leave($__internal_3311f585b57d721b1898034e0572cfbf58cfd0bef60e3dbba659a6bd0afe62fa_prof);

        
        $__internal_04d37e6e800ad0d6e144dc1641b1b96e78b656692c0ca724d7d1550a1d42262a->leave($__internal_04d37e6e800ad0d6e144dc1641b1b96e78b656692c0ca724d7d1550a1d42262a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
