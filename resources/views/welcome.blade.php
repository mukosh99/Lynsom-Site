@extends('layouts.app')
 @section('content')

<div class="jumbotron bg-info text-white text-center">
     <div class="container"> 
      <h1 class="display-2">Welcome to Lynsom Technologies</h1>
      <p class="lead">The best technology company in the world...</p>
      <a href="/about" class="btn bg-light">Read More</a>
    </div>
    </div>
    <h2 class="display-4 text text-center py-4 my-3">Our Services...</h2>

    
    <div class="section-a">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-lg-3">
           <i class="fab fa-html5"></i>
            <h3>WEB APPLICATION DEVELOPMENT</h3>
            <p>Looking to build a new website or transform an existing one that isn’t performing? We create engaging websites that offer the very best in user experience and drive enquiries</p>
            <a href="/services" class="btn bg-info text-white">Read More</a>
          </div>
          <div class="col-md-3 col-lg-3">
            <i class="fas fa-mobile-alt"></i>
            <h3>MOBILE APPLICATION DEVELOPMENT</h3>
            <p>With more and more online traffic being driven to business through the use of smartphones, this is a growing platform that should be embraced. Lynsom Technologies can help your business retain a competitive edge with a mobile app that represents your brand in an increasingly popular domain.</p>
            <a href="/services" class="btn bg-info text-white">Read More</a>
          </div>
          <div class="col-md-3 col-lg-3">
            <i class="far fa-lightbulb"></i>
            <h3>WEB HOSTINS AND DOMAINS</h3>
            <p>We offer a wide range of fully managed hosting solutions and domain management services to help keep your site online 24/7.</p>
            <a href="/services" class="btn bg-info text-white">Read More</a>
          </div>
          <div class="col-md-3 col-lg-3s">
           <i class="fab fa-html5"></i>
            <h3>WEB API INTEGRATION</h3>
            <p>We program web services for desktop, mobile,and cloud-based applications, as well as search engines, databases, and enterprise intranets. We implement internal and external web APIs as well as custom web services. Our web service development solutions enable sharing of resources, data, business logic, documents, programs, messages, and objects using both peer-to-peer and client-server models.</p>
            <a href="/services" class="btn bg-info text-white">Read More</a>
          </div>
        </div>
        <br>
        <br>
        
      </div>
    </div>
    <h2 class="display-4 text text-center py-4 my-">Get Started...</h2>


    <div class="showcase">
      <div class="container">
        <h1>Got Ideas?</h1>
        <p class="lead">Let us know about your web development challenges –we will get in touch with you to discuss the details.
 
</p>
        
      </div>
    </div>

    <h2 class="display-4 text text-center py-5 my-4">Lets Work on a Project Together...</h2>


    
    <div class="section-c">
     <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic5.jpeg">
              <div class="card-block">
                <h3 class="card-title">Small Business Website Design</h3>
                <p>We are the leading experts in designing & creating websites for small business owners like you. We've designed more than 5,000 websites so far.</p>
                
          </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic3.jpeg">
              <div class="card-block">
                <h3 class="card-title">Hassle-free website design</h3>
                <p>We take care of absolutely everything - it’s a hassle-free experience!</p>
                
          </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic6.jpeg">
              <div class="card-block">
                <h3 class="card-title">Unlimited changes to your website</h3>
                <p>Set yourself apart from the competition with fresh changes as often as you need them.</p>
                
          </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <div class="section-c">
     <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic5.jpeg">
              <div class="card-block">
                <h3 class="card-title">Professional Work</h3>
                <p>As a professional web design agency, we see each project as an opportunity to enhance your business growth. We assist you to increase sales and maximize ROI while offering web design solutions that are aesthetically pleasing and functional as well.</p>
                
          </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-6">
            <div class="card">

            <img class=" card-img-top img-fluid" src="img/pic6.jpeg">
              <div class="card-block">
                <h3 class="card-title">Unique, Robust and Scale-Able Solutions</h3>
                <p>We understand that every client has a unique set of requirements that can be in the form of either generating leads, increasing sales or boosting traffic.</p>
                
          </div>
          </div>
        </div>
      </div>
     </div>
    </div>


<hr>
    @endsection