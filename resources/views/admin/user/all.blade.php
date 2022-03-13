
 @extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<header>
<div class="d-flex " style="width: 600px;">
<div class="slider position-absolute top-50 start-50 translate-middle text-center  ">
    {{-- start p --}}
    <h5>hot <span>collection</span> </h5>
<h3 >new trend products</h3>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, reprehenderit ex! Ex saepe iste corrupti laborum dolores incidunt inventore illo culpa ut nemo enim expedita rem, pariatur quidem, odio quisquam.</p>
<a class="btn btn-outline-primary" href="products">shop now</a>
</div>
</div>
</header>
</div>
<style>
h3{
  color:#ED5EDD;
  }
h5{
  color:#2666CF;
}
span{
  color:#323232;
}
p{
  color: aliceblue;
}
header{
  background-image: url(/img/clark-tibbs-oqStl2L5oxI-unsplash.jpg);
  height:100vh ;
  background-size: cover; 
}
</style>



</body>
</html>
@endsection

