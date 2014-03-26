@extends('layouts.main')

@section('content')

            <div class="col-md-4 well">
                <div class="row">
                    <div class="col-md-6 form-group">
                       <input type="" class="form-control" placeholder="Postcode">
                    </div>
                    <div class="col-md-6 form-group">
                        <select class="form-control">
                            <option>Distance</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <select class="form-control">
                            <option>Make</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <select class="form-control">
                            <option>Model</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <select class="form-control">
                            <option>Min Price</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <select class="form-control">
                            <option>Max Price</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary form-group col-md-12">Search</button>
            </div>
            <div class="col-md-8 lamboTemp">
                <img src="http://4.bp.blogspot.com/-_ceG8hWuOZQ/TyYtLKLvVFI/AAAAAAAAB9k/LP7wBDzkccc/s1600/lamborghini-aventador+6.jpg">
                <div class="caption_onLambo">
                    <h3>Buying and selling</h3>
                </div>
            </div>


@stop