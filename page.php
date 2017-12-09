<?php

/*
* Template Name: Landing Page
*/

get_header(); ?>

<!-- Page Header -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $image = get_field('banner'); ?>

    <header class="masthead" style="background-image: url('<?php echo $image['url']; ?>')">
      <div class="jumbotron">
        <h1 class="display-3 type"></h1>
          <p class="lead">This is my simple portfolio.</p>
          <hr class="my-2">
          <p class="lead">
            <a class="btn btn-primary btn-lg scrollTo" data-scrollTo="projects" href="#" role="button">Get Involved!</a>
          </p>
      </div>
    </header>

    <h1 id="projects" class="display-3" style="padding: .5em 0 .5em 0;">Projects</h1>

    <!-- <?php the_title(); ?> -->

  <div class="container" style="padding-bottom:3em;">
    <div class="row">
      <div id="card" class="col-md-4">
          <div class="front card card1">
          </div>
          <div class="back">
            <h4 class="card-title">SF Attractions</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Launch demo modal</button>
          </div>
      </div>
      <div id="card1" class="col-md-4">
        <div class="front card card2">
        </div>
        <div class="back">
          <h4 class="card-title" id="hidden">Store Catalog</h4>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Launch demo modal</button>
        </div>
      </div>
      <div id="card2" class="col-md-4">
        <div class="front card card3">
        </div>
        <div class="back">
          <h4 class="card-title" id="hidden">Linux Config</h4>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Launch demo modal</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Project Modals -->

    <div class="modal" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">San Francisco Attractions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          This application displays the top 15 attractions in San Francisco as markers which when clicked 
          displays an info window with a street view image of the location. My application also contains 
          a marker filter and a location search bar.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Store Item Catalog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          Created an item catalog application that provides a variety of built-in categories and items 
          which are stored in a database. 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Linux Configuration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          Installed and configured all required software to turn a baseline Ubuntu Amazon Web Services 
          server into a fully functional web application server,
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cat Clicker</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          This application displays multiple cat images, a click counter, and the level, which is based 
          on the number of clicks made by the user. 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content() ?>
        </div>
      </div>
    </div>

<?php endwhile; else: ?>
    <p>Sorry, page not found.</p>
<?php endif; ?>

<?php get_footer(); ?>