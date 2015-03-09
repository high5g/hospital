<?php

/* High5HospitalAdminHospitalBundle:Default:doctor.factory.html.twig */
class __TwigTemplate_d64280596d446aa95de2a9cb401789e856ea1282292c6c7e8483248fa6560450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalAdminHospitalBundle:Default:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalAdminHospitalBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Add Doctor";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"login-card\">
        <h1>Add Doctor</h1><br>
        ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        <div><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "admin_hospital/homepage\">Cancel</a></div>
        <div class=\"login-help\"></div>
    </div>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "High5HospitalAdminHospitalBundle:Default:doctor.factory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  57 => 9,  54 => 8,  45 => 13,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}
