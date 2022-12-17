@extends ('layout')

@section('content')
  
  <!-- ***** Preloader Start ***** -->
 
  <!-- ***** Header Area End ***** -->
          <div class="top-text header-text">
            <h2>Baran Real Estate</h2>
            <h4 style="color:white">there is no place like <b>HOME</b></h4>
            <h5 style="padding-top: 10px;color:white;">Let's Find it together !</h5>
            <br><br><br>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()" >
                          <option>City</option>
                          <option value="erbil">Erbil</option>
                          <option value="Sulaymaniah">Sulaymaniah</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                          <option selected>Area</option>
                          <option value="">100m</option>
                          <option value="">150m</option>
                          <option value="">200m</option>
                          <option value="">250m</option>
                         
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                <fieldset>
                    <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                        <option selected>Purpose</option>
                        <option value="sale">Sale</option>
                        <option value="rent">Rent</option>
                       
                    </select>
                </fieldset>
            </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                          <option selected>Property Type</option>
                          <option value="house">House</option>
                          <option value="house">Land</option>
                          <option value="apartment">Apartment</option>
                          <option value="apartment">Farmhouse</option>
                      </select>
                  </fieldset>
              </div>
              <div>                       
                  <fieldset>
                      <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <ul class="categories">

            <li><a href="category.html"><span class="icon"><img src="assets/images/select-all.png" alt="Home"></span> All</a></li>
            <li><a href="category.html"><span class="icon"><img src="assets/images/search-icon-01.png" alt="Home"></span> House</a></li>
            <li><a href="listing.html"><span class="icon"><img src="assets/images/search-icon-02.png" alt="Food"></span>Land</a></li>
            <li><a href="#"><span class="icon"><img src="assets/images/search-icon-03.png" alt="Vehicle"></span>Apartment</a></li>
            <li><a href="#"><span class="icon"><img src="assets/images/search-icon-04.png" alt="Shopping"></span> Farmhouse</a></li>
          
      



  <!-- Scripts -->

@endsection
