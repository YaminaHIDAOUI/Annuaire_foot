<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_38c391e1cee607815c8c8b5a6f4ffb3f02e83f8bad06d4a726ac90fe6ac952ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AnnuaireUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnnuaireUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Connexion ";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- <div align=\"center\" class=\"form-group has-error has-feedback\">
        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "            <label class=\"control-label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</label>&nbsp;
            <span class=\"glyphicon glyphicon-remove form-control-feedback\"></span>
        ";
        }
        // line 14
        echo "    </div> -->

    ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "        <div class=\"form-signin\">
            <div align=\"center\" class=\"alert alert-danger\" style=\"background-color: #d9534f
                                                           border: 1px solid #AAA;
                                                           border-bottom: 1px solid #888;
                                                           border-radius: 3px;
                                                           color: black;
                                                           box-shadow: 0px 2px 2px #AAA;
                                                           max-width: 350px;
                                                           height: 50px;
                                                           text-align: center;
                                                           align-content: center;\">
                <p class=\"text-danger\" align=\"center\">
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "&nbsp;
                        <span class=\"glyphicon glyphicon-ban-circle form-control-feedback\"></span>
                </p>
            </div>
        </div>
    ";
        }
        // line 35
        echo "
    <div class=\"form-signin\" style=\"background-color: #fbfbfb;
                               border: 1px solid #AAA;
                               border-bottom: 1px solid #888;
                               border-radius: 3px;
                               color: black;
                               box-shadow: 0px 2px 2px #AAA;
                               max-width: 700px;
                               text-align: center;
                               align-content: center;
                               position: inherit;\">
        <table align=\"center\">
            <tr align=\"center\">
                <td><label>Connect here</label></th>
                <td><label>Or connect using one of this</label></th>
            </tr>
            <tr>
                <td width=\"330px\" class=\"col-xs-6 col-md-5\">
                    <div align=\"left\">
                        <form class=\"form-signin\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                            <label for=\"username\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                            <label for=\"password\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />

                            <label for=\"remember_me\" class=\"checkbox\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>

                            <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                            <div class=\"form-group\">
                                <span class=\"pull-right\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"\">Register</a></span>
                            </div>
                        </form>
                    </div>
                </td>
                <td width=\"330px\" align=\"center\" class=\"col-xs-6 col-md-5\">
                    <div align=\"center\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("photos/facebook.gif"), "html", null, true);
        echo "\"/></a>
                        <br/><br/>
                        <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("photos/twitter.gif"), "html", null, true);
        echo "\"/></a>
                        <br/><br/>
                        <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("photos/google.gif"), "html", null, true);
        echo "\"/></a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 81,  153 => 79,  148 => 77,  138 => 70,  132 => 67,  126 => 64,  119 => 60,  114 => 58,  110 => 57,  105 => 55,  101 => 54,  80 => 35,  71 => 29,  57 => 17,  55 => 16,  51 => 14,  44 => 11,  42 => 10,  38 => 8,  35 => 7,  29 => 5,);
    }
}
