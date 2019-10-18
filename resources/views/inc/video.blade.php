    {{-- <div class="container video-container">
        <video class="theme" autoplay="" loop="" muted="">
          <source src="{{asset('videos/video_theme.mp4')}}" type="video/mp4" >
        </video>
      <div class="overlay">
          <h1 style="color: white"> Groceries delivered in 1 hour </h1>
        <form class="search_area" style="width: 35%;" action="#" method="GET"> 
          <div class="input-group">
            <input style="padding-left: 20px;" type="text" class="form-control"  id="txtSearch" placeholder="Search for products (e.g. eggs, milk, potato)" required=""/>
            <div class="input-group-btn">
              <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </div>
        </form>
          <p class="searchFormHelp" style="color:#ffd750;width: 32%";>Try: murgi or oil or shampoo</p>
      </div>
    </div> */ --}}
    <style>
        #image{
          position: relative;
          margin-top:;
          margin-bottom:60px;
          opacity: .9;
        }
        .overlay,.overlay_text{
          position: absolute;
          top:0;
          bottom: 40%;
          right: 0;
          left: 0;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
        }
        .search_area{
          position: relative;
          box-sizing: border-box;
          font-size: 25px;
          top:0;
       }
       /* video.theme{
        opacity: .7;
        object-fit: fill
       } */
       .overlay h1{
         color: white;
       }
       #image img{
         width: 100%;

       }
      </style>
<div class="row">
    <div id="image" class="image-container">
        {{-- <video class="theme" autoplay="" loop="" muted="" width="100%" height="100%">
            <source src="{{asset('\videos\video_theme.mp4')}}" type="video/mp4">
        </video> --}}
        <div><img src="{{asset('\images\online3.jpg')}}" alt=""></div>
        <div class="overlay">
          <h1 class="text-success">Delivered in an hour (All Groceries)</h1>
          <form class="search_area" action="#" method="GET" style="width: 35%">
            <div class="input-group">
              <input style="padding-left: 20px;font-size: 14px;" id="textSearch" class="form-control" type="text" placeholder="Search Products" required="">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                  <span style="font-size: 21px;" class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </form>
          <p class="searchFormHelp text-danger" style="color: #ffd750; width: 32%; font-size: 15px">e.g. Egg or Tomato or Shampo or Oil etc</p>
        </div>
    </div>
</div>