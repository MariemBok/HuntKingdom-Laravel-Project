@extends('backOffice.base')


@section('title', 'Home')




@section('body')



    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, <span>Welcome Here</span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Chartist</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Simple Line Chart</h4>
                    <div class="ct-sm-line-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Line Chart with Area</h4>
                    <div class="ct-area-ln-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">BI-Polar Line Chart</h4>
                    <div id="ct-polar-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Animation Chart</h4>
                    <div class="ct-animation-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Radar Chart</h4>
                    <div class="ct-bar-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">SVG animation chart</h4>
                    <div class="ct-svg-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">GAUGE CHART</h4>
                    <div class="ct-gauge-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
              <!-- column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-block">
                    <h4 class="card-title">Donute chart</h4>
                    <div class="ct-donute-chart"></div>
                  </div>
                </div>
              </div>
              <!-- column -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
    @endsection