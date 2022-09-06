@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Tinker - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-minus" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                                 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$NumberOfPublications}}</div>
                                    <div class="text-base text-slate-500 mt-1">Number of publications</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="file-text" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer">
                                                <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                    <div class="text-base text-slate-500 mt-1">New Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                    <div class="text-base text-slate-500 mt-1">Total Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                                22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                    <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-12 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col xl:flex-row xl:items-center">
                           
                        </div>
                        <div>
                            <canvas id="myChart" height="190" class="mt-6"></canvas>
                        </div>



                    </div>
                </div>
                
                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="myPieChart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">Target Sales</div>
                                    <div class="text-slate-500 mt-1">300 Sales</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">New Products</div>
                                    <div class="text-slate-500 mt-1">1450 Products</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
               
            </div>
        </div>
    </div>

@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js" integrity="sha512-tOcHADT+YGCQqH7YO99uJdko6L8Qk5oudLN6sCeI4BQnpENq6riR6x9Im+SGzhXpgooKBRkPsget4EOoH5jNCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">

var url = "{{url('Data/List')}}"

  /**********************************Carta During**************************************/
    var resDuring = new Array();
    var CartaDuring2011 = new Array();
    var C2011Num = new Array();
    var C2011 = new Array();
    var CartaDuring2012 = new Array();
    var C2012Num = new Array();
    var C2012 = new Array();
    var CartaDuring2013 = new Array();
    var C2013Num = new Array();
    var C2013 = new Array();
    var CartaDuring2014 = new Array();
    var C2014Num = new Array();
    var C2014 = new Array();
    var CartaDuring2015 = new Array();
    var C2015Num = new Array();
    var C2015 = new Array();
    var CartaDuring2016 = new Array();
    var C2016Num = new Array();
    var C2016 = new Array();
    var CartaDuring2017 = new Array();
    var C2017Num = new Array();
    var C2017 = new Array();
    var CartaDuring2018 = new Array();
    var C2018Num = new Array();
    var C2018 = new Array();
    var CartaDuring2019 = new Array();
    var C2019Num = new Array();
    var C2019 = new Array();
    var CartaDuring2020 = new Array();
    var C2020Num = new Array();
    var C2020 = new Array();
    var CartaDuring2021 = new Array();
    var C2021Num = new Array();
    var C2021 = new Array();

    var CartaDuring = new Array();
    var PieChartData = new Array();

    fetch(url, { method: 'GET' })
        .then(Result => Result.json())
        .then(Result => { 

          CartaDuring2011 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2011";
            });

            for(var i = 0; i<CartaDuring2011.length; i++){
            C2011.push(CartaDuring2011[i].NumberOfPublication);
          }

          C2011Num = C2011.map(str => { 
            return Number(str);
          })
          var F2011 = 0;
                for(var i=0, n=C2011Num.length; i < n; i++) 
                { 
                    F2011 += C2011Num[i]; 
                }
                console.log(F2011);


          //Carta During year 2012
          CartaDuring2012 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2012";
            });
         
            for(var i = 0; i<CartaDuring2012.length; i++){
            C2012.push(CartaDuring2012[i].NumberOfPublication);
          }
          C2012Num = C2012.map(str => { 
            return Number(str);
          })
          var F2012 = 0;
                for(var i=0, n=C2012Num.length; i < n; i++) 
                { 
                    F2012 += C2012Num[i]; 
                }
                console.log(F2012);

          //Carta During year 2013
          CartaDuring2013 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2013";
            });

            for(var i = 0; i<CartaDuring2013.length; i++){
            C2013.push(CartaDuring2013[i].NumberOfPublication);
          }
          C2013Num = C2013.map(str => { 
            return Number(str);
          })
          var F2013 = 0;
                for(var i=0, n=C2013Num.length; i < n; i++) 
                { 
                    F2013 += C2013Num[i]; 
                }
                console.log(F2013);

          //Carta During year 2014
          CartaDuring2014 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2014";
            });

            for(var i = 0; i<CartaDuring2014.length; i++){
            C2014.push(CartaDuring2014[i].NumberOfPublication);
          }
          C2014Num = C2014.map(str => { 
            return Number(str);
          })
          var F2014 = 0;
                for(var i=0, n=C2014Num.length; i < n; i++) 
                { 
                    F2014 += C2014Num[i]; 
                }
                console.log(F2014);

           //Carta During year 2015
           CartaDuring2015 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2015";
            });

            for(var i = 0; i<CartaDuring2015.length; i++){
            C2015.push(CartaDuring2015[i].NumberOfPublication);
          }
          C2015Num = C2015.map(str => { 
            return Number(str);
          })
          var F2015 = 0;
                for(var i=0, n=C2015Num.length; i < n; i++) 
                { 
                    F2015 += C2015Num[i]; 
                }
                console.log(F2015);

            //Carta During year 2016
            CartaDuring2016 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2016";
            });

            for(var i = 0; i<CartaDuring2016.length; i++){
            C2016.push(CartaDuring2016[i].NumberOfPublication);
          }
          C2016Num = C2016.map(str => { 
            return Number(str);
          })
          var F2016 = 0;
                for(var i=0, n=C2016Num.length; i < n; i++) 
                { 
                    F2016 += C2016Num[i]; 
                }
                console.log(F2016);

          //Carta During year 2017
          CartaDuring2017 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2017";
            });

            for(var i = 0; i<CartaDuring2017.length; i++){
            C2017.push(CartaDuring2017[i].NumberOfPublication);
          }
          C2017Num = C2017.map(str => { 
            return Number(str);
          })
          var F2017 = 0;
                for(var i=0, n=C2017Num.length; i < n; i++) 
                { 
                    F2017 += C2017Num[i]; 
                }
                console.log(F2017);

          //Carta During year 2018
          CartaDuring2018 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2018";
            });

            for(var i = 0; i<CartaDuring2018.length; i++){
            C2018.push(CartaDuring2018[i].NumberOfPublication);
          }
          C2018Num = C2018.map(str => { 
            return Number(str);
          })
          var F2018 = 0;
                for(var i=0, n=C2018Num.length; i < n; i++) 
                { 
                    F2018 += C2018Num[i]; 
                }
                console.log(F2018);

           //Carta During year 2019
           CartaDuring2019 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2019";
            });

            for(var i = 0; i<CartaDuring2019.length; i++){
            C2019.push(CartaDuring2019[i].NumberOfPublication);
          }
          C2019Num = C2019.map(str => { 
            return Number(str);
          })
          var F2019 = 0;
                for(var i=0, n=C2019Num.length; i < n; i++) 
                { 
                    F2019 += C2019Num[i]; 
                }
                console.log(F2019);

          //Carta During year 2020
          CartaDuring2020 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2020";
            });

            for(var i = 0; i<CartaDuring2020.length; i++){
            C2020.push(CartaDuring2020[i].NumberOfPublication);
          }
          C2020Num = C2020.map(str => { 
            return Number(str);
          })
          var F2020 = 0;
                for(var i=0, n=C2020Num.length; i < n; i++) 
                { 
                    F2020 += C2020Num[i]; 
                }
                console.log(F2020);

          //Carta During year 2021
          CartaDuring2021 =  Result.CartaDuring.filter(function(CartaDuring) {
          return CartaDuring.Publication_Year == "2021";
            });

            for(var i = 0; i<CartaDuring2021.length; i++){
            C2021.push(CartaDuring2021[i].NumberOfPublication);
          }
          C2021Num = C2021.map(str => { 
            return Number(str);
          })
          var F2021 = 0;
                for(var i=0, n=C2021Num.length; i < n; i++) 
                { 
                    F2021 += C2021Num[i]; 
                }
                console.log(F2021);

             
             CartaDuring = [F2011, F2012, F2013, F2014, F2015, F2016, F2017, F2018, F2019, F2020, F2021]   
                console.log(CartaDuring);
        })
        .catch(errorMsg => { console.log(errorMsg); });



        /**********************************Carta Before**************************************/


        var resBefore = new Array();
    var CartaBefore2011 = new Array();
    var C2011Before = new Array();
    var C2011Be = new Array();
    var CartaBefore2012 = new Array();
    var C2012Before = new Array();
    var C2012Be = new Array();
    var CartaBefore2013 = new Array();
    var C2013Before = new Array();
    var C2013Be = new Array();
    var CartaBefore2014 = new Array();
    var C2014Before= new Array();
    var C2014Be = new Array();
    var CartaBefore2015 = new Array();
    var C2015Before = new Array();
    var C2015Be = new Array();
    var CartaBefore2016 = new Array();
    var C2016Before = new Array();
    var C2016Be = new Array();
    var CartaBefore2017 = new Array();
    var C2017Before = new Array();
    var C2017Be = new Array();
    var CartaBefore2018 = new Array();
    var C2018Before = new Array();
    var C2018Be = new Array();
    var CartaBefore2019 = new Array();
    var C2019Before = new Array();
    var C2019Be = new Array();
    var CartaBefore2020 = new Array();
    var C2020Before = new Array();
    var C2020Be = new Array();
    var CartaBefore2021 = new Array();
    var C2021Before = new Array();
    var C2021Be = new Array();

    var CartaBefore = new Array();

    fetch(url, { method: 'GET' })
        .then(Result => Result.json())
        .then(Result => { 

          CartaBefore2011 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2011";
            });

            for(var i = 0; i<CartaBefore2011.length; i++){
            C2011Be.push(CartaBefore2011[i].NumberOfPublication);
          }

          C2011Before = C2011Be.map(str => { 
            return Number(str);
          })
          var F2011Be = 0;
                for(var i=0, n=C2011Before.length; i < n; i++) 
                { 
                    F2011Be += C2011Before[i]; 
                }
                console.log(F2011Be);


          //Carta During year 2012
          CartaBefore2012 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2012";
            });
         
            for(var i = 0; i<CartaBefore2012.length; i++){
            C2012Be.push(CartaBefore2012[i].NumberOfPublication);
          }
          C2012Before = C2012Be.map(str => { 
            return Number(str);
          })
          var F2012Be = 0;
                for(var i=0, n=C2012Before.length; i < n; i++) 
                { 
                    F2012Be += C2012Before[i]; 
                }
                console.log(F2012Be);

          //Carta During year 2013
          CartaBefore2013 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2013";
            });

            for(var i = 0; i<CartaBefore2013.length; i++){
            C2013Be.push(CartaBefore2013[i].NumberOfPublication);
          }
          C2013Before = C2013Be.map(str => { 
            return Number(str);
          })
          var F2013Be = 0;
                for(var i=0, n=C2013Before.length; i < n; i++) 
                { 
                    F2013Be += C2013Before[i]; 
                }
                console.log(F2013Be);

          //Carta During year 2014
          CartaBefore2014 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2014";
            });

            for(var i = 0; i<CartaBefore2014.length; i++){
            C2014Be.push(CartaBefore2014[i].NumberOfPublication);
          }
          C2014Before = C2014Be.map(str => { 
            return Number(str);
          })
          var F2014Be = 0;
                for(var i=0, n=C2014Before.length; i < n; i++) 
                { 
                    F2014Be += C2014Before[i]; 
                }
                console.log(F2014Be);

           //Carta During year 2015
           CartaBefore2015 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2015";
            });

            for(var i = 0; i<CartaBefore2015.length; i++){
            C2015Be.push(CartaBefore2015[i].NumberOfPublication);
          }
          C2015Before = C2015Be.map(str => { 
            return Number(str);
          })
          var F2015Be = 0;
                for(var i=0, n=C2015Before.length; i < n; i++) 
                { 
                    F2015Be += C2015Before[i]; 
                }
                console.log(F2015Be);

            //Carta During year 2016
            CartaBefore2016 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2016";
            });

            for(var i = 0; i<CartaBefore2016.length; i++){
            C2016Be.push(CartaBefore2016[i].NumberOfPublication);
          }
          C2016Before = C2016Be.map(str => { 
            return Number(str);
          })
          var F2016Be = 0;
                for(var i=0, n=C2016Before.length; i < n; i++) 
                { 
                    F2016Be += C2016Before[i]; 
                }
                console.log(F2016Be);

          //Carta During year 2017
          CartaBefore2017 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2017";
            });

            for(var i = 0; i<CartaBefore2017.length; i++){
            C2017Be.push(CartaBefore2017[i].NumberOfPublication);
          }
          C2017Before = C2017Be.map(str => { 
            return Number(str);
          })
          var F2017Be = 0;
                for(var i=0, n=C2017Before.length; i < n; i++) 
                { 
                    F2017Be += C2017Before[i]; 
                }
                console.log(F2017Be);

          //Carta During year 2018
          CartaBefore2018 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2018";
            });

            for(var i = 0; i<CartaBefore2018.length; i++){
            C2018Be.push(CartaBefore2018[i].NumberOfPublication);
          }
          C2018Before = C2018Be.map(str => { 
            return Number(str);
          })
          var F2018Be = 0;
                for(var i=0, n=C2018Before.length; i < n; i++) 
                { 
                    F2018Be += C2018Before[i]; 
                }
                console.log(F2018Be);

           //Carta During year 2019
           CartaBefore2019 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2019";
            });

            for(var i = 0; i<CartaBefore2019.length; i++){
            C2019Be.push(CartaBefore2019[i].NumberOfPublication);
          }
          C2019Before = C2019Be.map(str => { 
            return Number(str);
          })
          var F2019Be = 0;
                for(var i=0, n=C2019Before.length; i < n; i++) 
                { 
                    F2019Be += C2019Before[i]; 
                }
                console.log(F2019Be);

          //Carta During year 2020
          CartaBefore2020 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2020";
            });

            for(var i = 0; i<CartaBefore2020.length; i++){
            C2020Be.push(CartaBefore2020[i].NumberOfPublication);
          }
          C2020Before = C2020Be.map(str => { 
            return Number(str);
          })
          var F2020Be = 0;
                for(var i=0, n=C2020Before.length; i < n; i++) 
                { 
                    F2020Be += C2020Before[i]; 
                }
                console.log(F2020Be);

          //Carta During year 2021
          CartaBefore2021 =  Result.CartaBefore.filter(function(CartaBefore) {
          return CartaBefore.Publication_Year == "2021";
            });

            for(var i = 0; i<CartaBefore2021.length; i++){
            C2021Be.push(CartaBefore2021[i].NumberOfPublication);
          }
          C2021Before = C2021Be.map(str => { 
            return Number(str);
          })
          var F2021Be = 0;
                for(var i=0, n=C2021Before.length; i < n; i++) 
                { 
                    F2021Be += C2021Before[i]; 
                }
                console.log(F2021Be);

             
             CartaBefore = [F2011Be, F2012Be, F2013Be, F2014Be, F2015Be, F2016Be, F2017Be, F2018Be, F2019Be, F2020Be, F2021Be]   
                console.log(CartaBefore);
        })
        .catch(errorMsg => { console.log(errorMsg); });


        
        /**********************************Carta After**************************************/


        var resAfter = new Array();
    var CartaAfter2011 = new Array();
    var C2011After = new Array();
    var C2011Af = new Array();
    var CartaAfter2012 = new Array();
    var C2012After = new Array();
    var C2012Af = new Array();
    var CartaAfter2013 = new Array();
    var C2013After = new Array();
    var C2013Af = new Array();
    var CartaAfter2014 = new Array();
    var C2014After = new Array();
    var C2014Af = new Array();
    var CartaAfter2015 = new Array();
    var C2015After = new Array();
    var C2015Af = new Array();
    var CartaAfter2016 = new Array();
    var C2016After = new Array();
    var C2016Af = new Array();
    var CartaAfter2017 = new Array();
    var C2017After= new Array();
    var C2017Af = new Array();
    var CartaAfter2018 = new Array();
    var C2018After = new Array();
    var C2018Af = new Array();
    var CartaAfter2019 = new Array();
    var C2019After = new Array();
    var C2019Af = new Array();
    var CartaAfter2020 = new Array();
    var C2020After = new Array();
    var C2020Af = new Array();
    var CartaAfter2021 = new Array();
    var C2021After = new Array();
    var C2021Af = new Array();

    var CartaAfter = new Array();

    fetch(url, { method: 'GET' })
        .then(Result => Result.json())
        .then(Result => { 

          CartaAfter2011 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2011";
            });

            for(var i = 0; i<CartaAfter2011.length; i++){
            C2011Af.push(CartaAfter2011[i].NumberOfPublication);
          }

          C2011After = C2011Af.map(str => { 
            return Number(str);
          })
          var F2011Af = 0;
                for(var i=0, n=C2011After.length; i < n; i++) 
                { 
                    F2011Af += C2011After[i]; 
                }
                console.log(F2011Af);


          //Carta During year 2012
          CartaAfter2012 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2012";
            });
         
            for(var i = 0; i<CartaAfter2012.length; i++){
            C2012Af.push(CartaAfter2012[i].NumberOfPublication);
          }
          C2012After = C2012Af.map(str => { 
            return Number(str);
          })
          var F2012Af = 0;
                for(var i=0, n=C2012After.length; i < n; i++) 
                { 
                    F2012Af += C2012After[i]; 
                }
                console.log(F2012Af);

          //Carta During year 2013
          CartaAfter2013 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2013";
            });

            for(var i = 0; i<CartaAfter2013.length; i++){
            C2013Af.push(CartaAfter2013[i].NumberOfPublication);
          }
          C2013After = C2013Af.map(str => { 
            return Number(str);
          })
          var F2013Af = 0;
                for(var i=0, n=C2013After.length; i < n; i++) 
                { 
                    F2013Af += C2013After[i]; 
                }
                console.log(F2013Af);

          //Carta During year 2014
          CartaAfter2014 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2014";
            });

            for(var i = 0; i<CartaAfter2014.length; i++){
            C2014Af.push(CartaAfter2014[i].NumberOfPublication);
          }
          C2014After = C2014Af.map(str => { 
            return Number(str);
          })
          var F2014Af = 0;
                for(var i=0, n=C2014After.length; i < n; i++) 
                { 
                    F2014Af += C2014After[i]; 
                }
                console.log(F2014Af);

           //Carta During year 2015
           CartaAfter2015 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2015";
            });

            for(var i = 0; i<CartaAfter2015.length; i++){
            C2015Af.push(CartaAfter2015[i].NumberOfPublication);
          }
          C2015After = C2015Af.map(str => { 
            return Number(str);
          })
          var F2015Af = 0;
                for(var i=0, n=C2015After.length; i < n; i++) 
                { 
                    F2015Af += C2015After[i]; 
                }
                console.log(F2015Af);

            //Carta During year 2016
            CartaAfter2016 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2016";
            });

            for(var i = 0; i<CartaAfter2016.length; i++){
            C2016Af.push(CartaAfter2016[i].NumberOfPublication);
          }
          C2016After = C2016Af.map(str => { 
            return Number(str);
          })
          var F2016Af = 0;
                for(var i=0, n=C2016After.length; i < n; i++) 
                { 
                    F2016Af += C2016After[i]; 
                }
                console.log(F2016Af);

          //Carta During year 2017
          CartaAfter2017 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2017";
            });

            for(var i = 0; i<CartaAfter2017.length; i++){
            C2017Af.push(CartaAfter2017[i].NumberOfPublication);
          }
          C2017After = C2017Af.map(str => { 
            return Number(str);
          })
          var F2017Af = 0;
                for(var i=0, n=C2017After.length; i < n; i++) 
                { 
                    F2017Af += C2017After[i]; 
                }
                console.log(F2017Af);

          //Carta During year 2018
          CartaAfter2018 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2018";
            });

            for(var i = 0; i<CartaAfter2018.length; i++){
            C2018Af.push(CartaAfter2018[i].NumberOfPublication);
          }
          C2018After = C2018Af.map(str => { 
            return Number(str);
          })
          var F2018Af = 0;
                for(var i=0, n=C2018After.length; i < n; i++) 
                { 
                    F2018Af += C2018After[i]; 
                }
                console.log(F2018Af);

           //Carta Before year 2019
           CartaAfter2019 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2019";
            });

            for(var i = 0; i<CartaAfter2019.length; i++){
            C2019Af.push(CartaAfter2019[i].NumberOfPublication);
          }
          C2019After = C2019Af.map(str => { 
            return Number(str);
          })
          var F2019Af = 0;
                for(var i=0, n=C2019After.length; i < n; i++) 
                { 
                    F2019Af += C2019After[i]; 
                }
                console.log(F2019Af);

          //Carta During year 2020
          CartaAfter2020 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2020";
            });

            for(var i = 0; i<CartaAfter2020.length; i++){
            C2020Af.push(CartaAfter2020[i].NumberOfPublication);
          }
          C2020After = C2020Af.map(str => { 
            return Number(str);
          })
          var F2020Af = 0;
                for(var i=0, n=C2020After.length; i < n; i++) 
                { 
                    F2020Af += C2020After[i]; 
                }
                console.log(F2020Af);

          //Carta After year 2021
          CartaAfter2021 =  Result.CartaAfter.filter(function(CartaAfter) {
          return CartaAfter.Publication_Year == "2021";
            });

            for(var i = 0; i<CartaAfter2021.length; i++){
            C2021Af.push(CartaAfter2021[i].NumberOfPublication);
          }
          C2021After = C2021Af.map(str => { 
            return Number(str);
          })
          var F2021Af = 0;
                for(var i=0, n=C2021After.length; i < n; i++) 
                { 
                    F2021Af += C2021After[i]; 
                }
                console.log(F2021Af);

             
             CartaAfter = [F2011Af, F2012Af, F2013Af, F2014Af, F2015Af, F2016Af, F2017Af, F2018Af, F2019Af, F2020Af, F2021Af]   
                console.log(CartaAfter);

