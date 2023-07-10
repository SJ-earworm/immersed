# immersed


<h2>Commit history</h2>
<h3>1st commit: HTML</h3>
<ul>
  <li>general layout of website using html</li>
</ul>

<h3>2nd commit: CSS</h3>
<ul>
  <li>css + settings button added</li>
</ul>

<h3>3rd commit: CSS</h3>
<ul>
  <li>fixed the dropdown display of the FAQs in help.html</li>
  <li>added more FAQ questions</li>
  <li>changed blacks to a much darker shade of grey</li>
  <li>renamed "categories.html" to "read.html"</li>
  <li>changed the layout & functionality for read.html</li>
  <li>added dedicated html pages for each book genre</li>
  <li>tweaked the design of the navigation bar</li>
  <li>removed some redundant css code</li>
</ul>

<h3>4th commit: Tidying up file contents + CSS</h3>
<ul>
  <li>migrated Google fonts url into stylesheet.css</li>
  <li>tidied up stylesheet.css: categorised codes</li>
  <li>added css to editor.html input tags & buttons (incomplete)</li>
</ul>

<h3>5th commit: JavaScript</h3>
<ul>
  <li>added some JavaScript</li>
</ul>


<h3>6th commit: Database</h3>
<ul>
  <li>added codes to generate the database</li>
</ul>


<h3>7th commit: Google Books API + password hashing</h3>
<ul>
  <li>embedded Google Books API to search and read books with the Embedded Viewer API</li>
  <li>added a feature to hash passwords</li>
</ul>

<br/><br/>

<h3>Weakness of the system</h3>
<h4>Home page</h4>
<ul>
  <li>'Featured Stories' section not fully implemented
    <ul>
      <li>List of featured books were not configured to display yet</li>
      <li>Empty book button action</li>
    </ul>
  </li>
</ul><br/>

<h4>Read page</h4>
<ul>
  <li>Loading search results will push the genre buttons to the bottom, making it hard to access if there are many results displayed
    <ul>
      <li>Cannot clear search results to bring the genre buttons back to the top</li>
    </ul>
  </li>
  <li>Website was not configured to query only fictional books</li>
  <li>Genre HTML pages have not been configured to display list of books (according to their respective genres) yet</li>
</ul><br/>

<h4>romance.php, comedy.php, scifi.php, fantasy.php, mystery.php, other.php</h4>
<ul>
  <li>Empty book button action</li>
</ul><br/>

<h4>'Write Your Story' page</h4>
<ul>
  <li>Page has not been configured to dynamically display the list of books that user has written</li>
</ul><br/>

<h4>editor.php</h4>
<ul>
  <li>CSS has not been properly tweaked</li>
  <li>'Upload' & 'Save to drafts' have an empty action</li>
</ul><br/>

<h4>Help page</h4>
<ul>
  <li>When opening the bottom most dropdown, user needs to manually scroll down to see the dropdown details instead of it automatically readjusting the page</li>
</ul><br/>

<h4>My Profile page</h4>
<ul>
  <li>'@usernamehere' was not configured to display any data from the database</li>
  <li>user is unable to edit their account details (e.g.name), including profile picture. Empty button action</li>
  <li>'My Stories', 'My Favourites' & 'Read Later' sections were not configured to display book dynamically according to what is in the database
    <ul>
      <li>Empty book button action</li>
    </ul>
  </li>
</ul><br/>

<h4>signup.php & login.php</h4>
<ul>
  <li>Hyperlink to be directed between signup.php & login.php is misaligned</li>
  <li>The alignment of input fields for both pages are not consistent with each other</li>
</ul><br/>


<h3>Website-wide weaknesses</h3>
<ul>
  <li>Responsiveness not configured</li>
  <li>Alignment of the website logo and settings button were pushed slightly to the left after JavaScript was added. Problem not yet solved</li>
</ul>
