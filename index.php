<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <!-- FontAwesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css' integrity='sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==' crossorigin='anonymous'/>
  <!-- Axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js' integrity='sha512-pmaEGtUAy7E5gRmwjLqQAD/QWw0dL4Z59b6b+2HQkqQwQ+HcPLLb9/KbUNo5zr10WuXmbivK9nYVZOyDkMgZMg==' crossorigin='anonymous'></script>
  <!-- Vue -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.23/vue.global.js' integrity='sha512-nG1pzAdB6onYkrCldpnkwHzZw7H3IUL4RLhinI7XEioaM8PHQDeHD6zPf+tog9WlKLAojc4zddvkTUpHvAZbew==' crossorigin='anonymous'></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <title>PHP Dischi JSON</title>
</head>
<body>
  <div id="app" class="sc-container">
    <div class="container-fluid px-0">

    <nav class="navbar my_navbar">
      <div class="container-fluid mx-5">
        <img src="spotify-logo-png.png" class="logo" alt="">
      </div>
    </nav>

      <div class="container my-5">

        <div class="row row-cols-3 py-3">
          <div 
            v-for="(item, index) in list" 
            :key="index"
            class="col mb-3"
          >
            <div class="card my_card py-3" style="width: 18rem;">
              <img :src="item.poster" class="card-img-top px-5" :alt="`photo-${index}`">
              <div class="card-body text-center">
                <h5 class="card-title">{{ item.title }}</h5>
                <p class="card-text">{{ item.author}}</p>
                <span>{{ item.year }}</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script src="script.js"></script>
  
</body>
</html>