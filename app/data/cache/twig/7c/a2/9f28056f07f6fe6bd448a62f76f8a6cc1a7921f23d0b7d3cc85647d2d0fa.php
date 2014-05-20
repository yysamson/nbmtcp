<?php

/* Form/div_layout.html.twig */
class __TwigTemplate_7ca29f28056f07f6fe6bd448a62f76f8a6cc1a7921f23d0b7d3cc85647d2d0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_row' => array($this, 'block_form_row'),
            'button_widget' => array($this, 'block_button_widget'),
            'html_widget' => array($this, 'block_html_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_row', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('button_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('html_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('checkbox_widget', $context, $blocks);
    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 4
        echo "        ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 5
            echo "            ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
            // line 6
            echo "        ";
        } else {
            // line 7
            echo "            ";
            $context["form_method"] = "POST";
            // line 8
            echo "        ";
        }
        // line 9
        echo "        <form class=\"ui form segment\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "name"), "html", null, true);
        echo "\"
              method=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 11
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 12
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\"/>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 20
        echo "        <div class=\"ui left labeled input\">
            <input type=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"field\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function block_button_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 39
            echo "            ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
            // line 40
            echo "        ";
        }
        // line 41
        echo "        <button class=\"ui blue submit button\"
                type=\"";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 46
    public function block_html_widget($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        ob_start();
        // line 48
        echo "        ";
        $this->displayBlock("textarea_widget", $context, $blocks);
        echo "
        <script>
            CKEDITOR.replace(\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\");
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 55
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        ob_start();
        // line 57
        echo "        ";
        // line 58
        echo "            ";
        // line 59
        echo "        ";
        // line 60
        echo "        <div class=\"ui selection dropdown\">
            <input ";
        // line 61
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">

            <div class=\"default text\">请选择</div>
            <i class=\"dropdown icon\"></i>

            <div class=\"menu\">
                ";
        // line 67
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 68
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 69
            echo "                    <div class=\"item\" data-value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 76
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        ob_start();
        // line 78
        echo "        <div class=\"ui slider checkbox\">
            <input type=\"checkbox\" ";
        // line 79
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
            <label></label>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "Form/div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  286 => 79,  283 => 78,  280 => 77,  277 => 76,  270 => 71,  259 => 69,  254 => 68,  252 => 67,  241 => 61,  238 => 60,  236 => 59,  234 => 58,  232 => 57,  229 => 56,  226 => 55,  218 => 50,  212 => 48,  209 => 47,  206 => 46,  195 => 42,  192 => 41,  189 => 40,  186 => 39,  183 => 38,  180 => 37,  177 => 36,  169 => 31,  165 => 30,  161 => 29,  158 => 28,  155 => 27,  152 => 26,  136 => 21,  133 => 20,  130 => 19,  127 => 18,  124 => 17,  119 => 14,  113 => 12,  111 => 11,  89 => 10,  84 => 9,  81 => 8,  78 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  60 => 1,  56 => 76,  53 => 75,  51 => 55,  48 => 54,  46 => 46,  43 => 45,  41 => 36,  38 => 35,  36 => 26,  33 => 25,  31 => 17,  28 => 16,  26 => 1,);
    }
}
