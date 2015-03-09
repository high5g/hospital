<?php

/* High5HospitalAdminBundle:Login:success.html.twig */
class __TwigTemplate_5f82e9371bffe92501d4edc08e5c0937bb3594b69c088b951d78374a6ef4614d extends Twig_Template
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
        echo "<h1 style=\"color: green\">Login success</h1>
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "Welcome ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo ".
";
    }

    public function getTemplateName()
    {
        return "High5HospitalAdminBundle:Login:success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }
}
