<?php

/* admin/component/paging.twig */
class __TwigTemplate_c0daa1cf1bd0192402bd0d3a640fef171db27664f41ca16418e170bbbb893295 extends Twig_Template
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
    }

    // line 1
    public function getpaging($_count = null, $_pages = null, $_page = null, $_route = null)
    {
        $context = $this->env->mergeGlobals(array(
            "count" => $_count,
            "pages" => $_pages,
            "page" => $_page,
            "route" => $_route,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["page"] = ((array_key_exists("page", $context)) ? (_twig_default_filter((isset($context["page"]) ? $context["page"] : null), 1)) : (1));
            // line 3
            echo "    <div class=\"ui\" style=\"text-align: right\">
        <div class=\"ui pagination menu\">
            <a class=\"icon item\">
                共 ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo " 条，";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
            echo " 页
            </a>
            ";
            // line 8
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 9
                echo "                <a class=\"icon item\" href=\"";
                echo $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null));
                echo "\">
                    <i class=\"icon backward\"></i>
                </a>
                <a class=\"icon item\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
                echo "\">
                    <i class=\"icon left arrow\"></i>
                </a>
            ";
            }
            // line 16
            echo "            ";
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["pages"]) ? $context["pages"] : null))) {
                // line 17
                echo "                <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
                echo "\">
                    <i class=\"icon right arrow\"></i>
                </a>
            ";
            }
            // line 21
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/component/paging.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  71 => 17,  52 => 8,  43 => 6,  38 => 3,  35 => 2,  21 => 1,  148 => 77,  144 => 59,  141 => 58,  137 => 56,  134 => 55,  125 => 49,  112 => 39,  108 => 38,  104 => 37,  90 => 25,  82 => 79,  80 => 77,  61 => 12,  59 => 58,  54 => 9,  51 => 54,  34 => 11,  23 => 1,  109 => 41,  105 => 39,  93 => 33,  87 => 24,  81 => 27,  76 => 25,  72 => 24,  68 => 16,  64 => 22,  60 => 21,  56 => 57,  53 => 19,  49 => 24,  33 => 4,  30 => 3,  25 => 2,);
    }
}
