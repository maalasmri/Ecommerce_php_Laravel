
@extends('layouts.app')
@section('title' , 'Checkout Page')
@section('content')

<style>

.hidden {
  display: none;
}
</style>
<body class= "design">


 
  
<div class="row px-md-4 px-2 pt-4">
<div class="col-lg-8">
<p class="pb-2 fw-bold">Order</p>
<div class="card">
<div>
<div class="table-responsive px-md-4 px-2 pt-3">
<table class="table table-borderless">
<tbody>
<tr class="border-bottom">
<td>
<div class="d-flex align-items-center">
<div> <img src='/img/{{$aa->imge}}' width="200" height="200"> 
</div>
<div class="ps-3 d-flex flex-column justify-content">
<p class="display-7 h4">Product Name: <span class="badge text-bg-warning">{{$aa->name}}</span></p>
<p class="d-flex"><p class=" display-7 h4 mt-2">Color: </span>
<span style = "font-size: 19px" class="badge text-bg-warning">{{$aa->Color}}</span></p>
<span class=" display-7 h4 mt-2 ">specifications: <span class="badge text-bg-warning">{{$aa->description}}</span>
</div>
</div>
</td>
<td>
<div class="d-flex">
<p class="pe-3"><span class="red"><img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$aa->price}}</span></p>
</div>
</td>
<td>

</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-4 payment-summary">
<p class="fw-bold pt-lg-0 pt-4 pb-2">Payment Summary</p>
<div class="card p-md-3 px-2 pt-4">
<div class="d-flex flex-column b-bottom">
    <div class="d-flex justify-content-between py-3"> <small class="text-muted">Price Summary</small>
        <p><img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$aa->price}}</p>
    </div>
    <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Tax Price</small>
        <p> <img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$aa->tax}}</p>
    </div>
    <div class="d-flex justify-content-between"> <small class="text-muted">Total Price</small>
        <p> <img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$aa->Total}}</p>
    </div>
</div>
<form action="{{route('invoice')}}" method="post">
  @csrf

  <input type="hidden" id="product" name="product" value="{{htmlspecialchars($aa->name)}}">
  <span class="hidden">{{$aa->name}}</span>


  <input type="hidden" id="img" name="img" value="{{htmlspecialchars($aa->imge)}}">
  <span class="hidden">{{$aa->imge}}</span>



  <input type="hidden" id="total" name="total" value="{{htmlspecialchars($aa->Total)}}">
  <span class="hidden">{{$aa->Total}}</span>



  <input type="hidden" id="color" name="color" value="{{htmlspecialchars($aa->Color)}}">
  <span class="hidden">{{$aa->Color}}</span>


  <input type="hidden" id="specifications" name="specifications" value="{{htmlspecialchars($aa->description)}}">
  <span class="hidden">{{$aa->description}}</span>

  
  <input type="hidden" id="tax" name="tax" value="{{htmlspecialchars($aa->tax)}}">
  <span class="hidden">{{$aa->tax}}</span>


  
  <input type="hidden" id="price" name="price" value="{{htmlspecialchars($aa->price)}}">
  <span class="hidden">{{$aa->price}}</span>

<div class="d-flex justify-content-between b-bottom pt-3">
<button class="btn btn-success" type="submit">purchase</button>
</div>
</div>
</div>



</body>
</html>
<div class="col-lg-4 payment-summary">
<p class="fw-bold pt-lg-3 pt-2 pb-2">Billing address</p>
<div class="card p-md-3 px-2 pt-4">
<div class="d-flex">
    
   
    <div class="col-md-12 order-md-1">
  <form class="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName">First name</label>
        <input type="text" class="form-control" id="firstName" name ="firstName" value="" required>
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" name ="lastName" value="" required>
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="phone">phone <span class="text-muted"></span></label>
      <input type="text" class="form-control" id="phone" name="phone" title="Please enter a valid phone number (up to 10 digits)" maxlength="10" required>

      <div class="invalid-feedback">
        Please enter a valid phone address for shipping updates.
      </div>
    </div>

    <div class="mb-3">
      <label for="Street">Street</label>
      <input type="text" class="form-control" id="Street" name = "Street"  required>
      <div class="invalid-feedback">
        Please enter your shipping address.
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 mb-3">
        <label for="countrySelect">Country</label>
        <select class="custom-select d-block w-100" id="countrySelect" name = "countrySelect" onchange="SelectCities()" required>
          <option value="">Choose...</option>
          <option value= "Saudi Arabia">Saudi Arabia</option>
          <option value= "Kuwait">Kuwait</option>
          <option value= "Qatar">Qatar</option>
          <option value= "United Arab Emirates">United Arab Emirates</option>
          <option value= "Bahrain">Bahrain</option>
          <option value= "Oman">Oman</option>

        </select>
        <div class="invalid-feedback">
          Please select a valid country.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="citySelect">City</label>
        <select class="custom-select d-block w-100" id="citySelect" name ="citySelect" required>
          <option value="">Choose...</option>
        </select>
        <div class="invalid-feedback">
          Please provide a valid state.
        </div>
      </div>
    </div>
      </div>
    </div>
  </form>

  
</div>
</form>
</div>

</div>
</div>
</div>

</div>
</div>



<script>
    var cityLists = {
      "Saudi Arabia": ["Riyadh", "Jeddah", "Mecca", "Medina", "Dammam", "Taif", "Tabuk", "Buraidah", "Abha", "Khobar", "Hail", "Najran", "Yanbu"],
      "Qatar": ["Doha", "Al Rayyan", "Umm Salal", "Al Wakrah", "Al Khor", "Mesaieed", "Lusail", "Al Daayen", "Al Shahaniya"],
      "United Arab Emirates": ["Dubai", "Abu Dhabi", "Sharjah", "Ajman", "Ras Al Khaimah", "Fujairah", "Umm Al Quwain"],
      "Oman": ["Muscat", "Salalah", "Sohar", "Nizwa", "Sur", "Barka", "Ibri"],
      "Bahrain": ["Manama", "Riffa", "Muharraq", "Hamad Town", "A'ali", "Isa Town"],
      "Kuwait": ["Kuwait City", "Al Ahmadi", "Hawally", "Farwaniya", "Jahra", "Mubarak Al-Kabeer"]
    };

    function SelectCities() {
      var countrySelect = document.getElementById("countrySelect");
      var citySelect = document.getElementById("citySelect");
      var country = countrySelect.value;

      // Clear city dropdown list
      citySelect.innerHTML = "";

      var cities = cityLists[country] || ["-- Select City --"];

      // Populate city dropdown list
      for (var i = 0; i < cities.length; i++) {
        var option = document.createElement("option");
        option.text = cities[i];
        citySelect.add(option);
      }
    }
  </script>

@endsection
