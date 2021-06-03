@extends('layouts.app')


@section('content')
   
@include("layouts.slider")
<!-- Pre Content  -->
<br>

<div class="clearfix pre-content" id="pre-content">
    <div class="mq--t breadcrumb-container">
          <div class="region region-pre-content">
              <div data-drupal-messages-fallback class="hidden"></div>
            </div>
    </div>


<div class="container" style="margin-top: 50px;margin-bottom:50px;">
  <div class="col"></div>
</div>

 <!-- Image -->
<div class="container">
      <div class="row">
          <div class="col" style="text-align: center;">
              <img class="image" src="/assets/image/1.svg" style="height:auto; width:300px;">
              
              <div class="middle">
                <div class="text"> Online Case Management </div>
              </div>
          </div>
          <div class="col" style="text-align: center;">
              <img class="image" src="/assets/image/2.svg" style="height:auto; width:300px;">
              

              <div class="middle">
                <div class="text"> Hearing Calender</div>
              </div>
              
              
          </div>
          <div class="col" style="text-align: center;">
              <img class="image" src="/assets/image/4.svg" style="height:auto; width:300px;">
              

              <div class="middle">
                <div class="text"> Latest Judgments</div>
              </div>
           

        
          </div>
          <div class="col" style="text-align: center;">
              <img class="image" src="/assets/image/3.svg" style="height:auto; width:300px;">
              

              <div class="middle">
                <div class="text"> Publications </div>
              </div>
              
        
          </div>
      </div>
</div>


<div class="container" style="margin-top: 50px;margin-bottom:50px;">
  <div class="col"></div>
</div>

    <div class="container" style="margin-top: 50px;margin-bottom:50px;">
      <div class="col"></div>
    </div>


  <div class="col-12">

      <div class="row">
        <div class="col" style="text-align:center;background-color:darkgoldenrod;"> 
                 <h1 style="padding:10px;"> Press Release and Notifications </h1>  
        </div>
      </div>

      <div class="slideshow">

         
          <div class="Slides">
            <p class="author">- John Keats</p>
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            
          </div>

         

          <div class="Slides">
          <p class="author">- Thomas A. Edison</p>
            <q>I have not failed. I've just found 10,000 ways that won't work.</q>
            
          </div>

          <!-- Next/prev buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
  </div>


 
   <!-- Pre Content  -->

@endsection
