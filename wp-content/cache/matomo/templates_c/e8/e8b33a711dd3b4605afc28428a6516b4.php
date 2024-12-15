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

/* @CoreHome/_periodSelect.twig */
class __TwigTemplate_88a398956dd813bf4aa3acb879a4e740 extends Template
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
    id=\"periodString\"
    vue-entry=\"CoreHome.PeriodSelector\"
    periods=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["enabledPeriods"]) || array_key_exists("enabledPeriods", $context) ? $context["enabledPeriods"] : (function () { throw new RuntimeError('Variable "enabledPeriods" does not exist.', 4, $this->source); })())), "html_attr");
        yield "\"
    class=\"borderedControl piwikTopControl\"
>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_periodSelect.twig";
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
        return array (  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    id=\"periodString\"
    vue-entry=\"CoreHome.PeriodSelector\"
    periods=\"{{ enabledPeriods|json_encode|e('html_attr') }}\"
    class=\"borderedControl piwikTopControl\"
>
</div>
", "@CoreHome/_periodSelect.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_periodSelect.twig");
    }
}
