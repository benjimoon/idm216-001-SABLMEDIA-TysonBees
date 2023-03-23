<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
$query = "SELECT * FROM meals WHERE id = 6";
$site_url = site_url();
$result = mysqli_query($db_connection, $query);
?>



<body>
<div class="order-progress">
      <a href="<?php echo site_url(); ?>/confirmation2.php"><button class="confirmation_button">View Confirmation</button></a>
      <!--<img src="images/svg/progress.svg" alt="" class="progress-bar">-->
      <div class="progress_bar">
          <div class="progress_front_bar" id="load_bar"></div>
          <div class="progress_back_bar"></div>
          <img class="progress_bee" id="load_bee" src="<?php echo site_url(); ?>/dist/images/svg/honeybee Icon.svg">
          <img class="progress_flower" src="<?php echo site_url(); ?>/dist/images/svg/Flower Icon.svg">
          <img class="progress_hive" src="<?php echo site_url(); ?>/dist/images/svg/Honeycome icon.svg">
      </div>
  </div>
   
    <div class="main-home">
        <div class="start-order component-teal">
            <h2 class="start-order__text--title">What are you craving today?</h2>
            <img src="<?php echo site_url(); ?>/dist/images/svg/Teal Honeycomb Top.svg" alt="cart icon" class="start-order__pattern--top">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Teal Honeycomb Bottom.svg" alt="cart icon" class="start-order__pattern--bottom">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/taco.png" alt="cart icon" class="start-order__pattern--bottom">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/pattern-desktop.svg" class="start-order__pattern--bottom-desktop" alt="pattern" >
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/taco-desktop.png" class="start-order__pattern--bottom-desktop" alt="taco">
         
            <div class="toggle-container">
                <div class="dropdown">
                    <select name="one" class="dropdown-select">
                      <option value="">Pickup time…</option>
                      <option value="1">ASAP</option>
                      <option value="2">11:00</option>
                      <option value="3">11:30</option>
                      <option value="4">12:30</option>
                    </select>
                  </div>
             
            </div>
            <a href="<?php echo site_url(); ?>/menu.php"><button class="component__button"> Start Order</button></a>
        </div>
        <h1 class="text__title home-heading">Featured Item</h1>
        <div class="home-order">
            <!-- <a id="current__link" href="menu.html"> -->
                <img class="home-order__image" id="current__image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Beef Short Rib Taco-mobile -3x.png" alt="Korean BBQ Beef Short Rib Taco">
            <!-- </a> -->
            <h2 class="home-order__text--title" id="current__title">Korean BBQ Beef Short Rib Taco</h2>
           
            <!-- <img class="arrow" id="previous__arrow" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/arrow left.png">
            <img class="arrow" id="next__arrow" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/arrow right.png"> -->
        </div>
        <h1 class="text__title home-heading-rewards" >Rewards</h1>
        <div class="start-order component-yellow">
            <h2 class="rewards__text--title">Order to earn Rewards!</h2>
            <img class="start-order__pattern--top" src="<?php echo site_url(); ?>/dist/images/svg/Yellow Honeycomb Top.svg">
            <img class="start-order__pattern--bottom" src="<?php echo site_url(); ?>/dist/images/svg/Yellow Honeycomb Bottom.svg">
            <img class="start-order__pattern--bottom-desktop" src="<?php echo site_url(); ?>/dist/images/svg/purple-pattern-desktpo.svg">
            <img class="rewards__image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/truck.gif">
           <a href="<?php echo site_url(); ?>/rewards.php"><button class="component__button open-btn">Go to Rewards</button></a> 
        </div>

        <a href="<?php echo site_url(); ?>/cart.php">
            <img class="cart" src="<?php echo site_url(); ?>/dist/images/svg/Cart Icon.svg"></a>
          <nav class="mobile-bottom-nav"><div class="mobile-bottom-nav"><div class="container-fluid"><nav class=""><a href="<?php echo site_url(); ?>" class="active"><span><svg width="40" height="41" viewBox="0 0 40 41" fill="none"xmlns="http://www.w3.org/2000/svg"><g mask="url(#mask0_503_12385)"><path d="M10.0003 32.3519H15.0003V22.3519H25.0003V32.3519H30.0003V17.3519L20.0003 9.85189L10.0003 17.3519V32.3519ZM10.0003 35.6852C9.08366 35.6852 8.29921 35.3591 7.64699 34.7069C6.99366 34.0536 6.66699 33.2686 6.66699 32.3519V17.3519C6.66699 16.8241 6.78533 16.3241 7.02199 15.8519C7.25755 15.3797 7.58366 14.9908 8.00033 14.6852L18.0003 7.18522C18.3059 6.963 18.6253 6.79633 18.9587 6.68522C19.292 6.57411 19.6392 6.51855 20.0003 6.51855C20.3614 6.51855 20.7087 6.57411 21.042 6.68522C21.3753 6.79633 21.6948 6.963 22.0003 7.18522L32.0003 14.6852C32.417 14.9908 32.7437 15.3797 32.9803 15.8519C33.2159 16.3241 33.3337 16.8241 33.3337 17.3519V32.3519C33.3337 33.2686 33.0075 34.0536 32.3553 34.7069C31.702 35.3591 30.917 35.6852 30.0003 35.6852H21.667V25.6852H18.3337V35.6852H10.0003Z"/></g></svg></span><span class=" bottom-navbar-text">Home</span></a><a href="<?php echo site_url(); ?>/menu.php" class="inactive"><span><svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_503_12389" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="34" height="35"><rect y="0.185303" width="34" height="34"/></mask><g mask="url(#mask0_503_12389)"><path d="M25.5006 31.3521C25.0992 31.3521 24.763 31.2161 24.4919 30.9441C24.2199 30.6731 24.0839 30.3369 24.0839 29.9355V20.0188H22.6672C21.8881 20.0188 21.2213 19.7411 20.6669 19.1858C20.1116 18.6314 19.8339 17.9646 19.8339 17.1855V10.1021C19.8339 8.14241 20.5248 6.47216 21.9065 5.09138C23.2873 3.70966 24.9575 3.0188 26.9172 3.0188V29.9355C26.9172 30.3369 26.7812 30.6731 26.5092 30.9441C26.2382 31.2161 25.902 31.3521 25.5006 31.3521ZM11.3339 31.3521C10.9325 31.3521 10.5958 31.2161 10.3238 30.9441C10.0528 30.6731 9.91724 30.3369 9.91724 29.9355V18.3896C8.71307 18.0591 7.70393 17.398 6.88982 16.4063C6.07476 15.4146 5.66724 14.2577 5.66724 12.9355V4.43547C5.66724 4.03408 5.80276 3.69738 6.07382 3.42538C6.34582 3.15433 6.68251 3.0188 7.0839 3.0188C7.48529 3.0188 7.82199 3.15433 8.09399 3.42538C8.36504 3.69738 8.50057 4.03408 8.50057 4.43547V12.9355H9.91724V4.43547C9.91724 4.03408 10.0528 3.69738 10.3238 3.42538C10.5958 3.15433 10.9325 3.0188 11.3339 3.0188C11.7353 3.0188 12.072 3.15433 12.344 3.42538C12.615 3.69738 12.7506 4.03408 12.7506 4.43547V12.9355H14.1672V4.43547C14.1672 4.03408 14.3032 3.69738 14.5752 3.42538C14.8463 3.15433 15.1825 3.0188 15.5839 3.0188C15.9853 3.0188 16.322 3.15433 16.594 3.42538C16.865 3.69738 17.0006 4.03408 17.0006 4.43547V12.9355C17.0006 14.2577 16.593 15.4146 15.778 16.4063C14.9639 17.398 13.9547 18.0591 12.7506 18.3896V29.9355C12.7506 30.3369 12.615 30.6731 12.344 30.9441C12.072 31.2161 11.7353 31.3521 11.3339 31.3521Z"/></g></svg></span><span class="bottom-navbar-text">Order</span></a><a href="<?php echo site_url(); ?>/rewards.php" class="inactive"><span><svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_556_16428" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="35" height="36"><rect y="0.685349" width="35" height="35" /></mask><g mask="url(#mask0_556_16428)"><path d="M24.6829 17.4562C24.4885 17.4562 24.3004 17.4013 24.1186 17.2914C23.9358 17.1825 23.7958 17.043 23.6986 16.8729L21.8757 13.6645C21.7784 13.4944 21.7298 13.3 21.7298 13.0812C21.7298 12.8625 21.7784 12.668 21.8757 12.4979L23.6986 9.28954C23.7958 9.1194 23.9358 8.9794 24.1186 8.86954C24.3004 8.76065 24.4885 8.7062 24.6829 8.7062H28.4017C28.5961 8.7062 28.7847 8.76065 28.9675 8.86954C29.1493 8.9794 29.2888 9.10725 29.3861 9.25308L31.4277 12.5343C31.525 12.6802 31.5736 12.8625 31.5736 13.0812C31.5736 13.3 31.525 13.4822 31.4277 13.6281L29.3861 16.9093C29.2888 17.0552 29.1493 17.1825 28.9675 17.2914C28.7847 17.4013 28.5961 17.4562 28.4017 17.4562H24.6829ZM15.6413 22.5604C15.4468 22.5604 15.2587 22.5054 15.0769 22.3956C14.8941 22.2867 14.7541 22.1593 14.6569 22.0135L12.6152 18.7322C12.518 18.5864 12.4694 18.4041 12.4694 18.1854C12.4694 17.9666 12.518 17.7843 12.6152 17.6385L14.6569 14.3572C14.7541 14.2114 14.8941 14.0841 15.0769 13.9752C15.2587 13.8653 15.4468 13.8104 15.6413 13.8104H19.36C19.5545 13.8104 19.7431 13.8653 19.9259 13.9752C20.1077 14.0841 20.2472 14.2114 20.3444 14.3572L22.3861 17.6385C22.4833 17.7843 22.5319 17.9666 22.5319 18.1854C22.5319 18.4041 22.4833 18.5864 22.3861 18.7322L20.3444 22.0135C20.2472 22.1593 20.1077 22.2867 19.9259 22.3956C19.7431 22.5054 19.5545 22.5604 19.36 22.5604H15.6413ZM15.6413 12.352C15.4468 12.352 15.2587 12.2971 15.0769 12.1872C14.8941 12.0784 14.7541 11.951 14.6569 11.8052L12.6152 8.52391C12.518 8.37808 12.4694 8.19579 12.4694 7.97704C12.4694 7.75829 12.518 7.57599 12.6152 7.43016L14.6569 4.14891C14.7541 4.00308 14.8941 3.87523 15.0769 3.76537C15.2587 3.65648 15.4468 3.60204 15.6413 3.60204H19.36C19.5545 3.60204 19.7431 3.65648 19.9259 3.76537C20.1077 3.87523 20.2472 4.00308 20.3444 4.14891L22.3861 7.43016C22.4833 7.57599 22.5319 7.75829 22.5319 7.97704C22.5319 8.19579 22.4833 8.37808 22.3861 8.52391L20.3444 11.8052C20.2472 11.951 20.1077 12.0784 19.9259 12.1872C19.7431 12.2971 19.5545 12.352 19.36 12.352H15.6413ZM6.59961 17.4562C6.40517 17.4562 6.21704 17.4013 6.03523 17.2914C5.85246 17.1825 5.71246 17.0552 5.61523 16.9093L3.57357 13.6281C3.47635 13.4822 3.42773 13.3 3.42773 13.0812C3.42773 12.8625 3.47635 12.6802 3.57357 12.5343L5.61523 9.25308C5.71246 9.10725 5.85246 8.9794 6.03523 8.86954C6.21704 8.76065 6.40517 8.7062 6.59961 8.7062H10.3184C10.5128 8.7062 10.7014 8.76065 10.8842 8.86954C11.066 8.9794 11.2055 9.10725 11.3027 9.25308L13.3444 12.5343C13.4416 12.6802 13.4902 12.8625 13.4902 13.0812C13.4902 13.3 13.4416 13.4822 13.3444 13.6281L11.3027 16.9093C11.2055 17.0552 11.066 17.1825 10.8842 17.2914C10.7014 17.4013 10.5128 17.4562 10.3184 17.4562H6.59961ZM6.59961 27.6645C6.40517 27.6645 6.21704 27.6096 6.03523 27.4997C5.85246 27.3909 5.71246 27.2635 5.61523 27.1177L3.57357 23.8364C3.47635 23.6906 3.42773 23.5083 3.42773 23.2895C3.42773 23.0708 3.47635 22.8885 3.57357 22.7427L5.61523 19.4614C5.71246 19.3156 5.85246 19.1882 6.03523 19.0793C6.21704 18.9695 6.40517 18.9145 6.59961 18.9145H10.3184C10.5128 18.9145 10.7014 18.9695 10.8842 19.0793C11.066 19.1882 11.2055 19.3156 11.3027 19.4614L13.3444 22.7427C13.4416 22.8885 13.4902 23.0708 13.4902 23.2895C13.4902 23.5083 13.4416 23.6906 13.3444 23.8364L11.3027 27.1177C11.2055 27.2635 11.066 27.3909 10.8842 27.4997C10.7014 27.6096 10.5128 27.6645 10.3184 27.6645H6.59961ZM15.6413 32.7687C15.4468 32.7687 15.2587 32.7138 15.0769 32.6039C14.8941 32.495 14.7541 32.3677 14.6569 32.2218L12.6152 28.9406C12.518 28.7948 12.4694 28.6125 12.4694 28.3937C12.4694 28.175 12.518 27.9927 12.6152 27.8468L14.6569 24.5656C14.7541 24.4197 14.8941 24.2924 15.0769 24.1835C15.2587 24.0736 15.4468 24.0187 15.6413 24.0187H19.36C19.5545 24.0187 19.7431 24.0736 19.9259 24.1835C20.1077 24.2924 20.2472 24.4197 20.3444 24.5656L22.3861 27.8468C22.4833 27.9927 22.5319 28.175 22.5319 28.3937C22.5319 28.6125 22.4833 28.7948 22.3861 28.9406L20.3444 32.2218C20.2472 32.3677 20.1077 32.495 19.9259 32.6039C19.7431 32.7138 19.5545 32.7687 19.36 32.7687H15.6413ZM24.6829 27.6645C24.4885 27.6645 24.3004 27.6096 24.1186 27.4997C23.9358 27.3909 23.7958 27.2513 23.6986 27.0812L21.8757 23.8729C21.7784 23.7027 21.7298 23.5083 21.7298 23.2895C21.7298 23.0708 21.7784 22.8763 21.8757 22.7062L23.6986 19.4979C23.7958 19.3277 23.9358 19.1882 24.1186 19.0793C24.3004 18.9695 24.4885 18.9145 24.6829 18.9145H28.4017C28.5961 18.9145 28.7847 18.9695 28.9675 19.0793C29.1493 19.1882 29.2888 19.3156 29.3861 19.4614L31.4277 22.7427C31.525 22.8885 31.5736 23.0708 31.5736 23.2895C31.5736 23.5083 31.525 23.6906 31.4277 23.8364L29.3861 27.1177C29.2888 27.2635 29.1493 27.3909 28.9675 27.4997C28.7847 27.6096 28.5961 27.6645 28.4017 27.6645H24.6829Z"/></g></svg></span><span class="bottom-navbar-text">Rewards</span></a></nav></div></div>
        <!-- <script src="script/main.js"></script> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</body>
<?php include_once __DIR__ . '/_components/footer.php';?>
</html>