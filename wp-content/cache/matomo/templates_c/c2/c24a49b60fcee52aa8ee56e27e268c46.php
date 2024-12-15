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

/* @CoreHome/_singleWidget.twig */
class __TwigTemplate_8fc3a0cbd127742436e151a1011edb4a extends Template
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
        yield "<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })())), "html_attr");
        yield "\" vue-components=\"CoreHome.VueEntryContainer\">
    <vue-entry-container html=\"";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\"></vue-entry-container>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_singleWidget.twig";
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
        return array (  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ title|translate|e('html_attr') }}\" vue-components=\"CoreHome.VueEntryContainer\">
    <vue-entry-container html=\"{{ content }}\"></vue-entry-container>
</div>", "@CoreHome/_singleWidget.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_singleWidget.twig");
    }
}
