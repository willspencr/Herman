<strong>HERMAN CHILD THEME</strong>
http://wpcanada.ca/our-themes/herman/

<strong>INSTALL</strong>
1. Upload the Herman child theme folder via FTP to your wp-content/themes/ directory. (the Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
 ** OR **
2. Upload the Herman child theme folder ZIP by navigating to Appearance > Install Themes > Upload
3. Go to your WordPress dashboard and select Appearance.
4. Activate the Herman theme.
5. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

<strong>HOME PAGE</strong>
The Herman child themes comes with 2 home page template files:
1. <code>home.php</code>
2. <code>home_loop.php</code>

<strong>HOME PAGE USAGE</strong>
1. <code>home.php</code> == The default homepage uses the <code>home.php</code> template file. This file features 6 widget areas - Home Slider, Home Welcome, Home Left,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Middle, Home Right and Home Message. If no widgets are active in these widget areas the theme will display a standard blog format. The widgets used in these areas are,

Home Slider: Genesis Responsive Slider
Home Welcome, Home Message: Text widgets
Home Left, Home Middle, Home Right: Genesis Featured Page widget

2. <code>home_loop.php</code> == This template file uses the Genesis Grid Loop. If you would like to use it instead of the default <code>home.php</code> follow these steps:
a. Rename the default <code>home.php</code> file to something like <code>home_old.php</code>
b. Rename <code>home_loop.php</code> to <code>home.php</code>
The Herman child theme will now use the Genesis Grid Loop as the default layout for the home page. To revert back simply rename the 2 files. There are several items
that can be configured by editing the <code>home_loop.php</code> template file such as number of featured posts, featured image size, featured content limit etc.

<strong>CONFIGURING HOME PAGE WIDGETS</strong>
Genesis Responsive Slider: 
a. Set Maximum Slider Width to 950
b. Set Maximum Slider Height to 300
c. Select "Display post content" from the drop down menu
d. Enter "155" characters into Limit content field
e. Set Slider Excerpt Width to 25
f. For Excerpt Location vertical choose "Top" from the drop down menu
g. For Excerpt Location horizontal choose "Right" from the drop down menu
&raquo; Please see image named <code>grs-config.png</code> in the theme's images folder for visual explanation.

Genesis Featured Page
a. Select your page from the drop down menu
b. Check the box "Show Featured Image"
c. Select "home-bottom (280x150)" from the drop down menu
d. Image Alignment select "None" from the drop down menu
e. Check the box "Show Page Title"
f. Check the box "Show Page Content"
g. Enter 160 in the Content Character Limit field
h. Enter some text in the More Text field

<strong>FEATURED IMAGES</strong>
By default WordPress will create a default thumbnail image for each image you upload and the size can be specified in your dashboard under Settings > Media. In addition, the Herman
child theme creates the following thumbnail images you'll see below, which are defined (and can be modified) in the <code>functions.php file</code>. These are the recommended
thumbnail sizes that are used on the Herman child theme demo site:

grid-thumbnail (285x120)
home-bottom (280x150)
slider (950x300)
portfolio (202x140)

You may have to resize your images. If so, we recommend the very excellent Regenerate Thumbnails plugin.
<a href="http://wordpress.org/extend/plugins/regenerate-thumbnails">http://wordpress.org/extend/plugins/regenerate-thumbnails</a>

<strong>SPECIAL FEATURES</strong>
The Herman child theme comes with the following:
1. Google fonts
2. Your choice of 3 home page layouts
3. 6 different content box styles
4. Pullquotes
5. Support for Post Formats
6. Support Simple Social Icons plugin from StudioPress
7. Landing Page template
8. Portfolio Page template
9. Widgetized 404 Page

<strong>SETTING UP THE PORTFOLIO PAGE</strong>
1. Create a page called "Portfolio" or some such thing. Don't add any content to it. From the drop-down menu select the Portfolio Page template and publish the blank page.
2. Create a category called "Portfolio".
3. Create a series of posts and file them under the Portfolio category. Set a feature image for each post.
4. Add the Genesis Featured Post widget to the Portfolio widget area on the widget screen. Configure. The feature images you selected will automatically appear on the Portfolio page.

<strong>CONTENT BOXES</strong>
The custom content boxes make use of DIV classes. For example, &lt;div class="content-box-blue"&gt;some random text&lt;/div&gt;
There are 6 styles to choose from.

<strong>Pullquotes</strong>
Pullquotes are added to posts or pages by assigning a div class to the text you want to quote. Their are 2 options you can use, left-aligned and right-aligned.

For example, to use a left-aligned pullquote do this ...
&lt;div class="pullquote-left"&gt;This is a left-aligned pullquote.&lt;/div&gt;

and to use a right-aligned pullquote do this ...
&lt;div class="pullquote-right"&gt;This is a right-aligned pullquote.&lt;/div&gt;

In previous versions of this theme I added the pullquotes as a class to the blockquote but have now changed that for a couple of reasons:
1. This method avoids any potential conflicts with blockquotes.
2. The CSS is cleaner. At least I think so.

<strong>GENESIS BOX</strong>
The Genesis Box is disabled by default. To enable it, open Herman's <code>functions.php</code> file and uncomment the function. Specifically, look for this ...

<code>/** Add Genesis Box on Single Posts */
//add_action( 'genesis_after_post_content', 'include_genesis_box', 11 );
//function include_genesis_box() {
    //if ( is_single() )
    //require( CHILD_DIR.'/genesis-box.php' );
//}</code>

... and remove all of the //

<strong>PLUGINS</strong>
Genesis Responsive Slider - <a href="http://wordpress.org/extend/plugins/genesis-responsive-slider/">http://wordpress.org/extend/plugins/genesis-responsive-slider/</a>
Simple Social Icons - <a href="http://wordpress.org/extend/plugins/simple-social-icons/">http://wordpress.org/extend/plugins/simple-social-icons</a>
Regenerate Thumbnails - <a href="http://wordpress.org/extend/plugins/regenerate-thumbnails/">http://wordpress.org/extend/plugins/regenerate-thumbnails/</a>
Genesis eNews Extended - <a href="http://wordpress.org/extend/plugins/genesis-enews-extended/">http://wordpress.org/extend/plugins/genesis-enews-extended/</a>

<strong>CREDIT</strong>
1. Post Format icons courtesy StudioPress &ndash; http://www.studiopress.com/graphics/post-format-icons
2. Content Boxes by Brian Gardner &ndash; http://www.briangardner.com/genesis-content-boxes/
3. Widgetized 404 Page by David Decker &ndash; http://genesisthemes.de/en/2011-08/tutorial-widgetized-404-error-page-in-genesis/

<strong>FURTHER</strong>
1. Theme release page &ndash; http://wpcanada.ca/our-themes/herman/
2. Theme Demo &ndash; http://demo.wpcanada.ca/herman/
3. Theme download page &ndash; http://code.google.com/p/herman-theme/

<strong>BUG REPORTS</strong>
Bug reports can be filed at http://code.google.com/p/herman-theme/

Enjoy!