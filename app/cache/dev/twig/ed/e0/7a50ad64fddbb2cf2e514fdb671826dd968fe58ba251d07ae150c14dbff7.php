<?php

/* AnnuaireFootBundle:Default:index.html.twig */
class __TwigTemplate_ede07a50ad64fddbb2cf2e514fdb671826dd968fe58ba251d07ae150c14dbff7 extends Twig_Template
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

    <title>Annuaire de foot</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Add custom CSS here -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/half-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Script to Activate the Carousel -->
    <script>
\t    \$('.carousel').carousel({
\t        interval: 5000 //changes the speed
\t    })
    </script>

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
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#acceuil\">Acceuil</a>
                    </li>
                    <li><a href=\"#services\">Services</a>
                    </li>
                    <li><a href=\"#about\">About</a>
                    </li>
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/350x150&text=Slide One');\">
                    <center>
                <img class=\"img-responsive\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot4.jpg"), "html", null, true);
        echo "\"/>
                </centre>
               
                </div>
                <div class=\"carousel-caption\">
                    
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\">
                    <center>
                        <img class=\"img-responsive\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.jpg"), "html", null, true);
        echo "\"/></center>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\">
                    <center>
                    <img  class=\"img-responsive\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot3.jpg"), "html", null, true);
        echo "\"/></div>
                    </center>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </div>

    <div class=\"container\">
        <h1> Le Foot est votre patience!!Bienvenue dans L'annuaire de Foot</h1>
        <div class=\"row section\">
            <div class=\"col-lg-07\">
                
                <p>Vous étes passionnés par le foot, vous vous voulez savoir toutes les actualités ou  vous chercher des terrains par tout dans Agadir , vous ete sur le bon site !!</p>
               <img class=\"img-responsive\" src= \"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/carte.jpg"), "html", null, true);
        echo "\" >  
                
            </div>

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
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireFootBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 131,  174 => 130,  152 => 111,  129 => 91,  120 => 85,  106 => 74,  80 => 51,  43 => 17,  37 => 14,  33 => 13,  19 => 1,);
    }
}
