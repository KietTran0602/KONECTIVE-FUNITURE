@extends($cc)
@section('menu')
    <section>
        <a href="/"><img src="IMAGE/logo-long.png" alt="#"></a>
    </section>
    <section>
        <nav>
            <ul>
                <li><a href="home" class="{{(request()->is('/') || request()->is('home')) ? '' : 'active1'}}">HOME</a></li>
                <li><a href="product" class="{{request()->is('product') ? '' : 'active1'}}">PRODUCT</a></li>
                <li><a href="furniture-set" class="{{request()->is('furniture-set') ? '' : 'active1'}}">FURNITURE SET</a></li>
                <li><a href="policy" class="{{request()->is('policy') ? '' : 'active1'}}">POLICY</a></li>
                <li><a href="contact" class="{{request()->is('contact') ? '' : 'active1'}}">CONTACT</a></li>
            </ul>
        </nav>
    </section>
    @if (session()->has('username1'))
        @include('signout')
        @else
            @include('signin')
    @endif
@stop