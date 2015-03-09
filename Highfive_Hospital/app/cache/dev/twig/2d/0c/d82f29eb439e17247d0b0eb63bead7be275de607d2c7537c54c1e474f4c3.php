<?php

/* High5HospitalAdminBundle:Login:login.html.twig */
class __TwigTemplate_2d0cd82f29eb439e17247d0b0eb63bead7be275de607d2c7537c54c1e474f4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Login Admin</h2>
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'form_start');
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'widget');
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login_form"]) ? $context["login_form"] : $this->getContext($context, "login_form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "High5HospitalAdminBundle:Login:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
