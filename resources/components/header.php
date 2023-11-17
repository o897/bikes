


<header>
    <nav class="header__nav">
        <div class="header__logo">
            <a onclick="event.preventDefault(); location.href='../views/home.php'">BikeTrader</a>
        </div>
        <div class="header__menu">   
            <li><a href="/tools">Tool and services</a></li><!-- Advertise -->
            <!-- <li><a href="/value">Value my bike</a></li>Send mail to user -->
            <li><a href="/sell" onclick="event.preventDefault(); location.href='../views/sell.php'">Sell my bike</a></li>
            <li><a href=""><?php echo $_SESSION['username']?></a></li>
            <li><a onclick="event.preventDefault(); location.href='../../includes/logout.inc.php'">Logout</a></li>
        </div>
</header>