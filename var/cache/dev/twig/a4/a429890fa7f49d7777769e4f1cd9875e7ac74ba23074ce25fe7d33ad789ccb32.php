<?php

/* base.html.twig */
class __TwigTemplate_295e440349952fe148c35fffa57140bad91e0f0a1b9944bff936a182934bfa61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " Microjobs</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"album.css\" rel=\"stylesheet\">
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "  </head>

  <body>

    <header>
      <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-globe-americas\"></i> Microjobs</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
          <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role=\"main\">

      <section class=\"jumbotron text-center\">
        <div class=\"container\">
          <h1 class=\"jumbotron-heading\">Album example</h1>
          <p class=\"lead text-muted\">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href=\"#\" class=\"btn btn-primary my-2\">Main call to action</a>
            <a href=\"#\" class=\"btn btn-secondary my-2\">Secondary action</a>
          </p>
        </div>
      </section>

      <div class=\"album py-5 bg-light\">
        <div class=\"container\">

          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          
          </div>

          ";
        // line 218
        $this->displayBlock('body', $context, $blocks);
        // line 219
        echo "        </div>
      </div>

    </main>

    <footer class=\"text-muted\">
      <div class=\"container\">
        <p class=\"float-right\">
          <a href=\"#\">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href=\"../../\">Visit the homepage</a> or read our <a href=\"../../getting-started/\">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 240
        $this->displayBlock('javascripts', $context, $blocks);
        // line 241
        echo "
  </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 240
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 240,  345 => 218,  328 => 18,  311 => 9,  297 => 241,  295 => 240,  290 => 238,  269 => 219,  267 => 218,  66 => 19,  64 => 18,  57 => 14,  53 => 13,  49 => 12,  43 => 9,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}{% endblock %} Microjobs</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset(\"bootstrap/css/bootstrap.min.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"fontawesome/css/all.min.css\")}}\" rel=\"stylesheet\">
    <link href=\"{{asset(\"css/estilo.css\")}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"album.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
  </head>

  <body>

    <header>
      <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-globe-americas\"></i> Microjobs</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
          <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role=\"main\">

      <section class=\"jumbotron text-center\">
        <div class=\"container\">
          <h1 class=\"jumbotron-heading\">Album example</h1>
          <p class=\"lead text-muted\">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href=\"#\" class=\"btn btn-primary my-2\">Main call to action</a>
            <a href=\"#\" class=\"btn btn-secondary my-2\">Secondary action</a>
          </p>
        </div>
      </section>

      <div class=\"album py-5 bg-light\">
        <div class=\"container\">

          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" data-src=\"holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          
          </div>

          {% block body %}{% endblock %}
        </div>
      </div>

    </main>

    <footer class=\"text-muted\">
      <div class=\"container\">
        <p class=\"float-right\">
          <a href=\"#\">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href=\"../../\">Visit the homepage</a> or read our <a href=\"../../getting-started/\">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"{{asset(\"bootstrap/js/bootstrap.min.js\")}}\"></script>

    {% block javascripts %}{% endblock %}

  </body>
</html>

", "base.html.twig", "/home/leonardo/dev/php-workspace/microjobs/templates/base.html.twig");
    }
}
