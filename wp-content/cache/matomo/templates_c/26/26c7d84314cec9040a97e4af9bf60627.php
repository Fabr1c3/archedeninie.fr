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

/* @Live/_totalVisitors.twig */
class __TwigTemplate_d94c86c81f0040156c01f1e900794dd3 extends Template
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
        yield "<div id=\"visitsTotal\">
    <div
        vue-entry=\"Live.TotalVisitors\"
        count-error-today=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("countErrorToday", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["countErrorToday"]) || array_key_exists("countErrorToday", $context) ? $context["countErrorToday"] : (function () { throw new RuntimeError('Variable "countErrorToday" does not exist.', 4, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        visitors-count-today=\"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Matomo\Dependencies\Twig\Extension\CoreExtension::default(((isset($context["visitorsCountToday"]) || array_key_exists("visitorsCountToday", $context) ? $context["visitorsCountToday"] : (function () { throw new RuntimeError('Variable "visitorsCountToday" does not exist.', 5, $this->source); })()) + 0), null)), "html", null, true);
        yield "\"
        pis-today=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pisToday", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["pisToday"]) || array_key_exists("pisToday", $context) ? $context["pisToday"] : (function () { throw new RuntimeError('Variable "pisToday" does not exist.', 6, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        count-error-half-hour=\"";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("countErrorHalfHour", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["countErrorHalfHour"]) || array_key_exists("countErrorHalfHour", $context) ? $context["countErrorHalfHour"] : (function () { throw new RuntimeError('Variable "countErrorHalfHour" does not exist.', 7, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        visitors-count-half-hour=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Matomo\Dependencies\Twig\Extension\CoreExtension::default(((isset($context["visitorsCountHalfHour"]) || array_key_exists("visitorsCountHalfHour", $context) ? $context["visitorsCountHalfHour"] : (function () { throw new RuntimeError('Variable "visitorsCountHalfHour" does not exist.', 8, $this->source); })()) + 0), null)), "html", null, true);
        yield "\"
        pis-halfhour=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pisHalfhour", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["pisHalfhour"]) || array_key_exists("pisHalfhour", $context) ? $context["pisHalfhour"] : (function () { throw new RuntimeError('Variable "pisHalfhour" does not exist.', 9, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    ></div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_totalVisitors.twig";
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
        return array (  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"visitsTotal\">
    <div
        vue-entry=\"Live.TotalVisitors\"
        count-error-today=\"{{ countErrorToday|default(null)|json_encode }}\"
        visitors-count-today=\"{{ (visitorsCountToday + 0)|default(null)|json_encode }}\"
        pis-today=\"{{ pisToday|default(null)|json_encode }}\"
        count-error-half-hour=\"{{ countErrorHalfHour|default(null)|json_encode }}\"
        visitors-count-half-hour=\"{{ (visitorsCountHalfHour + 0)|default(null)|json_encode }}\"
        pis-halfhour=\"{{ pisHalfhour|default(null)|json_encode }}\"
    ></div>
</div>
", "@Live/_totalVisitors.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/Live/templates/_totalVisitors.twig");
    }
}
