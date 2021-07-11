<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IndieAuth</title>
  <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>

<article class="h-entry">

<div class="header-bar">
  <section>
    <h1 class="p-name">IndieAuth</h1>
  </section>
</div>

<div class="featured">
  <section>
    <p class="p-summary">OAuth for the open web</p>
  </section>
</div>

<section>
  <p>IndieAuth is a decentralized identity protocol built on top of OAuth 2.0.</p>
  <p>This allows individual websites like someone's WordPress, Mastodon, or Gitea server to become its own identity provider, and can be used to sign in to other instances. Both users and applications are identified by URLs, avoiding the need for getting API keys or making new accounts.</p>
  <p><i>Read more about how IndieAuth solves <a href="https://aaronparecki.com/2018/07/07/7/oauth-for-the-open-web">OAuth for the open web</a>.</i></p>
</section>

<section id="spec">
  <h2>Read the Spec</h2>

  <p>The latest version of the IndieAuth spec is available at:</p>

  <p><a href="https://indieauth.spec.indieweb.org/">indieauth.spec.indieweb.org</a></p>
  
  <p>Read the details about the <a href="https://aaronparecki.com/2020/12/03/1/indieauth-2020">2020 spec updates</a></p>

  <p>The January 2018 published version is also available at:</p>

  <p><a href="https://www.w3.org/TR/indieauth/">w3.org/TR/indieauth</a></p>
</section>

<section id="logging-in" class="hang-left border-top">
  <img src="/assets/web-signin-splash.jpg">

  <h2>Logging in with IndieAuth</h2>

  <p>You can use IndieAuth to have your users authenticate with their own URL. Logging in to an app with IndieAuth tells the app who has logged in, where the user ID returned is a URL controlled by the user.</p>
  <p><a href="https://indieauth.spec.indieweb.org/#authentication">Read the Spec</a></p>
  <p><a href="https://aaronparecki.com/2021/04/13/26/indieauth">Tutorial: How to Sign Users In with IndieAuth</a></p>
</section>

<section id="access-token" class="border-top">
  <h2>Obtaining an OAuth 2.0 Access Token with IndieAuth</h2>

  <p>If you're building an application that wants to access or modify a user's data, you'll need an OAuth 2.0 access token to use in API requests.</p>
  <p>You can use IndieAuth to obtain an access token from the user's own token endpoint, while identifying them in the process.</p>
  <p><a href="https://indieauth.spec.indieweb.org/#authorization">Obtaining an Access Token</a></p>
</section>

<section id="providers" class="border-top">
  <h2>Choosing an IndieAuth Provider</h2>

  <p>In order to log in to apps that use IndieAuth, you'll need to tell these apps where your IndieAuth endpoints live. You can either delegate your domain to an external IndieAuth provider, run an IndieAuth provider yourself, or your IndieAuth provider may already be part of the same software that runs your website.</p>

  <h3>Self-Hosted IndieAuth Providers</h3>
  <ul>
    <li><a href="https://indieweb.org/Wordpress_IndieAuth_Plugin">WordPress IndieAuth Plugin</a> - adds an IndieAuth endpoint to your WordPress site</li>
    <li><a href="https://github.com/Inklings-io/selfauth">selfauth</a> - a minimal IndieAuth server in PHP</li>
    <li><a href="https://www.drupal.org/project/indieweb">Drupal IndieWeb module</a> - adds an IndieAuth endpoint to your Drupal site</li>
    <li><a href="https://github.com/reiterate-app/authorio">Authorio</a> - a Rails Engine to add an IndieAuth endpoint into your Rails app</li>
    <li><a href="https://github.com/barryf/acquiescence">Acquiescence</a> - an IndieAuth server written in Ruby which uses GitHub to authenticate you</li>
    <li><a href="https://github.com/taproot/indieauth">Taproot/IndieAuth</a> - a PHP library to build your own IndieAuth server</li>
    <li><a href="https://github.com/cweiske/indieauth-openid">indieauth-openid</a> - proxies IndieAuth requests to your own OpenID provider</li>
  </ul>

  <h3>Software with a Built-In IndieAuth Provider</h3>
  <ul>
    <li><a href="https://withknown.com/">Known</a></li>
    <li><a href="http://dobrado.net">Dobrado</a></li>
  </ul>

  <h3>Services with Built-In IndieAuth Support</h3>
  <ul>
    <li><a href="https://micro.blog">Micro.blog</a></li>
  </ul>

  <h3>Public IndieAuth Providers</h3>
  <ul>
    <li><a href="https://indieauth.com/">indieauth.com</a></li>
  </ul>

</section>


<section id="faq" class="border-top">
  <h2>Frequently Asked Questions</h2>

  <h3 id="differences-from-openid-connect">How is IndieAuth different from OpenID Connect?</h3>
  <p>See <a href="https://indieweb.org/How_is_IndieAuth_different_from_OpenID_Connect">indieweb.org/How_is_IndieAuth_different_from_OpenID_Connect</a></p>

</section>


</article>

<footer>
  <section>
    <h3>More Resources</h3>
    <ul>
      <li><a href="https://indieweb.org/IndieAuth">IndieAuth on indieweb.org</a></li>
      <li><a href="https://indieweb.org/Category:IndieAuth">IndieAuth details and tutorials</a></li>
      <li><a href="https://oauth2simplified.com/">OAuth 2.0 Simplified</a></li>
      <li><a href="https://micropub.net/">Micropub</a></li>
    </ul>
  </section>
</footer>


</body>
</html>
