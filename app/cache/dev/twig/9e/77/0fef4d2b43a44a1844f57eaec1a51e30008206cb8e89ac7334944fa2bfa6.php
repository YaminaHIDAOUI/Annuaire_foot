<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9e770fef4d2b43a44a1844f57eaec1a51e30008206cb8e89ac7334944fa2bfa6 extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  81 => 24,  77 => 23,  53 => 12,  23 => 4,  104 => 21,  97 => 23,  153 => 79,  148 => 77,  126 => 64,  114 => 58,  110 => 57,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  107 => 24,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 32,  71 => 29,  67 => 20,  63 => 15,  59 => 14,  38 => 6,  94 => 6,  89 => 5,  85 => 25,  75 => 17,  68 => 15,  56 => 22,  26 => 12,  87 => 20,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 81,  156 => 66,  151 => 63,  142 => 59,  138 => 70,  136 => 56,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 11,  28 => 4,  24 => 7,  25 => 3,  21 => 2,  19 => 2,  93 => 21,  88 => 6,  78 => 17,  46 => 7,  44 => 11,  27 => 4,  79 => 18,  72 => 22,  69 => 21,  47 => 9,  40 => 16,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 54,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 16,  52 => 10,  50 => 10,  43 => 8,  41 => 9,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 20,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 35,  73 => 16,  64 => 14,  60 => 23,  57 => 17,  54 => 10,  51 => 14,  48 => 12,  45 => 18,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
