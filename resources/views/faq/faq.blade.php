<!DOCTYPE html>
<html lang="en">

<head>

    @include('faq._script')

</head>

<body class="background-kyc" data-spy="scroll" data-target=".navbar" data-offset="70">
    <div id="particles-js"></div>
    @include('faq._switcher')
   
    <!-- Begin Header -->
    <header>
        
    @include('faq._navbar')
        
    </header>
    <br><br>
    
    @include('faq._content')
    
    @include('partial_layout._footer')

    @include('faq._script2')


</body>

</html>