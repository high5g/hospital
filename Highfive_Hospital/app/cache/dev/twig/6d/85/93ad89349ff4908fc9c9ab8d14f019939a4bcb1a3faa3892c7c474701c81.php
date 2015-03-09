<?php

/* High5HospitalDoctorBundle:Default:login.html.twig */
class __TwigTemplate_6d8593ad89349ff4908fc9c9ab8d14f019939a4bcb1a3faa3892c7c474701c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalDoctorBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalDoctorBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"content\">

        <div class=\"inner\" style=\"min-height:1200px;\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2>Login</h2>
                </div>
            </div>
            <hr /> 

            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "                    <div class=\"login-help\"></div>
                </div>
            </div>
            <hr /> 

        </div>

    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'form_start');
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'widget');
        echo "
                        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'form_end');
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  67 => 17,  62 => 16,  59 => 15,  48 => 20,  46 => 15,  32 => 3,  29 => 2,);
    }
}
