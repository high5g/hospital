<?php

/* High5HospitalIndexBundle:Default:index.html.twig */
class __TwigTemplate_9fca2df22fd53d105482b97b3bc773ef8d90ae388b3ecff688bf8fd55b78eb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/login.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/magic/magic.css"), "html", null, true);
        echo "\" />
    <!-- PAGE LEVEL STYLES -->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/social-buttons/social-buttons.css"), "html", null, true);
        echo "\" />
    <!-- END PAGE LEVEL  STYLES -->
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"content\">

        <div class=\"inner\" style=\"\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2 class=\"col-lg-7\">Login</h2>
                    <div class=\"col-lg-5 margin-top-large text-right\">
                        <br/>
                        <a class=\"btn btn-social-icon btn-facebook\"><i class=\"icon-facebook\"></i></a>
                        <a class=\"btn btn-social-icon btn-google-plus\"><i class=\"icon-google-plus\"></i></a>
                        <a class=\"btn btn-social-icon btn-linkedin\"><i class=\"icon-linkedin\"></i></a>
                        <a class=\"btn btn-social-icon btn-dropbox\"><i class=\"icon-dropbox\"></i></a>
                        <a class=\"btn btn-social-icon btn-github\"><i class=\"icon-github\"></i></a>
                        <a class=\"btn btn-social-icon btn-twitter\"><i class=\"icon-twitter\"></i></a>
                    </div>
                </div>
            </div>
            <hr /> 

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 269
        echo "                    <div class=\"login-help\"></div>
                </div>
            </div>
            <hr /> 

        </div>
    </div>

