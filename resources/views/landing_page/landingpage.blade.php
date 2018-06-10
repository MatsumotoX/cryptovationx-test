<!DOCTYPE html>
<html lang="en">

<head>
<!--   
    
 ██████╗██████╗ ██╗   ██╗██████╗ ████████╗ ██████╗ ██╗   ██╗ █████╗ ████████╗██╗ ██████╗ ███╗   ██╗██╗  ██╗
██╔════╝██╔══██╗╚██╗ ██╔╝██╔══██╗╚══██╔══╝██╔═══██╗██║   ██║██╔══██╗╚══██╔══╝██║██╔═══██╗████╗  ██║╚██╗██╔╝
██║     ██████╔╝ ╚████╔╝ ██████╔╝   ██║   ██║   ██║██║   ██║███████║   ██║   ██║██║   ██║██╔██╗ ██║ ╚███╔╝ 
██║     ██╔══██╗  ╚██╔╝  ██╔═══╝    ██║   ██║   ██║╚██╗ ██╔╝██╔══██║   ██║   ██║██║   ██║██║╚██╗██║ ██╔██╗ 
╚██████╗██║  ██║   ██║   ██║        ██║   ╚██████╔╝ ╚████╔╝ ██║  ██║   ██║   ██║╚██████╔╝██║ ╚████║██╔╝ ██╗
 ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚═╝        ╚═╝    ╚═════╝   ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝  ╚═╝ 
 
 If you're reading, we're hiring.
 https://www.CryptovationX.io/careers
 
 -->

    @include('landing_page._meta')

	@include('landing_page._script')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body class="royal_preloader background-white" data-spy="scroll" data-target=".navbar" data-offset="70">
	<div id="royal_preloader"></div>

    @include('landing_page._navbar')

    @include('landing_page._top')

    <!-- @include('landing_page._newsletter') -->
	
	@include('landing_page._vision')

    @include('landing_page._robot')
    
    @include('landing_page._howitwork')

    @include('landing_page._blog')

    @include('landing_page._timeline2')

    <section id="token" class="background2 section-padding">
    </section>

    @include('landing_page._partner')

    @include('landing_page._teammanage')

    @include('landing_page._teammore')
    
    @include('landing_page._teamrepresent')
    
    @include('landing_page._teamadvisor')

    @include('partial_layout._footer')

    <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" target="_blank">
	<i class="fab fa-telegram fix-contact"></i>
    </a>

    @include('landing_page._script2')

</body>

</html>

