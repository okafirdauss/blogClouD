 <li><a href="{{url('/')}}">Home</a></li>
 <li><a href="{{url('/artikel')}}">Artikel</a></li>
 <li><a href="{{url('/blog')}}">Blog</a></li>
 <li><a href="{{url('/about')}}">About</a></li>
 <li><a href="{{url('/contacs-us')}}">Contacts Us</a></li>
 @if(!Auth::check())
 <li><a href="{{url('/register')}}">Register</a></li>
 <li><a href="{{url('/login')}}">Login</a></li>
 @else
 <li><a href="{{url('/logout')}}">Logout</a></li>
 @endif