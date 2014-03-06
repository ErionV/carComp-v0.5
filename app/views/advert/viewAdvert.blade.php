@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-9">
                <div class="panel productNameAndPrice">
                    <div class="panel-body">
                        <h3>Lamborghini <span>Aventedor</span></h3>
                    </div>
                </div><!--End productNameAndPrice-->
            </div><!--End col-md-9-->

            <div class="col-md-3">
                <div class="panel productNameAndPrice">
                    <div class="panel-body">
                        <h3 class="text-center">£{{$advert->price}}</h3>
                    </div>
                </div><!--End productNameAndPrice-->
            </div><!--End col-md-3-->
        </div><!--End row-->

        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive img-thumbnail" src="/images/lambo34.jpg">
            </div>
            <div class="col-md-1 previewThumbnails">
                <div class="row">
                    <img class="img-responsive img-thumbnail pull-left" src="/images/lambo-front.jpg">
                    <img class="img-responsive img-thumbnail pull-left" src="/images/lambo-side.jpg">
                    <img class="img-responsive img-thumbnail pull-left" src="/images/lambo-rear.jpg">
                </div>
            </div>
            <div class="col-md-3">
                <div class="interactionInfo">
                    <p>Created: {{$advert->created_at}}</p>
                    <p>Last Updated: {{$advert->updated_at}}</p>
                </div>
            </div><!--End col-md-2-->
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default productDetails">
                            <div class="panel-heading"><h5>Vechicle Specifications</h5></div>
                            <ul class="list-group">
                                <li class="list-group-item">Make: </li>
                                <li class="list-group-item">Model: </li>
                                <li class="list-group-item">Colour: {{$advert->colour}}</li>
                                <li class="list-group-item">Transmission Type: {{$advert->gearbox}}</li>
                                <li class="list-group-item">Mileage: {{$advert->mileage}}</li>
                                <li class="list-group-item">Fuel Type: {{$advert->fuel_type}}</li>
                            </ul>
                        </div><!--End panel-->
                    </div><!--End col-md-6-->
                </div><!--End row-->
            </div><!--End col-md-5-->
        </div><!--End row-->

        <div class="row">
            <div class="col-md-6">
                <div class="well descriptionWell">
                    <h4>Description:</h4>
                    <p>
                        {{$advert->description}}
                    </p>
                </div>
            </div><!--End col-md-4-->

            <div class="col-md-3">
                <div class="panel panel-default pointsWell">
                    <div class="panel-heading"><h5><span class="glyphicon glyphicon-plus"></span> Plus Points</h5></div>
                    <ul class="list-group">
                        <li class="list-group-item">{{$advert->plus_points}}</li>
                    </ul>
                </div><!--End panel-->
            </div><!--End col-md-4-->

            <div class="col-md-3">
                <div class="panel panel-default pointsWell">
                    <div class="panel-heading"><h5><span class="glyphicon glyphicon-minus"></span> Negative Points</h5></div>
                    <ul class="list-group">
                        <li class="list-group-item">{{$advert->negative_points}}</li>
                    </ul>
                </div><!--End panel-->
            </div><!--End col-md-4-->
        </div><!--End row-->
    </div>
</div>
@stop




