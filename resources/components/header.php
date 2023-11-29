


<header>
    <nav class="header__nav" id="headerNav">
        <div class="header__logo">
            <a onclick="event.preventDefault(); location.href='../views/home.php'">BikeTrader</a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        </div>
        <div class="header__menu">   
            <li><a href="../views/home.php">Home</a></li><!-- Advertise -->
            <li><a href="../views/about.php">About</a></li>
            <li><a href="../views/services.php">Services</a></li><!-- Advertise -->
            <!-- <li><a href="/value">Value my bike</a></li>Send mail to user -->
            <li><a href="/sell" onclick="event.preventDefault(); location.href='../views/sell.php'">Sell my bike</a></li>
            <li><a href=""><?php echo $_SESSION['username']?></a></li>
            <li><a onclick="event.preventDefault(); location.href='../../includes/logout.inc.php'">Logout</a></li>
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