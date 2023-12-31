<style>

</style>
<div class="main-panel" >
    <div class="content-wrapper"style="background-color:#BEBEBE">
      <div class="row">


      </div>
      <div class="row" >
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card" >
          <div class="card" style="background-color:#806c539a">
            <div class="card-body">


              <div class="row">
                <div class="col-9">

                  <div class="d-flex align-items-center align-self-start">
                    <h4 class="text-white" style="font-size:24px">Total Orders</h4>

                  </div>
                </div>
                <div class="col-3">
                    <div style="color: rgba(84, 58, 5, 0.782)">

                        <h1 class="mdi mdi-package-variant-closed icon-item" style="font-size:50px;"></h1>
                    </div>
                </div>
              </div>
              <h1 class=" text-white" style="padding-left:20%;">{{$allorders}}</h1>
            </div>
            <a href="{{url('orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card" >
            <div class="card" style="background-color:#806c539a">
              <div class="card-body">


                <div class="row">
                  <div class="col-9">

                    <div class="d-flex align-items-center align-self-start">
                      <h4 class="text-white" style="font-size:24px">New Order</h4>

                    </div>
                  </div>
                  <div class="col-3">
                      <div style="color: rgba(84, 58, 5, 0.782)">

                          <h1 class="mdi mdi-shopping icon-item" style="font-size:50px;"></h1>
                      </div>
                  </div>
                </div>
                <h1 class=" text-white" style="padding-left:20%;">{{$todayOrders}}</h1>
              </div>
              <a href="{{url('orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card" >
            <div class="card" style="background-color:#806c539a">
              <div class="card-body">


                <div class="row">
                  <div class="col-9">

                    <div class="d-flex align-items-center align-self-start">
                      <h4 class="text-white" style="font-size:24px">Total Users </h4>

                    </div>
                  </div>
                  <div class="col-3">
                      <div style="color: rgba(84, 58, 5, 0.782)">

                          <h1 class="mdi mdi-account-check icon-item" style="font-size:50px;"></h1>
                      </div>
                  </div>
                </div>
                <h1 class=" text-white" style="padding-left:20%;">{{$allusers}}</h1>
              </div>
              <a href="{{url('users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card" >
            <div class="card" style="background-color:#806c539a">
              <div class="card-body">


                <div class="row">
                  <div class="col-9">

                    <div class="d-flex align-items-center align-self-start">
                      <h4 class="text-white" style="font-size:24px">Total Revenue</h4>

                    </div>
                  </div>
                  <div class="col-3">
                      <div style="color: rgba(84, 58, 5, 0.782)">

                          <h1 class="mdi mdi-currency-usd icon-item" style="font-size:50px;"></h1>
                      </div>
                  </div>
                </div>

                <h1 class=" text-white" style="padding-left:20%;">{{ $formattedSum}} JD</h1>
              </div>
              <a href="{{url('orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @include('Admin.piechart')
            </div>
          </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">  @include('Admin.linechart')</div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Revenue</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$32123</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                  <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Sales</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$45850</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                  </div>
                  <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Purchase</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$2039</h2>
                    <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                  </div>
                  <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr style="color: black">
                                    <th style="color: black">Order Num</th>
                                    <th style="color: black">User Id</th>
                                    <th style="color: black">Product Cost</th>
                                    <th style="color: black">Shipping Address</th>
                                    <th style="color: black">Payment Mode</th>
                                    <th style="color: black">Start Date</th>
                                    <th style="color: black">Payment Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td style="color: white"> {{ $order->id }}</td>
                                    <td style="color: white">{{ $order->UserID }}</td>
                                    <td style="color: white">{{ $order->TotalAmount }}</td>
                                    <td style="color: white">{{ $order->ShippingAddress }}</td>
                                    <td style="color: white">{{ $order->PaymentMethod }}</td>
                                    <td style="color: white">{{ $order->OrderDate }}</td>
                                    <td>
                                        <div class="badge badge-outline-success">Approved</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

      {{-- <div class="row">
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title">Messages</h4>
                <p class="text-muted mb-1 small">View all</p>
              </div>
              <div class="preview-list">
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <img src="/Admin/assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Leonard</h6>
                        <p class="text-muted text-small">5 minutes ago</p>
                      </div>
                      <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                  </div>
                </div>
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <img src="/Admin/assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Luella Mills</h6>
                        <p class="text-muted text-small">10 Minutes Ago</p>
                      </div>
                      <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                  </div>
                </div>
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <img src="/Admin/assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Ethel Kelly</h6>
                        <p class="text-muted text-small">2 Hours Ago</p>
                      </div>
                      <p class="text-muted">Please review the tickets</p>
                    </div>
                  </div>
                </div>
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <img src="/Admin/assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                  </div>
                  <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                      <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Herman May</h6>
                        <p class="text-muted text-small">4 Hours Ago</p>
                      </div>
                      <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Portfolio Slide</h4>
              <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                <div class="item">
                  <img src="/Admin/assets/images/dashboard/Rectangle.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/Admin/assets/images/dashboard/Img_5.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/Admin/assets/images/dashboard/img_6.jpg" alt="">
                </div>
              </div>
              <div class="d-flex py-4">
                <div class="preview-list w-100">
                  <div class="preview-item p-0">
                    <div class="preview-thumbnail">
                      <img src="/Admin/assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                      <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                          <h6 class="preview-subject">CeeCee Bass</h6>
                          <p class="text-muted text-small">4 Hours Ago</p>
                        </div>
                        <p class="text-muted">Well, it seems to be working now.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-muted">Well, it seems to be working now. </p>
              <div class="progress progress-md portfolio-progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">To do list</h4>
              <div class="add-items d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                <button class="add btn btn-primary todo-list-add-btn">Add</button>
              </div>
              <div class="list-wrapper">
                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Create invoice </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Visitors by Countries</h4>
              <div class="row">
                <div class="col-md-5">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-us"></i>
                          </td>
                          <td>USA</td>
                          <td class="text-right"> 1500 </td>
                          <td class="text-right font-weight-medium"> 56.35% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-de"></i>
                          </td>
                          <td>Germany</td>
                          <td class="text-right"> 800 </td>
                          <td class="text-right font-weight-medium"> 33.25% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-au"></i>
                          </td>
                          <td>Australia</td>
                          <td class="text-right"> 760 </td>
                          <td class="text-right font-weight-medium"> 15.45% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-gb"></i>
                          </td>
                          <td>United Kingdom</td>
                          <td class="text-right"> 450 </td>
                          <td class="text-right font-weight-medium"> 25.00% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-ro"></i>
                          </td>
                          <td>Romania</td>
                          <td class="text-right"> 620 </td>
                          <td class="text-right font-weight-medium"> 10.25% </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-br"></i>
                          </td>
                          <td>Brasil</td>
                          <td class="text-right"> 230 </td>
                          <td class="text-right font-weight-medium"> 75.00% </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-7">
                  <div id="audience-map" class="vector-map"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
  </div>
