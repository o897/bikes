
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<header>
    <nav class="header__nav" id="headerNav">
        <div class="header__logo">
            <a onclick="event.preventDefault(); location.href='../views/home.php'">BikeTrader</a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        </div>
        <div class="header__menu">   
            <li><a href="../views/home.php">Home</a></li><!-- Advertise -->
            <!-- <li><a href="../views/about.php">About</a></li> -->
            <!-- <li><a href="../views/services.php">Services</a></li> -->
            <!-- <li><a href="/value">Value my bike</a></li>Send mail to user -->
            <li><a href="/sell" onclick="event.preventDefault(); location.href='../views/sell.php'">Sell my bike</a></li>
            <li><a href=""><?php echo $_SESSION['username']?></a></li>
             <div class="header__menu-cart">
                <i class="fa-solid fa-cart-shopping"></i>
             </div>
            <li><a onclick="event.preventDefault(); location.href='../../includes/logout.inc.php'"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        </div>
    </nav>
   
</header>
<button class="openbtn" onclick="openNav()">&#9776</button>

<script>

    function openNav() {
        document.getElementById('headerNav').style.width = '266px';

    }

    function closeNav() {
        document.getElementById('headerNav').style.width = '0';
    }

</script>