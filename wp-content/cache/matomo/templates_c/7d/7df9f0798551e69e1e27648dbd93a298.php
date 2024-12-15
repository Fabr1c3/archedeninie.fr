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

/* @CoreHome/_warningInvalidHost.twig */
class __TwigTemplate_647d5d892265a24426bc0f6ef9d57e36 extends Template
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
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 2, $this->source); })()) == false))) {
            // line 3
            yield "    ";
            $context["invalidHostText"] = ('' === $tmp = \Matomo\Dependencies\Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 4
                yield "        <a class=\"btn btn-link\" style=\"float:right;\" href=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/faq/troubleshooting/faq_171"), "html", null, true);
                yield "\" rel=\"noreferrer noopener\" target=\"_blank\">
            <span class=\"icon-help\"></span>
            ";
                // line 6
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
                yield "
        </a>
        <strong>";
                // line 8
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Warning"), "html", null, true);
                yield ":&nbsp;</strong>";
                yield (isset($context["invalidHostMessage"]) || array_key_exists("invalidHostMessage", $context) ? $context["invalidHostMessage"] : (function () { throw new RuntimeError('Variable "invalidHostMessage" does not exist.', 8, $this->source); })());
                yield "

        <br>
        <br>

        ";
                // line 13
                yield (isset($context["invalidHostMessageHowToFix"]) || array_key_exists("invalidHostMessageHowToFix", $context) ? $context["invalidHostMessageHowToFix"] : (function () { throw new RuntimeError('Variable "invalidHostMessageHowToFix" does not exist.', 13, $this->source); })());
                yield "
    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            yield "
    <div style=\"clear:both;width:800px;\">
        ";
            // line 17
            yield $this->env->getFilter('notification')->getCallable()((isset($context["invalidHostText"]) || array_key_exists("invalidHostText", $context) ? $context["invalidHostText"] : (function () { throw new RuntimeError('Variable "invalidHostText" does not exist.', 17, $this->source); })()), ["noclear" => true, "raw" => true, "context" => "warning"]);
            yield "
    </div>

";
        }
        // line 21
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_warningInvalidHost.twig";
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
        return array (  81 => 21,  74 => 17,  70 => 15,  64 => 13,  54 => 8,  49 => 6,  43 => 4,  40 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# untrusted host warning #}
{% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
    {% set invalidHostText %}
        <a class=\"btn btn-link\" style=\"float:right;\" href=\"{{ 'https://matomo.org/faq/troubleshooting/faq_171'|trackmatomolink }}\" rel=\"noreferrer noopener\" target=\"_blank\">
            <span class=\"icon-help\"></span>
            {{ 'General_Help'|translate }}
        </a>
        <strong>{{ 'General_Warning'|translate }}:&nbsp;</strong>{{ invalidHostMessage|raw }}

        <br>
        <br>

        {{ invalidHostMessageHowToFix|raw }}
    {% endset %}

    <div style=\"clear:both;width:800px;\">
        {{ invalidHostText|notification({'noclear': true, 'raw': true, 'context': 'warning'}) }}
    </div>

{% endif %}

", "@CoreHome/_warningInvalidHost.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_warningInvalidHost.twig");
    }
}
