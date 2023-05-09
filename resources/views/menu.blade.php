@extends($cc)
@section('menu')
    <section>
        <a href="/"><strong>KONECTIVE</strong>FUNITURE</a>
    </section>
    <section>
        <nav>
            <ul>
                <li><a href="home" class="{{(request()->is('/') || request()->is('home')) ? '' : 'active1'}}">HOME</a></li>
                <li><a href="product" class="{{request()->is('product') ? '' : 'active1'}}">PRODUCT</a></li>
                <li><a href="funiture-set" class="{{request()->is('funiture-set') ? '' : 'active1'}}">FUNITURE SET</a></li>
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