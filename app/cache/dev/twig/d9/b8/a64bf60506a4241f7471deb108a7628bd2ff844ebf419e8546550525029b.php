<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_d9b8a64bf60506a4241f7471deb108a7628bd2ff844ebf419e8546550525029b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  202 => 77,  197 => 74,  174 => 67,  165 => 64,  134 => 56,  127 => 54,  170 => 129,  113 => 44,  118 => 80,  34 => 4,  81 => 24,  77 => 23,  53 => 23,  23 => 12,  104 => 21,  97 => 23,  153 => 79,  148 => 60,  126 => 64,  114 => 79,  110 => 78,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 66,  140 => 55,  132 => 67,  128 => 49,  107 => 24,  61 => 13,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 84,  217 => 75,  208 => 68,  204 => 78,  179 => 69,  159 => 61,  143 => 59,  135 => 53,  119 => 60,  102 => 32,  71 => 29,  67 => 19,  63 => 15,  59 => 14,  38 => 6,  94 => 35,  89 => 5,  85 => 25,  75 => 17,  68 => 15,  56 => 22,  26 => 14,  87 => 61,  31 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 128,  163 => 62,  158 => 62,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 39,  91 => 34,  62 => 23,  49 => 9,  28 => 4,  24 => 7,  25 => 3,  21 => 2,  19 => 11,  93 => 21,  88 => 6,  78 => 17,  46 => 7,  44 => 11,  27 => 5,  79 => 18,  72 => 22,  69 => 21,  47 => 9,  40 => 19,  37 => 18,  22 => 3,  246 => 99,  157 => 56,  145 => 110,  139 => 98,  131 => 55,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 54,  98 => 37,  96 => 31,  83 => 25,  74 => 23,  66 => 15,  55 => 16,  52 => 10,  50 => 22,  43 => 12,  41 => 9,  35 => 8,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 69,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 90,  116 => 45,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 73,  95 => 28,  92 => 21,  86 => 28,  82 => 28,  80 => 35,  73 => 16,  64 => 14,  60 => 15,  57 => 17,  54 => 10,  51 => 14,  48 => 12,  45 => 20,  42 => 7,  39 => 16,  36 => 17,  33 => 13,  30 => 2,);
    }
}
