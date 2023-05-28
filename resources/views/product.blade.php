@extends('layouts.app')
@section('title' , 'Product Page')
@section('content')
<style>
   .image-container {
    display: block;
  margin-left: auto;
  margin-right: auto;
  
 }

 
</style>

<div class="row">
  @foreach ($aa as $index => $item)
      <div class="col">
          <div class="card-deck">
              <div class="card text-white bg-secondary">
                  <img class="image-container" src='./img/{{$item->imge}}' width="200" height="200"> 
                  <div class="card-body">
                      <h5 class="card-title">{{$item->name}}</h5>
                      <ul class="list-unstyled" dir="rtl" style="text-align:right; font-size: 30px">
                          <li id="fontF">{{$item->Color}}</li>
                          <li>{{$item->description}}</li>
                          <li>{{$item->price}} <img width="35" height="35" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/></li>
                          <li>قسّط على 3 دفعات بمبلغ
                              <?php
                              $itemPrice = $item->price;
                              
                              $newprice = $itemPrice / 3;
                              
                              $updateprice = number_format($newprice, 2, '.', ',');
                              
                              echo $updateprice;
                              ?>
                              <img width="35" height="35" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> /شهرياً (شاملاً رسوم الخدمة)
                          </li>
                      </ul>
                  </div>
                  <div class="card-footer">
                      <a id="fontF" style="font-size: 25px" href="/checkout/{{$item->id}}">
                          <button class="btn btn-primary btn-block" type="submit">شراء الآن</button>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      @if ($index == 3)
          </div> <!-- Closing the first row div -->
          <div class="row pt-4"> <!-- Opening a new row for the fifth card -->
      @endif
  @endforeach
</div>




</div>
<script>
   window.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const searchKeyword = urlParams.get('search');

  if (searchKeyword) {
    const cards = document.querySelectorAll('.card-deck');
    cards.forEach(function(card) {
      const cardText = card.textContent.toLowerCase();
      if (cardText.includes(searchKeyword.toLowerCase())) {
        card.classList.add('highlight');
      }
    });
  }
});





  </script>
  
  <style>
   
  </style>
@endsection


