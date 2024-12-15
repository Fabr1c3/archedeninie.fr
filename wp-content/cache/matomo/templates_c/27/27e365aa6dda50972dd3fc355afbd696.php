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

/* @TagManager/helpContent.twig */
class __TwigTemplate_76a90168bafcdabe585e91e04b5ffee5 extends Template
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
        // line 1
        if ((array_key_exists("subHeading", $context) && (isset($context["subHeading"]) || array_key_exists("subHeading", $context) ? $context["subHeading"] : (function () { throw new RuntimeError('Variable "subHeading" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "<p><strong>";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["subHeading"]) || array_key_exists("subHeading", $context) ? $context["subHeading"] : (function () { throw new RuntimeError('Variable "subHeading" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "</strong></p>
";
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paragraphs"]) || array_key_exists("paragraphs", $context) ? $context["paragraphs"] : (function () { throw new RuntimeError('Variable "paragraphs" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 5
            yield "<p>";
            yield $context["paragraph"];
            yield "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TagManager/helpContent.twig";
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
        return array (  50 => 5,  46 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if subHeading is defined and subHeading %}
<p><strong>{{ subHeading }}</strong></p>
{% endif %}
{% for paragraph in paragraphs %}
<p>{{ paragraph|raw }}</p>
{% endfor %}", "@TagManager/helpContent.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/TagManager/templates/helpContent.twig");
    }
}
