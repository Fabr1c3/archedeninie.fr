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

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_f3339a7b1688b53de53cbd19dc4b3e8e extends Template
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
        yield "<script type=\"text/javascript\">
    \$(document).ready(function () {
        window.Vue.nextTick(function () {
            require('piwik/UI/DataTable').initNewDataTables(";
        // line 4
        yield json_encode((isset($context["reportId"]) || array_key_exists("reportId", $context) ? $context["reportId"] : (function () { throw new RuntimeError('Variable "reportId" does not exist.', 4, $this->source); })()));
        yield ");
        });
    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
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
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function () {
        window.Vue.nextTick(function () {
            require('piwik/UI/DataTable').initNewDataTables({{ reportId|json_encode|raw }});
        });
    });
</script>
", "@CoreHome/_dataTableJS.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_dataTableJS.twig");
    }
}
