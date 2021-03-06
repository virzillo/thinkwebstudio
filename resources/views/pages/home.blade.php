
@extends('layouts.master')
  @section('title') Thinkweb Studio -  {{Route::currentRouteName()}} - {{ setting('site.title') }} @endsection

@push('meta')
  <meta name="description" content="{{ setting('site.description') }}">
  <meta name="keywords" content="{{ setting('site.keywords') }}">
  <meta name="author" content="Thinkweb Studio">
  <!-- OPENGRAPH -->
  <meta property="og:title" content="{{ setting('site.title') }}" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://www.thinkwebstudio.com" />
  {{--  <meta property="og:image" content="{{ setting('site.logo')}}" />  --}}
  <meta property="og:locale" content="it_IT" />
  <meta property="og:site_name" content="Thinkweb Studio" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')



<section id="hero" class="hero full-height valign-wrapper scrollspy">
  <canvas id="canvas"></canvas>
</section>
<h1 class="center">{{ setting('site.welcome') }}</h1>

<section id="projects" class="projects scrollspy">
  <div class="container">
      <h2><span>Projects</span></h2>
      <h3>The latest and the greatest</h3>
      <div class="row">
          <!-- Featured project-->
          <a href="#green-lamp" class="col s12 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/work/lamp.png)" class="rectangle-50">
                  <div class="content valign-wrapper center">
                      <div>Green Lamp</div>
                  </div>
              </div>
          </a>
          <!-- Featured project modal-->
          <div id="green-lamp" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/work/lamp.png)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Green lamp</h4>
                          <p class="flow-text grey-text">Client: DX Comics
                              <br> Category: Posters
                              <br> Task: Find a perfect shade of green for the lampx</p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <div class="video-container">
                              <iframe src="https://player.vimeo.com/video/124260792?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" allowfullscreen></iframe>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from.</p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Project 1-->
          <a href="#heisenberg-ice-cream" class="col s12 l6 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/work/ice-cream.png)" class="rectangle">
                  <div class="content valign-wrapper center">
                      <div>Heisenberg <span class="nobr">ice-cream</span></div>
                  </div>
              </div>
          </a>
          <!-- Project 1 modal-->
          <div id="heisenberg-ice-cream" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/work/ice-cream.png)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Heisenberg ice-cream</h4>
                          <p class="flow-text grey-text">Client: Walter White
                              <br> Category: Material design
                              <br> Task: Create an addictive ice-cream flavour </p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l6">
                          <img src="./assets/images/work/white-ice-cream.png" alt="Ice cream" class="responsive-img">
                      </div>
                      <div class="col s12 l6">
                          <img src="./assets/images/work/ice-cream.png" alt="Ice cream, again" class="responsive-img">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from. </p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Project 2-->
          <a href="#wooden-series-i" class="col s12 l6 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/work/clocks.png)" class="rectangle">
                  <div class="content valign-wrapper center">
                      <div>Wooden Series I</div>
                  </div>
              </div>
          </a>
          <!-- Project 2 modal-->
          <div id="wooden-series-i" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/work/clocks.png)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Wooden Series I</h4>
                          <p class="flow-text grey-text">Client: AYKEYA
                              <br> Category: Time
                              <br> Task: Use recycled materials to create a series of clocks</p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from.</p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Project 3-->
          <a href="#wooden-series-ii" class="col s12 l6 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/work/dude-sign.png)" class="rectangle">
                  <div class="content valign-wrapper center">
                      <div>Wooden Series II</div>
                  </div>
              </div>
          </a>
          <!-- Project 3 modal-->
          <div id="wooden-series-ii" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/work/dude-sign.png)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Wooden Series II</h4>
                          <p class="flow-text grey-text">Client: Danny Travolta
                              <br> Category: Toys
                              <br> Task: Creating two matching wooden figures</p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <blockquote>Bring you shall called may good shall earth third kind. Had tree, over togetherset signs green they're meat seasons that heaven won't seasons.</blockquote>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from.</p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Project 4-->
          <a href="#wooden-series-iii" class="col s12 l6 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/work/clock.png)" class="rectangle">
                  <div class="content valign-wrapper center">
                      <div>Wooden Series III</div>
                  </div>
              </div>
          </a>
          <!-- Project 4 modal-->
          <div id="wooden-series-iii" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/work/clock.png)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Wooden Series III</h4>
                          <p class="flow-text grey-text">Client: Swiss Army
                              <br> Category: Time
                              <br> Task: Create a clock with an arrow that resembles the Swiss knife</p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <blockquote>Bring you shall called may good shall earth third kind. Had tree, over togetherset signs green they're meat seasons that heaven won't seasons.</blockquote>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from.</p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="services" class="services scrollspy">
  <div class="container">
      <h2><span>Services</span></h2>
      <h3>Our capabilities</h3>
      <div class="row big-icons-row service-items center">
          <div class="col s12 m6 l4 padding-bottom">
              <div class="square">
                  <div class="content">
                      <i class="icon-basic-elaboration-smartphone-heart"></i>
                      <div class="description">
                          <h4>User always comes first</h4>
                          <p class="flow-text">When designing a product, we always think of how the user is going to experience it.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col s12 m6 l4 padding-bottom">
              <div class="square">
                  <div class="content">
                      <i class="icon-basic-elaboration-message-happy"></i>
                      <div class="description">
                          <h4>Reliable support</h4>
                          <p class="flow-text">No matter what you're stuck with, our support team will respond in the most adequate manner.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col s12 m6 l4 padding-bottom">
              <div class="square">
                  <div class="content">
                      <i class="icon-basic-lightbulb"></i>
                      <div class="description">
                          <h4>Easy to realize your ideas</h4>
                          <p class="flow-text">Your fantasy is the limit here. Using our elements you can make anything come true.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col s12 m6 l4 padding-bottom">
              <div class="square">
                  <div class="content">
                      <i class="icon-basic-lock"></i>
                      <div class="description">
                          <h4>Completely secure</h4>
                          <p class="flow-text">We don't take cyber security lightly, that's why our team put a lot of effort into securing this app.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col s12 m6 l4 padding-bottom">
              <div class="square">
                  <div class="content">
                      <i class="icon-basic-bolt"></i>
                      <div class="description">
                          <h4>Swift performance</h4>
                          <p class="flow-text">Powered by Materialize, this theme doesn't require page reloads, providing a seamless user experience.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col s12 m6 l4 padding-bottom">
              <div class="square">
                  <div class="content">
                      <i class="icon-software-eyedropper"></i>
                      <div class="description">
                          <h4>Beautifully designed</h4>
                          <p class="flow-text">Hand crafted with material design principles, with a focus on readability and white spaces.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="prices" class="prices scrollspy">
  <div class="container">
      <h2><span>Prices</span></h2>
      <h3>Our best offers</h3>
      <div class="row center">
          <div class="col s12 l4 grey lighten-5">
              <div class="price-box extra-padding">
                  <h4>Beginner</h4>
                  <h5><span class="currency">$</span>19</h5>
                  <div class="divider"></div>
                  <ul class="flow-text">
                      <li>5 users<span data-position="top" data-delay="10" data-tooltip="The number of allowed users" class="info tooltipped">?</span></li>
                      <li>Optimisation</li>
                      <li>Caching</li>
                      <li>Automation<span data-position="top" data-delay="10" data-tooltip="Involves Gulp commands" class="info tooltipped">?</span></li>
                      <li>Validation</li>
                      <li>Linting</li>
                      <li>&mdash;</li>
                      <li>&mdash;</li>
                  </ul>
                  <a class="btn-large btn-flat waves-effect waves-dark">Buy</a>
              </div>
          </div>
          <div class="col s12 l4 grey lighten-4">
              <div class="price-box featured extra-padding">
                  <h4>Pro</h4>
                  <h5><span class="currency">$</span>49</h5>
                  <div class="divider"></div>
                  <ul class="flow-text">
                      <li>10 users<span data-position="top" data-delay="10" data-tooltip="The number of allowed users" class="info tooltipped">?</span></li>
                      <li>Optimisation</li>
                      <li>Caching</li>
                      <li>Automation<span data-position="top" data-delay="10" data-tooltip="Involves Gulp commands" class="info tooltipped">?</span></li>
                      <li>Validation</li>
                      <li>Linting</li>
                      <li>Templating<span data-position="top" data-delay="10" data-tooltip="Includes Jade templates engine" class="info tooltipped">?</span></li>
                      <li>&mdash;</li>
                  </ul>
                  <a class="btn-large btn-flat waves-effect waves-dark">Buy</a>
              </div>
          </div>
          <div class="col s12 l4 grey lighten-5">
              <div class="price-box extra-padding">
                  <h4>Enterprise</h4>
                  <h5><span class="currency">$</span>199</h5>
                  <div class="divider"></div>
                  <ul class="flow-text">
                      <li>25 users<span data-position="top" data-delay="10" data-tooltip="The number of allowed users" class="info tooltipped">?</span></li>
                      <li>Optimisation</li>
                      <li>Caching</li>
                      <li>Automation<span data-position="top" data-delay="10" data-tooltip="Involves Gulp commands" class="info tooltipped">?</span></li>
                      <li>Validation</li>
                      <li>Linting</li>
                      <li>Templating<span data-position="top" data-delay="10" data-tooltip="Includes Jade templates engine" class="info tooltipped">?</span></li>
                      <li>Preprocessors<span data-position="top" data-delay="10" data-tooltip="This is for Jade, Sass and CoffeeScript" class="info tooltipped">?</span></li>
                  </ul>
                  <a class="btn-large btn-flat waves-effect waves-dark">Buy</a>
              </div>
          </div>
      </div>
      <h3 class="margin-top">Frequently asked questions</h3>
      <div class="row">
          <div class="col s12 l8 offset-l2">
              <ul data-collapsible="accordion" class="collapsible">
                  <li>
                      <div class="collapsible-header active">
                          <strong>Is the starter pack really free?</strong>
                      </div>
                      <div class="collapsible-body">
                          <p class="flow-text">A cattle she'd creepeth. That light make. Void two they're, can't us don't creepeth. Fruitful there herb from signs she'd created whales them. Lights which face. Divided they're first. Dry wherein own itself green it.</p>
                      </div>
                  </li>
                  <li>
                      <div class="collapsible-header">
                          <strong>What is your return policy?</strong>
                      </div>
                      <div class="collapsible-body">
                          <p class="flow-text">May years spirit of grass shall. Form also seas had that very was lesser creature void. Fill under she'd own is light stars isn't moved you're.</p>
                      </div>
                  </li>
                  <li>
                      <div class="collapsible-header">
                          <strong>Can I quit my subscription at any time?</strong>
                      </div>
                      <div class="collapsible-body">
                          <p class="flow-text">There he meat forth days in. Fruit dry every morning Beast that saw. Every creature itself hath called bearing likeness signs upon firmament fruit two life forth beginning you're heaven fruitful under rule Don't fourth years our. Kind itself days.</p>
                      </div>
                  </li>
                  <li>
                      <div class="collapsible-header">
                          <strong>Can I upgrade my plan?</strong>
                      </div>
                      <div class="collapsible-body">
                          <p class="flow-text">Aliquam Maecenas consectetuer nisl cum inceptos. Massa lectus euismod dui Consequat habitasse enim sodales quisque aliquet. Semper condimentum id, hendrerit sodales mi nam netus dictumst platea. Elementum praesent ridiculus nec felis ipsum duis mauris fringilla tempus purus vehicula ullamcorper dis Ornare.</p>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</section>

