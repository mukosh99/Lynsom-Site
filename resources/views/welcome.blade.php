@extends('layouts.app')
 @section('content')

<div class="jumbotron jumbotron-fluid bg-info text-white text-center">
     <div class="container"> 
      <h1 class="display-2">Welcome to Lynsom Technologies</h1>
      <p class="lead">The best technology company in the world...</p>
      <a href="about.html" class="btn bg-light">Read More</a>
    </div>
    </div>
    <h2 class="display-4 text text-center py-5 my-4">Get Started...</h2>

    
    <div class="section-a">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
           <i class="fab fa-html5"></i>
            <h3>Clean & Simple Code</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
            <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
          <div class="col-md-4">
            <i class="fas fa-cogs"></i>
            <h3>Sass PreCompiler</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
            <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
          <div class="col-md-4">
            <i class="far fa-lightbulb"></i>
            <h3>Customizable</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
            <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section-c">
     <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-12">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic2.jpeg">
              <div class="card-block">
                <h3 class="card-title">Node.js Training</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
                <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
          </div>
        </div>
        
      </div>
     </div>
    </div>
    
    
    <div class="section-c">
     <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic2.jpeg">
              <div class="card-block">
                <h3 class="card-title">Node.js Training</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
                <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic2.jpeg">
              <div class="card-block">
                <h3 class="card-title">Node.js Training</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
                <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic2.jpeg">
              <div class="card-block">
                <h3 class="card-title">Node.js Training</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed sem rhoncus urna iaculis faucibus.</p>
                <a href="about.html" class="btn bg-info text-white">Read More</a>
          </div>
          </div>
        </div>
      </div>
     </div>
    </div>




    
            <h2 class="display-4 text text-center py-5 my-4">Please Send Us a Quote...</h2> 

            <div class="container">
            <form>
              <input type="text" class="form-control input-lg" placeholder="Enter First Name">
              <br />
              <input type="text" class="form-control input-lg" placeholder="Enter Second Name">
              <br />
              <input type="text" class="form-control input-lg" placeholder="Enter Email">
              <br />
              <textarea class="form-control" rows="5" id="comment" placeholder="Enter Message"></textarea>
              <br />
              <button class="btn btn-info btn-lg btn-block">Submit</button>
            </form>
          </div>
    <hr>
    
    

    @endsection