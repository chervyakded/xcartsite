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

/* modules/XC/CustomerAttachments/product/details/customer-attachment-input.twig */
class __TwigTemplate_22752cafb6beaa455a874c3432db0292d39896e08060a3205bd04187aafb7fb5 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        if ($this->getAttribute(($context["this"] ?? null), "isAttachmentsAvailable", [], "method")) {
            // line 5
            echo "  <ul class=\"attribute-values customer-attachments-values\">
      <li>
          <span class=\"title\">";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Attach file"]), "html", null, true);
            echo "</span>
          <input type=\"file\" multiple name=\"customer_attachments[]\" id=\"customer-attachments\" class=\"";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getInputClassString", [], "method"), "html", null, true);
            echo "\" accept=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAcceptString", [], "method"), "html", null, true);
            echo "\">
          ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentDescription", "isDetailPage" => "true"]]), "html", null, true);
            echo "
      </li>
  
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/CustomerAttachments/product/details/customer-attachment-input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 8,  36 => 7,  32 => 5,  30 => 4,);
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
 # Customer attachment form
 #}
{% if this.isAttachmentsAvailable() %}
  <ul class=\"attribute-values customer-attachments-values\">
      <li>
          <span class=\"title\">{{ t('Attach file') }}</span>
          <input type=\"file\" multiple name=\"customer_attachments[]\" id=\"customer-attachments\" class=\"{{ this.getInputClassString() }}\" accept=\"{{ this.getAcceptString() }}\">
          {{ widget('\\\\XLite\\\\Module\\\\XC\\\\CustomerAttachments\\\\View\\\\AttachmentDescription', isDetailPage='true') }}
      </li>
  
  </ul>
{% endif %}
", "modules/XC/CustomerAttachments/product/details/customer-attachment-input.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\CustomerAttachments\\product\\details\\customer-attachment-input.twig");
    }
}