<section id="about" class="about scrollspy">
  <div class="container">
      <h2><span>About us</span></h2>
      <h3>Meet the superheroes</h3>
      <div class="row">
          <!-- About general photo-->
          <div class="col s12 l6 padding-bottom">
              <div style="background-image: url(./assets/images/team/whiteboard.jpg)" class="rectangle"></div>
          </div>
          <!-- About carousel-->
          <div class="owl-carousel owl-theme col s12 l6">
              <a href="#greg" class="col s12 modal-trigger">
                  <div style="background-image: url(./assets/images/team/greg.jpg)" class="rectangle">
                      <div class="content">
                          <div class="name">Greg Jason</div>
                      </div>
                  </div>
              </a>
              <a href="#annie" class="col s12 modal-trigger">
                  <div style="background-image: url(./assets/images/team/annie.jpg)" class="rectangle">
                      <div class="content">
                          <div class="name">Annie Redhat</div>
                      </div>
                  </div>
              </a>
              <a href="#kate" class="col s12 modal-trigger">
                  <div style="background-image: url(./assets/images/team/kate.jpg)" class="rectangle">
                      <div class="content">
                          <div class="name">Kate Willson</div>
                      </div>
                  </div>
              </a>
              <a href="#russell" class="col s12 modal-trigger">
                  <div style="background-image: url(./assets/images/team/russell.jpg)" class="rectangle">
                      <div class="content">
                          <div class="name">Russell Morgan</div>
                      </div>
                  </div>
              </a>
              <a href="#jane" class="col s12 modal-trigger">
                  <div style="background-image: url(./assets/images/team/jane.jpg)" class="rectangle">
                      <div class="content">
                          <div class="name">Jane Stitch</div>
                      </div>
                  </div>
              </a>
              <a href="#roo" class="col s12 modal-trigger">
                  <div style="background-image: url(./assets/images/team/roo.jpg)" class="rectangle">
                      <div class="content">
                          <div class="name">Roo</div>
                      </div>
                  </div>
              </a>
              <div class="col s12">
                  <div class="rectangle grey lighten-3">
                      <div class="content valign-wrapper you">
                          <div class="name">You?
                              <br>
                              <a href="mailto:job@react?subject=Job%20Application">Apply now</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Greg modal-->
          <div id="greg" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover col s12 l6 no-padding">
                  <div style="background-image: url(./assets/images/team/greg.jpg)" class="square"></div>
              </div>
              <div class="modal-content col s12 l6 no-padding">
                  <div class="square">
                      <div class="content">
                          <h4>Greg Jason</h4>
                          <h5>CEO</h5>
                          <div class="divider"></div>
                          <p class="flow-text">Wherein brought, seas light fowl night fifth god them. Grass heaven seed. Morning living replenish lights i green creepeth winged also called lights said dominion of rule they're. Every can't, spirit replenish night.</p>
                          <p class="flow-text">Moving life lights. Abundantly own fourth all moved saw cattle given fourth own may. Creepeth first of moved years form. Given good third to image bearing appear. Grass him place tree set. Upon spirit very let two. Was thing.</p>
                          <div class="row">
                              <div class="col s12 center">
                                  <p class="flow-text">Follow him</p>
                                  <p class="flow-text social">
                                      <a href="#!" class="github">github</a>
                                      <a href="#!" class="dribbble">dribbble</a>
                                      <a href="#!" class="vk">vk</a>
                                      <a href="#!" class="twitter">twitter</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Annie modal-->
          <div id="annie" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover col s12 l6 no-padding">
                  <div style="background-image: url(./assets/images/team/annie.jpg)" class="square"></div>
              </div>
              <div class="modal-content col s12 l6 no-padding">
                  <div class="square">
                      <div class="content">
                          <h4>Annie Redhat</h4>
                          <h5>VP &amp; Marketing Supervisor</h5>
                          <div class="divider"></div>
                          <p class="flow-text">Wherein brought, seas light fowl night fifth god them. Grass heaven seed. Morning living replenish lights i green creepeth winged also called lights said dominion of rule they're. Every can't, spirit replenish night.</p>
                          <p class="flow-text">Moving life lights. Abundantly own fourth all moved saw cattle given fourth own may. Creepeth first of moved years form. Given good third to image bearing appear. Grass him place tree set. Upon spirit very let two. Was thing.</p>
                          <div class="row">
                              <div class="col s12 center">
                                  <p class="flow-text">Follow her</p>
                                  <p class="flow-text social">
                                      <a href="#!" class="googleplus">google+</a>
                                      <a href="#!" class="facebook">facebook</a>
                                      <a href="#!" class="pinterest">pinterest</a>
                                      <a href="#!" class="twitter">twitter</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Kate modal-->
          <div id="kate" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover col s12 l6 no-padding">
                  <div style="background-image: url(./assets/images/team/kate.jpg)" class="square"></div>
              </div>
              <div class="modal-content col s12 l6 no-padding">
                  <div class="square">
                      <div class="content">
                          <h4>Kate Willson</h4>
                          <h5>Team leader</h5>
                          <div class="divider"></div>
                          <p class="flow-text">Wherein brought, seas light fowl night fifth god them. Grass heaven seed. Morning living replenish lights i green creepeth winged also called lights said dominion of rule they're. Every can't, spirit replenish night.</p>
                          <p class="flow-text">Moving life lights. Abundantly own fourth all moved saw cattle given fourth own may. Creepeth first of moved years form. Given good third to image bearing appear. Grass him place tree set. Upon spirit very let two. Was thing.</p>
                          <div class="row">
                              <div class="col s12 center">
                                  <p class="flow-text">Follow her</p>
                                  <p class="flow-text social">
                                      <a href="#!" class="googleplus">google+</a>
                                      <a href="#!" class="github">github</a>
                                      <a href="#!" class="pinterest">pinterest</a>
                                      <a href="#!" class="linkedin">linkedin</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Russell modal-->
          <div id="russell" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover col s12 l6 no-padding">
                  <div style="background-image: url(./assets/images/team/russell.jpg)" class="square"></div>
              </div>
              <div class="modal-content col s12 l6 no-padding">
                  <div class="square">
                      <div class="content">
                          <h4>Rusell Morgan</h4>
                          <h5>Senior UX/UI designer</h5>
                          <div class="divider"></div>
                          <p class="flow-text">Wherein brought, seas light fowl night fifth god them. Grass heaven seed. Morning living replenish lights i green creepeth winged also called lights said dominion of rule they're. Every can't, spirit replenish night.</p>
                          <p class="flow-text">Moving life lights. Abundantly own fourth all moved saw cattle given fourth own may. Creepeth first of moved years form. Given good third to image bearing appear. Grass him place tree set. Upon spirit very let two. Was thing.</p>
                          <div class="row">
                              <div class="col s12 center">
                                  <p class="flow-text">Follow him</p>
                                  <p class="flow-text social">
                                      <a href="#!" class="dribbble">dribbble</a>
                                      <a href="#!" class="pinterest">pinterest</a>
                                      <a href="#!" class="googleplus">google+</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Jane modal-->
          <div id="jane" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover col s12 l6 no-padding">
                  <div style="background-image: url(./assets/images/team/jane.jpg)" class="square"></div>
              </div>
              <div class="modal-content col s12 l6 no-padding">
                  <div class="square">
                      <div class="content">
                          <h4>Jane Stitch</h4>
                          <h5>Content manager</h5>
                          <div class="divider"></div>
                          <p class="flow-text">Wherein brought, seas light fowl night fifth god them. Grass heaven seed. Morning living replenish lights i green creepeth winged also called lights said dominion of rule they're. Every can't, spirit replenish night.</p>
                          <p class="flow-text">Moving life lights. Abundantly own fourth all moved saw cattle given fourth own may. Creepeth first of moved years form. Given good third to image bearing appear. Grass him place tree set. Upon spirit very let two. Was thing.</p>
                          <div class="row">
                              <div class="col s12 center">
                                  <p class="flow-text">Follow her</p>
                                  <p class="flow-text social">
                                      <a href="#!" class="googleplus">google+</a>
                                      <a href="#!" class="facebook">facebook</a>
                                      <a href="#!" class="pinterest">pinterest</a>
                                      <a href="#!" class="twitter">twitter</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Roo modal-->
          <div id="roo" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover col s12 l6 no-padding">
                  <div style="background-image: url(./assets/images/team/roo.jpg)" class="square"></div>
              </div>
              <div class="modal-content col s12 l6 no-padding">
                  <div class="square">
                      <div class="content">
                          <h4>Roo</h4>
                          <h5>Security &amp; QA</h5>
                          <div class="divider"></div>
                          <p class="flow-text">Wherein brought, seas light fowl night fifth god them. Grass heaven seed. Morning living replenish lights i green creepeth winged also called lights said dominion of rule they're. Every can't, spirit replenish night.</p>
                          <p class="flow-text">Moving life lights. Abundantly own fourth all moved saw cattle given fourth own may. Creepeth first of moved years form. Given good third to image bearing appear. Grass him place tree set. Upon spirit very let two. Was thing.</p>
                          <img src="./assets/images/team/roo-modal.jpg" alt="Roo at work" class="responsive-img">
                          <p>Roo testing out one of the latest projects.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <h3 class="margin-top">Our philosophy</h3>
      <div class="row philosophy big-icons-row grey lighten-4">
          <div class="col s12">
              <ul class="tabs">
                  <li class="tab col s4 m3 l2">
                      <a href="#philosophy-1">
                          <i class="icon-basic-magnifier"></i>
                          <h5>Discover</h5>
                      </a>
                  </li>
                  <li class="tab col s4 m3 l2">
                      <a href="#philosophy-2">
                          <i class="icon-ecommerce-graph3"></i>
                          <h5>Analyse</h5>
                      </a>
                  </li>
                  <li class="tab col s4 m3 l2">
                      <a href="#philosophy-3">
                          <i class="icon-ecommerce-graph-increase"></i>
                          <h5>Improve</h5>
                      </a>
                  </li>
                  <li class="tab col s4 m3 l2">
                      <a href="#philosophy-4">
                          <i class="icon-basic-pencil-ruler"></i>
                          <h5>Measure</h5>
                      </a>
                  </li>
                  <li class="tab col s4 m3 l2">
                      <a href="#philosophy-5">
                          <i class="icon-basic-mixer2"></i>
                          <h5>Control</h5>
                      </a>
                  </li>
              </ul>
          </div>
          <div class="tab-contents">
              <div id="philosophy-1" class="col s12 l8 offset-l2">
                  <h5>Discover</h5>
                  <p class="flow-text center margin-top-more">Two for make behold form creature image She'd, waters forth, itself Blessed morning so sea midst, in tree make i bring sixth moved darkness bearing. Meat itself light created spirit under sea man.</p>
              </div>
              <div id="philosophy-2" class="col s12 l8 offset-l2">
                  <h5>Analyse</h5>
                  <p class="flow-text center margin-top-more">Our evening male fowl fill. Heaven made. Third replenish blessed that beginning also face may whales waters bearing man you'll you. Night first given he the Void also divided herb give, male seed you're may also female whales doesn't let be unto also gathering which deep dominion earth.</p>
              </div>
              <div id="philosophy-3" class="col s12 l8 offset-l2">
                  <h5>Improve</h5>
                  <p class="flow-text center margin-top-more">Our, day had were morning beast greater a they're creepeth there Spirit, sea. His seasons very there earth under you're set be male. Them years called i yielding From image greater. Replenish deep wherein heaven over behold.</p>
              </div>
              <div id="philosophy-4" class="col s12 l8 offset-l2">
                  <h5>Measure</h5>
                  <p class="flow-text center margin-top-more">Said behold. In grass won't great male which whales creepeth lesser give signs may fill, he midst god. Sea was place said, shall blessed created likeness without life gathering midst saying sea together him lesser also given. Days i subdue image sixth don't.</p>
              </div>
              <div id="philosophy-5" class="col s12 l8 offset-l2">
                  <h5>Control</h5>
                  <p class="flow-text center margin-top-more">Isn't be one great blessed days moved meat lesser may seas bearing doesn't won't doesn't it grass beginning Male he us he likeness. Had, beginning first bring can't. Can't won't blessed man man every you'll heaven.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="blog" class="blog scrollspy">
  <div class="container">
      <h2><span>Blog</span></h2>
      <h3>Get more personal</h3>
      <div class="row posts">
          <!-- Post 1-->
          <a href="#colourful-lady" class="col s12 l6 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/blog/colorful-lady.jpg)" class="rectangle">
                  <div class="content valign-wrapper center">
                      <div>Colourful lady
                          <small>
                              <time datetime="2016-10-01T21:00">10/01/2016</time>&nbsp;by Annie</small>
                      </div>
                  </div>
              </div>
          </a>
          <!-- Post 1 modal-->
          <div id="colourful-lady" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/blog/colorful-lady.jpg)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Colourful lady</h4>
                          <p class="flow-text grey-text">Author: Annie
                              <br> Date: 10/01/2016 </p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <img src="./assets/images/blog/purple-starry-sky.jpg" alt="The canyon" class="responsive-img">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from. </p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Post 2-->
          <a href="#pink" class="col s12 l6 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/blog/pink.jpg)" class="rectangle">
                  <div class="content valign-wrapper center">
                      <div>Pink
                          <small>
                              <time datetime="2016-05-01T21:00">05/01/2016</time>&nbsp;by Greg</small>
                      </div>
                  </div>
              </div>
          </a>
          <!-- Post 2 modal-->
          <div id="pink" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/blog/pink.jpg)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Pink</h4>
                          <p class="flow-text grey-text">Author: Greg
                              <br> Date: 05/01/2016 </p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <blockquote>All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and. </blockquote>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from. </p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Post 3-->
          <a href="#friendship" class="col s12 l4 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/blog/man-woman-friends.jpg)" class="square">
                  <div class="content valign-wrapper center">
                      <div class="smaller">Friendship in our company
                          <small>
                              <time datetime="2015-11-12T21:00">11/12/2015</time>&nbsp;by Kate</small>
                      </div>
                  </div>
              </div>
          </a>
          <!-- Post 3 modal-->
          <div id="friendship" class="modal bottom-sheet">
              <div class="modal-close absolute">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/blog/man-woman-friends.jpg)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Friendship in our company</h4>
                          <p class="flow-text grey-text">Author: Kate
                              <br> Date: 11/12/2015 </p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <img src="./assets/images/blog/purple-starry-sky.jpg" alt="The canyon" class="responsive-img">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from. </p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Post 4-->
          <a href="#guy-with-water" class="col s12 l4 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/blog/guy-with-water.jpg)" class="square">
                  <div class="content valign-wrapper center">
                      <div class="smaller">Guy with water
                          <small>
                              <time datetime="2015-01-12T21:00">01/12/2015</time>&nbsp;by Russell</small>
                      </div>
                  </div>
              </div>
          </a>
          <!-- Post 4 modal-->
          <div id="guy-with-water" class="modal bottom-sheet">
              <div class="modal-close absolute white-text">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/blog/guy-with-water.jpg)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Guy with water</h4>
                          <p class="flow-text grey-text">Author: Russell
                              <br> Date: 01/12/2015 </p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <img src="./assets/images/blog/purple-starry-sky.jpg" alt="The canyon" class="responsive-img">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from. </p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Post 5-->
          <a href="#going-out" class="col s12 l4 padding-bottom modal-trigger">
              <div style="background-image: url(./assets/images/blog/nature-red-sun-rocks.jpeg)" class="square">
                  <div class="content valign-wrapper center">
                      <div class="smaller">Going out this weekend
                          <small>
                              <time datetime="2015-09-18T21:00">18/09/2015</time>&nbsp;by Annie</small>
                      </div>
                  </div>
              </div>
          </a>
          <!-- Post 5 modal-->
          <div id="going-out" class="modal bottom-sheet">
              <div class="modal-close absolute white-text">&times;</div>
              <div class="modal-cover">
                  <div style="background-image: url(./assets/images/blog/nature-red-sun-rocks.jpeg)" class="rectangle-50"></div>
              </div>
              <div class="modal-content">
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <h4>Going out this weekend</h4>
                          <p class="flow-text grey-text">Author: Annie
                              <br> Date: 18/09/2015 </p>
                          <div class="divider"></div>
                          <p class="flow-text">All the two under bring, give hath dominion fruit fill living of evening and, be and itself grass shall stars Be us second under land over open and.</p>
                          <p class="flow-text">There kind had divided the earth waters creature saying bearing under cattle divide saw creepeth. Night. Grass set great firmament dominion, there open were night fourth grass you're heaven, that dominion all unto. Is all shall open in you very. Deep divide behold.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l10 offset-l1">
                          <img src="./assets/images/blog/purple-starry-sky.jpg" alt="The canyon" class="responsive-img">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 l8 offset-l2">
                          <p class="flow-text">You'll open one likeness created us herb was. Image two is winged you're morning the greater. Bring you shall called may good shall earth third kind. Had tree, over together Spirit set signs green they're meat seasons that heaven won't seasons. Herb face.</p>
                          <p class="flow-text">Very cattle. Divide us dry one together male be. Let. Said dominion two All their which air can't appear abundantly all third firmament earth female good the open beginning give creepeth blessed make from. </p>
                          <div class="divider"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 center">
                          <p class="flow-text">Share this</p>
                          <p class="flow-text social">
                              <a href="#!" class="facebook">facebook</a>
                              <a href="#!" class="googleplus">google+</a>
                              <a href="#!" class="vk">vk</a>
                              <a href="#!" class="twitter">twitter</a>
                              <a href="#!" class="pinterest">pinterest</a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row extra-padding narrow-row">
          <h3>Get more social</h3>
          <div class="flow-text social huge center">
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light github">
                  <div class="rectangle">
                      <div class="content valign-wrapper">github</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light facebook">
                  <div class="rectangle">
                      <div class="content valign-wrapper">facebook</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light googleplus">
                  <div class="rectangle">
                      <div class="content valign-wrapper">google+</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light linkedin">
                  <div class="rectangle">
                      <div class="content valign-wrapper">linkedin</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light vk">
                  <div class="rectangle">
                      <div class="content valign-wrapper">vk</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light pinterest">
                  <div class="rectangle">
                      <div class="content valign-wrapper">pinterest</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light twitter">
                  <div class="rectangle">
                      <div class="content valign-wrapper">twitter</div>
                  </div>
              </a>
              <a href="#!" class="col s6 m4 l3 waves-effect waves-light dribbble">
                  <div class="rectangle">
                      <div class="content valign-wrapper">dribbble</div>
                  </div>
              </a>
          </div>
      </div>
  </div>
