<style>
    .signup-btn{
        color: white;
    }
    .signin-btn{
        display: none;
    }
    
    @media(max-width: 575px){
  
    
    .signin-btn{
         position: absolute;
         right: -15px;
         color: white;
        width: 80px;
        background: #e85a3c;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;  
    }
}
</style>
<header class="header">
        <div class="header__content">
            <div class="header__logo">
                <a href="/">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </a>
            </div>

            <!--<form action="#" id="search" class="header__search">-->
            <!--    <input type="text" class="search-w" placeholder="Search...">-->
            <!--    <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>-->
            <!--    <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>-->
            <!--</form>-->


            <div class="header__menu">
                <ul class="header__nav">
                    <li class="header__nav-item">
                        <a class="header__nav-link" href="{{url('/')}}" role="button">Home</a>
                    </li>
                  
                   
                        <li class="header__nav-item">
                            <a href="/register" class="header__nav-link btn btn-primary" data-turbolinks="false">Registerr</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="/agreement" class="header__nav-link btn btn-primary" data-turbolinks="false">Register as signal Giver</a>
                        </li>

                    <!-- <li class="header__nav-item">-->
                    <!--    <a href="{{url('about')}}" class="header__nav-link">About</a>-->
                    <!--</li>-->

                </ul>
            </div>

            <div class="header__actions">
                <!--<div class="header__action header__action--search">-->
                <!--    <button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>-->
                <!--</div>-->

                <div class="header__action header__action--signin">
                     <a class="header__action-btn header__action-btn--signin signup-btn" style="background: white; color: black" href="/register">Sign Up</a>
                        <a class="header__action-btn header__action-btn--signin signin-btn" href="/login" data-turbolinks="false">Sign in</a>
                        
                        &nbsp;
                        <a class="header__action-btn header__action-btn--signin" href="/login" data-turbolinks="false">
                            <span>Sign in</span>
                        </a
                </div>
            </div>
            
            <button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
        </div>
    </header>
    <div class="token" id="{{ csrf_token()}}"></div>
    <div class="search-box hidden">
        <h4>Search Result</h4><hr>
        <div class="search-result"></div>
    </div>
