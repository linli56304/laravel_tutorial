@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row px-5">
        <div class="col-3 p-5">
            <img src="https://images.cars.com/cldstatic/wp-content/uploads/2020-Mercedes-Benz-AMG-CLA45-OEM-2.jpg" style="height: 250px; width: 250px;" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>666</strong> posts</div>
                <div class="pe-5"><strong>6.1k</strong> followers</div>
                <div><strong>6</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">www.mbusa.com</div>
            <div>It's a fresh take on a passionate original: New technologies inside and under the hood. Electrifying style to go with its electrically and turbo-boosted engine. It's more thoughtful. More thoroughly equipped. And more tempting than ever.
            </div>
            <div><a href="#">https://www.mbusa.com/en/vehicles/class/cla/coupe</a></div>

        </div>
    </div>

    <div class="row px-5 pt-5">
        <div class="col-4">
            <img src="https://static1.hotcarsimages.com/wordpress/wp-content/uploads/2022/07/2020-Mercedes-AMG-CLA45-5.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://static1.hotcarsimages.com/wordpress/wp-content/uploads/2022/07/2020-Mercedes-AMG-CLA45-5.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://static1.hotcarsimages.com/wordpress/wp-content/uploads/2022/07/2020-Mercedes-AMG-CLA45-5.png" class="w-100">
        </div>
    </div>
</div>
@endsection