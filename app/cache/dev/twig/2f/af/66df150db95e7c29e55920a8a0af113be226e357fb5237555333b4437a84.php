<?php

/* AnnuaireUserBundle::index.html.twig */
class __TwigTemplate_2faf66df150db95e7c29e55920a8a0af113be226e357fb5237555333b4437a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Welcome ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">

        <div class=\"masthead\">
            <h3 class=\"text-muted\">Project name</h3>
            <ul class=\"nav nav-justified\">
                <li class=\"active\"><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Projects</a></li>
                <li><a href=\"#\">Services</a></li>
                <li><a href=\"#\">Downloads</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Contact</a></li>
            </ul>
        </div>

        <!-- Jumbotron -->
        <div class=\"jumbotron\">
            <p><a class=\"btn btn-lg btn-success\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" role=\"button\">Log in</a>
            <!-- <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" role=\"button\">Register</a></p> -->
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireUserBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  77 => 23,  53 => 12,  23 => 1,  104 => 21,  97 => 23,  153 => 79,  148 => 77,  126 => 64,  114 => 58,  110 => 57,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  107 => 24,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 32,  71 => 29,  67 => 20,  63 => 15,  59 => 14,  38 => 6,  94 => 6,  89 => 5,  85 => 25,  75 => 17,  68 => 15,  56 => 22,  26 => 6,  87 => 20,  31 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 81,  156 => 66,  151 => 63,  142 => 59,  138 => 70,  136 => 56,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 11,  28 => 3,  24 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 21,  88 => 6,  78 => 17,  46 => 7,  44 => 11,  27 => 4,  79 => 18,  72 => 22,  69 => 21,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 54,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 16,  52 => 10,  50 => 10,  43 => 6,  41 => 9,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 20,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 35,  73 => 16,  64 => 14,  60 => 23,  57 => 17,  54 => 10,  51 => 14,  48 => 8,  45 => 10,  42 => 6,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
