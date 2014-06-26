<?php get_header(); ?>

<h1 data-lettering>Starbase Styleguide</h1>

<aside>Colors</aside>
<div class="row-16">
  <h4 class="col-s-2 col-m-2 col-l-2">Black</h4>
  <div class="bg-black col-s-2 col-m-6 col-l-14" style="background: #231f20; height: 50px;">
  </div>

  <h4 class="text-grey-dark col-s-2 col-m-2 col-l-2">Grey-dark</h4>
  <div class="bg-grey-dark col-s-2 col-m-6 col-l-14" style="background: #333333; height: 50px;">
  </div>

  <h4 class="text-grey col-s-2 col-m-2 col-l-2">Grey</h4>
  <div class="bg-grey col-s-2 col-m-6 col-l-14" style="background: #6d7377; height: 50px;"></div>

  <h4 class="text-grey col-s-2 col-m-2 col-l-2">Light Grey</h4>
  <div class="bg-grey col-s-2 col-m-6 col-l-14" style="background: #f0f0f0; height: 50px;"></div>

  <h4 class="text-grey col-s-2 col-m-2 col-l-2">White</h4>
  <div class="bg-grey col-s-2 col-m-6 col-l-14" style="background: #fdfdfd; height: 50px;"></div>
  
  <h4 class="col-s-2 col-m-2 col-l-2">Yellow</h4>
  <div class="bg-grey-light col-s-2 col-m-6 col-l-14" style="background: #f1c40f; height: 50px;">
  </div>
  
  <h4 class="col-s-2 col-m-2 col-l-2">Maroon</h4>
  <div class="bg-white col-s-2 col-m-6 col-l-14" style="background: #790f5b; height: 50px;">
  </div>

  <h4 class="col-s-2 col-m-2 col-l-2">Violet</h4>
  <div class="bg-white col-s-2 col-m-6 col-l-14" style="background: #43256c; height: 50px;">
  </div>

  <h4 class="col-s-2 col-m-2 col-l-2">MV</h4>
  <div class="bg-white col-s-2 col-m-6 col-l-14" style="background: linear-gradient(to bottom, #790f5b 10%, #43256c 100%); height: 100px;">
  </div>



</div>

<aside>Headings</aside>
<h1>h1. Heading Level One</h1>
<h1 data-lettering>h1. Heading Lettered</h1>
<br>
<br>
<br>
<h2>h2. Heading Level Two</h2>
<h3>h3. Heading Level Three</h3>
<h4>h4. Heading Level Four</h4>
<h5>h5. Heading Level Five</h5>
<h6>h6. Heading Level Six</h6>

<aside>Copy</aside>
<p>p. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan accumsan eros, sed mollis neque laoreet a. <a class="link" href="#">Duis massa</a> diam, tincidunt mattis lacus vel, aliquet facilisis justo. Nunc dictum odio eget convallis egestas. Donec aliquet accumsan metus, eu ullamcorper est aliquet in. Proin ac malesuada quam, vitae lobortis arcu. Aenean ultricies venenatis sapien et interdum. Nam tortor ligula, blandit vel leo ut, adipiscing aliquam augue.</p>

<aside>Formatting</aside>
<p class="bold">Bold</p>
<p class="light">Light</p>
<p class="thin">Thin</p>
<p class="italic">Italic</p>
<p class="lowercase">Lowercase</p>
<p class="uppercase">Uppercase</p>
<p class="large">Large</p>
<p class="small">Small</p>
<p class="font-heading">Font Heading</p>
<p class="font-mono">Font Mono</p>
<p class="font-sans">Font Sans (Default)</p>
<p class="font-serif">Font Serif</p>

<aside>Lists</aside>
<ul>
  <h4 class="list-title">Unordered List</h4>
  <li>Single Level UL Item One</li>
  <li>Single Level UL Item Two</li>
  <li>Single Level UL Item Three</li>
</ul>

<ul>
  <h4 class="list-title">Nested Unordered List</h4>
  <li>Single Level UL Item One
    <ul>
      <li>Nested Level UL Item One</li>
      <li>Nested Level UL Item Two</li>
    </ul>  
  </li>
  <li>Single Level UL Item Two</li>
  <li>Single Level UL Item Three</li>
</ul>

<ol>
  <h4 class="list-title">Ordered List</h4>
  <li>Single Level OL Item One</li>
  <li>Single Level OL Item Two</li>
  <li>Single Level OL Item Three</li>
</ol>

<dl>
  <h4 class="list-title">Definition List</h4>
  <dt>Definition List DT One</dt>
  <dd>Definition List DD One A</dd>
  <dd>Definition List DD One B</dd>
  <dt>Definition List DT Two</dt>
  <dd>Definition List DD Two A</dd>
  <dd>Definition List DD Two B</dd>
  <dt>Definition List DT Three</dt>
  <dd>Definition List DD Three A</dd>
  <dd>Definition List DD Three B</dd>
</dl>

<aside>Quote</aside>
<h4>Unstyled</h4>
<blockquote>
  <p>quote: Less is more.
  </p>
  <small>Ludwig Mies Van Der Rohe</small>
</blockquote>
<h4>Callout</h4>
<blockquote class="callout">
  <p>quote: Less is more.
  </p>
  <small>Ludwig Mies Van Der Rohe</small>
</blockquote>

<aside>Code</aside>
<h4>Unstyled</h4>
<code>code. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan accumsan eros, sed mollis neque laoreet a. Duis massa diam, tincidunt mattis lacus vel, aliquet facilisis justo.
</code>
<h4>Callout</h4>
<code class="callout">code. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan accumsan eros, sed mollis neque laoreet a. Duis massa diam, tincidunt mattis lacus vel, aliquet facilisis justo.
</code>

<div data-bg-image>
	<aside>Buttons</aside>  
	<button class="button button-tiny text-white">Button Tiny</button>
	<button class="button button-small text-white">Button Small</button>
	<button class="button button-medium text-white">Button Default</button>
	<button class="button button-large text-white">Button Large</button>
	<button class="button button-large text-white disabled">Button Disabled</button>
</div>

<aside>Inputs</aside>
<form>
  <label for="date">Date</label>
  <input type="date" name="date" placeholder="July 2, 1990">

  <label for="datetime">Datetime</label>
  <input type="datetime" name="datetime" placeholder="2:00am CST, July 2, 1990">

  <label for="email">Email</label>
  <input type="email" name="email" placeholder="hello@4redstars.com">

  <label for="text">Text</label>
  <input type="text" name="text" placeholder="text">

  <label for="textarea">Textarea</label>
  <textarea name="textarea" rows="4" cols="50" placeholder="Long textarea."></textarea>

  <label for="tel">Tel</label>
  <input type="tel" name="tel" placeholder="1.708.305.3993">

  <label for="time">Time</label>
  <input type="time" name="time" placeholder="11:00am">

  <label for="url">Url</label>
  <input type="url" name="url" placeholder="mies.4redstars.com">
</form>


<?php get_footer(); ?>
