<?php

/* AnnuaireFootBundle:Default:utilisateur.html.twig */
class __TwigTemplate_b466260b3203b9c72f38ddc2dfb35efc93df2912481a8e71f1ba3408eb093e58 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Bienvenue</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Add custom CSS here -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/half.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

    <nav class=\"navbar navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\" >
                     <li><a href=\"annuaire.html\" target=\"_blank\">Acceuil</a>
                    </li>
                    <li><a href=\"#about\">Consultaion</a>
                    </li>
                    <li><a href=\"#services\">Notification</a>
                    </li>
                    <li><a href=\"#contact\">Deconnexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    

    <div class=\"container\">

        <div class=\"row section\">
            <div class=\"col-lg-12\">
            <h2> Dernier terrain ajoutés dans votre ville !!
            </h2>
             <center>
                <img class=\"img-responsive\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/terrain-gonflable.jpg"), "html", null, true);
        echo "\"/>
                </centre>
            </div>
                </ul> 
                <center>
                 <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-danger\">Commenter</button>
                  <button type=\"button\" class=\"btn btn-danger\">Partager</button>
                  <button type=\"button\" class=\"btn btn-danger\">signaler</button>
                  <div />
              </center>
              <h2>les terrain les plus populaires</h2>
              <div row>
                
                 <div class=\"col-xs-6 col-md-3\">
                    <img class=\"img-responsive\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.jpg"), "html", null, true);
        echo "\"/>
        
                    <img class=\"img-responsive\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot4.jpg"), "html", null, true);
        echo "\"/>
                    <img class=\"img-responsive\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot2.jpg"), "html", null, true);
        echo "\"/>
                    <img class=\"img-responsive\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot3.jpg"), "html", null, true);
        echo "\"/>
            </div>
        </div> </div>

        <hr>

        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>VALA &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireFootBundle:Default:utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 80,  34 => 7,  81 => 24,  77 => 23,  53 => 12,  23 => 4,  104 => 21,  97 => 23,  153 => 79,  148 => 77,  126 => 64,  114 => 79,  110 => 78,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  107 => 24,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 99,  135 => 53,  119 => 60,  102 => 32,  71 => 29,  67 => 20,  63 => 15,  59 => 14,  38 => 6,  94 => 6,  89 => 5,  85 => 25,  75 => 17,  68 => 15,  56 => 22,  26 => 12,  87 => 61,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 81,  156 => 66,  151 => 63,  142 => 59,  138 => 70,  136 => 56,  121 => 46,  117 => 44,  105 => 76,  91 => 27,  62 => 23,  49 => 11,  28 => 4,  24 => 7,  25 => 3,  21 => 2,  19 => 1,  93 => 21,  88 => 6,  78 => 17,  46 => 7,  44 => 11,  27 => 5,  79 => 18,  72 => 22,  69 => 21,  47 => 9,  40 => 16,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 98,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 54,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 16,  52 => 10,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 20,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 35,  73 => 16,  64 => 14,  60 => 23,  57 => 17,  54 => 10,  51 => 14,  48 => 12,  45 => 18,  42 => 9,  39 => 16,  36 => 7,  33 => 13,  30 => 2,);
    }
}
