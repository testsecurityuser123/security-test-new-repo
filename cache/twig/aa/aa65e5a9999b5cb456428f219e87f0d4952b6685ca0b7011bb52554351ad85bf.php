<?php

/* home.html.twig */
class __TwigTemplate_201434e9003737d3b4891dab5b490811d4e1632879e1e92460c75b4364f6e947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<section class=\"home-hero\" id=\"welcome\">
\t\t<div class=\"home-hero-content\" data-center-center=\"opacity:1;transform:translateY(-50%);\" data--100-top-bottom=\"opacity:0;transform:translateY(120%);\">
\t\t\t";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>

\t\t";
        // line 10
        echo "\t\t<a href=\"#work\" class=\"intro-scroll-container\" data-center-center=\"opacity:1;transform:translateY(0%);\" data-100-top-top=\"opacity:0;transform:translateY(250%);\">
\t\t\t<div class=\"intro-scroll\"></div>
\t\t\t\t<div class=\"intro-scroll-arrow\"></div>
\t\t\t<div class=\"intro-scroll-text\">
\t\t\t  <span>View</span>
\t\t\t  <span>Work</span>
\t\t\t</div>
\t\t</a>
\t\t";
        // line 19
        echo "\t\t<div class=\"home-bkg\" style=\"background-image: url('";
        echo $this->getAttribute(($context["header"] ?? null), "header_background_img", array());
        echo "');\" data-0p=\"transform:scale(1.05);opacity:0.1;z-index:1;\" data-100p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
\t</section>

\t<section class=\"home-work\" id=\"work\">
\t\t<div class=\"home-work-feed\">

\t\t\t<ul>
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("category" => "work")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "\t\t\t\t";
            $context["first_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 28
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 29
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"link\">
\t\t\t\t\t\t<div class=\"work-item-background\">
\t\t\t\t\t\t\t<h3>";
            // line 31
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 33
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"work-item-background-image\" style=\"background-image: url(' ";
            // line 34
            echo $this->getAttribute(($context["first_image"] ?? null), "url", array());
            echo " ');\"></div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
\t\t\t</ul>
\t\t</div>
\t</section>

\t<section class=\"home-about\" id=\"about\">
\t\t<div class=\"home-about-container\" data-bottom-top=\"opacity:0;top:75%;\" data-center-top=\"opacity:1;top:50%;\">

\t\t\t<div class=\"home-about-main-container\">
\t\t\t\t<h3>";
        // line 47
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "about_title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 48
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "about_description", array());
        echo "</p>


\t\t\t\t<div class=\"home-about-social-container\">
\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "about_social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 53
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["social"], "url", array())) {
                // line 54
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["social"], "url", array());
                echo "\" class=\"home-about-social social-";
                echo $this->getAttribute($context["social"], "class", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["social"], "class", array());
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"home-about-side-container\">
\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "about_sidebar", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 62
            echo "\t\t\t\t\t<div class=\"home-about-sidebar\">
\t\t\t\t\t\t";
            // line 63
            if ($this->getAttribute($context["attribute"], "title", array())) {
                // line 64
                echo "\t\t\t\t\t\t\t<h6>";
                echo $this->getAttribute($context["attribute"], "title", array());
                echo "</h6>
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["attribute"], "description", array())) {
                // line 67
                echo "\t\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["attribute"], "description", array());
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-about-background-image\" style=\"background-image: url(' ";
        // line 73
        echo $this->getAttribute(($context["header"] ?? null), "about_background_img", array());
        echo " ');\" data-0-end=\"transform:scale(1.05);opacity:0.05;z-index:1;\" data-600-end=\"transform:scale(1);opacity:0.0;z-index:0\"></div>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  176 => 71,  169 => 69,  163 => 67,  160 => 66,  154 => 64,  152 => 63,  149 => 62,  145 => 61,  139 => 57,  133 => 56,  123 => 54,  120 => 53,  116 => 52,  109 => 48,  105 => 47,  94 => 38,  84 => 34,  81 => 33,  77 => 31,  72 => 29,  69 => 28,  66 => 27,  62 => 26,  51 => 19,  41 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t<section class=\"home-hero\" id=\"welcome\">
\t\t<div class=\"home-hero-content\" data-center-center=\"opacity:1;transform:translateY(-50%);\" data--100-top-bottom=\"opacity:0;transform:translateY(120%);\">
\t\t\t{{ page.content }}
\t\t</div>

\t\t{# Scroll Image #}
\t\t<a href=\"#work\" class=\"intro-scroll-container\" data-center-center=\"opacity:1;transform:translateY(0%);\" data-100-top-top=\"opacity:0;transform:translateY(250%);\">
\t\t\t<div class=\"intro-scroll\"></div>
\t\t\t\t<div class=\"intro-scroll-arrow\"></div>
\t\t\t<div class=\"intro-scroll-text\">
\t\t\t  <span>View</span>
\t\t\t  <span>Work</span>
\t\t\t</div>
\t\t</a>
\t\t{# Background Image #}
\t\t<div class=\"home-bkg\" style=\"background-image: url('{{ header.header_background_img }}');\" data-0p=\"transform:scale(1.05);opacity:0.1;z-index:1;\" data-100p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
\t</section>

\t<section class=\"home-work\" id=\"work\">
\t\t<div class=\"home-work-feed\">

\t\t\t<ul>
\t\t\t{% for p in taxonomy.findTaxonomy({'category':'work'}) %}
\t\t\t\t{% set first_image = p.media.images|first %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{p.url}}\" class=\"link\">
\t\t\t\t\t\t<div class=\"work-item-background\">
\t\t\t\t\t\t\t<h3>{{ p.title }}</h3>
\t\t\t\t\t\t\t{# {{ first_image }} #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"work-item-background-image\" style=\"background-image: url(' {{ first_image.url }} ');\"></div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endfor %}

\t\t\t</ul>
\t\t</div>
\t</section>

\t<section class=\"home-about\" id=\"about\">
\t\t<div class=\"home-about-container\" data-bottom-top=\"opacity:0;top:75%;\" data-center-top=\"opacity:1;top:50%;\">

\t\t\t<div class=\"home-about-main-container\">
\t\t\t\t<h3>{{ page.header.about_title }}</h3>
\t\t\t\t<p>{{ page.header.about_description }}</p>


\t\t\t\t<div class=\"home-about-social-container\">
\t\t\t\t{% for social in page.header.about_social %}
\t\t\t\t\t\t{% if social.url %}
\t\t\t\t\t\t\t<a href=\"{{ social.url }}\" class=\"home-about-social social-{{ social.class }}\" target=\"_blank\">{{ social.class }}</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"home-about-side-container\">
\t\t\t\t{% for attribute in page.header.about_sidebar %}
\t\t\t\t\t<div class=\"home-about-sidebar\">
\t\t\t\t\t\t{% if attribute.title %}
\t\t\t\t\t\t\t<h6>{{ attribute.title }}</h6>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if attribute.description %}
\t\t\t\t\t\t\t<p>{{ attribute.description }}</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-about-background-image\" style=\"background-image: url(' {{ header.about_background_img }} ');\" data-0-end=\"transform:scale(1.05);opacity:0.05;z-index:1;\" data-600-end=\"transform:scale(1);opacity:0.0;z-index:0\"></div>
\t</section>

{% endblock %}
", "home.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/home.html.twig");
    }
}