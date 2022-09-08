<x-layout>
<x-slot:title>
    Vacancy
</x-slot>
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container grid-breadcrumb py-2">
            <h2 class="title-big">Vacancy</h2>
            
        </div>
    </div>
</section>
<section class="w3l-about-breadcrumb ">
<section class="w3l-servicesblock1 " id="services">
    <div class="container pb-lg-5 pb-md-4">
        <h3 class="title-big text-center mb-5">Here's what we offer</h3>
        <div class="w3-services-grids">
            <div class="fea-gd-vv row">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-gd icon-yellow">
                        <div class="icon">
                            <img src="{{asset('img/Services/laptop.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <a href="#url">Web design<br> and development </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                    <div class="feature-gd icon-vilot">
                        <div class="icon">
                            <img src="{{asset('img/Services/mobile1.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <a href="#url">Mobile app<br> development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                    <div class="feature-gd icon-blue">
                        <div class="icon">
                            <img src="{{asset('img/Services/android.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <a href="#url">Android app<br> development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                    <div class="feature-gd icon-red">
                        <div class="icon">
                            <img src="{{asset('img/Services/code.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <a href="#url">Php Web<br> development</a>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>
    </div>
    
    <div class="form-41-main  pt-lg-5 pt-md-4">
             
                 
             <div class="container">
                 
                 <div class="d-grid align-form-map">
                     <div class="form-inner-cont">
                         <div class="container card text-center text-danger">
                         <p class="alert">{{Session::get('message') }}</p>
                         </div>
                         <form class="form-floating" action="{{ route('application')}}" method="post" class="signin-form" enctype="multipart/form-data">
                             @csrf
                             <div class="form-input">
                                 <label for="w3lName">Name</label>
                                 <input type="text" name="name" id="w3lName" placeholder="">
                             </div>
                             <div class="form-input">
                                 <label for="w3lSender">Email(Required)*</label>
                                 <input type="email" name="email" id="w3lSender" placeholder="" required="">
                             </div>
                             <div class="form-input">
                                 <label for="num">Mobile Number(Required)*</label>
                                 <input type="text" name="phone" id="num" placeholder="" required="">
                             </div>
                             
                             <div class="form-input">
                                 <label for="cv">CV(Required)*</label>
                                 <input type="file" name="cv" id="cv" placeholder="" required="">
                             </div>
                             <label for="Career">Select the available position</label>
                             <select class="form-select" id="Career" 
                             name="career_id"
                             aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                @foreach ($vacancy as $career )
                                    
                                 <option value="{{$career->id}}">{{$career->job_title}}</option>
                                @endforeach
                                 
                             </select>

                             <button type="submit" class="btn btn-primary btn-style">Submit Application</button>

                         </form>
                     </div><div class="container">
    <h4>Wehave the following vacant positions</h4>
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Position</th>
      <th scope="col">Number of Position</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($vacancy as $index => $career)
      
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$career->job_title}}</td>
      <td>{{ $career->num_available }}</td>
      
    </tr>
  @endforeach

   
  </tbody>
</table>
    </div>
                 </div>
             </div>
         </div>
</section>

</section>
</x-layout>