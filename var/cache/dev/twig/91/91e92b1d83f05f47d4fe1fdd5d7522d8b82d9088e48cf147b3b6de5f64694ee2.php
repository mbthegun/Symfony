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
        $__internal_65df0aa315f405d65e9b6a0e165fb590337a51274c74a8143eb932d37bcc6d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65df0aa315f405d65e9b6a0e165fb590337a51274c74a8143eb932d37bcc6d26->enter($__internal_65df0aa315f405d65e9b6a0e165fb590337a51274c74a8143eb932d37bcc6d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bcb954d348344e1443dbd942052a6c0a210917ed18003580a462f5e215dcb0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb954d348344e1443dbd942052a6c0a210917ed18003580a462f5e215dcb0af->enter($__internal_bcb954d348344e1443dbd942052a6c0a210917ed18003580a462f5e215dcb0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_65df0aa315f405d65e9b6a0e165fb590337a51274c74a8143eb932d37bcc6d26->leave($__internal_65df0aa315f405d65e9b6a0e165fb590337a51274c74a8143eb932d37bcc6d26_prof);

        
        $__internal_bcb954d348344e1443dbd942052a6c0a210917ed18003580a462f5e215dcb0af->leave($__internal_bcb954d348344e1443dbd942052a6c0a210917ed18003580a462f5e215dcb0af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d74504eb9c7115eb2f4223d4dce69a81d8304f84a1d577187916f1f83eef2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d74504eb9c7115eb2f4223d4dce69a81d8304f84a1d577187916f1f83eef2ef->enter($__internal_9d74504eb9c7115eb2f4223d4dce69a81d8304f84a1d577187916f1f83eef2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e08c3a20ae6c352417cfac03b05538df1af91c5c95acb340ed1bbff86c61e11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08c3a20ae6c352417cfac03b05538df1af91c5c95acb340ed1bbff86c61e11d->enter($__internal_e08c3a20ae6c352417cfac03b05538df1af91c5c95acb340ed1bbff86c61e11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e08c3a20ae6c352417cfac03b05538df1af91c5c95acb340ed1bbff86c61e11d->leave($__internal_e08c3a20ae6c352417cfac03b05538df1af91c5c95acb340ed1bbff86c61e11d_prof);

        
        $__internal_9d74504eb9c7115eb2f4223d4dce69a81d8304f84a1d577187916f1f83eef2ef->leave($__internal_9d74504eb9c7115eb2f4223d4dce69a81d8304f84a1d577187916f1f83eef2ef_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6419932007a3afb190f83c6963cf65d0dc6ae6077f3f00110a06bf936379137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6419932007a3afb190f83c6963cf65d0dc6ae6077f3f00110a06bf936379137->enter($__internal_d6419932007a3afb190f83c6963cf65d0dc6ae6077f3f00110a06bf936379137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c856f01b35c72572183d1368cd7bc2d96740733b69fbe547d25e15e74f9fc6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c856f01b35c72572183d1368cd7bc2d96740733b69fbe547d25e15e74f9fc6a2->enter($__internal_c856f01b35c72572183d1368cd7bc2d96740733b69fbe547d25e15e74f9fc6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c856f01b35c72572183d1368cd7bc2d96740733b69fbe547d25e15e74f9fc6a2->leave($__internal_c856f01b35c72572183d1368cd7bc2d96740733b69fbe547d25e15e74f9fc6a2_prof);

        
        $__internal_d6419932007a3afb190f83c6963cf65d0dc6ae6077f3f00110a06bf936379137->leave($__internal_d6419932007a3afb190f83c6963cf65d0dc6ae6077f3f00110a06bf936379137_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd36f87dcdee875b00095ac090fd4c265b82047a56137434a669be999468efed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd36f87dcdee875b00095ac090fd4c265b82047a56137434a669be999468efed->enter($__internal_dd36f87dcdee875b00095ac090fd4c265b82047a56137434a669be999468efed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6891b9be5e05811531212254ea4c8fe0706438ddbdd888c409942c4e9f54600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6891b9be5e05811531212254ea4c8fe0706438ddbdd888c409942c4e9f54600c->enter($__internal_6891b9be5e05811531212254ea4c8fe0706438ddbdd888c409942c4e9f54600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6891b9be5e05811531212254ea4c8fe0706438ddbdd888c409942c4e9f54600c->leave($__internal_6891b9be5e05811531212254ea4c8fe0706438ddbdd888c409942c4e9f54600c_prof);

        
        $__internal_dd36f87dcdee875b00095ac090fd4c265b82047a56137434a669be999468efed->leave($__internal_dd36f87dcdee875b00095ac090fd4c265b82047a56137434a669be999468efed_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
