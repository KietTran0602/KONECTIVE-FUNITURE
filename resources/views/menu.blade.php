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
@section('footer')
    <footer class="footer">
        <div class="footer__addr">
            <section>
                <a href="/"><img src="IMAGE/logo-long.png" alt="#"></a>
            </section>

        </div>
        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>

                <ul class="nav__ul">
                    <li>
                    <span><i class="fas fa-home"></i></span><span> 35/6 Đường D5, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh 72308, Việt Nam</span>
                    </li>
                    <li>
                    <span><i class="fas fa-envelope"></i></span><span> KONECTIVE@gmail.com</span>
                    </li>
                    <li>
                    <span><i class="fas fa-phone"></i></span><span> +84 949 258 999</span>
                    </li>
                </ul>
            </li>
            
            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">About company</h2>
                <ul class="nav__ul nav__ul--extra">
                    <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</li>
                    <li>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</li>
                    <li>
                        <!-- Facebook -->
                        <a type="button" ><i class="fab fa-facebook-f"></i></a>
                        <!-- Dribbble -->
                        <a type="button" ><i class="fab fa-dribbble"></i></a>
                        <!-- Twitter -->
                        <a type="button" ><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" ><i class="fab fa-google-plus-g"></i></a>
                        <!-- Linkedin -->
                    </li>
                </ul>
            </li>
            
            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>
                
                <ul class="nav__ul">
                    <li><a href="policy">Policy</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </li>
        </ul>
    </footer>
@stop