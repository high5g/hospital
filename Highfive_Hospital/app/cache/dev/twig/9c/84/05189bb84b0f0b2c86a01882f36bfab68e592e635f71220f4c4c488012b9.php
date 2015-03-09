<?php

/* High5HospitalPatientBundle:Default:login.html.twig */
class __TwigTemplate_9c8405189bb84b0f0b2c86a01882f36bfab68e592e635f71220f4c4c488012b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalPatientBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalPatientBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <h1>Patient Login</h1><br>
        ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "        <div class=\"login-help\"></div>
    </div>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'form_start');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'widget');
        echo "
            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "High5HospitalPatientBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  47 => 7,  44 => 6,  38 => 11,  36 => 6,  32 => 4,  29 => 3,);
    }
}
