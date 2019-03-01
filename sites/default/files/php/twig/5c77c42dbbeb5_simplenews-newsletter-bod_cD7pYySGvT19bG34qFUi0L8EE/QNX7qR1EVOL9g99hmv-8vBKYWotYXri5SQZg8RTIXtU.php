<?php

/* modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig */
class __TwigTemplate_9026e2a88b09d551c01504cfe371f878decb50902f516771f78cc3a8373b4a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 45);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 41
        echo "
<h2>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["build"] ?? null), "html", null, true));
        echo "

";
        // line 45
        if ( !($context["opt_out_hidden"] ?? null)) {
            // line 46
            echo "    ";
            if ((($context["format"] ?? null) == "html")) {
                // line 47
                echo "        <p class=\"newsletter-footer\"><a
                    href=\"[simplenews-subscriber:unsubscribe-url]\">";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["unsubscribe_text"] ?? null), "html", null, true));
                echo "</a>
        </p>
    ";
            } else {
                // line 51
                echo "        -- ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["unsubscribe_text"] ?? null), "html", null, true));
                echo " : [simplenews-subscriber:unsubscribe-url]
    ";
            }
        }
        // line 54
        echo "
";
        // line 55
        if ((($context["key"] ?? null) == "test")) {
            // line 56
            echo "    - - - ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["test_message"] ?? null), "html", null, true));
            echo " - - -
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 56,  79 => 55,  76 => 54,  69 => 51,  63 => 48,  60 => 47,  57 => 46,  55 => 45,  50 => 43,  46 => 42,  43 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig", "/var/www/html/drupal-itp/modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig");
    }
}
