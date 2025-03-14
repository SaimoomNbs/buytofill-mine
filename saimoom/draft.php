<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buytofill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get product details
$sql = "SELECT * FROM stocklist"; // Assuming 'products' is the table name
$result = $conn->query($sql);


// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="draft.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>BuyToFill</title>
</head>

<body>
    <nav class="close">
        <div class="logo-name">
            <div class="logo-image">
                <!-- <img src="../assets/logo.png" alt=""> -->
                <!-- <img src="../btf.svg" width="100" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" baseProfile="tiny-ps" fill="#5533ff" viewBox="0 0 16.4 16">
                    <path xmlns="http://www.w3.org/2000/svg" fill="#111" d="m14 5.3c.3.3 1.2 0 1.8 0 .6-.3 0-3.3 0-4.9-1.8 0-4.8-.7-5.1 0 0 .6-.3 1.4 0 1.8s1.1 0 1.7 0c-12.3 13-12.3 11.4-12.3 12.3.8 1.8-.3.7 1.5 1.5.8 0-.8 0 12.4-12.4 0 .7-.3 1.3 0 1.7m-3.1 11.1c.4.7 3.5 0 5.1 0 0-1.6.7-4.6 0-4.9-.6 0-1.4-.3-1.8 0s0 .9 0 1.7c-4.9-4.4-3.7-4.4-4.2-4.4s-1.5 1.1-1.5 1.6 0-.8 4.3 4.3c-.6 0-1.4-.3-1.8 0s0 1-.1 1.7m-10.3-14.3c0 .3 0-.4 5.3 5.2.5-.1 1.1-.8 1.3-1.3-5.6-5.2-4.9-5.2-5.3-5.2-1.5.8-.5-.2-1.3 1.3" />
                </svg>
            </div>
            <span class="logo_name">BuyToFill</span>
        </div>
    </nav>

    <section class="dashboard">
        <!-- top bar -->
        <div class="top">
            <div class="search-box">
                <div class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </div>
                <input type="text" placeholder="Search all deal..." />
            </div>

            <ul>
                <li>
                    <a href="" class="btn">
                        Sign up
                    </a>
                </li>
                <li>
                    <a href="" class="btn">
                        Log In
                    </a>
                </li>
            </ul>
        </div>
        <div class="header">
            <ul>
                <li><a href="">Trending</a></li>
                <li class="active"><a href="">Top Deals</a></li>
                <li><a href="">New Listings</a></li>
                <li><a href="">Price Lowered</a></li>
                <li><a href="">Watchlist</a></li>
                <li><a href="">Sold</a></li>
                <!-- <li><a href="">AI Recommendations</a></li>
                <li><a href="">Favorites</a></li>
                <li><a href="">Offers</a></li>
                <li><a href="">Purchased Before</a></li>
                <li><a href="">Download</a></li> -->
            </ul>
            <ul>
                <li><a href="">Order History</a></li>
            </ul>
            <!-- <a href=""></a> -->
        </div>

        <!-- main content -->
        <div class="dash-content">
            <div class="toolbar">
                <div class="toolbar-left">
                    <!-- filter -->
                    <div class="dropdown quantity-dropdown">
                        <button class="dropdown-toggle">
                            Most Quantity
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#">Option 1</a>
                            <a href="#">Option 2</a>
                            <a href="#">Option 3</a>
                        </div>
                    </div>
                    <div class="search-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                        <input type="text" placeholder="Search 923 items">
                    </div>
                    <!-- filter -->
                    <div class="dropdown filter-dropdown">
                        <button class="dropdown-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <path d="m11.42 2 3.428 6-3.428 6H4.58L1.152 8 4.58 2zM4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1z" />
                                <path d="M6.848 5.933a2.5 2.5 0 1 0 2.5 4.33 2.5 2.5 0 0 0-2.5-4.33m-1.78 3.915a3.5 3.5 0 1 1 6.061-3.5 3.5 3.5 0 0 1-6.062 3.5z" />
                            </svg>
                            Filter (43)
                        </button>
                        <div class="dropdown-menu">
                            <a href="#">Option 1</a>
                            <a href="#">Option 2</a>
                            <a href="#">Option 3</a>
                        </div>
                    </div>

                    <!-- product Section -->
                </div>
                <div class="toolbar-right">
                    <ul>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                    <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="data-holder">
                <div class="leftbar">
                    <?php
                    // Fetch product data dynamically and display
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Here, we're assuming the columns in your table are: name, image, price, quantity, etc.
                    ?>
                            <div class="card product-card">
                                <div class="card-body">
                                    <div class="product-card-main">
                                        <div class="product-card-img">
                                            <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                        </div>
                                        <div class="product-card-content">
                                            <h4 class="card-title truncate-text">
                                            <?php echo $row['manufacturer']; ?>
                                            <?php echo $row['category']; ?>
                                            <?php echo $row['name']; ?> ,
                                            <?php echo $row['part_number']; ?> ,
                                            <?php echo $row['upc']; ?>
                                            </h4>
                                            <div class="card-sub-left">
                                                <ul>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                            <path
                                                                d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                        </svg>
                                                        <span class="card-sub-left-badge">
                                                        <?php echo $row['warranty']; ?> Warranty
                                                        </span>
                                                    </li>
                                                    <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                            <path
                                                                d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                        </svg>

                                                        <span class="card-sub-left-badge">
                                                        <?php echo $row['item_condition']; ?>
                                                        </span>
                                                    </li>
                                                    <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <path
                                                                d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                        </svg>

                                                    </li>
                                                    <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                            <path
                                                                d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                        </svg>
                                                        <span class="card-sub-left-badge">
                                                            24 hour
                                                        </span>
                                                    </li>
                                                    <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                            <path
                                                                d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                        </svg>
                                                        <span class="card-sub-left-badge">
                                                        <?php echo $row['packaging']; ?>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-sub-right">
                                            <div class="product-data">
                                                <div class="product-data-right">
                                                    <span>QUANTITY</span>
                                                    <h4><?php echo $row['inventory']; ?></h4>
                                                </div>
                                                <div class="product-data-right">
                                                    <span>PRICE</span>
                                                    <h4>$<?php echo $row['cost']; ?></h4>
                                                </div>
                                            </div>
                                            <div class="make_offer_holder">
                                                <button class="btn make_offer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                                    </svg>
                                                </button>
                                                <button class="btn product-card-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="cart_holder">
                                                <button class="btn add_cart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "No products found.";
                    }
                    ?>
                    <!-- <div class="card product-card">
                        <div class="card-body">
                            <div class="product-card-main">
                                <div class="product-card-img">
                                    <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                </div>
                                <div class="product-card-content">
                                    <h4 class="card-title truncate-text">
                                        Apple MacBook Pro NEWEST MODEL 2022 M2 Chip 8-core 512GB SSD 8GB 13.6"
                                        (2560x1600) Retina Display MacOS Monterey 12 SILVER Backlit Keyboard -
                                        MNEQ3LL/A
                                    </h4>
                                    <div class="card-sub-left">
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    1Y Manufacturer Warranty
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                </svg>

                                                <span class="card-sub-left-badge">
                                                    New
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                                                    <path
                                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                </svg>

                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                    <path
                                                        d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    24 hour
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    Branded
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-sub-right">
                                    <div class="product-data">
                                        <div class="product-data-right">
                                            <span>QUANTITY</span>
                                            <h4>180</h4>
                                        </div>
                                        <div class="product-data-right">
                                            <span>PRICE</span>
                                            <h4>$1000</h4>
                                        </div>
                                    </div>
                                    <div class="make_offer_holder">
                                        <button class="btn make_offer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                            </svg>
                                        </button>
                                        <button class="btn product-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart_holder">
                                        <button class="btn add_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="card-body">
                            <div class="product-card-main">
                                <div class="product-card-img">
                                    <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                </div>
                                <div class="product-card-content">
                                    <h4 class="card-title truncate-text">
                                        Apple MacBook Pro NEWEST MODEL 2022 M2 Chip 8-core 512GB SSD 8GB 13.6"
                                        (2560x1600) Retina Display MacOS Monterey 12 SILVER Backlit Keyboard -
                                        MNEQ3LL/A
                                    </h4>
                                    <div class="card-sub-left">
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    1Y Manufacturer Warranty
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                </svg>

                                                <span class="card-sub-left-badge">
                                                    New
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                                                    <path
                                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                </svg>

                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                    <path
                                                        d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    24 hour
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    Branded
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-sub-right">
                                    <div class="product-data">
                                        <div class="product-data-right">
                                            <span>QUANTITY</span>
                                            <h4>180</h4>
                                        </div>
                                        <div class="product-data-right">
                                            <span>PRICE</span>
                                            <h4>$1000</h4>
                                        </div>
                                    </div>
                                    <div class="make_offer_holder">
                                        <button class="btn make_offer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                            </svg>
                                        </button>
                                        <button class="btn product-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart_holder">
                                        <button class="btn add_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="card-body">
                            <div class="product-card-main">
                                <div class="product-card-img">
                                    <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                </div>
                                <div class="product-card-content">
                                    <h4 class="card-title truncate-text">
                                        Apple MacBook Pro NEWEST MODEL 2022 M2 Chip 8-core 512GB SSD 8GB 13.6"
                                        (2560x1600) Retina Display MacOS Monterey 12 SILVER Backlit Keyboard -
                                        MNEQ3LL/A
                                    </h4>
                                    <div class="card-sub-left">
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    1Y Manufacturer Warranty
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                </svg>

                                                <span class="card-sub-left-badge">
                                                    New
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                                                    <path
                                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                </svg>

                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                    <path
                                                        d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    24 hour
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    Branded
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-sub-right">
                                    <div class="product-data">
                                        <div class="product-data-right">
                                            <span>QUANTITY</span>
                                            <h4>180</h4>
                                        </div>
                                        <div class="product-data-right">
                                            <span>PRICE</span>
                                            <h4>$1000</h4>
                                        </div>
                                    </div>
                                    <div class="make_offer_holder">
                                        <button class="btn make_offer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                            </svg>
                                        </button>
                                        <button class="btn product-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart_holder">
                                        <button class="btn add_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="card-body">
                            <div class="product-card-main">
                                <div class="product-card-img">
                                    <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                </div>
                                <div class="product-card-content">
                                    <h4 class="card-title truncate-text">
                                        Apple MacBook Pro NEWEST MODEL 2022 M2 Chip 8-core 512GB SSD 8GB 13.6"
                                        (2560x1600) Retina Display MacOS Monterey 12 SILVER Backlit Keyboard -
                                        MNEQ3LL/A
                                    </h4>
                                    <div class="card-sub-left">
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    1Y Manufacturer Warranty
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                </svg>

                                                <span class="card-sub-left-badge">
                                                    New
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                                                    <path
                                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                </svg>

                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                    <path
                                                        d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    24 hour
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    Branded
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-sub-right">
                                    <div class="product-data">
                                        <div class="product-data-right">
                                            <span>QUANTITY</span>
                                            <h4>180</h4>
                                        </div>
                                        <div class="product-data-right">
                                            <span>PRICE</span>
                                            <h4>$1000</h4>
                                        </div>
                                    </div>
                                    <div class="make_offer_holder">
                                        <button class="btn make_offer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                            </svg>
                                        </button>
                                        <button class="btn product-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart_holder">
                                        <button class="btn add_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="card-body">
                            <div class="product-card-main">
                                <div class="product-card-img">
                                    <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                </div>
                                <div class="product-card-content">
                                    <h4 class="card-title truncate-text">
                                        Apple MacBook Pro NEWEST MODEL 2022 M2 Chip 8-core 512GB SSD 8GB 13.6"
                                        (2560x1600) Retina Display MacOS Monterey 12 SILVER Backlit Keyboard -
                                        MNEQ3LL/A
                                    </h4>
                                    <div class="card-sub-left">
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    1Y Manufacturer Warranty
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                </svg>

                                                <span class="card-sub-left-badge">
                                                    New
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                                                    <path
                                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                </svg>

                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                    <path
                                                        d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    24 hour
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    Branded
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-sub-right">
                                    <div class="product-data">
                                        <div class="product-data-right">
                                            <span>QUANTITY</span>
                                            <h4>180</h4>
                                        </div>
                                        <div class="product-data-right">
                                            <span>PRICE</span>
                                            <h4>$1000</h4>
                                        </div>
                                    </div>
                                    <div class="make_offer_holder">
                                        <button class="btn make_offer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                            </svg>
                                        </button>
                                        <button class="btn product-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart_holder">
                                        <button class="btn add_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="card-body">
                            <div class="product-card-main">
                                <div class="product-card-img">
                                    <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="product" />
                                </div>
                                <div class="product-card-content">
                                    <h4 class="card-title truncate-text">
                                        Apple MacBook Pro NEWEST MODEL 2022 M2 Chip 8-core 512GB SSD 8GB 13.6"
                                        (2560x1600) Retina Display MacOS Monterey 12 SILVER Backlit Keyboard -
                                        MNEQ3LL/A
                                    </h4>
                                    <div class="card-sub-left">
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    1Y Manufacturer Warranty
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z" />
                                                </svg>

                                                <span class="card-sub-left-badge">
                                                    New
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">

                                                    <path
                                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                                </svg>

                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                                    <path
                                                        d="M640 0l0 400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8 352 64c0-35.3 28.7-64 64-64L640 0zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    24 hour
                                                </span>
                                            </li>
                                            <li aria-label="This is demo text to show" data-cooltipz-dir="top">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                    <path
                                                        d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z" />
                                                </svg>
                                                <span class="card-sub-left-badge">
                                                    Branded
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-sub-right">
                                    <div class="product-data">
                                        <div class="product-data-right">
                                            <span>QUANTITY</span>
                                            <h4>180</h4>
                                        </div>
                                        <div class="product-data-right">
                                            <span>PRICE</span>
                                            <h4>$1000</h4>
                                        </div>
                                    </div>
                                    <div class="make_offer_holder">
                                        <button class="btn make_offer">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                            </svg>
                                        </button>
                                        <button class="btn product-card-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart_holder">
                                        <button class="btn add_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="rightbar">
                    <div class="rightbar-header">
                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                            Cart
                        </h2>
                        <h4>2 Items</h4>
                    </div>
                    <div class="rightbar-cart">
                        <h2>Summary</h2>
                        <div class="cart-item">
                            <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="">
                            <div class="cart-item-title">
                                <small>14” MacBook Pro w/ M3 Pro Chip 18GB RAM 512 GB SSD (A2992)</small>
                                <span>1 X $100</span>
                            </div>
                        </div>
                        <div class="cart-item">
                            <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="">
                            <div class="cart-item-title">
                                <small>ROG Zephyrus G16 16” Core Ultra 9 185H 1TB SSD 16GB 16" (2560x1600) OLED 240Hz WIN11 NVIDIA RTX 4070 8192MB ECLIPSE GRAY RGB Backlit Keyboard (GU605MI-G16.U94070)</small>
                                <span>2 X $100</span>
                            </div>
                        </div>
                        <div class="cart-item-checkout">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>
                                Checkout
                            </a>
                        </div>
                        <div class="rightbar-recommend">
                            <h2>Recomended</h2>
                            <div class="recommend-item">
                                <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="">
                                <div class="recommend-item-title">
                                    <small>ROG Zephyrus G16 16” Core Ultra 9 185H 1TB SSD 16GB 16" (2560x1600) OLED 240Hz WIN11 NVIDIA RTX 4070 8192MB ECLIPSE GRAY RGB Backlit Keyboard (GU605MI-G16.U94070)</small>
                                </div>
                            </div>
                            <div class="recommend-item">
                                <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="">
                                <div class="recommend-item-title">
                                    <small>Inspirion 14 2-in-1 7440 14.0"+ 512GB SSD Ice Blue - JVCV9</small>
                                </div>
                            </div>
                            <div class="recommend-item">
                                <img src="https://cdn-fd.hubx.com/assets/images/manufacturer/apple.svg" alt="">
                                <div class="recommend-item-title">
                                    <small>Alienware x14 R2 GAMING Core™ i7-13620H 512GB SSD 16GB 14" (2560x1600) 165Hz WIN11 NVIDIA® RTX 4050 6144MB LUNAR SILVER Backlit Keyboard</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom-bar">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
            </a>
        </div>
    </section>


    <div id="customModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <aside>
                <h1>Welcome back!</h1>
                <h4>Select your preferred login method to continue</h4>
                <div>
                    <a><span>Continue with Google</span></a>
                    <a><span>Continue with Microsoft</span></a>
                    <a id="mail"><span>Continue with Email</span></a>
                    <label>
                        <input type="checkbox">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width=".7em" height="1em" viewBox="0 0 256 230">
                                <polyline points="216 72 104 184 48 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></polyline>
                            </svg>
                        </div>
                        <span>Remember me</span>
                    </label>
                </div>
            </aside>
        </div>
    </div>


    <!-- <script src="script.js"></script> -->
    <!-- category -->
    <!-- <script>
        function showMenu(menu) {
            document.querySelectorAll(".category-container-menu").forEach((m) => {
                if (m !== menu) {
                    m.classList.remove("active");
                    setTimeout(() => {
                        m.classList.add("category-container-menu-hidden");
                    }, 300);
                }
            });

            menu.classList.remove("category-container-menu-hidden");
            setTimeout(() => menu.classList.add("active"), 10);
        }

        document.querySelectorAll(".category-container-menu li[data-target]").forEach((item) => {
            item.addEventListener("click", function() {
                let targetMenu = document.getElementById(this.dataset.target);
                if (targetMenu) {
                    showMenu(targetMenu);
                }
            });
        });

        document.querySelectorAll(".category-container-menu-back-btn").forEach((backBtn) => {
            backBtn.addEventListener("click", function() {
                let backTarget = document.getElementById(this.dataset.back);
                if (backTarget) {
                    showMenu(backTarget);
                }
            });
        });
    </script> -->
    <!-- sign in modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("customModal");
            const closeBtn = document.getElementById("closeModal");
            const openModal = document.getElementById("openModal");

            openModal.addEventListener("click", function() {
                modal.style.display = "block";
            });

            closeBtn.addEventListener("click", function() {
                modal.style.display = "none";
            });

            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
    <!-- dropdown -->
    <script>
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevents the click from immediately closing the menu

                let menu = this.nextElementSibling; // Gets the related dropdown menu
                document.querySelectorAll('.dropdown-menu').forEach(m => {
                    if (m !== menu) m.style.display = 'none'; // Close other dropdowns
                });

                menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
            });
        });

        document.addEventListener('click', function() {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });
        });
    </script>
    <!-- truncate-text -->
    <script>
        // const textElement = document.querySelector('.truncate-text');
        // if (textElement.innerText.length > 10) {
        //     textElement.innerText = textElement.innerText.substring(0, 10) + '...';
        // }
    </script>

</body>

</html>