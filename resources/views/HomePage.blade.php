@extends('layouts.app')
@section('title' , 'Home Page')
@section('content')
<style>
  
  
  .con .btn {
    position: absolute;
    top: 47%;
    left: 23%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    color: rgb(0, 0, 0);
    font-size: 25px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 30px;
    text-align: center;
   background-color: #ffd000


  }

  button {
 height: 2.5em;
 border-radius: 30em;
 font-size: 16px;
 font-family: inherit;
 border: none;
 position: relative;
 overflow: hidden;
 z-index: 1;
 box-shadow: 6px 6px 12px #ffd000,
             -6px -6px 12px #ff0000;
}

button::before {
 content: '';
 width: 0;
 height: 2.5em;
 border-radius: 30em;
 position: absolute;
 top: 0;
 left: 0;
 background-image: linear-gradient(to right, #c06516 0%, #d56452 100%);
 transition: .5s ease;
 display: block;
 z-index: -1;
}

button:hover::before {
 width: 11em;
}

  </style>



<head>
    
  </head>
 
  <div class="con">

    
    <img src="img/homepage.png" class="img-fluid img-thumbnail" style="width: 1899px; height: 420px;">
    <button type="button" class="btn text-left shadow" id="fontF"  onclick= "window.location.href = '/product'">أكتشف المنتجات الان
    </form>
</div>




<div class="row py-4 pt-3">

  <div class="col-md-3 col-sm-6 pb-3 px-2 card-mobile">
    <div class="card shadow rounded-lg">
            <div onclick="navigateAndSearch('iphone')" class="card-body text-center p-2">
              <p><img class ="me-2"width="60" height="60" 
                src="img/apple-logo.png" /><i class="grey-text fa-3x"></i></p>
                <h4 class=" grey-text mt-2" style="text-decoration: none;">Apple</h4>
              <p></p>
            </div>
          </div></button>
  </div>

  <div class="col-md-3 col-sm-6 pb-3 px-2 card-mobile">
    <div class="card shadow rounded-lg">
            <div onclick="navigateAndSearch('Galaxy')" class="card-body text-center">
              <p><img class ="me-2"width="70" height="70" 
                src="img/samsung.png" /><i class="grey-text"></i></p>
        <h4 class=" no-underline grey-text">Samsung</h4>
            </div>
          </div>
  </div>
  <div class="col-md-3 col-sm-6 pb-3 px-2 card-mobile">
    <div class="card shadow rounded-lg">
            <div onclick="navigateAndSearch('Huawei')" class="card-body text-center">
              <p><img class ="me-2"width="70" height="70" 
                src="img/huaweiicon.png" /><i class="grey-text"></i></p>
        <h4 class="grey-text">Huawei</h4>
              
            </div>
          </div>
  </div>
  <div class="col-md-3 col-sm-6 pb-3 px-2 card-mobile">
    <div class="card shadow rounded-lg">
            <div onclick="navigateAndSearch('Oppo')" class="card-body text-center">
              <p><img class ="me-2"width="70" height="70" 
                src="img/oppo.png" /><i class="grey-text"></i></p>
        <h4 class="grey-text">Oppo</h4>
        <div style="text-decoration: none; color:rgb(0, 0, 0)">
        </div>
            </div>
          </div>
  </div>
</div>



          </div>
  </div>

<script>
  function navigateAndSearch(keyword) {
    window.location.href = '/product?search=' + keyword;
  }
</script>
	@endsection

  