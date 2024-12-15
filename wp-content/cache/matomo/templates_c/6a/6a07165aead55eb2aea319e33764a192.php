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

/* @Live/index.twig */
class __TwigTemplate_7548c260ad389adef9489ae81d41e861 extends Template
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
        yield "<div
    vue-entry=\"Live.LivePage\"
    disable-link=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Matomo\Dependencies\Twig\Extension\CoreExtension::default(((isset($context["disableLink"]) || array_key_exists("disableLink", $context) ? $context["disableLink"] : (function () { throw new RuntimeError('Variable "disableLink" does not exist.', 3, $this->source); })()) == 1), null)), "html", null, true);
        yield "\"
    visitors=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("visitors", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 4, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    initial-total-visitors=\"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("initialTotalVisitors", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["initialTotalVisitors"]) || array_key_exists("initialTotalVisitors", $context) ? $context["initialTotalVisitors"] : (function () { throw new RuntimeError('Variable "initialTotalVisitors" does not exist.', 5, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    live-refresh-after-ms=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("liveRefreshAfterMs", $context)) ? (Matomo\Dependencies\Twig\Extension\CoreExtension::default((isset($context["liveRefreshAfterMs"]) || array_key_exists("liveRefreshAfterMs", $context) ? $context["liveRefreshAfterMs"] : (function () { throw new RuntimeError('Variable "liveRefreshAfterMs" does not exist.', 6, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    is-widgetized=\"";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Matomo\Dependencies\Twig\Extension\CoreExtension::default(((isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 7, $this->source); })()) == 1), null)), "html", null, true);
        yield "\"
></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/index.twig";
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
        return array (  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    vue-entry=\"Live.LivePage\"
    disable-link=\"{{ (disableLink == 1)|default(null)|json_encode }}\"
    visitors=\"{{ visitors|default(null)|json_encode }}\"
    initial-total-visitors=\"{{ initialTotalVisitors|default(null)|json_encode }}\"
    live-refresh-after-ms=\"{{ liveRefreshAfterMs|default(null)|json_encode }}\"
    is-widgetized=\"{{ (isWidgetized == 1)|default(null)|json_encode }}\"
></div>
", "@Live/index.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/Live/templates/index.twig");
    }
}
