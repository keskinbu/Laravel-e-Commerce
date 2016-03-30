<!DOCTYPE html>
<html lang="en">
@include('/layouts/frontend/head')
<body>
@include('/layouts/frontend/header')

@include('/layouts/frontend/slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

            @include('/layouts/frontend/sidebar')
            </div>

            <div class="col-sm-9 padding-right">
            @yield('content')

            </div>
        </div>
    </div>
</section>

@include('/layouts/frontend/footer')
@include('/layouts/frontend/scripts')
</body>
</html>