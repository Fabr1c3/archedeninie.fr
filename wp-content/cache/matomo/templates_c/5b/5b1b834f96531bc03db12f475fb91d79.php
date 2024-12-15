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

/* @CoreHome/_adblockDetect.twig */
class __TwigTemplate_484a2fae1d210cbb0eac4e51c12a429a extends Template
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
        yield "<div id=\"bottomAd\" style=\"font-size: 2px;\">&nbsp;</div>
<script type=\"text/javascript\">
    window.addEventListener('DOMContentLoaded', function () {
        if ('undefined' === (typeof hasBlockedContent) || hasBlockedContent !== false) {
            ";
        // line 6
        yield "            (function () {
                ";
        // line 8
        yield "                var body = document.getElementsByTagName('body');

                if (!body || !body[0]) {
                    return;
                }

                var bottomAd = document.getElementById('bottomAd');
                var wasMostLikelyCausedByAdblock = false;

                if (!bottomAd) {
                    wasMostLikelyCausedByAdblock = true;
                } else if (bottomAd.style && bottomAd.style.display === 'none') {
                    wasMostLikelyCausedByAdblock = true;
                } else if ('undefined' !== (typeof bottomAd.clientHeight) && bottomAd.clientHeight === 0) {
                    wasMostLikelyCausedByAdblock = true;
                }

                if (wasMostLikelyCausedByAdblock) {
                    var shouldGetHiddenElement = document.getElementById(\"should-get-hidden\");
                    var warning = document.createElement('p');
                    warning.innerText = '";
        // line 28
        yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_AdblockIsMaybeUsed"), "js"), "html", null, true);
        yield "';

                    if (shouldGetHiddenElement) {
                        shouldGetHiddenElement.appendChild(warning);
                    } else {
                        body[0].insertBefore(warning, body[0].firstChild);
                        warning.style.color = 'red';
                        warning.style.fontWeight = 'bold';
                        warning.style.marginLeft = '16px';
                        warning.style.marginBottom = '16px';
                        warning.style.fontSize = '20px';
                    }
                }
            })();
        }
    });
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_adblockDetect.twig";
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
        return array (  69 => 28,  47 => 8,  44 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"bottomAd\" style=\"font-size: 2px;\">&nbsp;</div>
<script type=\"text/javascript\">
    window.addEventListener('DOMContentLoaded', function () {
        if ('undefined' === (typeof hasBlockedContent) || hasBlockedContent !== false) {
            {# if hasBlockedContent was \"false\" most likely nothing was blocked #}
            (function () {
                {# most likely jQuery is not available, have to use vanilla JS here #}
                var body = document.getElementsByTagName('body');

                if (!body || !body[0]) {
                    return;
                }

                var bottomAd = document.getElementById('bottomAd');
                var wasMostLikelyCausedByAdblock = false;

                if (!bottomAd) {
                    wasMostLikelyCausedByAdblock = true;
                } else if (bottomAd.style && bottomAd.style.display === 'none') {
                    wasMostLikelyCausedByAdblock = true;
                } else if ('undefined' !== (typeof bottomAd.clientHeight) && bottomAd.clientHeight === 0) {
                    wasMostLikelyCausedByAdblock = true;
                }

                if (wasMostLikelyCausedByAdblock) {
                    var shouldGetHiddenElement = document.getElementById(\"should-get-hidden\");
                    var warning = document.createElement('p');
                    warning.innerText = '{{ 'CoreHome_AdblockIsMaybeUsed'|translate|e('js') }}';

                    if (shouldGetHiddenElement) {
                        shouldGetHiddenElement.appendChild(warning);
                    } else {
                        body[0].insertBefore(warning, body[0].firstChild);
                        warning.style.color = 'red';
                        warning.style.fontWeight = 'bold';
                        warning.style.marginLeft = '16px';
                        warning.style.marginBottom = '16px';
                        warning.style.fontSize = '20px';
                    }
                }
            })();
        }
    });
</script>", "@CoreHome/_adblockDetect.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_adblockDetect.twig");
    }
}
