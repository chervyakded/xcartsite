<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig */
class __TwigTemplate_8e976d34ba53604e5d6b8e3eed8d9513958b9f8730ad8ec4045ae2ae7e950ba2 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isAmazonConfigured", [], "method")) {
            // line 7
            echo "  ";
            $context["amazonConfig"] = $this->getAttribute(($context["this"] ?? null), "getAmazonConfig", [], "method");
            // line 8
            echo "  <script>
    var amazonConfig = {
      sid: '";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "merchant_id", []), "html", null, true);
            echo "',
      mode: '";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "mode", []), "html", null, true);
            echo "',
      clientId: '";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "client_id", []), "html", null, true);
            echo "'
    };

    window.onAmazonLoginReady = function() {
      amazon.Login.setSandboxMode(";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isSandboxMode", [], "method"), "html", null, true);
            echo ");
      amazon.Login.setClientId(amazonConfig.clientId);
      amazon.Login.setRegion('";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "region", []), "html", null, true);
            echo "');
      amazon.Login.setUseCookie(true);

      ";
            // line 21
            if (( !$this->getAttribute(($context["this"] ?? null), "isLogged", [], "method") || (($this->getAttribute(($context["this"] ?? null), "getTarget", [], "method") == "cart") && $this->getAttribute(($context["this"] ?? null), "isAmazonReturn", [], "method")))) {
                // line 22
                echo "      if (xliteConfig.target !== 'amazon_checkout') {
        amazon.Login.logout();
      }
      ";
            }
            // line 26
            echo "    };

    window.onAmazonPaymentsReady = function () {
      define('Amazon/Config', function () {
        return amazonConfig;
      });
    }
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  67 => 22,  65 => 21,  59 => 18,  54 => 16,  47 => 12,  43 => 11,  39 => 10,  35 => 8,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{##
 # Template
 #
 # @ListChild (list=\"head\", weight=\"1310\")
 #}
{% if this.isAmazonConfigured() %}
  {% set amazonConfig = this.getAmazonConfig() %}
  <script>
    var amazonConfig = {
      sid: '{{ amazonConfig.merchant_id }}',
      mode: '{{ amazonConfig.mode }}',
      clientId: '{{ amazonConfig.client_id }}'
    };

    window.onAmazonLoginReady = function() {
      amazon.Login.setSandboxMode({{ this.isSandboxMode() }});
      amazon.Login.setClientId(amazonConfig.clientId);
      amazon.Login.setRegion('{{ amazonConfig.region }}');
      amazon.Login.setUseCookie(true);

      {% if not this.isLogged() or (this.getTarget() == 'cart' and this.isAmazonReturn()) %}
      if (xliteConfig.target !== 'amazon_checkout') {
        amazon.Login.logout();
      }
      {% endif %}
    };

    window.onAmazonPaymentsReady = function () {
      define('Amazon/Config', function () {
        return amazonConfig;
      });
    }
  </script>
{% endif %}
", "modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\Amazon\\PayWithAmazon\\header\\parts\\amazon_config.twig");
    }
}
