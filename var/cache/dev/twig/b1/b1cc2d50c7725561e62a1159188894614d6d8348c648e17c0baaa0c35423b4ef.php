<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f61fd54696004b9c8edb194c7c2a4a91ab3c46a746f6ce731dd45c2ae77db7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284fd105be76a1d4500fb7702dc285079f3e75488e52ee3519bb7c7f40440e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284fd105be76a1d4500fb7702dc285079f3e75488e52ee3519bb7c7f40440e00->enter($__internal_284fd105be76a1d4500fb7702dc285079f3e75488e52ee3519bb7c7f40440e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_465557bc935c92b22a04fca0c63d127f0779b74356a8863324d817b041123668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465557bc935c92b22a04fca0c63d127f0779b74356a8863324d817b041123668->enter($__internal_465557bc935c92b22a04fca0c63d127f0779b74356a8863324d817b041123668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284fd105be76a1d4500fb7702dc285079f3e75488e52ee3519bb7c7f40440e00->leave($__internal_284fd105be76a1d4500fb7702dc285079f3e75488e52ee3519bb7c7f40440e00_prof);

        
        $__internal_465557bc935c92b22a04fca0c63d127f0779b74356a8863324d817b041123668->leave($__internal_465557bc935c92b22a04fca0c63d127f0779b74356a8863324d817b041123668_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d39d53fa26db0c89db883b7f34fc0da5919a2c9158bc9230a2bda1c74247717f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39d53fa26db0c89db883b7f34fc0da5919a2c9158bc9230a2bda1c74247717f->enter($__internal_d39d53fa26db0c89db883b7f34fc0da5919a2c9158bc9230a2bda1c74247717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1aecb1b0961ee3979a964b16755894de1d3477d852bfeb32b9abcef6d4c89925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aecb1b0961ee3979a964b16755894de1d3477d852bfeb32b9abcef6d4c89925->enter($__internal_1aecb1b0961ee3979a964b16755894de1d3477d852bfeb32b9abcef6d4c89925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1aecb1b0961ee3979a964b16755894de1d3477d852bfeb32b9abcef6d4c89925->leave($__internal_1aecb1b0961ee3979a964b16755894de1d3477d852bfeb32b9abcef6d4c89925_prof);

        
        $__internal_d39d53fa26db0c89db883b7f34fc0da5919a2c9158bc9230a2bda1c74247717f->leave($__internal_d39d53fa26db0c89db883b7f34fc0da5919a2c9158bc9230a2bda1c74247717f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae52b50b2223ac18b895e8979b30701e5bf538faf0538db5911799317e806338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae52b50b2223ac18b895e8979b30701e5bf538faf0538db5911799317e806338->enter($__internal_ae52b50b2223ac18b895e8979b30701e5bf538faf0538db5911799317e806338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38e58e605812e469c4375dc584ab9657f0a0d2bd2d8dbbf73bf8c10279e7be37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e58e605812e469c4375dc584ab9657f0a0d2bd2d8dbbf73bf8c10279e7be37->enter($__internal_38e58e605812e469c4375dc584ab9657f0a0d2bd2d8dbbf73bf8c10279e7be37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38e58e605812e469c4375dc584ab9657f0a0d2bd2d8dbbf73bf8c10279e7be37->leave($__internal_38e58e605812e469c4375dc584ab9657f0a0d2bd2d8dbbf73bf8c10279e7be37_prof);

        
        $__internal_ae52b50b2223ac18b895e8979b30701e5bf538faf0538db5911799317e806338->leave($__internal_ae52b50b2223ac18b895e8979b30701e5bf538faf0538db5911799317e806338_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8001c2fc8a8327a18519a2605c349227af77d7876b3c6dc83386d4b26e8ab766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8001c2fc8a8327a18519a2605c349227af77d7876b3c6dc83386d4b26e8ab766->enter($__internal_8001c2fc8a8327a18519a2605c349227af77d7876b3c6dc83386d4b26e8ab766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1309dc0d35b9ac3e7f0ec8fdbc3f27691eaa87ee0f65bc8a8969953766701448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1309dc0d35b9ac3e7f0ec8fdbc3f27691eaa87ee0f65bc8a8969953766701448->enter($__internal_1309dc0d35b9ac3e7f0ec8fdbc3f27691eaa87ee0f65bc8a8969953766701448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1309dc0d35b9ac3e7f0ec8fdbc3f27691eaa87ee0f65bc8a8969953766701448->leave($__internal_1309dc0d35b9ac3e7f0ec8fdbc3f27691eaa87ee0f65bc8a8969953766701448_prof);

        
        $__internal_8001c2fc8a8327a18519a2605c349227af77d7876b3c6dc83386d4b26e8ab766->leave($__internal_8001c2fc8a8327a18519a2605c349227af77d7876b3c6dc83386d4b26e8ab766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