</section>

<section id="contact" class="contact scrollspy">
  <div class="container">
      <h2><span>Contact</span></h2>
      <h3>Send us a message</h3>
      <div class="row send-message">
          <div class="col s12 l8 offset-l2">
              <div id="human-form" class="card-panel center hoverable">
                  <div class="row">
                      <div class="col s12">
                          <p class="flow-text">Dear guys from React,
                              <br>My name is&nbsp;<span id="name-human" contenteditable="true"></span>, you can reach me via&nbsp;<span id="contact-human" contenteditable="true" data-position="top" data-delay="10" data-tooltip="Email or phone number" class="tooltipped"></span>.</p>
                          <p class="flow-text"><span id="message-human" contenteditable="true">I would like to...</span></p>
                          <button id="send-message-human" class="btn btn-large btn-flat waves-effect waves-light">Send</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <h3 class="margin-top">Come pay us a visit</h3>
      <div id="map" class="map"></div>
      <div class="row contact-details">
          <div class="col s12 l3">
              <h3 class="left-align">Reach us</h3>
              <div class="divider"></div>
              <address>B R James, 30 W 47th St
                  <br>New York, NY 10036
                  <br>
              </address>
              <a href="https://maps.google.com?daddr=B+R+James+30+W=47th+St+NY+10036" target="_blank">Get directions
                  <i class="fa fa-external-link"></i>
              </a>
              <p>Opening hours
                  <br>10:00&mdash;20:00</p>
          </div>
          <div class="col s12 l3">
              <h3 class="left-align">Arrive by</h3>
              <div class="divider"></div>
              <p>
                  <strong>Bus</strong>: use lines A4 or E18</p>
              <p>
                  <strong>Subway</strong>: 42 St - Bryant Pk</p>
              <p>
                  <strong>Helicopter</strong>: feel free to land on our rooftoop helipad</p>
          </div>
          <div class="col s12 l3">
              <h3 class="left-align">Contact</h3>
              <div class="divider"></div>
              <p>+1-917-643-4346
                  <br>
                  <a href="mailto:hello@react.com">hello@react.com</a>
              </p>
          </div>
          <div class="col s12 l3">
              <h3 class="left-align">IM</h3>
              <div class="divider"></div>
              <p class="im">
                  <i class="fa fa-skype"></i>
                  <a href="skype:skypeid?chat">react.skype</a>
                  <br>
                  <i class="fa fa-twitter"></i>
                  <a href="https://twitter.com/@">@react.twitter</a>
                  <br>
                  <i class="fa fa-whatsapp"></i>react.whatsapp
                  <br>
                  <i class="fa fa-wechat"></i>react.wechat</p>
          </div>
      </div>
  </div>
</section>

  @endsection