

@extends('layouts.app')
@section('title' , 'Invoice Page')
@section('content')







<div class="card w-50 mx-auto">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <p style="color: #7e8d9f;font-size: 20px;">Invoice &gt;&gt; <strong>ID: #{{$inv->id}}</strong></p>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              <i class="far fa-building fa-4x ms-0" style="color:#8f8061 ;"></i>
              <p id="fontF" class="pt-2 fs-2">عالم الهواتف</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: {{$inv->FirstName}} {{$inv->LastName}}<span style="color:#8f8061 ;"></span></li>
                <li class="text-muted">{{$inv->Street}}, {{$inv->City}}</li>
                <li class="text-muted">{{$inv->country}}</li>
                <li class="text-muted"><i class="fas fa-phone me-1"></i>{{$inv->Phone}}</li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i> <span
                    class="fw-bold">ID:</span>#{{$inv->id}}</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i> <span
                    class="fw-bold">Creation Date: </span>{{$inv->Date}}</li>
        
              </ul>
            </div>
          </div>
          <div class="row my-2 mx-1 justify-content-center">
            <div class="col-md-2 mb-4 mb-md-0">
              <div class="
                          bg-image
                          ripple
                          rounded-5
                          mb-4
                          overflow-hidden
                          d-block
                          " data-ripple-color="light">
                <img src='/img/{{$inv->Img}}'
                  class="w-100" height="100px" alt="Elegant shoes and shirt" />
                <a href="#!">
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: hsla(0, 0%, 98.4%, 0.2)"></div>
                  </div>
                </a>
              </div>
            </div>
            <div style="font-size: 20px" class="col-md-7 mb-4 mb-md-0">
              <p>Product Name: <span class="badge bg-info text-dark">{{$inv->ProductName}}</span></p>
              <p class="mb-1">
                <span class="me-2">Specifications: <span class="badge bg-info text-dark">{{$inv->Specifications}}</span>
              </p>
              <p>
                <span class="me-2">Color: <span class="badge bg-info text-dark">{{$inv->Color}}</span>
              </p>
            </div>
            <div class="col-md-3 mb-4 mb">
              <h5 class="mb-2">
              <span class=""></span>
              </h5>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-8">
              <p class="ms-3"></p>
            </div>
            <div style="font-size: 15px" class="col-xl-3">
              <ul class="list-unstyled">
                <li class="me-3">SubTotal: <span class="text-black badge bg-primary mb-1"><img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$inv->Price}}</span></li>
                <li class="me-3">Tax: <span class="text-black badge bg-secondary mb-1"><img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$inv->Tax}}</span></li>
                <li class="me-1">Total Amount: <span class="text-black badge bg-success"><img width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/24/external-currency-currency-minima-24px-android-line-2px-amoghdesign.png"/> {{$inv->Total}}</span></li>
              </ul>
              
            </div>
          </div>
        </div>
      </div>
      

    </div>
  </div>



@endsection