";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        echo " 

                        <div class=\"inner\" style=\"\" >                             
                            <div class=\"row text-center\">
                                <div class=\"col-lg-4\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading \">
                                            <h2>Admin</h2> 
                                        </div>
                                        <div class=\"panel-body\">
                                            <button class=\"btn btn-warning\" data-toggle=\"modal\"  data-target=\"#newReg\">
                                                Cliquez ici pour vous connecter
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h2>Docotor</h2> 
                                        </div>
                                        <div class=\"panel-body\">
                                            <button class=\"btn btn-primary\" data-toggle=\"modal\"  data-target=\"#newReg\">
                                                Cliquez ici pour vous connecter
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h2>Patient</h2>
                                        </div>
                                        <div class=\"panel-body\">
                                            <button class=\"btn btn-danger\" data-toggle=\"modal\"  data-target=\"#newReg\">
                                                Cliquez ici pour vous connecter
                                            </button>

                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- COMMENT AND NOTIFICATION  SECTION -->
                            <div class=\"row\">
                                <div class=\"col-lg-6\">

                                    <div class=\"chat-panel panel panel-success\">
                                        <div class=\"panel-heading\">
                                            <i class=\"icon-comments\"></i>
                                            New Comments

                                        </div>

                                        <div class=\"panel-body\">
                                            <ul class=\"chat\">
                                                <li class=\"left clearfix\">
                                                    <span class=\"chat-img pull-left\">
                                                        <img src=\"assets/img/1.png\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                                    <div class=\"chat-body clearfix\">
                                                        <div class=\"header\">
                                                            <strong class=\"primary-font \"> Jack Sparrow </strong>
                                                            <small class=\"pull-right text-muted label label-danger\">
                                                                <i class=\"icon-time\"></i> 12 mins ago
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <p>
                                                            Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class=\"right clearfix\">
                                                    <span class=\"chat-img pull-right\">
                                                        <img src=\"assets/img/2.png\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                                    <div class=\"chat-body clearfix\">
                                                        <div class=\"header\">
                                                            <small class=\" text-muted label label-info\">
                                                                <i class=\"icon-time\"></i> 13 mins ago</small>
                                                            <strong class=\"pull-right primary-font\"> Jhony Deen</strong>
                                                        </div>
                                                        <br />
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class=\"left clearfix\">
                                                    <span class=\"chat-img pull-left\">
                                                        <img src=\"assets/img/3.png\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                                    <div class=\"chat-body clearfix\">
                                                        <div class=\"header\">
                                                            <strong class=\"primary-font\"> Jack Sparrow </strong>
                                                            <small class=\"pull-right text-muted label label-warning\">
                                                                <i class=\"icon-time\"></i> 12 mins ago
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <p>
                                                            Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class=\"right clearfix\">
                                                    <span class=\"chat-img pull-right\">
                                                        <img src=\"assets/img/4.png\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                                    <div class=\"chat-body clearfix\">
                                                        <div class=\"header\">
                                                            <small class=\" text-muted label label-primary\">
                                                                <i class=\"icon-time\"></i> 13 mins ago</small>
                                                            <strong class=\"pull-right primary-font\"> Jhony Deen</strong>
                                                        </div>
                                                        <br />
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class=\"panel-footer\">
                                            <div class=\"input-group\">
                                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your comment here...\" />
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-success btn-sm\" id=\"btn-chat\">
                                                        Send
                                                    </button>
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"box danger\">
                                        <header>
                                            <h5>Geocoding</h5>

                                            <div class=\"toolbar\">
                                                <form method=\"post\" id=\"geocoding_form\" class=\"form-search\">
                                                    <div class=\"input-group\">
                                                        <input id=\"address\" name=\"address\" class=\"form-control input-sm\" type=\"text\" placeholder=\"search ..\" />
                                                        <span class=\"input-group-btn\">
                                                            <button type=\"submit\" class=\"btn btn-default btn-sm\">Search</button>&nbsp;&nbsp;
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </header>
                                        <div class=\"body\">

                                            <div id=\"gmaps-geocoding\" class=\"google-maps\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END COMMENT AND NOTIFICATION  SECTION -->
                            <div class=\"row\"> 
                                <div class=\"col-lg-12\">
                                    <div class=\"modal fade\" id=\"newReg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"H4\"> Login</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"text-center\">
                                                        <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" id=\"logoimg\" alt=\" Logo\" />
                                                    </div>
                                                    <div class=\"tab-content\">
                                                        <div id=\"login\" class=\"tab-pane active\">
                                                            <form action=\"index.html\" class=\"form-signin\">
                                                                <p class=\"text-muted text-center btn-block btn btn-primary btn-rect\">
                                                                    Enter your username and password
                                                                </p>
                                                                <input type=\"text\" placeholder=\"Username\" class=\"form-control\" />
                                                                <input type=\"password\" placeholder=\"Password\" class=\"form-control\" />
                                                                <button class=\"btn text-muted text-center btn-danger\" type=\"submit\">Sign in</button>
                                                            </form>
                                                        </div>
                                                        <div id=\"forgot\" class=\"tab-pane\">
                                                            <form action=\"index.html\" class=\"form-signin\">
                                                                <p class=\"text-muted text-center btn-block btn btn-primary btn-rect\">Enter your valid e-mail</p>
                                                                <input type=\"email\"  required=\"required\" placeholder=\"Your E-mail\"  class=\"form-control\" />
                                                                <br />
                                                                <button class=\"btn text-muted text-center btn-success\" type=\"submit\">Recover Password</button>
                                                            </form>
                                                        </div>
                                                        <div id=\"signup\" class=\"tab-pane\">
                                                            <form action=\"index.html\" class=\"form-signin\">
                                                                <p class=\"text-muted text-center btn-block btn btn-primary btn-rect\">Please Fill Details To Register</p>
                                                                <input type=\"text\" placeholder=\"First Name\" class=\"form-control\" />
                                                                <input type=\"text\" placeholder=\"Last Name\" class=\"form-control\" />
                                                                <input type=\"text\" placeholder=\"Username\" class=\"form-control\" />
                                                                <input type=\"email\" placeholder=\"Your E-mail\" class=\"form-control\" />
                                                                <input type=\"password\" placeholder=\"password\" class=\"form-control\" />
                                                                <input type=\"password\" placeholder=\"Re type password\" class=\"form-control\" />
                                                                <button class=\"btn text-muted text-center btn-success\" type=\"submit\">Register</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class=\"text-center\">
                                                        <ul class=\"list-inline\">
                                                            <li><a class=\"text-muted\" href=\"#login\" data-toggle=\"tab\">Login</a></li>
                                                            <li><a class=\"text-muted\" href=\"#forgot\" data-toggle=\"tab\">Forgot Password</a></li>
                                                            <li><a class=\"text-muted\" href=\"#signup\" data-toggle=\"tab\">Signup</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                    <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                    ";
    }

    // line 278
    public function block_javascripts($context, array $blocks = array())
    {
        // line 279
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/login.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>

    <!-- PAGE LEVEL SCRIPTS-->

    <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>

    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/gmaps/gmaps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/mapsInit.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            MapsInit();
        });
    </script>

    <!--END PAGE LEVEL SCRIPTS-->

";
    }

    public function getTemplateName()
    {
        return "High5HospitalIndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 287,  354 => 286,  345 => 280,  340 => 279,  337 => 278,  274 => 210,  91 => 31,  79 => 269,  77 => 31,  54 => 10,  51 => 9,  44 => 6,  39 => 4,  34 => 3,  31 => 2,);
    }
}