/******************************************Pie Chart Data**************************************************/
                var During = 0;
                for(var i=0, n=CartaAfter.length; i < n; i++) 
                { 
                   During += CartaAfter[i]; 
                }
                console.log(During);

                var Before = 0;
                for(var i=0, n=CartaBefore.length; i < n; i++) 
                { 
                    Before += CartaBefore[i]; 
                }
                console.log(Before);

                var After = 0;
                for(var i=0, n=CartaAfter.length; i < n; i++) 
                { 
                    After += CartaAfter[i]; 
                }
                console.log(After);

                PieChartData = [During, Before, After]



                
        })
        .catch(errorMsg => { console.log(errorMsg); });


document.addEventListener("DOMContentLoaded", function(){
    
    
var ctx = document.getElementById("myPieChart");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['During', 'Before', 'After'],
        datasets: [
        {
            label: 'Publications per Carta period',
            data: PieChartData,
            backgroundColor: ['rgb(38,231,166)', 'rgb(38,160,252)',  'rgb(254,188,59)']
        }
    ]
    },
    options: {
        legend: {
                    display: false,
                },
                cutoutPercentage: 60,
    }
});

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
        datasets: [
        {
            label: 'Carta During',
            data: CartaDuring,
            backgroundColor: 'rgb(38,231,166)',
        },
        {
          label: 'Carta Before',
          data: CartaBefore,
          backgroundColor: 'rgb(38,160,252)',
        },
        {
          label: 'Carta After',
          data: CartaAfter,
          backgroundColor: 'rgb(254,188,59)',
        },
    ]
    },
    options: {
        scales: {
            xAxes: [{
            barPercentage: 0.4,
            barThickness: 10,
            maxBarThickness: 10,
            minBarLength: 2,
        }],
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

// var ctx = document.getElementById("myChart2");
// var myChart2 = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: Municipality,
//         datasets: [
//         {
//             label: 'Previous Year Exp',
//             data: PYENum,
//             backgroundColor: 'rgb(242, 38, 19)',
//         },
//         {
//           label: 'Current value Est',
//           data: CVENum,
//           backgroundColor: 'rgb(38,169,88)',
//         },
//     ]
//     },
    // options: {
    //     scales: {
    //         yAxes: [{
    //             ticks: {
    //                 beginAtZero:true
    //             }
    //         }]
    //     }
    // }
// });

// var ctx = document.getElementById("myChart3");
// var myChart3 = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: Geogr_Area,
//         datasets: [
//         {
//             label: 'Previous Year Exp',
//             data: PYENum,
//             backgroundColor: 'rgb(242, 38, 19)',
//         },
//         {
//           label: 'Current value Est',
//           data: CVENum,
//           backgroundColor: 'rgb(38,169,88)',
//         },
//     ]
//     },
//     // options: {
//     //     scales: {
//     //         yAxes: [{
//     //             ticks: {
//     //                 beginAtZero:true
//     //             }
//     //         }]
//     //     }
//     // }
// });



});

       
</script>
    
@endsection

                                