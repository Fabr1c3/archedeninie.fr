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

/* @GeoIp2/serverModule.twig */
class __TwigTemplate_3596d6c50a3fc466e7ef4049fb54c50a extends Template
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
        yield "<br />";
        yield $this->env->getFilter('translate')->getCallable()("GeoIp2_GeoIPVariablesConfigurationHere", (("<a href=\"" . \Piwik\piwik_escape_filter($this->env, (isset($context["configUrl"]) || array_key_exists("configUrl", $context) ? $context["configUrl"] : (function () { throw new RuntimeError('Variable "configUrl" does not exist.', 1, $this->source); })()), "html_attr")) . "\">"), "</a>");
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@GeoIp2/serverModule.twig";
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
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<br />{{ 'GeoIp2_GeoIPVariablesConfigurationHere'|translate('<a href=\"' ~ configUrl|e('html_attr') ~ '\">', '</a>')|raw }}", "@GeoIp2/serverModule.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/GeoIp2/templates/serverModule.twig");
    }
}
