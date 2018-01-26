<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Charts;
use App\Orders;
use App\Customers;
use App\Products;
use App\OrderDetails;
 class ChartsPageController extends Controller
{
    public function index()

    {

      $chart1 = Charts::database(Customers::all(), 'pie', 'highcharts')
            ->dateColumn('Customers by country')
			      ->title("Customers countries")
			      ->elementLabel("Customers by country")
            ->groupBy('Country')
			      ->dimensions(1000, 500)
             ->colors(['#ff0000', '#00ff00', '#0000ff','#c8e6c9','#ff1744','#6a1b9a','#42a5f5','b388ff','#009688','#cddc39'])
			      ->responsive(false);


      $chart2 = Charts::database(Customers::all(), 'area', 'highcharts')
                        ->groupBy('Country')
                        ->title("Orders by Country")
                        ->elementLabel("Orders")
            			      ->dimensions(1000, 700)
                        ->colors(['#ff6f00 ', '#ffe082'])
            			      ->responsive(false);

      $chart4 = Charts::multi('bar', 'google')
               ->responsive(false)
               ->dimensions(1000, 500)
               ->colors(['#ff0000', '#00ff00', '#0000ff'])
               ->labels(['One', 'Two', 'Three'])
               ->dataset('Test 1', [1,2,3])
               ->dataset('Test 2', [0,6,0])
               ->dataset('Test 3', [3,4,1]);



        $chart3 = Charts::database(Orders::all(),'bar', 'chartist')
              ->title("Total")
              ->aggregateColumn('ShipCountry','count')
              ->groupBy('ShipCountry')
              ->dimensions(1000, 500)
              ->colors(['#424242','#4e342e','#ffab91','#fff59d']);


        $chart5 = Charts::database(Orders::all(), 'bar', 'highcharts')
          ->elementLabel("Total")
          ->dimensions(1000, 500)
          ->responsive(false)
          ->colors(['#424242','#4e342e','#ffab91','#fff59d'])
          ->dateColumn('OrderDate')
          ->groupByMonth('1997',true);





          return view('charts',['chart1'=>$chart1,'chart2'=>$chart2,'chart3'=>$chart3,'chart4'=>$chart4,'chart5'=>$chart5]);


    }


}
