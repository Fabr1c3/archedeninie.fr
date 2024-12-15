<?php

use Matomo\Dependencies\Twig\Environment;
use Matomo\Dependencies\Twig\Error\LoaderError;
use Matomo\Dependencies\Twig\Error\RuntimeError;
use Matomo\Dependencies\Twig\Extension\CoreExtension;
use Matomo\Dependencies\Twig\Extension\SandboxExtension;
use Matomo\Dependencies\Twig\Markup;
use Matomo\Dependencies\Twig\Sandbox\SecurityError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedTagError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedFilterError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Matomo\Dependencies\Twig\Source;
use Matomo\Dependencies\Twig\Template;

/* _jsCssIncludes.twig */
class __TwigTemplate_d60635bc66f9d339ea989902951ea404 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        yield $this->env->getFunction('includeAssets')->getCallable()(["type" => "css"]);
        yield "
    ";
        // line 3
        yield $this->env->getFunction('includeAssets')->getCallable()(["type" => "js", "defer" => ((array_key_exists("deferjs", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["deferjs"]) || array_key_exists("deferjs", $context) ? $context["deferjs"] : (function () { throw new RuntimeError('Variable "deferjs" does not exist.', 3, $this->source); })()), false)) : (false))]);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_jsCssIncludes.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    {{ includeAssets({\"type\": \"css\"}) }}
    {{ includeAssets({\"type\": \"js\", \"defer\": deferjs|default(false) }) }}
{% endautoescape %}
", "_jsCssIncludes.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/Morpheus/templates/_jsCssIncludes.twig");
    }
}
