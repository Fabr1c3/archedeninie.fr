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

/* @Dashboard/_widgetFactoryTemplate.twig */
class __TwigTemplate_b904bf266888b41d50d6497aebff222a extends Template
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
        yield "<div id=\"widgetTemplate\" style=\"display:none;\">
    <div class=\"widget\">
        <div class=\"widgetTop\">
            <div class=\"buttons\">
                <div class=\"button\" id=\"close\">
                    <span class=\"icon-close\" title=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Close"), "html", null, true);
        yield "\"></span>
                </div>
                <div class=\"button\" id=\"maximise\">
                    <span class=\"icon-fullscreen\" title=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Maximise"), "html", null, true);
        yield "\"></span>
                </div>
                <div class=\"button\" id=\"minimise\">
                    <span class=\"icon-minimise\" title=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Minimise"), "html", null, true);
        yield "\"></span>
                </div>
                <div class=\"button\" id=\"refresh\">
                    <span class=\"icon-reload\" title=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Refresh"), "html", null, true);
        yield "\"></span>
                </div>
            </div>
            <h3 class=\"widgetName\">";
        // line 18
        if (array_key_exists("widgetName", $context)) {
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 18, $this->source); })()), "html", null, true);
        }
        // line 19
        yield "                <div class=\"widgetNameOffScreen\">
                    ";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Widget"), "html", null, true);
        yield "
                </div>
            </h3>
        </div>
        <div class=\"widgetContent\">
            <div class=\"widgetLoading\">";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_LoadingWidget"), "html", null, true);
        yield "</div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Dashboard/_widgetFactoryTemplate.twig";
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
        return array (  84 => 25,  76 => 20,  73 => 19,  69 => 18,  63 => 15,  57 => 12,  51 => 9,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"widgetTemplate\" style=\"display:none;\">
    <div class=\"widget\">
        <div class=\"widgetTop\">
            <div class=\"buttons\">
                <div class=\"button\" id=\"close\">
                    <span class=\"icon-close\" title=\"{{ 'General_Close'|translate }}\"></span>
                </div>
                <div class=\"button\" id=\"maximise\">
                    <span class=\"icon-fullscreen\" title=\"{{ 'Dashboard_Maximise'|translate }}\"></span>
                </div>
                <div class=\"button\" id=\"minimise\">
                    <span class=\"icon-minimise\" title=\"{{ 'Dashboard_Minimise'|translate }}\"></span>
                </div>
                <div class=\"button\" id=\"refresh\">
                    <span class=\"icon-reload\" title=\"{{ 'General_Refresh'|translate }}\"></span>
                </div>
            </div>
            <h3 class=\"widgetName\">{% if widgetName is defined %}{{ widgetName }}{% endif %}
                <div class=\"widgetNameOffScreen\">
                    {{ 'General_Widget'|translate }}
                </div>
            </h3>
        </div>
        <div class=\"widgetContent\">
            <div class=\"widgetLoading\">{{ 'Dashboard_LoadingWidget'|translate }}</div>
        </div>
    </div>
</div>
", "@Dashboard/_widgetFactoryTemplate.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/Dashboard/templates/_widgetFactoryTemplate.twig");
    }
}
